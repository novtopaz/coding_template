<?php
$post_type_slug = get_post_type_object(get_post_type())->name;
$post_type_taxonomy = $post_type_slug.'_category';
?>

<?php
$terms_current = get_the_terms($post->ID, $post_type_taxonomy);
foreach( $terms_current as $term ) {
	$tax_slug_current = $term->slug;
	$tax_link_current = get_term_link($tax_slug_current, $post_type_taxonomy);
	$tax_name_current = $term->name;
	break;
}
?>

<div class="l-pagebody">
	<div class="l-content">

		<div class="l-h1-wrap">
			<p class="l-h1"><?php echo get_post_type_object(get_post_type())->labels->name; ?></p>
			<p class="l-h1-sub">BLOG</p>
		</div><!--l-h1-wrap-->

		<div class="l-main-contents">
			<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

			<div class="clearfix">
				<div class="p-article">
					<?php if(have_posts()): while(have_posts()): the_post()?>
					<div class="p-blog-top">
						<p class="p-date"><?php echo get_the_date('Y/m/d'); ?></p>
						<?php
						foreach($terms_current as $term):
						$term_link = get_term_link($term->slug, $post_type_taxonomy);
						$term_name = $term->name;
						?>
						<p class="p-cat"><a href="<?php echo $term_link; ?>"><?php echo $term_name; ?></a></p>
						<?php endforeach; ?>
					</div><!--/.p-new-top-->
					<h1 class="p-single-ttl"><?php the_title(); ?></h1>

					<!--内容-->
					<div class="m-single-content clearfix">
						<?php if( get_the_post_thumbnail() ): ?>
							<p class="tac mb20 spmb40"><?php echo get_the_post_thumbnail(); ?></p>
						<?php endif; ?>
						<?php the_content(); ?>
					</div><!--m-single-content-->

					<div class="tac">
						<p class="m-back-btn"><a href="/<?php echo $post_type_slug; ?>/"><span>スタッフブログへ戻る</span></a></p>
					</div>

					<?php endwhile; endif ?>
				</div><!--/.p-article-->

				<!--サイドメニュー-->
				<div class="p-sidebar">
					<h2 class="p-sidebar-title">カテゴリ</h2>
					<ul class="p-sidebar-list">
						<li><a href="/blog/">最新記事</a></li>
						<?php
						$args = array(
							'orderby' => 'count',
							'order' => 'DESC',
						);
						if( get_terms($post_type_taxonomy) ):
						foreach(get_terms($post_type_taxonomy, $args) as $term):
							$term_slug = $term->slug;
							$term_link = get_term_link($term_slug, $post_type_taxonomy);
							$term_name = $term->name;
							$term_count = $term->count;
						?>
						<li><a href="<?php echo $term_link; ?>"><?php echo $term_name; ?><span class="m-smaller">（<?php echo $term_count; ?>）</span></a></li>
						<?php endforeach; endif; ?>
					</ul>
				</div><!--p-sidebar-->
			</div><!--/.clearfix-->

		</div><!--l-main-contents-->
	</div><!--l-content-->
</div><!-- l-pagebody -->