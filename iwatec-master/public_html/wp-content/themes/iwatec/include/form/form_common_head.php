<?php get_template_part('include/ga_tag') ?>

<!-- meta 開始 -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="<?php echo ASSETS_PATH; ?>/js/common/viewport.js?v=1"></script>
<!-- meta 終了 -->

<?php get_template_part('include/favicon') ?>

<!-- SEO（TDKC） 開始 -->
<title><?php echo $title .' ｜'. get_bloginfo( 'name' ); ?></title>
<meta name="description"  content="<?php echo $description .'｜'. get_bloginfo( 'description' );?>">
<link rel="canonical" href="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
<!-- SEO（TDKC） 終了 -->

<!-- ページ共通のCSSファイル 開始 -->
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,700&display=swap&subset=japanese" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/common/base.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/contact/contact.css" media="all">
<!-- ページ共通のCSSファイル 終了 -->


