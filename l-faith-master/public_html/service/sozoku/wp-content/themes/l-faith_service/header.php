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

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHXLXLV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- meta 開始 -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- meta 終了 -->

<!-- favicon 開始 -->
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/apple-touch-icon-180x180.jpg" sizes="180x180">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/android-chrome-192x192.jpg" sizes="192x192" type="image/png">
<!-- favicon 終了 -->

<!-- SEO（TDKC） 開始 -->
<?php get_template_part( '/include/seo_tdkc' ); // SEO（TDKC） ?>
<!-- SEO（TDKC） 終了 -->

<?php if(is_tree('/about/diagnosis/')) :?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/assets/css/about/diagnosis/diagnosis.css?v=1'; ?>" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/assets/css/about/diagnosis/responsive.css?v=1'; ?>" media="all">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
<link href="//fonts.googleapis.com/css?family=Montserrat:300,400|Crimson+Text" rel="stylesheet">
<?php endif; ?>

<!-- ページ共通のCSSファイル 開始 -->
<link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:400,500,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/common/base.css?v=1" media="all">
<!-- ページ共通のCSSファイル 終了 -->


<!-- ページ共通のJSファイル 開始 -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/jquery-1.12.4.js?v=1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/jquery.easing.1.4.1.js?v=1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/jquery.matchHeight-min.js?v=1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common/common.js?v=1"></script>
<!-- ページ共通のJSファイル 終了 -->

<?php
// 【変数】ページ固有のCSS,JSファイル取得用
$page = get_post( get_the_ID() ); // 現在のページの情報を投稿IDから取得
$slug = $page->post_name; // 現在のページのスラッグを取得
$ancestors = get_post_ancestors( $post->ID ); // すべての先祖ページの投稿IDを配列で取得
$ancestors = array_reverse ( $ancestors ); // 取得した先祖ページの投稿IDを逆順にする
$parent_slug = '';
foreach ( $ancestors as $ancestor ) {
	$parent_slug .= '/'.get_post($ancestor)->post_name; // 先祖ページのスラッグを取得
}

// 【変数】現在ページの投稿タイプスラッグ取得用
if(is_post_type_archive()){
	// 一覧ページ用の記述
	$post_type = get_query_var('post_type');
	$post_type_meta = get_post_type_object($post_type);
	$post_type_slug = $post_type_meta->name;
}elseif(is_tax()){
	// カテゴリー一覧ページ用の記述
	$post_tax = get_query_var('taxonomy');
	$post_type_slug = get_taxonomy($post_tax)->object_type[0];
}elseif(is_single()){
	// 詳細ページ用の記述
	$post_type_slug = get_post_type();
}

// 【変数】ファイルパス取得用
if( is_404() ) {
	$css_slug = '/assets/css/404/404';
	$js_slug = '/assets/js/404/404';
} elseif( is_home() || is_front_page() ) {
	$css_slug = '/assets/css/top/top';
	$js_slug = '/assets/js/top/top';
} elseif( is_page() ) {
	$css_slug = '/assets/css'.$parent_slug.'/'.$slug.'/'.$slug;
	$js_slug = '/assets/js'.$parent_slug.'/'.$slug.'/'.$slug;
} elseif( is_post_type_archive() ) {
	$css_slug = '/assets/css/'.$post_type_slug.'/'.$post_type_slug;
	$js_slug = '/assets/js/'.$post_type_slug.'/'.$post_type_slug;
} elseif( is_tax() ) {
	$css_slug = '/assets/css/'.$post_type_slug.'/'.$post_type_slug.'_tax';
	$js_slug = '/assets/js/'.$post_type_slug.'/'.$post_type_slug.'_tax';
} elseif( is_single() ) {
	$css_slug = '/assets/css/'.$post_type_slug.'/'.$post_type_slug.'_single';
	$js_slug = '/assets/js/'.$post_type_slug.'/'.$post_type_slug.'_single';
}
?>

<?php if( is_post_type_archive($post_type_slug) || is_tax() || is_single() ): ?>
<!-- 投稿タイプの共通CSS開始 -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/assets/css/'.$post_type_slug.'/'.$post_type_slug.'.css?v=1'; ?>" media="all">
<!-- 投稿タイプの共通CSS終了 -->
<?php endif; ?>

<!-- ページ固有のCSSファイル開始-->
<?php if(is_front_page() || is_page('about') || is_page('omakase') || is_page('support')) :?>
<!-- slickスライダーを利用しているページ -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/assets/css/common/slick.css?v=1'; ?>" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/assets/css/common/slick-theme.css?v=1'; ?>" media="all">
<?php endif; ?>
<?php if(is_page('pricelist') || is_page('omakase')) :?>
<!-- スクロールHint -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/assets/css/lib/scroll-hint.css?v=1'; ?>" media="all">
<?php endif; ?>
<?php if( file_exists(get_template_directory().$css_slug.'.css') && !is_post_type_archive() &&
 !is_tree('/about/diagnosis/')): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().$css_slug.'.css?v=1'; ?>" media="all">
<?php endif; ?>

<?php if(is_front_page() || is_singular('voice')) :?>
<!-- fancyboxを利用しているページ -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/assets/css/top/jquery.fancybox.min.css?v=1'; ?>" media="all">
<?php endif; ?>
<!-- ページ固有のCSSファイル終了-->

<?php if( is_post_type_archive($post_type_slug) || is_tax() || is_single() ): ?>
<?php if( file_exists(get_template_directory().$js_slug.'.js') ): ?>
<script src="<?php echo get_template_directory_uri().'/assets/js/'.$post_type_slug.'/'.$post_type_slug.'.js?v=1'; ?>"></script>
<?php endif; ?>
<!-- 投稿タイプの共通JS終了 -->
<?php endif; ?>

<!-- ページ固有のJSファイル開始-->
<?php if(is_page('pricelist') || is_page('omakase')) :?>
<script src="<?php echo get_template_directory_uri().'/assets/js/lib/scroll-hint.min.js?v=1'; ?>"></script>
<?php endif; ?>
<?php if(is_front_page() || is_page('about') || is_page('omakase') || is_page('support')) :?>
<script src="<?php echo get_template_directory_uri().'/assets/js/common/slick.min.js?v=1'; ?>"></script>
<?php endif; ?>
<?php if( file_exists(get_template_directory().$js_slug.'.js') ): ?>
<script src="<?php echo get_template_directory_uri().$js_slug.'.js?v=1'; ?>"></script>
<?php endif; ?>
<!-- ページ固有のJSファイル終了-->

<?php if(is_front_page() || is_singular('voice')) :?>
<!-- fancyboxを利用しているページ -->
<script src="<?php echo get_template_directory_uri().'/assets/js/top/jquery.fancybox.min.js?v=1'; ?>"></script>
<?php endif; ?>

<?php wp_head(); ?>
</head>


<!-- CHECK IF is_page('diagnosis') or is_sub_page('diagnosis') -->
<?php if(is_tree('/about/diagnosis/')) :?>
<?php
	global $post;
    $post_slug = $post->post_name;
	$body_id = 'page-service-diagnosis';

    if ( (strpos($post_slug, 'question') !== false) OR (strpos($post_slug, 'answer') !== false))  {
    	$body_id = $body_id.'-'.$post_slug;
    }
?>

<body id="<?php echo $body_id; ?>">
<?php else :?>
<body id="pagetop">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PHXLXLV');</script>
<!-- End Google Tag Manager -->

<?php endif; ?>
	<?php if(is_page('seminar-entry') ):?>
		<?php get_template_part( '/include/simple_header' ); // シンプルヘッダー ?>
	<?php else :?>
		<?php get_template_part( '/include/global_header' ); // フルヘッダー ?>

	<?php endif; ?>



	<div class="l-pageBody">