<?php
$php_charset = 'utf-8';
header('content-type: text/html; charset='.$php_charset);
header("Expires: Thu, 01 Dec 1994 16:00:00 GMT");
header("Last-Modified: ". gmdate("D, d M Y H:i:s"). " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');

get_template_part('config/config');

?>
<!DOCTYPE html>
<html lang="ja">
<head>

<?php require_once('include/ftthanks.php'); //form 完了ページ ?>
<?php
	$title = '完了｜お問い合わせ';
	$description = 'お問い合わせ完了';
	require_once(get_template_directory() .'/include/form/form_common_head.php'); //共通head ?>

<!-- ページ固有のCSSファイル開始-->
<link rel="stylesheet" type="text/css" href="/assets/css/contact/contact.css" media="all">
<!-- ページ固有のCSSファイル終了-->
</head>

<body id="pagetop">

	<?php get_template_part('/include/form/form_header');?>

	<?php
	$mv_text = [
		'h1'=>'お問い合わせ',
		'sub'=>'CONTRACT',
	];

	set_query_var('mv_text', $mv_text);
	get_template_part('include/mv');
	?>
	</div>

	<div class="l-content">

		<ul class="p-step-type01">
			<li class="p-step02">
				<span>01</span>フォームへの<br class="nopc">ご入力<br>
				Form Entry
			</li>
			<li class="p-step03">
				<span>02</span>入力内容確認<br>
				Entry Verification
			</li>
			<li class="p-step04">
				<span>03</span>送信完了<br>
				Submit
			</li>
		</ul>

		<div class="p-thanks-box">
			<p class="p-thanks-title">お問い合わせ内容の送信が完了しました。<br>
			Submission completed</p>
			<p class="p-thanks-txt fwm">お問い合わせいただきありがとうございます。<br>
				<br>
				お問い合わせ内容を確認の上、<br class="nopc">折り返しご連絡いたします。<br>
				ご記入いただきましたメールアドレス宛に、<br>
				確認メールをお送りしておりますので<br class="nopc">ご確認ください。<br>
				<br>
				※ご回答につきましては内容により<br class="nopc">数日お時間をいただく場合がございます。<br>
				予めご了承下さい。
			</p>
			<br><br>
			
			<p class="p-thanks-txt fwn">Thank you for your inquiry.<br>
				<br>
				We will contact you after confirming your inquiry.<br>
				A confirmation e-mail will be sent to the e-mail address you entered.<br>
				<br>
				* To be forewarned, it may take several days to respond depending on the content.
			</p>

			<p class="p-thanks-btn"><a href="/">TOPページへ戻る<br>
			Back to page</a></p>
		</div>

	</div><!--l-content-->
<?php get_template_part('/include/form/form_footer');?>
</body>
</html>