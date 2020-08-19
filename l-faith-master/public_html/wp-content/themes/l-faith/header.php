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

<!-- meta 開始 -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- meta 終了 -->

<!-- favicon 開始 -->
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/favicon.ico">
<?php /*
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/apple-touch-icon-180x180.jpg" sizes="180x180">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/android-chrome-192x192.jpg" sizes="192x192" type="image/png">
*/ ?>
<!-- favicon 終了 -->

<!-- SEO（TDKC） 開始 -->
<?php get_template_part( '/include/seo_tdkc' ); // SEO（TDKC） ?>
<!-- SEO（TDKC） 終了 -->

<!-- ページ共通のCSSファイル 開始 -->
<link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:400,500" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,700&display=swap&subset=japanese" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/common/base.css?v=2" media="all">
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
} elseif( is_post_type_archive() || is_tax() || is_single() ) {
	$css_slug = '/assets/css/'.$post_type_slug.'/'.$post_type_slug;
	$js_slug = '/assets/js/'.$post_type_slug.'/'.$post_type_slug;
}
?>

<!-- ページ固有のCSSファイル開始-->
<?php if( file_exists(get_template_directory().$css_slug.'.css') ): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().$css_slug.'.css?v=2'; ?>" media="all">
<?php endif; ?>
<!-- ページ固有のCSSファイル終了-->

<!-- ページ固有のJSファイル開始-->
<?php if( is_front_page() || is_page('about') ): // 【分岐】トップページ・リーガル・フェイスを知る ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/slick.min.js?v=1"></script>
<?php endif; ?>
<?php if( is_singular('staff') ): // 【分岐】スタッフ紹介詳細ページ ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/slick.min.js?v=1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/staff/staff_single.js?v=1"></script>
<?php endif; ?>
<?php if( file_exists(get_template_directory().$js_slug.'.js') ): ?>
<script src="<?php echo get_template_directory_uri().$js_slug.'.js?v=1'; ?>"></script>
<?php endif; ?>
<!-- ページ固有のJSファイル終了-->

<?php wp_head(); ?>
</head>

<body id="pagetop">

	<?php get_template_part( '/include/global_header' ); // ヘッダー ?>