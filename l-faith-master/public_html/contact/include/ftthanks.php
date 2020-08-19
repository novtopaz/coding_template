<?php
//PHP5以上
echo'<script src="include/js/json2.js"></script>';

require_once('include/ftconf/config.php');
require_once('include/ftclasses/class-ftform.php');
require_once('include/ftclasses/class-ftupload.php');



$ob_config=new config();
$ob_thanks = new ftform($ob_config);

$ob_thanks->setData($ob_config->default);//各種input要素等の設定を適用



/*------遷移してきた時-----*/
if(isset($_POST["_FTDATA"]) && isset($_POST["_FTTICKET"])){
	
}else{
	echo('<meta http-equiv="refresh" content="0;URL=./">');
	exit();
}
/*-------end--------*/







/*---------------デバッグ用-------------*/
//$ob_thanks->echo_debug();//変数内容などをechoする

/*--------------end-----------------*/
?>
