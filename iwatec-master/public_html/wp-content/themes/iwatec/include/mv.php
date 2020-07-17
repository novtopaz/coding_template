<?php
	global $is_eng;

	// テーマ外ページ（各フォーム）
	$form_slug = explode('/', $_SERVER['REQUEST_URI']);
	$form_slug = $form_slug[1];

	$is_form = false;
	if($form_slug == 'contact'){
		$is_form = true;
	}

	if($is_form){
		$slug = $form_slug;
	}
	// テーマ内ページ
	elseif(is_page()){
	    global $post;
	    $ancestors = get_post_ancestors( $post->ID );
	    $ancestors = array_reverse ( $ancestors );
	    foreach ( $ancestors as $ancestor ) {
	        $ancestor_slug = get_post($ancestor)->post_name;
	        
			$parent_slug .= $ancestor_slug.'/'; // 先祖ページのスラッグを取得
		}

	    $slug = $post->post_name;

	    if(!empty($parent_slug)){
	    	$slug = $parent_slug . $slug;
	    }
	} else{
		$slug = get_post_type_object(get_post_type())->name;
	}

	$mv_img = 'mv';
	$mv_extension = 'png';
	$mv_src = $slug;

	// 「en」削除
	if($is_eng){
		if(is_page()){
			$mv_src = substr($mv_src, 2);
		} else{
			$mv_src = str_replace('_en', '',$mv_src);
		}
	}

	$newLines = ['<br>', '<br class="nopc">', '<br class="nopc">'];
	foreach ($newLines as $newLine) {
		$mv_alt = str_replace($newLine, '', $mv_text['h1']);
	}

	// カスタム投稿の詳細ページの場合 -> h2
	$title_tag = is_single() ? 'h2' : 'h1';
?>

<div class="m-mv">
	<div class="m-mv-inner clearfix">
		<div class="m-mv-title-cover">
			<<?php echo $title_tag; ?> class="m-mv-title"><?php echo $mv_text['h1']; ?></<?php echo $title_tag; ?>>
			<?php if($mv_text['sub']) :?>
				<p class="m-mv-sub"><?php echo $mv_text['sub']; ?></p>
			<?php endif; ?>
		</div>
		<p class="m-mv-img">
			<?php echo getPicture($mv_img, $mv_extension, $mv_src, $mv_alt) ?>
		</p>
	</div>
</div>

