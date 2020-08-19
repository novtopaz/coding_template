<?php
//一時ファイル管理クラス
//./include/fttmp/upload/_tmp0000000_name属性名01_ファイル名.hoge　に格納
//./include/fttmp/upload/_tmp0000000_name属性名02_ファイル名.hoge　に格納


class ftupload{

private $ft_upload_token;//ワンタイムチケット情報　整数型
private $ft_private_key;//鍵
private $temp_path;//一時ファイル保存先のディレクトリ名を格納（例：./include/fttmp/upload）
private $dir_name;//ユーザごとの一時ファイルの保存先のディレクトリ名を格納（例：./include/fttmp/upload/_tmp0000000）　渡されたワンタイムチケットと秘密鍵を元に一時ディレクトリ名を作成


/*-----*/
//第一引数：秘密鍵
//第二引数：一時ファイルの保存先ディレクトリを指定する
function __construct($private_key,$tempPath) {
	$this->ft_private_key=$private_key;
	$this->temp_path=$tempPath;
	$this->dir_name = $this->temp_path."/_tmp".(string)($this->ft_upload_token*$this->ft_private_key);//一時ファイル格納先ディレクトリの一番親ディレクトリ
}
/*--end--*/


/*--ワンタイムチケットをセットする。--*/
//成功した場合はtrue 失敗した場合はfalseを返す
public function setTicket($int_ticket){
	if(!is_int($int_ticket))return false;
	$this->ft_upload_token=$int_ticket;
	$this->dir_name = $this->temp_path."/_tmp".(string)($this->ft_upload_token*$this->ft_private_key);//一時ファイル格納先ディレクトリ名
	return true;
}
/*-----end----*/


/*--一時ファイルが格納されているディレクトリを返す（例：./include/fttmp/upload/tmp0000000_name属性名01/）--*/
//引数には$FILES[$elementName]の$elementName
//setTicket()メソッドでワンタイムチケットの値をセットする必要あり。
//成功した場合はディレクトリのパス、失敗の場合は(bool)falseを返す
public function getDirPath($elementName){
	if(isset($this->ft_upload_token)&&is_int($this->ft_upload_token)){
		return $this->dir_name."_".$elementName;
	}else{
		return false;
	}
}
/*-----end----*/




/*--formから飛んできた＄_FILES[＄name]をワンタイムチケットの整数値を元に作られた名前を付けられた一時保存ディレクトリに保存する--*/
//第一引数には＄_FILES[＄name]の＄nameを指定
//第二引数は文字コード
//成功した場合はtrue、失敗した場合はfalseを返す。 ＄_FILES[＄name]に中身が場合はtrueを返す
public function upload($name,$charset){
	if(empty($this->ft_upload_token))trigger_error('ワンタイムチケットがセットされていません。', E_USER_ERROR);;
	//アップロード処理
	if( isset($_FILES[$name])){
		if(isset($_FILES[$name]['error']) || is_int($_FILES[$name]['error'])){
			switch($_FILES[$name]['error']){
				case UPLOAD_ERR_NO_FILE:// ファイル未選択
					return true;
				break;
				
				case UPLOAD_ERR_OK:// OK
					//session_start();
					/*セッションハイジャック対策*/
					/*
					$old_id = session_id();
					session_regenerate_id();
					unlink(session_save_path() . 'sess_' . $old_id);
					*/
					/*end*/
					
					
					$tmp_file_name = $_FILES[$name]["tmp_name"];//テンポラリファイル名
					
					$dir_path=$this->dir_name."_".$name;//ファイル保存先のディレクトリ名
					$file_full_path;//ファイル名を含めたフルパス
					if (PHP_OS == "WIN32" || PHP_OS == "WINNT") {
						// Windwos用の処理
						$file_full_path=mb_convert_encoding($dir_path."_".$_FILES[$name]["name"],"SJIS-win", $charset);//フルパス
					} else {
						// サーバ環境用の処理
						$file_full_path=mb_convert_encoding($dir_path."_".$_FILES[$name]["name"],'UTF-8',"auto" );//フルパス
					}
					
					//アップロード処理
					switch(true){
						case !is_dir($dir_path):
							if(/*mkdir($dir_path, 0776,true) && */move_uploaded_file($tmp_file_name ,$file_full_path) && chmod($file_full_path,0666)){
								return true;
							}else{
								return false;
							}
						break;
						case is_dir($dir_path):
							if(move_uploaded_file($tmp_file_name , $file_full_path) && chmod($file_full_path,0666)){
								return true;
							}else{
								return false;
							}
						break;
						default:
							return false;
						break;
					}
					//
					
					
					//$_SESSION[$ft_upload_token]=array();
					//$_SESSION[$ft_upload_token][$key]=array();
					//$_SESSION[$ft_upload_token][$key]['upload_path']=$file_full_path;
					//session_write_close();
				break;
				
				default://その他のエラー
					return false;
				break;
			}
			
		}elseif(!isset($_FILES[$name]['error']) || !is_int($_FILES[$name]['error'])){
			//パラメータが不正
			return false;
		}
	}
	//

}
/*-----end----*/

/*--一時ファイルのディレクトリを削除--*/
//例：./include/fttmp/upload/_tmp0000000を削除
//成功した場合はtrue 失敗した場合はfalseを返す
public function delete(){
	//引数で指定したパスのディレクトリを再帰的に削除する
	/*function remove_directory($dir) {
		$flg;
		if (is_dir($dir) && $handle = opendir("$dir")) {
			while (false !== ($item = readdir($handle))) {
				if ($item != "." && $item != "..") {
					if (is_dir("$dir/$item")) {
						remove_directory("$dir/$item");
				} else {
				 unlink("$dir/$item");
				 //removing
				}
			}
		}
		closedir($handle);
		$flg=rmdir($dir);
		//removing
		}
		return $flg;
	}
	//end
	return remove_directory($this->dir_name);*/
	
	
	//一時ファイル保存先のディレクトリ名一覧を取得（例：./include/fttmp/upload内のディレクトリ一覧を取得）
	$filename=array();
	if ($dir = opendir($this->temp_path)) {
		while (($file = readdir($dir)) !== false) {
			if ($file != "." && $file != "..") {
				$filename[] = $file;
			}
		} 
		closedir($dir);
	}
	
	if(!empty($filename)){
		foreach($filename as $key => $val){
			if(!is_dir($this->temp_path.$val)){
				if(preg_match('/^'."_tmp".(string)($this->ft_upload_token*$this->ft_private_key).'_/',$val)){
					if(!unlink($this->temp_path."/".$val))return false;//ファイルを削除
				}
			}
		}
	}
	/*
	echo"<pre>";
	var_dump($filename);
	echo"</pre>";
	exit;
	*/
	//end
	return true;
	
}
/*-----end----*/






//古い一時ファイル保存ディレクトリを一括削除
//第一引数：ディレクトリの保持期間を指定（単位：秒）
public function deleteOldData($second){
	//一時ファイル保存先のディレクトリ名一覧を取得（例：./include/fttmp/upload内のディレクトリ一覧を取得）
	$dirname=array();
	if ($dir = opendir($this->temp_path)) {
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
	
	
	//第一引数で指定したディレクトリの最終更新日時を返す
	function filecheck($path){
		$latest_mtime = 0;
		if (is_dir($path) && $handle = opendir($path)) {
			while (false !== ($file = readdir($handle))) {
				if ($file != "." && $file != "..") {
				$fname = $path.$file;
				$mtime = filemtime( $fname );
					if( $mtime > $latest_mtime ){
						$latest_mtime = $mtime;
					}
				}
			}
			closedir($handle);
		}else{
			$latest_mtime = filemtime( $path );
		}
		return $latest_mtime;
	}
	//end

	
	foreach($dirname as $key => $val){
		if(!is_dir($this->temp_path."/".$dirname[$key])){
			if((time()-filecheck($this->temp_path."/".$dirname[$key]))>$second){
				unlink($this->temp_path."/".$dirname[$key]);
				//echo time()-filecheck($this->temp_path."/".$dirname[$key]."/").":".$dirname[$key]."削除<br>";
			}else{
				//echo $dirname[$key]."残す<br>";
			}
		}
	}
	
}
/*-----end----*/



}




?>