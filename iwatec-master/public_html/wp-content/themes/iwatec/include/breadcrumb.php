<?php
	$parent_id = $post->post_parent; // 親ページのIDを取得
	$parent_slug = get_post($parent_id)->post_name; // 親ページのスラッグを取得
	$parent_title = get_post($parent_id)->post_title; // 親ページのタイトルを取得
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

if(is_post_type_archive('news_en') || is_tax('news_en_tax')){
	$is_news_en = true;
}

$post_type_name = get_post_type_object(get_post_type())->name;
$rewrite_slug = get_post_type_object(get_post_type())->rewrite["slug"];
?>
<nav class="l-breadcrumbs">
	<ol itemscope itemtype="https://schema.org/BreadcrumbList">
		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<a class="l-breadcrumbs-home" itemprop="item" href="<?php echo home_url(); ?>/"><span itemprop="name">home</span></a>
			<meta itemprop="position" content="1" />
		</li>
	<?php if( is_post_type_archive() ): // 一覧ページ ?>
		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<span itemprop="name"><?php echo get_post_type_object(get_post_type())->labels->name; ?></span>
			<meta itemprop="position" content="2" />
		</li>
	<?php elseif( is_tax() ): // タクソノミーページ ?>
		<?php if($rewrite_slug != $post_type_name) :?>
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<a itemprop="item" href="<?php echo home_url(); ?>/<?php echo $rewrite_slug; ?>/"><span itemprop="name"><?php echo get_post_type_object(get_post_type())->labels->name; ?></span></a>
				<meta itemprop="position" content="2" />
			</li>
		<?php else: ?>
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<a itemprop="item" href="<?php echo home_url(); ?>/<?php echo $post_type_name; ?>/"><span itemprop="name"><?php echo get_post_type_object(get_post_type())->labels->name; ?></span></a>
				<meta itemprop="position" content="2" />
			</li>
		<?php endif; ?>
		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<span itemprop="name"><?php echo $tax_name; ?></span>
			<meta itemprop="position" content="3" />
		</li>
	<?php elseif( is_single() ): // 詳細ページ ?>
		<?php if( is_singular('○○') ): //taxonomyありなど ?>
		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<a itemprop="item" href="<?php echo home_url(); ?>/<?php echo $post_type_name; ?>/"><span itemprop="name"><?php echo get_post_type_object(get_post_type())->labels->name; ?></span></a>
			<meta itemprop="position" content="2" />
		</li>
		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<a itemprop="item" href="<?php echo $tax_slug; ?>"><span itemprop="name"><?php echo $tax_name; ?></span></a>
			<meta itemprop="position" content="3" />
		</li>
		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<span itemprop="name"><?php the_title(); ?></span>
			<meta itemprop="position" content="4" />
		</li>
		<?php else: ?>
		<?php if($rewrite_slug != $post_type_name) :?>
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<a itemprop="item" href="<?php echo home_url(); ?>/<?php echo $rewrite_slug; ?>/"><span itemprop="name"><?php echo get_post_type_object(get_post_type())->labels->name; ?></span></a>
				<meta itemprop="position" content="2" />
			</li>
		<?php else: ?>
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<a itemprop="item" href="<?php echo home_url(); ?>/<?php echo $post_type_name; ?>/"><span itemprop="name"><?php echo get_post_type_object(get_post_type())->labels->name; ?></span></a>
				<meta itemprop="position" content="2" />
			</li>
		<?php endif; ?>
		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<span itemprop="name"><?php the_title(); ?></span>
			<meta itemprop="position" content="3" />
		</li>
		<?php endif; ?>
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
	<?php elseif( is_search() ): // 検索ページ ?>
		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<span itemprop="name">検索結果</span>
			<meta itemprop="position" content="2" />
		</li>
	<?php else: // 固定ページ ?>
		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<span itemprop="name"><?php the_title(); ?></span>
			<meta itemprop="position" content="2" />
		</li>
	<?php endif; ?>
	</ol>
</nav><!--l-breadcrumbs-->