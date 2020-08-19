<?php get_header(); ?>
<?php
// 各固定ページをページ名ディレクトリにあるindex.phpへ遷移させる為の変数
$page = get_post(get_the_ID()); // 現在のページの情報を投稿IDから取得
$slug = $page->post_name; // 現在のページのスラッグを取得
$ancestors = get_post_ancestors($post->ID); // すべての先祖ページの投稿IDを配列で取得
$ancestors = array_reverse($ancestors); // 取得した先祖ページの投稿IDを逆順にする
$parent_slug = '';
foreach($ancestors as $ancestor){
    $parent_slug .= '/'.get_post($ancestor)->post_name; // 先祖ページのスラッグを取得
}
$link_slug = $parent_slug.'/'.$slug.'/index';
?>
<?php get_template_part($link_slug); ?>
<?php get_footer(); ?>