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
$str_admin_Email01='iwatec.sunny@gmail.com'; //このアドレスからユーザーに届く 送信用メールアドレス
$str_admin_Email02='iwatec.sunny@gmail.com'; //管理者に届く 管理者用のメールアドレス
/*------------メール宛先 end----------*/


/*------------メール本文----------*/
// 返信メールお名前
$name = $data["name"]["value"];

// 本文
$mail_body = '

【 お問い合わせ区分  Inquiry category 】
'.$data["inquiry_category"]["value"].'

【 事業区分  Business category 】
'.$data["business_category"]["value"];

// 任意入力
if( $data["body"]["value"] ){
	$mail_body .='

【 お問い合わせ内容  Content of inquiry 】
'.$data["body"]["value"];
}

$mail_body .='

【 個人／法人　 Personal／Corporation 】
'.$data["customer"]["value"].'

【 氏名 Full name】
'.$data["name"]["value"].'

【 フリガナ】
'.$data["name_kana"]["value"];

// 任意入力
if( $data["company"]["value"] ){
	$mail_body .='

【 会社名 Company name 】
'.$data["company"]["value"];
}

// 任意入力
if( $data["department"]["value"] ){
	$mail_body .='

【 部署名／役職名 Department name／Title 】
'.$data["department"]["value"];
}

$mail_body .='

【 メールアドレス E-mail address 】
'.$data["mail"]["value"].'

【 電話番号　Phone number 】
'.$data["tel"]["value"];

/*------------メール本文 end----------*/



$admin_mail_data = array(
/////////////////////管理者送信メール1//////////////////////////
array(
//管理者メールメールアドレス//
"from"=>$str_admin_Email01,
//送信先者メールアドレス
"to"=>$str_admin_Email02,
//件名
"subject"=>'【お問い合わせフォームよりメールが来ました】',
//本文
"content"=>'

お問い合わせフォームより以下のメールを受付ました。
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
"subject"=>'お問い合わせありがとうございました。【株式会社イワテック】',
//本文
"content"=>'

------------------------------
お問い合わせありがとうございました。【株式会社イワテック】
Thank you for your inquiry.【IWATEC CORPORATION】
------------------------------

'.$name.' 様

<<本メールは、お問い合わせいただいた方へ自動的に送信しています。>>
<<This email is automatically sent to the person who made the inquiry.>>

このたびは、弊社へお問い合わせいただき誠にありがとうございます。
担当者より連絡させていただきますので、今しばらくお待ち願います。
Thank you very much for contacting us.
The person in charge will contact you, so please be patient.
'.$mail_body.'

＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
株式会社イワテック
〒850-0045
長崎県長崎市宝町7番5号 第2イワテックビル
TEL： 095-843-6448  /  FAX： 095-843-6447
営業時間： 9：00〜17：00　定休日：土・日・祝日

IWATEC CORPORATION
No.2 Iwatec Bldg., 7-5 Takara-machi, Nagasaki 850-0045, Japan
TEL：+81-95-843-6448  /  FAX： +81-95-843-6447
Business hours: 9:00 to 17:00 
Regular holiday: Saturdays, Sundays and holidays

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