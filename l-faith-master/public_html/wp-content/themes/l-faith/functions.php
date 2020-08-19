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


/*	Gutenbergにスタイルを適用
/*---------------------------------------------------------*/
add_action( 'after_setup_theme', 'nxw_setup_theme' );
function nxw_setup_theme() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'editor-style.css' );
}


/*	左メニューを非表示にする
/*---------------------------------------------------------*/
add_action('admin_menu', function () {
    remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');
});


/*	投稿スラッグ調整
/*---------------------------------------------------------*/
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
	if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) || $post_type == 'info' || $post_type == 'blog' ) {
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
function m_page_navigation() {
    global $wp_rewrite;
    global $wp_query;
    global $paged;
    $paginate_base = get_pagenum_link(1);
    if(($wp_query->max_num_pages) > 1) {
        if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
            $paginate_format = '';
            $paginate_base = add_query_arg('paged', '%#%');
        } else {
            $paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
                user_trailingslashit('page/%#%/', 'paged');
            $paginate_base .= '%_%';
        }
        $result = paginate_links( array(
            'base' => $paginate_base,
            'format' => $paginate_format,
            'total' => $wp_query->max_num_pages,
            'mid_size' => 2,
            'current' => ($paged ? $paged : 1),
            'prev_text' => '<',
            'next_text' => '>',
        ));
        echo '<div class="m-pager">'."\n".$result."</div>\n";
    }
}


/*	WordPressのおせっかいな404自動リダイレクトを止める
/*---------------------------------------------------------*/
add_filter('redirect_canonical', 'remove_redirect_guess_404_permalink', 10, 2);

function remove_redirect_guess_404_permalink($redirect_url, $requested_url) {
  if(is_404()) {
    return false;
  }
  return $redirect_url;
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


/*	TinyMCEがTableタグに「width」と「height」を勝手に設定する機能を無効にする
/*---------------------------------------------------------*/
function customize_tinymce_settings($mceInit) {
	global $post_type;
	if( $post_type === 'jobs' ){ // 募集要項
		$mceInit['table_resize_bars'] = false;
		$mceInit['object_resizing'] = "img";
	}
	return $mceInit;
}
add_filter( 'tiny_mce_before_init', 'customize_tinymce_settings' ,0);