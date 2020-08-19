<?php
$php_charset = 'utf-8';
header('content-type: text/html; charset='.$php_charset);
header("Expires: Thu, 01 Dec 1994 16:00:00 GMT");
header("Last-Modified: ". gmdate("D, d M Y H:i:s"). " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

define('WP_USE_THEMES', true);

require_once($_SERVER['DOCUMENT_ROOT'] . '/service/sozoku/wp-load.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-33481511-1"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-33481511-1');
</script>

<?php require_once('include/ftthanks.php'); //完了ページ ?>


<!-- meta 開始 -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">

<title>お問い合わせ｜相続手続き・生前対策のトータルサポートなら司法書士法人リーガル・フェイス</title>
<meta name="description" content="お問い合わせページです。相続手続きや生前対策のご相談は司法書士法人リーガル・フェイスへおまかせください。専門家が50名以上在籍しており国内最大級。新宿、名古屋、大阪、福岡でご相談でき、新宿駅からは徒歩3分でアクセス可能です。複雑な相続も丁寧にサポート致します。">
<meta name="keywords" content="">
<link rel="canonical" href="https://www.l-faith.com/service/sozoku/contact/">

<!-- meta 終了 -->

<!-- favicon 開始 -->
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/apple-touch-icon-180x180.jpg" sizes="180x180">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/android-chrome-192x192.jpg" sizes="192x192" type="image/png">

<!-- ページ共通のCSSファイル 開始 -->
<link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:400,500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/common/base.css?v=1" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/contact/contact.css?v=1" media="all">

<!-- ページ共通のJSファイル 開始 -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/jquery-1.12.4.js?v=1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/jquery.easing.1.4.1.js?v=1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/jquery.matchHeight-min.js?v=1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common/common.js?v=1"></script>
<!-- ページ共通のJSファイル 終了 -->

</head>
<body id="pagetop">
<?php get_template_part( '/include/simple_header' ); // シンプルヘッダー ?>
<div class="m-mv">
	<p class="m-mv-img">
		<picture>
			<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/contact/mv_pc.png">
			<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/contact/mv_sp.png">
			<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/mv_pc.png" alt="お問い合わせ メインビジュアル">
		</picture>
	</p>
	<div class="m-mv-content">
		<div class="m-mv-title-cover">
			<span class="m-mv-sub">CONTACT</span>
			<h1 class="m-mv-title tac">お問い合わせ</h1>
		</div>
	</div>
</div>

<div class="l-content">
	<p class="m-txt">具体的なご相談をされたい方からサービスや費用についてもっと詳しく話を聞いてみたい方、資料請求のみご希望の方までこちらのお問い合せフォームからお気軽にお問い合せください。またお急ぎのお客様にはお電話でも対応しております。</p>

	<p class="p-tel">
		<a href="tel:0120-800-370">
			<picture class="is-tel">
				<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/contact/img_tel_pc.png">
				<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/contact/img_tel_sp.png">
				<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/img_tel_pc.png" alt="お問い合わせ メインビジュアル">
			</picture>
		</a>
	</p>

	<ul class="p-listStatus clearfix">
		<li class="is-matchHeightSP"><span>01</span><br class="nopc"><em>フォームへの<br class="nopc">ご入力</em></li>
		<li class="p-listStatus-grey is-matchHeightSP"><span>02</span><br class="nopc">入力内容確認</li>
		<li class="is-current is-matchHeightSP"><span>03</span><br class="nopc">送信完了</li>
	</ul>


	<div class="p-thanks-box">
		<p class="p-thanks-box-txt">お問い合わせいただいた内容につきまして、<br class="nosp">			後ほど担当者からご連絡いたします。<br>
		お問い合わせいただきありがとうございました。</p>
		<p class="p-thanks-box-btn btn btn-ghost"><a href="<?php echo home_url('/'); ?>"><span>TOPページへ戻る</span></a></p>
	</div>
</div>


<?php get_template_part( '/include/simple_footer' ); // シンプルフッター ?>
<?php wp_footer(); ?>
</body>
</html>