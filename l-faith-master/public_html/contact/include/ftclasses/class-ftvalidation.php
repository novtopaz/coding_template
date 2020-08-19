<?php
class ftvalidation{
//第一引数のHTMLをエンティティ変換する。配列の場合でも再帰的に実行できる
public function htmlspecialchars_array($array,$characterCode, $ignore_keys = NULL){
	//第一引数：htmlspecialcharsを実行する変数
	//第二引数：文字コード
	//第三引数：htmlspecialcharsを適用しない配列のキーリスト
	/*
	$ignore_keys = array(
		'comments',
		'message',
	);
	*/
	if (is_array($array)){
	  foreach($array as $k => $v){
		 // 無視するリスト
		 if (in_array($k, (array)$ignore_keys, TRUE)){
			continue;
		 }
		 if (is_array($v)){
			// 配列だったらここで再帰するよ
			$array[$k] = $this->htmlspecialchars_array($array[$k], $ignore_keys);
		 } else {
			// そのまま変換
			$array[$k] = html_entity_decode( $v, ENT_QUOTES  );
			$array[$k] = htmlspecialchars($v, ENT_QUOTES,$characterCode);
		 }
	  }
	} else {
	  // そのまま変換
	  $array = html_entity_decode( $array, ENT_QUOTES  );
	  $array = htmlspecialchars($array, ENT_QUOTES,$characterCode);
	}
	return $array;
}
/*end*/




private $valForCheckCharOrLess;
/*第一引数が第二引数で指定した文字数以下かどうか再帰的にチェックする。配列の場合は末端に1つでも超過文字数があればfalseを返す*/
//第二引数：文字数（int）
//第三引数：文字コード
//指定した文字数以下の場合はtrue　指定文字数を超過していた場合はfalseを返す
public function check_char_or_less($valArray,$numOfChar,$charset){
	if(!is_int($numOfChar))trigger_error('整数を指定してください', E_USER_ERROR);//第二引数の型チェック
	$this->valForCheckCharOrLess=true;
	if(is_array($valArray)){
		foreach ($valArray as $key01 => $val01) {
			if (is_array($val01)) {
				$this->check_char_or_less($val01);
			} elseif(!is_array($val01)){
				//
				if(mb_strlen($val01,$charset)>=$numOfChar){
					$this->valForCheckCharOrLess = false;
				}else{
					if($this->valForCheckCharOrLess !== false){$this->valForCheckCharOrLess = true;}
				}
				//
			}
		}
		return $this->valForCheckCharOrLess;
	}elseif(!is_array($valArray)){
		//
		if(mb_strlen($valArray,$charset)>=$numOfChar){
			$this->valForCheckCharOrLess = false;
		}else{
			if($this->valForCheckCharOrLess !== false){$this->valForCheckCharOrLess = true;}
		}
		//
		return $this->valForCheckCharOrLess;
	}
}
/*end*/



private $valForIsKatakanaArray;
/*第一引数の文字列がカタカナのみかどうか再帰的にチェックする（スペースは無視）。配列の場合は末端に1つでもカタカナでない文字が含まれていればfalseを返す*/
//文字列がカタカナのみであれば場合はtrue　それ以外の文字が含まれている場合はfalseを返す
public function isKatakana_array($valArray,$characterCode){
	$this->valForIsKatakanaArray=true;
	if(is_array($valArray)){
		foreach ($valArray as $key01 => $val01) {
			if (is_array($val01)) {
				$this->isKatakana_array($val01);
			} elseif(!is_array($val01)){
				//
				mb_regex_encoding($characterCode);//文字コード指定
				if(!mb_ereg("^[ァ-ヶー\-\s]+$", $val01)){
					$this->valForIsKatakanaArray = false;
				}else{
					if($this->valForIsKatakanaArray !== false){$this->valForIsKatakanaArray = true;}
				}
				//
			}
		}
		return $this->valForIsKatakanaArray;
	}elseif(!is_array($valArray)){
		//
		mb_regex_encoding($characterCode);//文字コード指定
		if(!mb_ereg("^[ァ-ヶー\-\s]+$", $valArray)){
			$this->valForIsKatakanaArray = false;
		}else{
			if($this->valForIsKatakanaArray !== false)$this->valForIsKatakanaArray = true;
		}
		//
		return $this->valForIsKatakanaArray;
	}
}
/*end*/



private $valForIsHiraganaArray;
/*第一引数の文字列がひらがなのみかどうか再帰的にチェックする（スペースは無視）。配列の場合は末端に1つでもカタカナでない文字が含まれていればfalseを返す*/
//文字列がカタカナのみであれば場合はtrue　それ以外の文字が含まれている場合はfalseを返す
public function isHiragana_array($valArray,$characterCode){
	$this->valForIsHiraganaArray=true;
	if(is_array($valArray)){
		foreach ($valArray as $key01 => $val01) {
			if (is_array($val01)) {
				$this->isHiragana_array($val01);
			} elseif(!is_array($val01)){
				//
				mb_regex_encoding($characterCode);//文字コード指定
				if(!mb_ereg("^[ぁ-ん\-\s]+$", $val01)){
					$this->valForIsHiraganaArray = false;
				}else{
					if($this->valForIsHiraganaArray !== false){$this->valForIsHiraganaArray = true;}
				}
				//
			}
		}
		return $this->valForIsHiraganaArray;
	}elseif(!is_array($valArray)){
		//
		mb_regex_encoding($characterCode);//文字コード指定
		if(!mb_ereg("^[ぁ-ん\-\s]+$", $valArray)){
			$this->valForIsHiraganaArray = false;
		}else{
			if($this->valForIsHiraganaArray !== false)$this->valForIsHiraganaArray = true;
		}
		//
		return $this->valForIsHiraganaArray;
	}
}
/*end*/



private $valForIsThatContainsHyphenAndNumbersArray;
/*第一引数の文字列がハイフンと整数が含まれているかどうか再帰的にチェックする。配列の場合は末端に1つでも不正な含まれていない文字列があればfalseを返す*/
//文字列にハイフンと整数が含まれていれば場合はtrue　含まれていない場合はfalseを返す
public function isThatContainsHyphenAndNumbers_array($valArray){
	$this->valForIsThatContainsHyphenAndNumbersArray=true;
	if(is_array($valArray)){
		foreach ($valArray as $key01 => $val01) {
			if (is_array($val01)) {
				$this->isThatContainsHyphenAndNumbers_array($val01);
			} elseif(!is_array($val01)){
				//
				if(!mb_ereg("^[0-9\-]+$", $val01)){
					$this->valForIsThatContainsHyphenAndNumbersArray = false;
				}else{
					if($this->valForIsThatContainsHyphenAndNumbersArray !== false){$this->valForIsThatContainsHyphenAndNumbersArray = true;}
				}
				//
			}
		}
		return $this->valForIsThatContainsHyphenAndNumbersArray;
	}elseif(!is_array($valArray)){
		//
		if(!mb_ereg("^[0-9\-]+$", $valArray)){
			$this->valForIsThatContainsHyphenAndNumbersArray = false;
		}else{
			if($this->valForIsThatContainsHyphenAndNumbersArray !== false)$this->valForIsThatContainsHyphenAndNumbersArray = true;
		}
		//
		return $this->valForIsThatContainsHyphenAndNumbersArray;
	}
}
/*end*/



private $valForIsEmailArray;
/*第一引数がメールアドレスかどうか再帰的にチェックする。配列の場合は末端に1つでも不正なメールアドレスがあればfalseを返す*/
//正しいメールアドレスの場合はtrue　不正なメールアドレスの場合はfalseを返す
public function is_email_array($valArray){
	$this->valForIsEmailArray=true;
	if(is_array($valArray)){
		foreach ($valArray as $key01 => $val01) {
			if (is_array($val01)) {
				$this->is_email_array($val01);
			} elseif(!is_array($val01)){
				//
				if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $val01)){
					$this->valForIsEmailArray = false;
				}else{
					if($this->valForIsEmailArray !== false){$this->valForIsEmailArray = true;}
				}
				//
			}
		}
		return $this->valForIsEmailArray;
	}elseif(!is_array($valArray)){
		//
		if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $valArray)){
			$this->valForIsEmailArray = false;
		}else{
			if($this->valForIsEmailArray !== false)$this->valForIsEmailArray = true;
		}
		//
		return $this->valForIsEmailArray;
	}
}
/*end*/

private $valForIsExistString;
/*第一引数に文字列があるかどうか再帰的にチェックする。配列の場合は末端に1つでも文字列があればtrueを返す*/
//空の場合はtrue 空ではない場合はfalse
public function is_exist_string($valArray){
	$this->valForIsExistString=false;
	if(is_array($valArray)){
		foreach ($valArray as $key01 => $val01) {
			if (is_array($val01)) {
				$this->is_exist_string($val01);
			} elseif(!is_array($val01)){
				if(!empty($val01)){
					$this->valForIsExistString = true;
					
				}elseif(empty($val01)){
					if($this->valForIsExistString !== true){$this->valForIsExistString = false;}
					
				}
				
			}
		}
		return $this->valForIsExistString;
	}else{
		if(!empty($valArray)){
			
			$this->valForIsExistString = true;
		}elseif(empty($valArray)){
			if($this->valForIsExistString !== true)$this->valForIsExistString = false;
		}
		
		return $this->valForIsExistString;
	}
}
/*end*/

private $valForEmptyaArray;
/*第一引数が空かどうか再帰的にチェックする。配列の場合は末端に1つでも空の項目があればtrueを返す*/
//空の場合はtrue 空ではない場合はfalse
public function empty_array($valArray){
	$this->valForEmptyaArray=false;
	if(is_array($valArray)){
		foreach ($valArray as $key01 => $val01) {
			if (is_array($val01)) {
				$this->empty_array($val01);
			} elseif(!is_array($val01)){
				if(empty($val01)){
					$this->valForEmptyaArray = true;
					
				}elseif( !empty($val01)){
					if($this->valForEmptyaArray !== true){$this->valForEmptyaArray = false;}
					
				}
				
			}
		}
		return $this->valForEmptyaArray;
	}else{
		if(empty($valArray)){
			
			$this->valForEmptyaArray = true;
		}elseif(!empty($valArray)){
			if($this->valForEmptyaArray !== true)$this->valForEmptyaArray = false;
		}
		
		return $this->valForEmptyaArray;
	}
}
/*end*/

private $valForIsExtension;
/*第一引数が第二引数で指定された拡張子のファイル名かどうか再帰的にチェックする。第一引数に配列が指定された場合は、末端に1つでも指定外の拡張子があればfalseを返す*/
//第一引数はファイル名 例'image.gif'などが格納された配列か変数
//第二引数例 array('jpg','jpeg','txt','doc','docx','xls','xlsx','pdf','ppt','pptx')
//指定された拡張子であればtrueを返す 指定された拡張子でなければfalseを返す 
public function is_extension($valArray,$extensionTypeArray){
	$this->valForIsExtension=true;
	$regexp_value="";
	if(!is_array($extensionTypeArray))trigger_error('第二引数は配列を指定してください', E_USER_ERROR);
	foreach($extensionTypeArray as $exkey => $exval){
		$regexp_value=$regexp_value.'|\.'.$exval.'$';
	}
	$regexp_value=$regexp_value.'/i';
	$regexp_value_num=mb_strlen($regexp_value,'utf-8')-1;
	$regexp_value=substr($regexp_value, 1, $regexp_value_num);
	$regexp_value='/'.$regexp_value;
	if(is_array($valArray)){
		foreach ($valArray as $key01 => $val01) {
			if (is_array($val01)) {
				$this->is_extension($val01);
			} elseif(!is_array($val01)){
				//
				if(!preg_match($regexp_value,$val01)){
					$this->valForIsExtension = false;
				}else{
					if($this->valForIsExtension !== false){$this->valForIsExtension = true;}
				}
				//
			}
		}
		return $this->valForIsExtension;
	}elseif(!is_array($valArray)){
		//
		if(!preg_match($regexp_value,$valArray)){
			$this->valForIsExtension = false;
		}else{
			if($this->valForIsExtension !== false){$this->valForIsExtension = true;}
		}
		//
		return $this->valForIsExtension;
	}
}
/*end*/




}

?>