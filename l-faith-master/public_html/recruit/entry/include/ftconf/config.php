<?php
//PHP5以上

class config{
/*--------------------フォーム内要素の各種設定---------------*/
public $charset='UTF-8';

public $error_page_path='error.php';//エラーページのパス

public $pravate_key=121; //秘密鍵

/*--ワンタイムチケット系設定--*/
public $ticketPath="./include/fttmp/ticket";//ワンタイムチケット用一時保存フォルダ ※ディレクトリのパーミッションは0770に設定してください
public $retentionPeriodOfTicket=259200;//3日//ワンタイムチケットの有効時間　単位：秒
/*-------end--------*/


/*--一時保存用設定--*/
public $uploadTempPath="./include/fttmp/upload";//アップロード用の一時ファイル保存先のディレクトリ名を格納（例：./include/fttmp/upload）※ディレクトリのパーミッションは0770に設定してください
public $retentionPeriodOfTempFiles=259200;//3日//アップロード用の一時ファイル保存先のディレクトリの保有時間　単位：秒
/*-------end--------*/

/*--一時保存ディレクトリファイル等の削除設定--*/
public $deleteTempFlg=true;//作成したワンタイムチケット、添付ファイル用一時ディレクトリ等を削除する場合はtrue。（パーミッション関係で削除の権利がない場合はfalseにする。その代わりテンポラリファイルが残り続ける）
/*-------end--------*/

/*--IDを連番で発行してログとして保存する処理用設定--*/
public $func=array(
	"idLog"=>array(//連番で第二引数のパスにログを残す機能。
		"switch"=>false,//true時に起動
		"path"=>"/var/hoge/form_log/seq.txt",//ログの保存先設定（例：/form_log/seq.txt）
	),
);
/*-------end--------*/


public $default = array(
	///////////入力画面1ページ目//////////
	"type"=>array(
		"type"=>"radio",
		"validation"=>array(
			"must"=>array(true),
		),
		"value"=>"",
	),
	"name"=>array(
		"type"=>"text",
		"validation"=>array(
			"must"=>array(true),
		),
		"value"=>"",
	),
	"name_kana"=>array(
		"type"=>"text",
		"validation"=>array(
			"must"=>array(true),
		),
		"value"=>"",
	),
	"age"=>array(
		"type"=>"text",
		"validation"=>array(
			"must"=>array(true),
		),
		"value"=>"",
	),
	"tel"=>array(
		"type"=>"text",
		"validation"=>array(
			"must"=>array(true),
		),
		"value"=>"",
	),
	"mail"=>array(
		"type"=>"text",
		"validation"=>array(
			"must"=>array(true),
		),
		"value"=>"",
	),
	"mail_con"=>array(
		"type"=>"text",
		"validation"=>array(
			"must"=>array(true),
		),
		"value"=>"",
	),
	"job_type"=>array(
		"type"=>"select",
		"validation"=>array(
			"must"=>array(true),
		),
		"value"=>"",
	),
	"place"=>array(
		"type"=>"select",
		"validation"=>array(
			"must"=>array(true),
		),
		"value"=>"",
	),
	"qualification"=>array(
		"type"=>"select",
		"validation"=>array(
			"must"=>array(true),
		),
		"value"=>"",
	),

	"academic"=>array(
		"type"=>"select",
		"validation"=>array(
			"must"=>array(true),
		),
		"value"=>"",
	),
	"school_name"=>array(
		"type"=>"text",
		"validation"=>array(
			"must"=>array(true),
		),
		"value"=>"",
	),
	"faculty"=>array(
		"type"=>"text",
		"validation"=>array(
			"must"=>array(false),
		),
		"value"=>"",
	),
	"graduate"=>array(
		"type"=>"select",
		"validation"=>array(
			"must"=>array(true),
		),
		"value"=>"",
	),

	"company"=>array(
		"type"=>"text",
		"validation"=>array(
			"must"=>array(false),
		),
		"value"=>"",
	),
	"employment_status"=>array(
		"type"=>"text",
		"validation"=>array(
			"must"=>array(false),
		),
		"value"=>"",
	),
	"period"=>array(
		"type"=>"text",
		"validation"=>array(
			"must"=>array(false),
		),
		"value"=>"",
	),
	"job_description"=>array(
		"type"=>"text",
		"validation"=>array(
			"must"=>array(false),
		),
		"value"=>"",
	),
	"company_2"=>array(
		"type"=>"text",
		"validation"=>array(
			"must"=>array(false),
		),
		"value"=>"",
	),
	"employment_status_2"=>array(
		"type"=>"text",
		"validation"=>array(
			"must"=>array(false),
		),
		"value"=>"",
	),
	"period_2"=>array(
		"type"=>"text",
		"validation"=>array(
			"must"=>array(false),
		),
		"value"=>"",
	),
	"job_description_2"=>array(
		"type"=>"text",
		"validation"=>array(
			"must"=>array(false),
		),
		"value"=>"",
	),
	"company_3"=>array(
		"type"=>"text",
		"validation"=>array(
			"must"=>array(false),
		),
		"value"=>"",
	),
	"employment_status_3"=>array(
		"type"=>"text",
		"validation"=>array(
			"must"=>array(false),
		),
		"value"=>"",
	),
	"period_3"=>array(
		"type"=>"text",
		"validation"=>array(
			"must"=>array(false),
		),
		"value"=>"",
	),
	"job_description_3"=>array(
		"type"=>"text",
		"validation"=>array(
			"must"=>array(false),
		),
		"value"=>"",
	),

	"body"=>array(
		"type"=>"textarea",
		"validation"=>array(
			"must"=>array(false),
		),
		"value"=>"",
	),
	"agree"=>array(
		"type"=>"checkbox",
		"validation"=>array(
			"must"=>array(true),
		),
		"value"=>"",
	),
	/////////end/////////////////
);
/*--------------------------------end------------------------------*/

}



?>