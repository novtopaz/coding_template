<?php
	$parent_id = $post->post_parent; // 親ページのIDを取得
	$parent_slug = get_post($parent_id)->post_name; // 親ページのスラッグを取得
	$parent_title = get_post($parent_id)->post_title; // 親ページのタイトルを取得

	$post_type_slug = get_post_type_object(get_post_type())->name; // 投稿タイプスラッグ
	$post_type_name = get_post_type_object(get_post_type())->labels->name; // 投稿タイプ名
	$post_type_taxonomy = $post_type_slug.'_tax'; // タクソノミースラッグ

	// $term = get_query_var('taxonomy');
	// $tax = get_taxonomy( $term );
	// $post_type = $tax->object_type[0];


	$terms_current = get_the_terms($post->ID, $post_type_taxonomy);
	if($terms_current){
		foreach( $terms_current as $term ) {
			$tax_id_current = $term->term_id; // 現在のタームスラッグ
			$tax_slug_current = $term->slug; // 現在のタームスラッグ
			$tax_name_current = $term->name; // 現在のターム名
			break;
		}
	}

	$seo_description = get_post_meta($post->ID, 'seo_description', true); // ディスクリプション カスタムフィールド

	// タイトル
	if( is_404() ){
		$title = 'お探しのページは見つかりません。｜'.get_bloginfo('name');
	} elseif( is_home() || is_front_page() ) {
		$title = get_bloginfo('name');
	} elseif( is_page() && $parent_id ){
		$title = trim(wp_title('', false)).'｜'.$parent_title.'｜'.get_bloginfo('name');
	} elseif( is_post_type_archive() ){
		$title = $post_type_name.'｜'.get_bloginfo('name');
	} elseif( is_tax() ){
		$title = $tax_name_current.'｜'.$post_type_name.'｜'.get_bloginfo('name');
	} elseif( is_single() ){
		$title = trim(wp_title('', false)).'｜'.$post_type_name.'｜'.get_bloginfo('name');
	} else {
		$title = trim(wp_title('', false)).'｜'.get_bloginfo('name');
	}

	// ディスクリプション
	if( is_404() ){
		$description = '404エラーページです。';
	} elseif( is_post_type_archive() ){
		$description = esc_attr(get_queried_object()->description).get_bloginfo('description'); // cptuiの投稿タイプの説明から
	} elseif( is_tax() ){
			$description = strip_tags( term_description( $tax_id_current, $post_type_taxonomy ) ); // termの説明から
	} elseif( is_singular() ){
		$description = get_the_title().'ページです。'.get_bloginfo('description');
	} elseif( !empty($seo_description) ){
		$description = $seo_description;
	} else {
		$description = get_bloginfo('description'); // 設定→一般のキャッチフレーズから
	}

	// カノニカルURL
	if( is_page() || is_single() ) {
		$canonical_url = get_permalink();
	} elseif( is_post_type_archive() ){
		$canonical_url = get_post_type_archive_link( $post_type_slug );
	} elseif( is_tax() ){
		$canonical_url = get_term_link( $tax_slug_current, $post_type_taxonomy );
	} elseif( is_404() ){
		$canonical_url = home_url('/404/');
	} else {
		$canonical_url = home_url();
	}

?>
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">
<meta name="keywords" content="相続,相続手続,生前対策,遺言,司法書士法人,リーガル・フェイス">
<link rel="canonical" href="<?php echo $canonical_url; ?>">
