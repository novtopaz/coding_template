<?php
require_once('include/ftclasses/qdmail.php');
require_once('include/ftclasses/qdsmtp.php');


class ftmail{

private $attach_flg=false;//添付ファイルがある場合はtrue ない場合はfalseを格納
private $attach_array;
/*
$attach_array=array(
	array(filepath01=>filename01),//[0]
	array(filepath02=>filename02),//[1]
);
*/
//添付ファイルが存在するディレクトリパス情報を格納


/*---------------------添付ファイルをpushする------------------------*/
//第一引数：添付ファイルのパスを渡す。パスは絶対パスか、読み込みもとのファイルからの相対パス
//第二引数：添付ファイルのファイル名を渡す。
public function pushAttach($filePath,$fileName){
	$this->attach_array[]=array($filePath=>$fileName);
	$this->attach_flg=true;
}
/*---------------------end------------------------*/


/*---------------------メール送信処理------------------------*/
//引数にはinput要素等の格納された配列を指定
//送信成功時にtrue、失敗時にfalseを返す
//第二引数：外から文字列などのデータを纏めて配列で受け取れる
public function send($data,$dataArray){


$admin_mail = new Qdmail();//管理者宛メール
$user_mail = new Qdmail();//ユーザーへのメール

//*添付処理*//
if($this->attach_flg===true){
	$attach_for_mail=array();
	foreach($this->attach_array as $num =>$attachArr){
		foreach($attachArr as $filepath => $filename){
			if (PHP_OS == "WIN32" || PHP_OS == "WINNT") {
				// Windwos用の処理
				$attach_for_mail[]=array(mb_convert_encoding($filepath,"SJIS-win","AUTO"),mb_convert_encoding($filename,"SJIS-win","AUTO"));
			} else {
				// サーバ環境用の処理
				$attach_for_mail[]=array(mb_convert_encoding($filepath,'UTF-8',"AUTO"),mb_convert_encoding($filename,'UTF-8',"AUTO"));
			}
		}
	}
	$admin_mail->attach($attach_for_mail);//添付
}
//*end*//


/*
//--メールサーバー設定　必要ない場合はコメントアウト--//
$param = array(
	'host'=>'smtp.hogehoge.net',		//メールサーバー
	'port'=> 25 ,					//これはSMTPAuthの例。認証が必要ないなら　25　でＯＫ。SMTP_AUTHがが必要ならば587
	'from'=>'hoge@hogehoge86.net',		//　Return-path: になります。
	'protocol'=>'SMTP_AUTH',		// 認証が必要ないなら、'SMTP'　必要なら'SMTP_AUTH'
	'user'=>'@hogehoge86.net',	//SMTPサーバーのユーザーID
	'pass' => 'fugafuga',			//SMTPサーバーの認証パスワード
);
$admin_mail -> smtp(true);
$admin_mail -> smtpServer($param);
$user_mail -> smtp(true);
$user_mail -> smtpServer($param);
//--------------------end----------------------------//
*/



/*------------メール宛先----------*/
$str_admin_Email01 = 'norepy@l-faith.com'; //このアドレスからユーザーに届く 送信用メールアドレス
$str_admin_Email02 = 'saiyo@l-faith.com'; //管理者に届く 管理者用のメールアドレス
/*------------メール宛先 end----------*/


/*------------メール本文----------*/
$mail_body = '

◆ 基本情報

【 応募区分 】
'.$data["type"]["value"].'

【 お名前 】
'.$data["name"]["value"].'

【 フリガナ 】
'.$data["name_kana"]["value"].'

【 年齢 】
'.$data["age"]["value"].'

【 携帯番号 】
'.$data["tel"]["value"].'

【 メールアドレス 】
'.$data["mail"]["value"].'

【 希望職種 】
'.$data["job_type"]["value"].'

【 希望勤務地 】
'.$data["place"]["value"].'

【 希望勤務地 】
'.$data["place"]["value"].'

【 資格 】
'.$data["qualification"]["value"].'


◆ 最終学歴

【 最終学歴 】
'.$data["academic"]["value"].'

【 学校名 】
'.$data["school_name"]["value"];

// 任意入力
if( $data["faculty"]["value"] ){
	$mail_body .='

【 学部名 】
'.$data["faculty"]["value"];
}

$mail_body .='

【 卒業年度 】
'.$data["graduate"]["value"];

// 任意入力
if( $data["company"]["value"] || $data["employment_status"]["value"] || $data["period"]["value"] || $data["job_description"]["value"] || $data["company_2"]["value"] || $data["employment_status_2"]["value"] || $data["period_2"]["value"] || $data["job_description_2"]["value"] || $data["company_3"]["value"] || $data["employment_status_3"]["value"] || $data["period_3"]["value"] || $data["job_description_3"]["value"] || $data["body"]["value"] ){
	$mail_body .='


◆ 職務経歴';
}
// 任意入力
if( $data["company"]["value"] ){
	$mail_body .='

【 会社名（直近1社目） 】
'.$data["company"]["value"];
}
// 任意入力
if( $data["employment_status"]["value"] ){
	$mail_body .='

【 雇用形態（直近1社目） 】
'.$data["employment_status"]["value"];
}
// 任意入力
if( $data["period"]["value"] ){
	$mail_body .='

【 在籍期間（直近1社目） 】
'.$data["period"]["value"];
}
// 任意入力
if( $data["job_description"]["value"] ){
	$mail_body .='

【 職務内容（直近1社目） 】
'.$data["job_description"]["value"];
}

// 任意入力
if( $data["company_2"]["value"] ){
	$mail_body .='

【 会社名（直近2社目） 】
'.$data["company_2"]["value"];
}
// 任意入力
if( $data["employment_status_2"]["value"] ){
	$mail_body .='

【 雇用形態（直近2社目） 】
'.$data["employment_status_2"]["value"];
}
// 任意入力
if( $data["period_2"]["value"] ){
	$mail_body .='

【 在籍期間（直近2社目） 】
'.$data["period_2"]["value"];
}
// 任意入力
if( $data["job_description_2"]["value"] ){
	$mail_body .='

【 職務内容（直近2社目） 】
'.$data["job_description_2"]["value"];
}

// 任意入力
if( $data["company_3"]["value"] ){
	$mail_body .='

【 会社名（直近3社目） 】
'.$data["company_3"]["value"];
}
// 任意入力
if( $data["employment_status_3"]["value"] ){
	$mail_body .='

【 雇用形態（直近3社目） 】
'.$data["employment_status_3"]["value"];
}
// 任意入力
if( $data["period_3"]["value"] ){
	$mail_body .='

【 在籍期間（直近3社目） 】
'.$data["period_3"]["value"];
}
// 任意入力
if( $data["job_description_3"]["value"] ){
	$mail_body .='

【 職務内容（直近3社目） 】
'.$data["job_description_3"]["value"];
}

// 任意入力
if( $data["body"]["value"] ){
	$mail_body .='

【 その他（質問・PRなど） 】
'.$data["body"]["value"];
}
/*------------メール本文 end----------*/



$admin_mail_data = array(
/////////////////////管理者送信メール1//////////////////////////
array(
//管理者メールメールアドレス//
"from"=>$str_admin_Email01,
//送信先者メールアドレス
"to"=>$str_admin_Email02,
//件名
"subject"=>'【Webサイトよりエントリーを受け付けました。】',
//本文
"content"=>'

Webサイトより以下のメールをエントリー受け付けました。
' . $mail_body

),
///////////////////////////////////////////////////////////////
);


$usermailflg = empty($data["mail"]["value"]);
if($usermailflg==false){
$user_mail_data = array(
/////////////////////ユーザーへの自動返信メール1//////////////////////////
array(
//管理者メールメールアドレス
"from"=>$str_admin_Email01,
//入力者メールアドレス
"to"=>$data["mail"]["value"],
//件名
"subject"=>'エントリーを受け付けました。【リーガル・フェイスグループ】',
//本文
"content"=>'

'.$data["name"]["value"].' 様

<<本メールは、エントリーいただいた方へ自動的に送信しています。>>

この度は当社へエントリーいただき、ありがとうございます。
後日担当者より、改めてご返信させて頂きます。

ご返信には少しお時間がかかる場合がございます。
なお、お問い合わせいただきました時にご入力いただきましたお客様の個人情報は、
エントリー内容についての連絡用以外の目的には、使用いたしません。
また、同目的以外の利用、及び漏洩のないよう責任を持って注意・管理いたします。

'.$mail_body.'


***************************************************
リーガル・フェイスグループ
採用担当
saiyo@l-faith.com
03-5326-7550
***************************************************

'),
///////////////////////////////////////////////////////////////
);

}

$admin_mail->errorDisplay( false );//qdmailのエラーを非表示
$successflg=false;//送信失敗時にfalse
foreach($admin_mail_data as $key => $arr){
	//メール送信
	$admin_mail->from($arr["from"]);
	$admin_mail->to($arr["to"]);
	$admin_mail->subject($arr["subject"]);
	$admin_mail->text($arr["content"]);
	$successflg=$admin_mail->send();
	if($successflg===false)break;
}
if($successflg && $usermailflg==false){
	foreach($user_mail_data as $key => $arr){
		//メール送信
		$user_mail->from($arr["from"]);
		$user_mail->to($arr["to"]);
		$user_mail->subject($arr["subject"]);
		$user_mail->text($arr["content"]);
		$successflg=$user_mail->send();
		if($successflg===false)break;
	}
}
if($successflg===false){return false;}
elseif($successflg===true){return true;}


}
/*----------------------------end--------------------------------------------*/

}
?>