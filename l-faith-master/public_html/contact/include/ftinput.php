<?php
//PHP5以上
echo'<script src="include/js/json2.js"></script>';

require_once('include/ftconf/config.php');
require_once('include/ftclasses/class-ftform.php');
require_once('include/ftclasses/class-ftupload.php');


$ob_config=new config();
$ob_input = new ftform($ob_config);

$ob_input->setData($ob_config->default);//各種input要素等の設定を適用
if(!isset($_POST["_FTTICKET"])){
	$ob_input->createTicket();//ワンタイムチケットがない場合新規発行
	if($ob_config->deleteTempFlg)$ob_input->deleteOldTicket($ob_config->retentionPeriodOfTicket);//古いチケットを一括削除
}



/*------遷移してきた時-----*/
if(isset($_POST["_FTDATA"]) && isset($_POST["_FTTICKET"])){
	/*ワンタイムチケット受け取り処理*/
	if(!$ob_input->setTicket($_POST["_FTTICKET"])){//ワンタイムチケットを受け取り、受け取った値が不正なものであった場合
		$ob_input->moveErrorPage($ob_config->error_page_path);exit();//エラーページに強制遷移
	}else{		
		/*値やファイルを格納*/
		$ob_input->set_FTDATA($_POST["_FTDATA"]);//受け取ったJSON内のvalue値をメンバ["_FTDATA"]["DATA"][$key]["value"]へ格納 ※JSONを改ざんしてPOSTしてもvalue値のみしか上書きされない
		$ob_input->updateDataForPost();//_POSTで飛んできたフォーム内の情報をメンバへ格納・更新
		
		/*--["function"]["uploadFile"]の処理--*/
		$ob_input->updateDataForFiles();//_FILESで飛んできたファイル名をメンバのvalueへ格納・更新
		/*end*/
		
		$ob_input->enterInElement();//現在のフォーム内の値をHTML内の要素に入れる
		/*end*/
		
		/*バリデート*/
		foreach($ob_input->data as $name => $val){
			foreach($val["validation"] as $validName => $validArray){
				/*--$ob_input->validate():第一引数の文字列をバリデートし、値を返す--*/
				//第一引数 配列も可 配列の場合は配列内の値に1つでも不正なものだったらfalseを返す
				//第二引数にはバリデートの種類を指定。
				//第三引数にはバリデートの種類に応じてオプションを指定できる
				//戻り値：第一引数が正常な値だった場合はtrue　不正な値だった場合はfalse
				if($validArray[0]===true){
					if($validName==="isSame"){
						$ob_input->result[$name][$validName]=$ob_input->validate($val["value"],$name,$validName,$validArray,$ob_input->data[$validArray[1]]['value']);//結果をメンバ変数result格納
					}else{
						$ob_input->result[$name][$validName]=$ob_input->validate($val["value"],$name,$validName,$validArray);//結果をメンバ変数result格納
					}
				}else if($validArray[0]===false){
					$ob_input->result[$name][$validName]=true;
				}
				/*--end--*/
			}
		}
		/*end*/
		
	
		/*--バリデート結果チェック--*/
		$moveFlg=true;//true時に次ページに遷移する
		foreach($ob_input->result as $namePropertyName => $arr){//メンバ変数result内をチェック
			if($moveFlg===false)break;
			foreach($arr as $validateFuncName =>$bool){
				if($moveFlg===false)break;
				
				if($bool===true)$moveFlg=true;
				elseif($bool===false)$moveFlg=false;
			}
		}
		/*------------end-----------*/
		
		
		if($moveFlg===true && isset($_POST["_FTMOVE"])){
			//遷移処理
			switch(true){
			/*-------------------ftcheckボタン押し時処理--------------*/
			case isset($_POST["ftcheck"]) || isset($_POST["ftcheck_x"]) || isset($_POST["ftcheck_y"]):
				/*----["function"]["uploadFile"]の処理-----*/
				//configに["function"]["uploadFile"]があるかチェック
				$function_uploadfile_flg=false;//ある場合はtrue
				foreach($ob_input->data as $key => $dataArr){
					if(isset($dataArr["function"]["uploadFile"])){
						$function_uploadfile_flg=true;
						break;
					}
				}
				//end
				if($function_uploadfile_flg===true){
					$ob_upload=new ftupload($ob_config->pravate_key,$ob_config->uploadTempPath);
					if(!$ob_upload->setTicket($ob_input->getTicket()))trigger_error('引数が整数型ではありません', E_USER_ERROR);//ワンタイムチケットを渡す
					foreach($ob_input->data as $key => $dataArr){
						if(isset($dataArr["function"]["uploadFile"])){
							switch(true){
								case $dataArr["function"]["uploadFile"][0]===true:
									if($dataArr["type"]!=="file"){
										trigger_error('name属性'.$key.':"type:file"以外のものに"function:uploadFile"は使用できません ※ftconf/config.php', E_USER_ERROR);
									}elseif($dataArr["type"]==="file"){
										if($ob_upload->upload($key,$ob_config->charset)===false){
											$ob_input->moveErrorPage($ob_config->error_page_path);exit();//失敗時は送信エラーページに遷移
										}
										
									}
								break;
								
								case $dataArr["function"]["uploadFile"][0]===false:
								break;
								
								default:
								break;
							}
						}
						
					}
				}
				/*---------------end------------------*/
				
				echo "
				<form action='confirm.php' method='post' name='moveftform'>
				";
				foreach($ob_input->data as $name => $val){
					if(is_array($val["value"])){
						foreach($val["value"] as $num => $val2){
							echo "<input type='hidden' name='_FTDATA[".$name."][value][".$num."]' value='".$val2."'>\n";
						}
					}else{
						echo "<input type='hidden' name='_FTDATA[".$name."][value]' value='".$val["value"]."'>\n";
					}
				}
				echo "
					<input type='hidden' name='_FTTICKET' value='".$ob_input->getTicket()."'>\n	
					
				</form>
				<script type='text/javascript'>
				document.moveftform.submit();
				window.onload = function() {document.getElementsByTagName('body').style.display = 'none';};
				</script>\n";
				exit();
			break;
			/*------------------------------end------------------------*/
				
			default:
			break;
			}
	
		}
	}
}elseif(!isset($_POST["_FTDATA"]) && isset($_POST["_FTTICKET"])){
	echo('<meta http-equiv="refresh" content="0;URL=./">');
	exit();


}
/*-------end--------*/







/*---------------デバッグ用-------------*/
//$ob_input->echo_debug();//変数内容などをechoする
/*--------------end-----------------*/
?>
