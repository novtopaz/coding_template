
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-33481511-1"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-33481511-1');
</script>

<!-- meta 開始 -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<script>
var tb_view = 'width=device-width, initial-scale=0.6';
if(navigator.userAgent.indexOf('iPad') > 0 || (navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') == -1) || navigator.userAgent.indexOf('A1_07') > 0 || navigator.userAgent.indexOf('SC-01C') > 0){
	document.querySelector('meta[name="viewport"]').setAttribute('content', tb_view);
}
</script>
<!-- meta 終了 -->

<!-- favicon 開始 -->
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/favicon.ico">
<?php /*
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/apple-touch-icon-180x180.jpg" sizes="180x180">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/android-chrome-192x192.jpg" sizes="192x192" type="image/png">
*/ ?>
<!-- favicon 終了 -->

<title><?php echo $title.'｜'.get_bloginfo('name'); ?></title>
<meta name="description"  content="<?php echo $description.'ページです。'.get_bloginfo('description'); ?>" />
<meta name="keywords" content="司法書士法人,不動産登記,リーガルフェイス,LegalFaith">
<link rel="canonical" href="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">

<!-- ページ共通のCSSファイル開始-->
<link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:400,500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,700&display=swap&subset=japanese" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/common/base.css?v=1" media="all">
<!-- ページ共通のCSSファイル 終了 -->

<!-- ページ固有のCSSファイル開始-->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/contact/contact.css?v=1" media="all">
<!-- ページ固有のCSSファイル終了-->
