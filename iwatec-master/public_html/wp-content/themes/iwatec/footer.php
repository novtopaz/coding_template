<?php
	global $is_eng;
	$footer = $is_eng ? '/include/en/global_footer_en' : '/include/global_footer';
?>

<?php get_template_part( $footer ); // フッター ?>

<!-- ページ共通のJSファイル 開始 -->
<script src="<?php echo ASSETS_PATH; ?>/js/lib/jquery-1.12.4.js?v=1"></script>
<script src="<?php echo ASSETS_PATH; ?>/js/lib/jquery.matchHeight-min.js?v=1"></script>
<script src="<?php echo ASSETS_PATH; ?>/js/common/common.js?v=1"></script>
<!-- ページ共通のJSファイル 終了 -->

<!-- ページ固有のJSファイル開始-->
<?php global $js_slug; ?>

<?php if( file_exists(get_template_directory().$js_slug.'.js') ): ?>
<script src="<?php echo get_template_directory_uri().$js_slug.'.js?v=1'; ?>"></script>
<?php endif; ?>
<!-- ページ固有のJSファイル終了-->

<?php if(is_front_page() || is_page('en')) :?>
<script src="<?php echo ASSETS_PATH; ?>/js/lib/modernizr.custom.79639.js?v=1"></script>
<script src="<?php echo ASSETS_PATH; ?>/js/lib/jquery.slitslider.js?v=1"></script>
<script src="<?php echo ASSETS_PATH; ?>/js/lib/jquery.ba-cond.min.js?v=1"></script>
<?php endif ?>

<?php if(is_single()) :?>
<script src="<?php echo ASSETS_PATH; ?>/js/lib/jquery.fancybox.min.js?v=1"></script>
<div id="fb-root"></div>

<!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&amp;appId=190431734637612&amp;version=v4.0"></script> -->

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v5.0"></script>

<script id="twitter-wjs" src="//platform.twitter.com/widgets.js" async></script>
<?php endif; ?>


<?php wp_footer(); ?>
</body>
</html>