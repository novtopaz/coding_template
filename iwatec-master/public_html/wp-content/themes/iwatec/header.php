<?php get_template_part('config/config'); ?>
<!DOCTYPE html>
<?php
global $is_eng;
$lang = $is_eng ? 'en' : 'ja';
?>
<html lang="<?php echo $lang; ?>">
<head>

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
<?php get_template_part( '/include/seo_tdkc' ); // SEO（TDKC） ?>
<!-- SEO（TDKC） 終了 -->

<!-- ページ共通のCSSファイル 開始 -->
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,700&display=swap&subset=japanese" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Hammersmith+One&display=swap&subset=latin-ext" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_PATH; ?>/css/common/base.css?v=1" media="all">
<!-- ページ共通のCSSファイル 終了 -->

<!-- ページ固有のCSSファイル開始-->
<?php
	global $css_slug;
	global $is_eng;
?>

<?php  if( is_front_page() || is_page('en') ): // 【分岐】トップページ ?>
<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_PATH; ?>/css/lib/top_slider/demo.css?v=1" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_PATH; ?>/css/lib/top_slider/custom.css?v=1" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_PATH; ?>/css/lib/top_slider/style.css?v=1" media="all">
<?php endif; ?>

<?php if(is_single()) :?>
<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_PATH; ?>/css/lib/jquery.fancybox.min.css?v=1" media="all">
<?php endif; ?>

<?php if(is_search()) :?>
<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_PATH; ?>/css/search/search.css?v=1" media="all">
<?php endif; ?>

<?php if( file_exists(get_template_directory().$css_slug.'.css') ): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().$css_slug.'.css?v=1'; ?>" media="all">
<?php endif; ?>
<!-- ページ固有のCSSファイル終了-->

<?php wp_head(); ?>
</head>

<?php
	$is_eng_class = $is_eng ? 'is-eng' : '';
?>

<body id="pagetop" class="<?php echo $is_eng_class; ?>">
	<?php
		global $is_eng;
		$header = $is_eng ? '/include/en/global_header_en' : '/include/global_header';
	?>

	<?php get_template_part( $header ); // ヘッダー ?>