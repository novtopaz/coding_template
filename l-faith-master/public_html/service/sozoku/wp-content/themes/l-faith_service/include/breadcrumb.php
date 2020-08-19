<?php
	$parent_id = $post->post_parent; // 親ページのIDを取得
	$parent_slug = get_post($parent_id)->post_name; // 親ページのスラッグを取得
	$parent_title = get_post($parent_id)->post_title; // 親ページのタイトルを取得

	$parent_page = get_post($parent_id);

	$grand_parent_id = $parent_page->post_parent; // 祖父ページのIDを取得
	$grand_parent_slug = get_post($grand_parent_id)->post_name; // 祖父ページのスラッグを取得
	$grand_parent_title = get_post($grand_parent_id)->post_title; // 祖父ページのタイトルを取得
?>
<?php
$terms = get_the_terms($post->ID, get_post_type_object(get_post_type())->name.'_tax');
if($terms){
	foreach( $terms as $term ) {
		$tax_slug = get_term_link($term->slug, get_post_type_object(get_post_type())->name.'_tax');
		$tax_name = $term->name;
		break;
	}
}
?>
<div class="l-content">
	<nav class="l-topicPath clearfix">
		<ol itemscope itemtype="https://schema.org/BreadcrumbList">
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<a itemprop="item" href="<?php echo home_url(); ?>/"><span itemprop="name">トップ</span></a>
				<meta itemprop="position" content="1" />
			</li>
		<?php if( is_archive() ): // 一覧ページ ?>
			<?php if( is_tax() ): // タクソノミーページ ?>
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<a itemprop="item" href="<?php echo home_url(); ?>/<?php echo get_post_type_object(get_post_type())->name; ?>/"><span itemprop="name"><?php echo get_post_type_object(get_post_type())->labels->name; ?></span></a>
				<meta itemprop="position" content="2" />
			</li>
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<span itemprop="name"><?php echo $tax_name; ?></span>
				<meta itemprop="position" content="3" />
			</li>

			<?php else: ?>
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<span itemprop="name"><?php echo get_post_type_object(get_post_type())->labels->name; ?></span>
				<meta itemprop="position" content="2" />
			</li>
			<?php endif; ?>
		<?php elseif( is_single() ): // 詳細ページ ?>
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<a itemprop="item" href="<?php echo home_url(); ?>/<?php echo get_post_type_object(get_post_type())->name; ?>/"><span itemprop="name"><?php echo get_post_type_object(get_post_type())->labels->name; ?></span></a>
				<meta itemprop="position" content="2" />
			</li>
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<span itemprop="name"><?php the_title(); ?></span>
				<meta itemprop="position" content="3" />
			</li>
		<?php elseif( !is_page('diagnosis') && is_tree('/about/diagnosis/') ): // 最適プラン診断ページの場合 ?>
		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<a itemprop="item fuck" href="<?php echo get_permalink($grand_parent_id); ?>"><span itemprop="name"><?php echo $grand_parent_title; ?></span></a>
			<meta itemprop="position" content="2" />
		</li>
		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<span itemprop="name"><?php echo $parent_title; ?></span>
			<meta itemprop="position" content="3" />
		</li>
		<?php elseif( is_page() && $parent_id ): // 固定ページ 親 ?>
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<a itemprop="item" href="<?php echo get_permalink($parent_id); ?>"><span itemprop="name"><?php echo $parent_title; ?></span></a>
				<meta itemprop="position" content="2" />
			</li>
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<span itemprop="name"><?php the_title(); ?></span>
				<meta itemprop="position" content="3" />
			</li>
		<?php elseif( is_404() ): // 404ページ ?>
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<span itemprop="name">404エラー</span>
				<meta itemprop="position" content="2" />
			</li>
		<?php else: // 固定ページ ?>
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<span itemprop="name"><?php the_title(); ?></span>
				<meta itemprop="position" content="2" />
			</li>
		<?php endif; ?>
		</ol>
	</nav><!--l-topicPath-->
</div><!--m-container-->