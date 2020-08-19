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
			<p class="l-h1-sub">INFO</p>
		</div><!--l-h1-wrap-->

		<div class="l-main-contents">
			<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

			<?php if(have_posts()): while(have_posts()): the_post()?>
			<div class="p-new-content pt0 mb40 spmb40">
				<div class="p-new-top">
					<p class="p-top-text"><?php echo get_the_date('Y/m/d'); ?></p>
					<?php
					foreach($terms_current as $term):
					$term_link = get_term_link($term->slug, $post_type_taxonomy);
					$term_name = $term->name;
					?>
					<p class="p-top-text"><a href="<?php echo $term_link; ?>"><?php echo $term_name; ?></a></p>
					<?php endforeach; ?>
				</div><!--/.p-new-top-->
				<h1 class="p-new-text p-content-title"><?php the_title(); ?></h1>
			</div><!--/.p-new-content-->

			<!--内容-->
			<div class="m-single-content clearfix">
				<?php the_content(); ?>
			</div><!--m-single-content-->

			<?php endwhile; endif ?>

			<div class="tac">
				<p class="m-back-btn"><a href="/<?php echo $post_type_slug; ?>/"><span>ニュース一覧へ戻る</span></a></p>
			</div>
		</div><!--l-main-contents-->
	</div><!--l-content-->
</div><!-- l-pagebody -->