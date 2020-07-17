<?php
//PHP5.0
require_once('include/ftclasses/class-ftvalidation.php');



class ftform{

public $data = array(//formから取得したname属性の情報を格納
	/*
	name01=>array(
		"type"=>"textarea",		
		"must"=>true,
		"validation"=>array(
			"func01"=>array(""),
			"func02"=>array(""),
		),		
		"value"=>"",
	)
	*/
);
private $ticket;//(int)ワンタイムチケット　各ブラウザのタブごとに発行　_FTDATAと同様に遷移中は常にPOSTし、値を保持する。値が紛失した際はフォームのトップに強制遷移させる。
private $characterCode;//文字コード情報
private $ticketPath;//ワンタイムチケット用の一時ディレクトリのパス

public $result=array(//バリデートの結果を格納 値が正常な場合はtrueを返す。不正な場合はfalse
	/*
	"$key01"=>array(
		"func01"=>false,
		"func02"=>false,
	),
	"$key02"=>array(
		"func02"=>false,
	),
	*/
);

function __construct(config $obj){//引数にはconfigクラスのオブジェクトを指定
	$this->characterCode = $obj->charset;//文字コードを指定　'UTF-8''Shift_JIS'
	$this->ticketPath=$obj->ticketPath;
}


/*----新規ワンタイムチケットを作成し、メンバ変数内に格納する---*/
//第一引数はチケット用ディレクトリのパス
public function createTicket(){
	//一時ファイル保存先のディレクトリ名一覧を取得（例：./include/fttmp/ticket内のディレクトリ一覧を取得）
	$dirname=array();
	if (is_dir($this->ticketPath) && $dir = opendir($this->ticketPath)) {
		while (($file = readdir($dir)) !== false) {
			if ($file != "." && $file != "..") {
				$dirname[] = $file;
			}
		} 
		closedir($dir);
	}
	//end
	
	
	
	$rand=mt_rand(1000,999999)+time();//チケットを発行
	if($rand<0)$rand=$rand*-1;
	$randFilename=$rand.".txt";
	
	$checkTicketFlg=true;//チケットが重複していなければtrue
	//チケットの重複チェック　重複している場合は再発行
	for(;;){
		if($checkTicketFlg===false){
			$rand=mt_rand(1000,999999)+time();//チケットを再発行
			if($rand<0)$rand=$rand*-1;
			$randFilename=$rand.".txt";
		}
		$checkTicketFlg=true;
		if(!empty($dirname)){
			foreach($dirname as $key =>$filename){
				if($filename===$randFilename){
					$checkTicketFlg=false;//重複しているためfalse
				}else{
				}
			}
		}
		if($checkTicketFlg===true)break;//重複していないのでループ終わり
	}
	//end

	//*---------チケットファイル作成処理--------*//
	$path_ticketFilename = $this->ticketPath.'/'.$randFilename;// 作成するファイル名の指定
	
	if( !file_exists($path_ticketFilename) ){// ファイルの存在確認
		touch( $path_ticketFilename );// ファイル作成
	}else{
		return false;// すでにファイルが存在する為エラーとする
	}
	chmod( $path_ticketFilename, 0666 );// ファイルのパーティションの変更
	//*-------------------end-------------------*//
	
	
	$this->ticket=$rand;
	return true;

}
/*-------------------end----------------*/

/*----POSTで受け取ったワンタイムチケットを整数に変換し、チケットが重複していないかチェックし、メンバ変数内に格納する---*/
//第一引数には受け取るチケット変数
//失敗した場合、重複していた場合はfalseを返す
public function setTicket($ticket){
	$int_ticket=intval($ticket);
	if(is_int($int_ticket)){
		$this->ticket=$int_ticket;
	}else{
		return false;
	}
	
	if(file_exists($this->ticketPath."/".$this->ticket.".txt")){
		return true;
	}else{
		return false;
	}
}
/*-------------------end----------------*/




/*----使用した一時ディレクトリ内のワンタイムチケットを削除---*/

public function deleteTicket(){
	if(file_exists($this->ticketPath."/".$this->ticket.".txt"))unlink($this->ticketPath."/".$this->ticket.".txt");

}
/*-------------------end----------------*/





//一時ディレクトリ内の古いワンタイムチケットを一括削除
//第一引数：ディレクトリの保持期間を指定（単位：秒）
public function deleteOldTicket($second){
	//一時ファイル保存先のディレクトリ名一覧を取得（例：./include/fttmp/upload内のディレクトリ一覧を取得）
	$dirname=array();
	if ($dir = opendir($this->ticketPath)) {
		while (($file = readdir($dir)) !== false) {
			if ($file != "." && $file != "..") {
				$dirname[] = $file;
			}
		} 
		closedir($dir);
	}
	/*
	echo"<pre>";
	var_dump($dirname);
	echo"</pre>";
	*/
	//end
	
	
	
	//期限を超過したファイルを削除
	foreach($dirname as $key => $filename){
		if((time()-filemtime($this->ticketPath."/".$filename))>$second){
			if(file_exists($this->ticketPath."/".$filename)&&$filename!==".gitkeep")unlink($this->ticketPath."/".$filename);
		}else{
		}
	}
	//end
	
}
/*-----end----*/






/*--$this->dataに引数の配列をマージ config.phpの値を取得--*/
public function setData($_data){
	$valid = new ftvalidation();
	$ftDataArray=$valid->htmlspecialchars_array($_data,$this->characterCode);
	$this->data=array_merge($this->data,$_data);
	
	//初期値設定
	foreach($this->data as $key => $val){
		if(!isset($val["value"]))$this->data[$key]["value"]="";
		if(!isset($val["type"]))$this->data[$key]["type"]="";
		if(!isset($val["validation"]))$this->data[$key]["validation"]=array();
		if(!isset($val["validation"]["must"]))$this->data[$key]["validation"]["must"]=array(false);
	}
	//
}
/*--end--*/

/*--受け取ったjsonのvalue情報のみメンバdata["_FTDATA"]["DATA"][$key]["value"]へ上書き--*/
//引数はJSON形式
public function set_FTDATA($_FTDATAarray){
	$valid = new ftvalidation();
	foreach($_FTDATAarray as $key => $val){
		$vkey=$valid->htmlspecialchars_array($key,$this->characterCode);
		$this->data[$vkey]["value"]=$val["value"];
	}
	

}
/*--end--*/


/*フォームからPOSTされたvalue値をメンバに格納*/
public function updateDataForPost(){
	$valid = new ftvalidation();
	foreach($this->data as $key => $val){
		$vkey=$valid->htmlspecialchars_array($key,$this->characterCode);
		if(isset($_POST[$vkey])){
			$this->data[$vkey]["value"]=$valid->htmlspecialchars_array($_POST[$vkey],$this->characterCode);//
		}
		
	}
}
/*end*/

/*フォームから_FILESされた_FILES[elementname]["name"]をvalue値としてメンバに格納*/
//_FILESがエラーの場合はfalseを返す
public function updateDataForFiles(){
	$valid = new ftvalidation();
	foreach($this->data as $key => $val){
		$vkey=$valid->htmlspecialchars_array($key,$this->characterCode);

		if(isset($_FILES[$vkey])&&isset($_FILES[$key])){
			if(isset($_FILES[$vkey])!==isset($_FILES[$key]))return false;
			
			if(isset($_FILES[$vkey]['error']) || is_int($_FILES[$vkey]['error'])){
				switch($_FILES[$vkey]['error']){
					case UPLOAD_ERR_NO_FILE:// ファイル未選択
						
					break;
					
					case UPLOAD_ERR_OK:// OK
						$this->data[$vkey]["value"]=$valid->htmlspecialchars_array($_FILES[$vkey]["name"],$this->characterCode);//
						
					break;
					
					default://その他のエラー
						return false;
					break;
				}
				
			}elseif(!isset($_FILES[$vkey]['error']) || !is_int($_FILES[$vkey]['error'])){
				//パラメータが不正
				return false;
			}
		}
	}
	return true;
}
/*end*/

/*--現在メンバに格納されているのフォーム内のvalue値をHTML内の要素のvalueに入れる--*/
public function enterInElement(){
	$valid = new ftvalidation();
	echo "\n<script>
	\n	window.onload = function() {";
	foreach($this->data as $key => $val){
		$vkey=$valid->htmlspecialchars_array($key,$this->characterCode);
		$vval=$val;
		if(!empty($val["value"])){
			switch(true){
				/*input type=text時の処理*/
				case $this->data[$vkey]["type"]==="text":
					//echo 'document.getElementsByName("'.$vkey.'")[0].value="'.$val["value"].'";';//特殊文字の変換に難ありなのでコメントアウト
				break;
				/*end*/

				/*input type=checkbox時の処理*/
				case $this->data[$vkey]["type"]==="checkbox":
					if(is_array($this->data[$vkey]["value"])){//チェックボックスのname属性が配列の時
						foreach($this->data[$vkey]["value"] as $key2 => $val2){
							$check_val = $this->data[$vkey]["value"][$key2];
							$vkey2=$valid->htmlspecialchars_array($key2,$this->characterCode);
							$vval2=$valid->htmlspecialchars_array($val2,$this->characterCode);
							if(!empty($vval2)){
								echo '
					$(" input[value=\''.$check_val.'\'] ").prop("checked", true);';
							}
						}
					}else{//チェックボックスのname属性が配列ではない時
						echo "
						document.getElementsByName('".$vkey."')[1].setAttribute('checked','checked');";
					}
				break;
				/*end*/

				/*input type=radio時の処理*/
				case $this->data[$vkey]["type"]==="radio":
					echo '
					for (i = 0; i < document.getElementsByName("'.$vkey.'").length; i++) {
						if(document.getElementsByName("'.$vkey.'")[i].value == "'.$this->data[$vkey]["value"].'"){
							document.getElementsByName("'.$vkey.'")[i].checked=true;
						}
					}';
				break;
				/*end*/

				/*select時の処理*/
				case $this->data[$vkey]["type"]==="select":
					echo "
					for(var key in document.getElementsByName('".$vkey."')[0].getElementsByTagName('option')){
						if(document.getElementsByName('".$vkey."')[0].getElementsByTagName('option')[key].value == '".$this->data[$vkey]["value"]."'){
							document.getElementsByName('".$vkey."')[0].getElementsByTagName('option')[key].selected=true;
						}
					}
					";
				break;
				/*end*/
				
				/*textarea時の処理*/
				case $this->data[$vkey]["type"]==="textarea":
					//echo 'document.getElementsByName("'.$vkey.'")[0].innerHTML="'.preg_replace('/\n|\r|\r\n/', "\n", $vval["value"] ).'";';
					
				break;
				/*end*/
				
				/*input type=file時の処理*/
				case $this->data[$vkey]["type"]==="file":
				
				break;
				/*end*/
				
				default:
					$typeEllorFlg=true;
			}
		}
	}
	echo "\n	}
	\n</script>";

	if(isset($typeEllorFlg)){
		trigger_error("未対応のname属性です※ftconf/config.php", E_USER_ERROR);
	}

}
/*--end--*/

/*--第一引数の文字列をバリデートし、値を返す--*/
//第一引数：配列も可 配列の場合は配列内の値に1つでも不正なものだったらfalseを返す
//第二引数：第一引数のvalueが格納されている要素のname属性を指定
//第三引数：バリデーションタイプを指定。config.phpの[name]["type"]がそのまま代入される
//第四引数：バリデーションタイプに応じてオプションを指定できる。配列を入れる。config.phpの[name]["validation"][validateType]内の配列がそのまま代入される
//戻り値：第一引数が正常な値だった場合はtrue　不正な値だった場合はfalse
public function validate($elementValue,$elementName,$validName,$validArray){
	if(!is_array($validArray))trigger_error('["'.$validName.'"]には配列を指定してください', E_USER_ERROR);
	switch(true){//return falseの時にバリデートで値が不正なとき
		/*------バリデーションタイプ"must"--------*/
		//validArrayの第一引数がtrue時にバリデートを行う
		//必須項目をバリデート
		case $validName==="must":
			if($validArray[0]===true){
				$valid = new ftvalidation();
				
				if($valid->empty_array($elementValue)){
					return false;
				}elseif(!$valid->empty_array($elementValue)){
					return true;
				}
			}elseif($validArray[0]===false){
				return true;
			}
			
		break;
		/*---------------------end------------------*/
		
		/*------バリデーションタイプ"isXCharOrLess"--------*/
		//validArrayの第一引数がtrue時にバリデートを行う
		//validArrayの第二引数で指定した文字数以下かどうかバリデートを行う
		//指定文字以下の場合にtrueを返す
		case $validName==="isXCharOrLess":
			if($validArray[0]===true){
				$valid = new ftvalidation();
				
				if($valid->empty_array($elementValue))return true;//空の時は無視
				
				if(!$valid->check_char_or_less($elementValue,$validArray[1],$this->characterCode)){
					return false;
				}else{
					return true;
				}
			}elseif($validArray[0]===false){
				return true;
			}
			
		break;
		/*---------------------end------------------*/
		
		/*------バリデーションタイプ"isKatakana"--------*/
		//validArrayの第一引数がtrue時にバリデートを行う
		//カタカナのみかどうかバリデートする（スペースは無視） 空の場合は無視
		case $validName==="isKatakana":
			if($validArray[0]===true){
				$valid = new ftvalidation();
				
				if($valid->empty_array($elementValue))return true;//空の時は無視
				
				if(!$valid->isKatakana_array($elementValue,$this->characterCode)){
					return false;
				}else{
					return true;
				}
			}elseif($validArray[0]===false){
				return true;
			}
			
		break;
		/*---------------------end------------------*/
		
		/*------バリデーションタイプ"isHiragana"--------*/
		//validArrayの第一引数がtrue時にバリデートを行う
		//ひらがなのみかどうかバリデートする（スペースは無視） 空の場合は無視
		case $validName==="isHiragana":
			if($validArray[0]===true){
				$valid = new ftvalidation();
				
				if($valid->empty_array($elementValue))return true;//空の時は無視
				
				if(!$valid->isHiragana_array($elementValue,$this->characterCode)){
					return false;
				}else{
					return true;
				}
			}elseif($validArray[0]===false){
				return true;
			}
			
		break;
		/*---------------------end------------------*/
		
		/*------バリデーションタイプ"containsHyphenAndNumbers"--------*/
		//validArrayの第一引数がtrue時にバリデートを行う
		//ハイフンと数字が含まれているかどうかバリデートする からの場合は無視
		case $validName==="containsHyphenAndNumbers":
			if($validArray[0]===true){
				$valid = new ftvalidation();
				
				if($valid->empty_array($elementValue))return true;//空の時は無視
				
				if(!$valid->isThatContainsHyphenAndNumbers_array($elementValue)){
					return false;
				}else{
					return true;
				}
			}elseif($validArray[0]===false){
				return true;
			}
			
		break;
		/*---------------------end------------------*/
		
		/*------バリデーションタイプ"isEmail"--------*/
		//validArrayの第一引数がtrue時にバリデートを行う
		//正しいメールアドレスかどうかバリデートする からの場合は無視
		case $validName==="isEmail":
			if($validArray[0]===true){
				$valid = new ftvalidation();
				
				if($valid->empty_array($elementValue))return true;//空の時は無視
				
				if(!$valid->is_email_array($elementValue)){
					return false;
				}else{
					return true;
				}
			}elseif($validArray[0]===false){
				return true;
			}
			
		break;
		/*---------------------end------------------*/
		
		/*------バリデーションタイプ"isSame"--------*/
		//第二引数で指定した要素のvalue値と値が同じ時、trueを返す　両方が空の場合は無視
		//validArrayの第一引数がtrue時にバリデートを行う
		//validArrayの第二引数には指定したinput要素等のname属性を指定
		case $validName==="isSame":
			
			if($validArray[0]===true){
				$valid = new ftvalidation();
				
				if($valid->empty_array($this->data[$elementName]["value"]) && $valid->empty_array($this->data[$validArray[1]]["value"])){
					return true;//両方が空の時は無視
				}
				
				if($elementValue===$this->data[$validArray[1]]["value"]){
					
					return true;
				}else{
					
					return false;
				}
			}elseif($validArray[0]===false){
				
				return true;
			}
			
		break;
		/*---------------------end------------------*/
		
		/*------バリデーションタイプ"isDiffer"--------*/
		//第二引数で指定した要素のvalue値と値が違う時、trueを返す　両方が空の場合は無視
		//validArrayの第一引数がtrue時にバリデートを行う
		//validArrayの第二引数には指定したinput要素等のname属性を指定
		case $validName==="isDiffer":
			
			if($validArray[0]===true){
				$valid = new ftvalidation();
				
				if($valid->empty_array($this->data[$elementName]["value"]) && $valid->empty_array($this->data[$validArray[1]]["value"])){
					return true;//両方が空の時は無視
				}
				
				if($elementValue!==$this->data[$validArray[1]]["value"]){
					
					return true;
				}else{
					
					return false;
				}
			}elseif($validArray[0]===false){
				
				return true;
			}
			
		break;
		/*---------------------end------------------*/
		
		/*------バリデーションタイプ"existAnyOne"--------*/
		//第二引数で指定した要素か$elementValueかのどちらかに値が存在したらtrueを返す。すべて空だった場合はfalseを返す
		//validArrayの第一引数がtrue時にバリデートを行う
		//validArrayの第二引数には指定したinput要素等のname属性を格納した配列を指定
		case $validName==="existAnyOne":
			
			if($validArray[0]===true){
				$valid = new ftvalidation();
				$flg=false;//空
				if($valid->empty_array($this->data[$elementName]["value"])){
					$flg=false;
				}else{
					return true;
				}
				foreach($validArray[1] as $key => $name){
					if($valid->empty_array($this->data[$name]["value"])){
						$flg=false;
					}else{
						$flg=true;
						break;
					}
				}
				return $flg;
				

			}elseif($validArray[0]===false){
				
				return true;
			}
			
		break;
		/*---------------------end------------------*/
		
		/*------バリデートタイプ"maxFileSize"--------*/
		//validArrayの第一引数がtrue時にバリデートを行う
		//最大ファイルサイズをチェック　validArrayの第二引数のバイト数を超えていなければtrueを返す。
		case $validName==="maxFileSize":
			if($validArray[0]===true){
				if(isset($this->data[$elementName]["type"]) && $this->data[$elementName]["type"]!=="file"){
					trigger_error('["'.$elementName.'"]["type"]の値がfile以外のものにバリデートタイプ["validation"]「"maxFileSize"」は使用できません※ftconf/config.php', E_USER_ERROR);
				}
				
				if(isset($_FILES[$elementName])){
					if(isset($_FILES[$elementName]['error']) || is_int($_FILES[$elementName]['error'])){
						switch($_FILES[$elementName]['error']){
							case UPLOAD_ERR_NO_FILE:// ファイル未選択
								return true;
							break;
							
							case UPLOAD_ERR_OK:// OK
								if(!is_int($validArray[1]))trigger_error('["'.$elementName.'"]["validation"]["maxFileSize"][1]の値が整数値ではありません※ftconf/config.php', E_USER_ERROR);
								if($_FILES[$elementName]['size']<=$validArray[1])return true;
								elseif($_FILES[$elementName]['size']>=$validArray[1])return false;
							break;
							
							default://その他のエラー
								return false;
							break;
						}
						
					}elseif(!isset($_FILES[$elementName]['error']) || !is_int($_FILES[$elementName]['error'])){
						//パラメータが不正
						return false;
					}
				}else{
					return true;
				}
			}elseif($validArray[0]===false){
				return true;
			}
			
		break;
		/*---------------------end------------------*/
		
		/*------バリデートタイプ"fileExtension"--------*/
		//validArrayの第一引数がtrue時にバリデートを行う
		//指定された拡張子であればtrueを返す 指定された拡張子でなければfalseを返す 
		case $validName==="fileExtension":
			if($validArray[0]===true){
				if(isset($this->data[$elementName]["type"]) && $this->data[$elementName]["type"]!=="file"){
					trigger_error('["'.$elementName.'"]["type"]の値がfile以外のものにバリデートタイプ["validation"]「"fileExtension"」は使用できません※ftconf/config.php', E_USER_ERROR);
				}
				$valid = new ftvalidation();
				
				if(isset($_FILES[$elementName])){
					if(isset($_FILES[$elementName]['error']) || is_int($_FILES[$elementName]['error'])){
						switch($_FILES[$elementName]['error']){
							case UPLOAD_ERR_NO_FILE:// ファイル未選択
								
							break;
							
							case UPLOAD_ERR_OK:// OK
								if($valid->is_extension($_FILES[$elementName]['name'],$validArray[1]));
								else return false;
							break;
							
							default://その他のエラー
								return false;
							break;
						}
						
					}elseif(!isset($_FILES[$elementName]['error']) || !is_int($_FILES[$elementName]['error'])){
						//パラメータが不正
						return false;
					}
				}
				if($valid->empty_array($this->data[$elementName]["value"]))return true;
				if($valid->is_extension($this->data[$elementName]["value"],$validArray[1]))return true;
				else return false;
				
				
			}elseif($validArray[0]===false){
				return true;
			}
			
		break;
		/*---------------------end------------------*/


		default:
			trigger_error('["'.$elementName.'"]["validation"]'.':指定されたバリデートタイプ["'.$validName.'"]は定義されていません※ftconf/config.php', E_USER_ERROR);
	}
}
/*--end--*/


/*--メンバ変数this->data内のvalueをJSONで取得する--*/
//戻り値はJSON形式
public function getValueJson(){
	$jsonArray=array();
	foreach($this->data as $name => $arr){
		$jsonArray[$name]["value"]=$arr["value"];
	}
	return json_encode($jsonArray);

}
/*----------------------end-------------------------*/

/*--ワンタイムチケットの値を返す。メンバ変数this->ticketを返す--*/
//戻り値は整数。
public function getTicket(){
	return $this->ticket;
}
/*----------------------end-------------------------*/



/*--送信エラーページへ遷移させる--*/
//引数は遷移先のパス
//戻り値 trueを返す
public function moveErrorPage($path){
	echo "
	<form action='".$path."' method='post' name='moveftform'>
	";
	foreach($this->data as $name => $val){
		if(is_array($val["value"])){
			foreach($val["value"] as $num => $val2){
				echo "<input type='hidden' name='_FTDATA[".$name."][value][".$num."]' value='".$val2."'>\n";
			}
		}else{
			echo "<input type='hidden' name='_FTDATA[".$name."][value]' value='".$val["value"]."'>\n";
		}
	}
	echo "
		<input type='hidden' name='_FTTICKET' value='".$this->getTicket()."'>\n	
		
	</form>
	<script type='text/javascript'>
	document.moveftform.submit();
	window.onload = function() {document.getElementsByTagName('body').style.display = 'none';};
	</script>\n";
	return true;

}
/*--end--*/


/*--input[type=text]タグのvalue属性に入れる--*/
//第一引数はinput[type=text]タグのname属性を指定
public function text($name){
	if(!empty($this->data[$name]["value"])){
		echo($this->data[$name]["value"]);
	}
}
/*--end--*/


/*--textareaタグの間に挟む--*/
//第一引数はtextareaタグのname属性を指定
public function textarea($name){
	if(!empty($this->data[$name]["value"])){
		echo($this->data[$name]["value"]);
	}
}
/*--end--*/


/*--バリデートエラー画面の時にtrueを返す--*/
//バリデートエラー画面以外の時はfalseを返す
public function isValidateErrorScreen(){
	if(isset($_POST["_FTDATA"]) && (isset($_POST["_FTMOVE"])||isset($_POST["_FTBACK"])) && isset($_POST["_FTTICKET"])){
		return true;
	}else{
		return false;
	}
}
/*--end--*/


/*--第一引数で指定した要素のname属性のvalue値を全バリデートをした結果を返す--*/
//１つでもバリデートエラーがあればfalseを返す。バリデートエラーがない場合はtrueを返す
public function isAllValidateResult($elementName){
	$result = true;
	foreach($this->result[$elementName] as $funcname => $val){
		if($result===true){
			if($val===true)$result=true;
			elseif($val===false)$result=false;
		}
	}
	return $result;

}
/*--end--*/


/*--第一引数で指定した要素のname属性のvalue値を、第二引数で指定したバリデートタイプの処理でバリデートした結果を返す--*/
//バリデートエラーがあればfalseを返す。バリデートエラーがない場合はtrueを返す
public function isValidateResult($elementName,$elementValidateFuncName){
	if($this->result[$elementName][$elementValidateFuncName]){
		return true;	
	}else{
		return false;
	}

}
/*--end--*/


/*--第一引数で指定した要素のname属性のvalue値を出力する--*/
//第一引数にはname属性値
public function output($name){
	echo nl2br($this->data[$name]["value"]);

}
/*--end--*/








/*-------------------------------------------デバッグ用メソッド 配列情報などを画面にechoする--------------------------*/

public function echo_debug(){

echo"
<style>
.debug{
	padding:10px;
	display:inline-block;
	float:left;
}
.debug pre{
	border:1px solid #000;background-color:#FF2;
	display:inline-block;
	max-width:400px;
    white-space: -moz-pre-wrap; /* Mozilla */
    white-space: -pre-wrap;     /* Opera 4-6 */
    white-space: -o-pre-wrap;   /* Opera 7 */
    white-space: pre-wrap;      /* CSS3 */
    word-wrap: break-word;      /* IE 5.5+ */
}
</style>
<div style='' class='clearfix'>";

/////////////////////////////////////
echo "<div class='debug'>------------実行者------------<br/><pre>";
echo exec("whoami");
echo "</pre></div>";

echo "<div class='debug'>------------ob_input->data------------<br/><pre>";
var_dump($this->data);
echo "</pre></div>";

echo "<div class='debug'>------------POST------------<br/><pre>";
if(isset($_POST)){
	var_dump($_POST);
}
echo "</pre></div>";

echo "<div class='debug'>------------json_decode(_POST['_jsonFTDATA'],true)------------<br/><pre>";
if(isset($_POST["_jsonFTDATA"])){
	var_dump(json_decode($_POST["_jsonFTDATA"],true));

}
echo "</pre></div>";

echo "<div class='debug'>------------ob_input->result------------<br/><pre>";
if(isset($this->result)){
	var_dump($this->result);
}
echo "</pre></div>";


echo "<div class='debug'>------------_FILES------------<br/><pre>";
if(isset($_FILES)){
	var_dump($_FILES);
}
echo "</pre></div>";


///////////////////////////////////////////
echo"</div>";
/*--------------end-----------------*/


}
/*---------------------------------------------end----------------------------------------------------*/




}
?>