<?php
//PHP5以上
echo'<script src="include/js/json2.js"></script>';

require_once('include/ftconf/config.php');
require_once('include/ftconf/ftmail.php');
require_once('include/ftclasses/class-ftform.php');
require_once('include/ftclasses/class-ftupload.php');
require_once('include/ftclasses/class-ftlog.php');


$ob_config=new config();
$ob_confirm = new ftform($ob_config);
$ob_log = new file_lock();
$ob_confirm->setData($ob_config->default);//各種input要素等の設定を適用


if(!isset($_POST["_FTTICKET"]))$ob_confirm->createTicket();//ワンタイムチケットがない場合新規発行


/*------遷移してきた時-----*/
if(isset($_POST["_FTDATA"]) && isset($_POST["_FTTICKET"])){
	/*ワンタイムチケット受け取り処理*/
	if(!$ob_confirm->setTicket($_POST["_FTTICKET"])){//ワンタイムチケットを受け取り、受け取った値が整数ではなかった場合
		$ob_confirm->moveErrorPage($ob_config->error_page_path);exit();//エラーページに強制遷移
	}else{
		$ob_confirm->set_FTDATA($_POST["_FTDATA"]);//受け取ったJSON内のvalue値をメンバ["_FTDATA"]["DATA"][$key]["value"]へ格納 ※JSONを改ざんしてPOSTしてもvalue値のみしか上書きされない
		/*end*/
		
		/*バリデート*/
		foreach($ob_confirm->data as $name => $val){
			foreach($val["validation"] as $validName => $validArray){
				/*--$ob_confirm->validate():第一引数の文字列をバリデートし、値を返す--*/
				//第一引数 配列も可 配列の場合は配列内の値に1つでも不正なものだったらfalseを返す
				//第二引数にはバリデートの種類を指定。
				//第三引数にはバリデートの種類に応じてオプションを指定できる
				//戻り値：第一引数が正常な値だった場合はtrue　不正な値だった場合はfalse
				$ob_confirm->result[$name][$validName]=$ob_confirm->validate($val["value"],$name,$validName,$validArray);//結果をメンバ変数result格納
				/*--end--*/
			}
		}
		/*end*/
		
		
		/*バリデート結果チェック*/
		$moveFlg=true;//true時に次ページに遷移する
					
		foreach($ob_confirm->result as $namePropertyName => $arr){//メンバ変数result内をチェック
			if($moveFlg===false)break;
			foreach($arr as $validateFuncName =>$bool){
				if($moveFlg===false)break;
				
				if($bool===true)$moveFlg=true;
				elseif($bool===false)$moveFlg=false;
			}
		}
		/*end*/
		
		if($moveFlg===true){

			switch(true){
			/*------ftbackボタン押し時処理--------*/
			case isset($_POST["ftback"]) || isset($_POST["ftback_x"]) || isset($_POST["ftback_y"]):
				echo "
				<form action='./' method='post' name='moveftform'>";
				foreach($ob_confirm->data as $name => $val){
					if(is_array($val["value"])){
						foreach($val["value"] as $num => $val2){
							echo "<input type='hidden' name='_FTDATA[".$name."][value][".$num."]' value='".$val2."'>\n";
						}
					}else{
						echo "<input type='hidden' name='_FTDATA[".$name."][value]' value='".$val["value"]."'>\n";
					}
				}
				echo "
					<input type='hidden' name='_FTBACK' value='true'>\n	
					<input type='hidden' name='_FTTICKET' value='".$ob_confirm->getTicket()."'>\n
				";
				echo "	
				</form>
				<script type='text/javascript'>
				document.moveftform.submit();
				window.onload = function() {document.getElementsByTagName('body').style.display = 'none';};
				</script>\n
				";

				exit();
			break;
			/*------------------end-------------*/
			
			/*------ftsendボタン押し時処理--------*/
			case isset($_POST["ftsend"]) || isset($_POST["ftsend_x"]) || isset($_POST["ftsend_y"]):
				/*-----------------------メール送信処理--------------------------*/
				$mail = new ftmail();
				
				
				/*----["function"]["uploadFile"]の処理 ファイルを添付する-----*/
				//configに["function"]["uploadFile"]があるかチェック
				$function_uploadfile_flg=false;//ある場合はtrue
				foreach($ob_confirm->data as $key => $dataArr){
					if(isset($dataArr["function"]["uploadFile"])){
						$function_uploadfile_flg=true;
						break;
					}
				}
				//end
	
	
				if($function_uploadfile_flg===true){//ある場合の処理
					$ob_upload=new ftupload($ob_config->pravate_key,$ob_config->uploadTempPath);//アップローダークラス
					if($ob_config->deleteTempFlg)$ob_upload->deleteOldData($ob_config->retentionPeriodOfTempFiles);//添付ファイル用のディレクトリ内の保有期間を超えたディレクトリを削除する
					//ワンタイムチケットを渡す
					if(!$ob_upload->setTicket($ob_confirm->getTicket()))trigger_error('引数が整数型ではありません', E_USER_ERROR);
					//end
					foreach($ob_confirm->data as $elName => $dataArr){
						$dir_path=$ob_upload->getDirPath($elName);//一時ファイルの保存先ディレクトリ
						if(isset($dataArr["function"]["uploadFile"])&&$dataArr["function"]["uploadFile"][0]===true){
							if(!empty($dataArr["value"])){//添付ファイルがユーザー側で選択されているとき
								$file_path=$dir_path."_".$dataArr["value"];
								
								if(file_exists(mb_convert_encoding($file_path,"SJIS-win","AUTO"))||file_exists(mb_convert_encoding($file_path,"UTF-8","AUTO"))){//添付ファイルが一時保存ディレクトリ内に存在している場合
									$mail->pushAttach($file_path,$dataArr["value"]);//添付ファイルをpush
								}else{//添付ファイルが存在しない場合
									$ob_confirm->moveErrorPage($ob_config->error_page_path);//エラーページヘ遷移
									exit();
								}
								
								
							}else{//添付ファイルがユーザー側で選択されていない状態の場合は何もしない
							}
						}elseif(isset($dataArr["function"]["uploadFile"])&&$dataArr["function"]["uploadFile"][0]===false){
						}
					}
				}
				/*---------------end------------------*/
				
				//func["idLog"]の処理 ログIDを発行
				$CustomerId="";
				if($ob_config->func["idLog"]["switch"]===true){
					$CustomerId = $ob_log->idAcquisition($ob_config->func["idLog"]["path"]);//ID取得 取得できなかった場合はfalseを返す
				}
				if($CustomerId===false){
					$ob_confirm->moveErrorPage($ob_config->error_page_path);//エラーページヘ遷移
					exit();
				}
				//end
				
				$successflg=$mail->send($ob_confirm->data,array($CustomerId,));//送信成功時にtrue、失敗時にfalse 第二引数で顧客IDを渡す
				if($ob_config->deleteTempFlg)if(isset($ob_upload))$ob_upload->delete();//添付用一時ファイルを削除する
				
				//func["idLog"]の処理 顧客IDのログを残す
				if($ob_config->func["idLog"]["switch"]===true){
					$ob_log->idWriting($ob_config->func["idLog"]["path"],$CustomerId);
				}
				//end
				
				
				/*-------------------------------endメール送信処理----------------------*/
				
				/*-------------------------------thanksへ遷移----------------------*/
				if($successflg===true){
					if($ob_config->deleteTempFlg)$ob_confirm->deleteTicket();
					echo "
					<form action='thanks.php' method='post' name='moveftform'>";
					foreach($ob_confirm->data as $name => $val){
						if(is_array($val["value"])){
							foreach($val["value"] as $num => $val2){
								echo "<input type='hidden' name='_FTDATA[".$name."][value][".$num."]' value='".$val2."'>\n";
							}
						}else{
							echo "<input type='hidden' name='_FTDATA[".$name."][value]' value='".$val["value"]."'>\n";
						}
					}
					echo "
						<input type='hidden' name='_FTTICKET' value='".$ob_confirm->getTicket()."'>\n
					";
					//func["idLog"]の処理 値をthanks画面へ飛ばす
					if($ob_config->func["idLog"]["switch"]===true){echo"
						<input type='hidden' name='_FTID' value='".$CustomerId."'>\n"
					;}
					//end
					echo "	
					</form>
					<script type='text/javascript'>
					document.moveftform.submit();
					window.onload = function() {document.getElementsByTagName('body').style.display = 'none';};
					</script>\n
					";
					
					exit();
				}elseif($successflg===false){
					$ob_confirm->moveErrorPage($ob_config->error_page_path);//エラーページヘ遷移
					exit();
				}
				/*-------------------------------end----------------------*/
			break;
			/*----------------end------------------*/
		
			default:
			}
		}
	}
}else{
	echo('<meta http-equiv="refresh" content="0;URL=./">');
	exit();


}
/*-------end--------*/





/*---------------デバッグ用-------------*/
//$ob_confirm->echo_debug();//配列情報などをechoする
/*--------------end-----------------*/
?>
