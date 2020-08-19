<?php

/*	自動バックグラウンド更新を無効化する
/*---------------------------------------------------------*/
add_filter( 'automatic_updater_disabled', '__return_true' );


/*	アップデート通知を非表示にする
/*---------------------------------------------------------*/
function remove_update(){
    remove_action( 'admin_notices', 'update_nag', 3 );
    remove_action( 'admin_notices', 'maintenance_nag', 10 );
    remove_action( 'load-update-core.php', 'wp_update_plugins' );
    remove_action( 'load-update-core.php', 'wp_update_themes' );
}
add_action( 'admin_init', 'remove_update' );


/* 【外観】→【テーマの編集】を非表示にする
-------------------------------------------------------*/
function remove_submenus(){
    remove_submenu_page('themes.php','theme-editor.php');
}
add_filter('custom_menu_order', 'remove_submenus'); // Activate remove_submenus
add_filter('menu_order', 'remove_submenus');


/* 管理バーの項目を非表示にする
-------------------------------------------------------*/
function hide_admin_logo(){
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu( 'wp-logo' );            // ロゴ
    // $wp_admin_bar->remove_menu( 'site-name' );          // サイト名
    // $wp_admin_bar->remove_menu( 'view-site' );          // サイト名 -> サイトを表示
    // $wp_admin_bar->remove_menu( 'dashboard' );          // サイト名 -> ダッシュボード (公開側)
    $wp_admin_bar->remove_menu( 'themes' );             // サイト名 -> テーマ (公開側)
    $wp_admin_bar->remove_menu( 'widgets' );            // サイト名 -> ウィジェット (公開側)
    $wp_admin_bar->remove_menu( 'menus' );              // サイト名 -> メニュー (公開側)
    $wp_admin_bar->remove_menu( 'customize' );          // サイト名 -> カスタマイズ (公開側)
    // $wp_admin_bar->remove_menu( 'comments' );           // コメント
    $wp_admin_bar->remove_menu( 'updates' );            // 更新
    // $wp_admin_bar->remove_menu( 'view' );               // 投稿を表示
    $wp_admin_bar->remove_menu( 'new-content' );        // 新規
    $wp_admin_bar->remove_menu( 'new-post' );           // 新規 -> 投稿
    $wp_admin_bar->remove_menu( 'new-media' );          // 新規 -> メディア
    $wp_admin_bar->remove_menu( 'new-link' );           // 新規 -> リンク
    $wp_admin_bar->remove_menu( 'new-page' );           // 新規 -> 固定ページ
    $wp_admin_bar->remove_menu( 'new-user' );           // 新規 -> ユーザー
    // $wp_admin_bar->remove_menu( 'edit' );               // 編集
    // $wp_admin_bar->remove_menu( 'my-account' );         // マイアカウント
    // $wp_admin_bar->remove_menu( 'user-info' );          // マイアカウント -> プロフィール
    $wp_admin_bar->remove_menu( 'edit-profile' );       // マイアカウント -> プロフィール編集
    // $wp_admin_bar->remove_menu( 'logout' );             // マイアカウント -> ログアウト
    $wp_admin_bar->remove_menu( 'search' );             // 検索 (公開側)
}
add_action( 'wp_before_admin_bar_render', 'hide_admin_logo' );


/*	不要なウィジェット項目を非表示にする
/*---------------------------------------------------------*/
function unregister_default_widget() {
    unregister_widget('WP_Widget_Pages');            // 固定ページ
    //    unregister_widget('WP_Widget_Calendar');         // カレンダー
    unregister_widget('WP_Widget_Archives');         // アーカイブ
    unregister_widget('WP_Widget_Meta');             // メタ情報
    //    unregister_widget('WP_Widget_Search');           // 検索
    //    unregister_widget('WP_Widget_Text');             // テキスト
    //    unregister_widget('WP_Widget_Categories');       // カテゴリー
    //    unregister_widget('WP_Widget_Recent_Posts');     // 最近の投稿
    unregister_widget('WP_Widget_Recent_Comments');  // 最近のコメント
    //    unregister_widget('WP_Widget_RSS');              // RSS
    //    unregister_widget('WP_Widget_Tag_Cloud');        // タグクラウド
    //    unregister_widget('WP_Nav_Menu_Widget');         // カスタムメニュー
    unregister_widget( 'Akismet_Widget' );           // Akismetウィジェット
}
add_action( 'widgets_init', 'unregister_default_widget' );


/*	wp_head(); で自動的に出力される余分なタグを削除する
/*---------------------------------------------------------*/
//ブラウザが先読みするために使うタグ
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // 親投稿 link rel="up" [depricated]
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );  // ルートの親投稿 link rel="start" [depricated]
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // link rel="next" & link rel="prev"
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head'); // link rel=next,prev
//rel="canonical"の表示
remove_action('wp_head', 'rel_canonical');
//コメントのフィード
remove_action('wp_head', 'feed_links_extra', 3);
//現在の文書に対する索引（インデックス）を示すリンクタグ
remove_action('wp_head', 'index_rel_link');
//デフォルト形式のURL(?p=投稿ID)を明示するタグ
remove_action('wp_head', 'wp_shortlink_wp_head');
//EditURI
remove_action( 'wp_head', 'rsd_link' );
//wlwmanifest
remove_action( 'wp_head', 'wlwmanifest_link' );
//generator
remove_action( 'wp_head', 'wp_generator' );
//shortlink
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
//oEmbed関連
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );
//Emoji関連
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    // add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );


/*	レンダリングブロックしているJavascriptの読み込みを遅らせる
/*---------------------------------------------------------*/
function move_scripts_head_to_footer_ex(){
    //ヘッダーのスクリプトを取り除く
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);

    //フッターにスクリプトを移動する
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
}
add_action( 'wp_enqueue_scripts', 'move_scripts_head_to_footer_ex' );


/*	.svg 拡張子画像のアップロードを許可する
/*---------------------------------------------------------*/
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


/*	アイキャッチ設定でSVG画像のサムネイルを表示できるようにする
/*---------------------------------------------------------*/
function fix_svg_thumb_display() {
    echo '<style>
    td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail, #set-post-thumbnail img[src$=".svg"]{
    width: 100% !important;
    height: auto !important;
    }</style>';
}
add_action('admin_head', 'fix_svg_thumb_display');


/*	アイキャッチ画像を有効にする
/*---------------------------------------------------------*/
add_theme_support('post-thumbnails');


/*	デフォルトの投稿を消す（非表示にする）
/*---------------------------------------------------------*/
add_action('admin_menu', function () {
    remove_menu_page('edit.php');
});


/*	投稿記事のスラッグが日本語などマルチバイトの場合は、{投稿タイプ}-{記事ID}に強制的に変更
/*---------------------------------------------------------*/
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
    if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
        $slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
    }
    return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4  );


/*	投稿画面の見出しタグを制限する
/*---------------------------------------------------------*/
function custom_editor_settings($initArray){
    global $current_screen;
    switch ($current_screen->post_type){
        case 'page':
            $initArray['block_formats'] = 'Paragraph=p;Heading 3=h3;Heading 4=h4';
            break;
        case 'news':
            $initArray['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6';
            break;
    }
    return $initArray;
}
add_filter('tiny_mce_before_init', 'custom_editor_settings');


/*	ページナビゲーション
/*---------------------------------------------------------*/

function page_navigation() {
    global $wp_rewrite;
    global $wp_query;
    global $paged;
    $paginate_base = get_pagenum_link(1);
    if(($wp_query->max_num_pages) > 1) {
        $paginate_base = add_query_arg('pages', '%#%');
        $result = paginate_links( array(
            'base' => $paginate_base,
            'format' => '',
            'total' => $wp_query->max_num_pages,
            'mid_size' => 2,
            'current' => ($_GET['pages'] ? $_GET['pages'] : 1),
            'type' => 'list',
            'prev_next' => true,
            'prev_text' => __(''),
            'next_text' => __(''),
        ));
        echo "\n".$result."\n";
    }
}


add_filter('redirect_canonical', 'remove_redirect_guess_404_permalink', 10, 2);

function remove_redirect_guess_404_permalink($redirect_url, $requested_url) {
  if(is_404()) {
    return false;
  }
  return $redirect_url;
}

/*	カスタマイザー
/*---------------------------------------------------------*/
// カスタマイザーのデフォルトを非表示
add_action('customize_register', 'themename_customize_register');
function themename_customize_register($wp_customize) {
    //    $wp_customize->remove_section( 'title_tagline' );
    //    $wp_customize->remove_section( 'nav' );
    $wp_customize->remove_section( 'static_front_page' );
}




/*	【必要であれば追加する機能一覧】
/*---------------------------------------------------------*/

/*	【Custom Post Type Permalinks使用時】
/*---------------------------------------------------------*/
// パーマリンクの調整
function m_rewriterules($mypost, $myterm, $parents) {
    $newrules = array();
    if ( $myterm->parent == 0 ) {  //親タームがなかったら
        if (empty($parents)) {
            $newrules['archive'][$mypost . '/' . '(' . $myterm->slug . ')/?$'] = 'index.php?' . $myterm->taxonomy . '=$matches[1]';  //アーカイブページ用
            //$newrules['archive'][$mypost . '/' . '(' . $myterm->slug . ')/page/([0-9]+)/?$'] = 'index.php?' . $myterm->taxonomy . '=$matches[1]&paged=$matches[2]';   //2ページ以降用
            $newrules['single'][$mypost . '/' . $myterm->slug . '/([^/]+)/?$'] = 'index.php?' . $mypost . '=$matches[1]';
        } else {  //親があるターム用
            $newrules['single'][$mypost . '/'. $myterm->slug . '/' . implode('/', $parents) . '/([^/]+)/?$'] = 'index.php?' . $mypost . '=$matches[1]';  //singleページ用
            $parents[count($parents)-1] = '(' . $parents[count($parents)-1] . ')/';
            $newrules['archive'][$mypost . '/' . $myterm->slug . '/' . implode('/', $parents) . '?$'] = 'index.php?' . $myterm->taxonomy . '=$matches[1]';  //アーカイブページ用
            //$newrules['archive'][$mypost . '/' . $myterm->slug . '/' . implode('/', $parents) . 'page/([0-9]+)/?$'] = 'index.php?' . $myterm->taxonomy . '=$matches[1]&paged=$matches[2]';  //2ページ以降用
        }
    } else {  //親があったら
        $parentterm = get_term_by('id', $myterm->parent, $myterm->taxonomy);
        array_unshift($parents, $myterm->slug);
        $newrules = m_rewriterules($mypost, $parentterm, $parents);
    }
    return $newrules;
}

function m_rewriterules_option($rules) {  //引数：既に設定されているリライトルール
    $newrules = array();  $toriaezu = array();  $single = array();  $archive = array();
    $myposts = get_post_types(array('_builtin' => false));  //全カスタムタイプ取得②
    foreach($myposts as $mypost) {
        $mytaxonomies = get_taxonomies(array('object_type' => array($mypost))); //それのタクソノミー取得③
        foreach ($mytaxonomies as $mytaxonomie) {
            $myterms = get_terms( $mytaxonomie, array('hide_empty' => 0) ); //それのターム取得④
            foreach ($myterms as $myterm) {
                $toriaezu =  m_rewriterules($mypost, $myterm, array()); //リライトルール配列を生成
                $single += $toriaezu['single'];  //順番調整⑤
                $archive += $toriaezu['archive'];
            }
        }
    }
    return $archive + $single + $rules;  //新しいルールを追加して返す⑥
}
add_filter('rewrite_rules_array','m_rewriterules_option');


/* タクソノミーページの重複をさけるリダイレクト
-------------------------------------------------------*/
function redirect() {
    if(is_single()){
        $current_url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
        $page_url = get_the_permalink();
        if ($current_url == $page_url) {
        }
        else {
            wp_redirect($page_url , 301);
            exit;
        }
    }
}
add_action( 'wp', 'redirect' );



/* コメント（口コミ）カスタマイズ
-------------------------------------------------------*/
// テキストエリアを下に
function wp34731_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;

	return $fields;
}
add_filter( 'comment_form_fields', 'wp34731_move_comment_field_to_bottom' );

// 追加項目をデータベースに登録
// 年齢層
add_action( 'comment_post', 'save_comment_meta_data_age' );
function save_comment_meta_data_age( $comment_id ) {
$age = $_POST['age'];
return update_comment_meta( $comment_id, 'age', $age, true);
}
// 性別
add_action( 'comment_post', 'save_comment_meta_data_sex' );
function save_comment_meta_data_sex( $comment_id ) {
$sex = $_POST['sex'];
return update_comment_meta( $comment_id, 'sex', $sex, true);
}

// 追加項目を出力
// 年齢層
add_filter( 'get_comment_author_link', 'attach_age_to_author' );
function attach_age_to_author( $author ) {
	$ages = get_comment_meta( get_comment_ID(), 'age');
	if( $ages ){
		foreach($ages as $age)
			$author .= ' ' .$age;
	}
	return $author; //コメント者の後に続けて出力。
}
// 性別
add_filter( 'get_comment_author_link', 'attach_sex_to_author' );
function attach_sex_to_author( $author ) {
	$sexies = get_comment_meta( get_comment_ID(), 'sex');
	if( $sexies ){
		foreach($sexies as $sex)
			$author .= $sex;
	}
	return $author; //コメント者の後に続けて出力。
}

// コメントリスト カスタム
function mytheme_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li class="p-review-list-item" id="comment-<?php comment_ID() ?>">
		<div class="p-review-list-item-inner">
			<p class="p-review-list-item-info m-notosans-demi-light"><em><?php echo get_comment_date('M j , Y'); ?></em><span>by</span><?php echo get_comment_author_link(); ?></p>
			<div class="p-review-list-item-content m-notosans-demi-light"><?php comment_text() ?></div>
		</div>
<?php
}

// コメント送信後のURL
add_filter( 'comment_post_redirect', function( $location, $comment ) {
	$location = get_permalink( $comment->comment_post_ID ) . '#thanks';
	return $location;
}, 10, 2 );



/*	WordPress Popular Postsのカスタマイズ
/*---------------------------------------------------------*/
function my_custom_popular_html($mostpopular) { //集計がある場合の出力
?>
<?php $views = number_format(wpp_get_views($popular->id)); ?>
<?php
$post_type_slug = get_post_type_object(get_post_type())->name;
$post_type_taxonomy = $post_type_slug.'_category';
?>
<ul class="p-sidebar-list">
<?php $fav_cnt = 1; foreach( $mostpopular as $popular ): ?>
	
	<li class="p-sidebar-list-item">
		<a class="imghover clearfix" href="<?php echo get_the_permalink($popular->id); ?>">
            <div class="p-sidebar-list-item-img">
                <?php $thumbnail = get_the_post_thumbnail($popular->id); ?>
                <?php if(!empty($thumbnail)) : ?>
                    <?php echo get_the_post_thumbnail($popular->id, 'full', array( 'alt' => get_the_title($popular->id) )); ?>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/img_default.png" alt="No Image">
                <?php endif; ?>
                <div class="p-sidebar-list-item-tag">
                    <?php
                        $terms = get_the_terms( $popular->id, 'column_tax' );
                    ?>
                    <?php if(!empty($terms)) : ?>
                    <?php foreach( $terms as $term ): ?>
                        <span class="m-tag fNotoR"><?php echo $term->name; ?></span>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <p class="p-sidebar-list-item-txt"><?php echo get_the_title($popular->id) ?></p>
        </a>
	</li>
<?php
	$fav_cnt++;
	endforeach;
?>
</ul>

<?php
}
add_filter( 'wpp_custom_html', 'my_custom_popular_html', 10, 2 );


function my_custom_no_posts_found(){ //集計がない場合の出力
}
add_filter( 'wpp_no_data', 'my_custom_no_posts_found', 10, 1 );



/*	メディアアップロード 上限
/*---------------------------------------------------------*/
function my_filter_site_upload_size_limit( $size ) {
    $size = 1024 * 100000; // 上限を100MBに設定する
    return $size;
}
add_filter( 'upload_size_limit', 'my_filter_site_upload_size_limit', 20 );


/*	「新規カテゴリーを追加」と「よく使うもの」を非表示
/*---------------------------------------------------------*/
function hide_category_tabs_adder() {
  global $pagenow;
  global $post_type;
  if ( is_admin() && ($pagenow=='post-new.php' || $pagenow=='post.php') ) {
    echo '<style type="text/css">
    .category-tabs, .taxonomy-add-new {display:none;}
	#style_use_productsdiv h2.ui-sortable-handle:after{
	display: inline-block;
	content: "検索用に「Item」と同じ製品を選択してください。";
	font-size: smaller;
	font-weight: 400;
	margin-left: 10px;
	}
    </style>';
  }
}
add_action( 'admin_head', 'hide_category_tabs_adder' );

/*    Gutenbergにスタイルを適用
/*---------------------------------------------------------*/
add_action( 'after_setup_theme', 'nxw_setup_theme' );
function nxw_setup_theme() {
    add_theme_support( 'editor-styles' );
    add_editor_style( 'editor-style.css' );
}

// substr_replace マルチバイトカスタマイズ
function mb_substr_replace($str, $repl, $start, $length = null)
{
    preg_match_all('/./us', $str, $ar);
    preg_match_all('/./us', $repl, $rar);
    $length = is_int($length) ? $length : utf8_strlen($str);
    array_splice($ar[0], $start, $length, $rar[0]);
    return implode($ar[0]);
}


// CHECK IS_PAGE or IS_SUB_PAGE
function is_tree($page_slug) {
    global $post;
    $page = get_page_by_path($page_slug);
    $page_id = $page->ID;
    
    if(is_page() && ($post->post_parent==$page_id||is_page($page_id))){
       return true;   
    }
    else {
       return false;  
    }
};


?>