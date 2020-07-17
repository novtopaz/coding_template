<?php
	$parent_id = $post->post_parent; // 親ページのIDを取得
	$parent_slug = get_post($parent_id)->post_name; // 親ページのスラッグを取得
	$parent_title = get_post($parent_id)->post_title; // 親ページのタイトルを取得

	$post_type_slug = get_post_type_object(get_post_type())->name; // 投稿タイプスラッグ
	$post_type_name = get_post_type_object(get_post_type())->labels->name; // 投稿タイプ名
	$post_type_taxonomy = $post_type_slug.'_tax'; // タクソノミースラッグ

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

	$title_default = '株式会社イワテックは再生可能エネルギーを中心とした総合クリーンエネルギー企業です。';

	// タイトル
	if( is_404() ){
		$title = 'お探しのページは見つかりません。｜'.get_bloginfo('name');
	} elseif( is_home() || is_front_page() ) {
		$title = get_bloginfo('name');
	} elseif( is_page() && $parent_id ){
		$title = trim(wp_title('', false)).'｜'.$parent_title.'｜'.$title_default;
	} elseif( is_post_type_archive() ){
		if(is_paged()){
			$paged = (get_query_var('paged'));
			$paged_info = $paged . 'ページ目｜';
		}
		$title = $paged_info.$post_type_name.'｜'.$title_default;
	} elseif( is_tax() ){
		if(is_paged()){
			$paged = (get_query_var('paged'));
			$paged_info = $paged . 'ページ目｜';
		}
		$title = $paged_info.$tax_name_current.'｜'.$post_type_name.'｜'.$title_default;
	} elseif( is_single() ){
		$title = trim(wp_title('', false)).'｜'.$post_type_name.'｜'.$title_default;
	} else {
		$title = trim(wp_title('', false)).'｜'.$title_default;
	}

	// ディスクリプション
	if( is_404() ){
		$description = '404エラーページです。';
	} elseif( is_post_type_archive() ){
		// $description = esc_attr(get_queried_object()->description); // cptuiの投稿タイプの説明から
		if(is_paged()){
			// ページネーションページ
			$paged = (get_query_var('paged'));
			$description = $post_type_name.$paged.'ページ目です。'.get_bloginfo('description');
		}
		else{
			$description = $post_type_name.'ページです。'.get_bloginfo('description');
		}
	} elseif( is_tax() ){
		// $description = strip_tags( term_description( $tax_id_current, $post_type_taxonomy ) ); // termの説明から
		if(is_paged()){
			// ページネーションページ
			$paged = (get_query_var('paged'));
			$description = $tax_name_current.$post_type_name.$paged.'ページ目です。'.get_bloginfo('description');
		}
		else{
			$description = $tax_name_current.$post_type_name.'ページです。'.get_bloginfo('description');
		}
	} elseif( is_home() || is_front_page() ) {
		$description = get_bloginfo('description'); // 設定→一般のキャッチフレーズから
	} elseif( !empty($seo_description) ){
		$description = $seo_description;
	} else {
		$description = get_the_title().'ページです。'.get_bloginfo('description'); // 設定→一般のキャッチフレーズから
	}

	// カノニカルURL
	if( is_page() || is_single() ) {
		$canonical_url = get_permalink();
	} elseif( is_post_type_archive() ){
		$canonical_url = get_post_type_archive_link( $post_type_slug );
	} elseif( is_tax() ){
		$canonical_url = get_term_link( $tax_slug_current, $post_type_taxonomy );
	} elseif( is_front_page() ){
		$canonical_url = home_url();
	} else {
		$canonical_url = '';
	}
?>
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">
<meta name="keywords" content="">
<?php if($canonical_url): ?>
<link rel="canonical" href="<?php echo $canonical_url; ?>">
<?php endif; ?>
