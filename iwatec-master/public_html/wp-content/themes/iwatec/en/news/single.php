<?php
$mv_text = [
	'h1'=>'News',
];

set_query_var('mv_text', $mv_text);
get_template_part('include/mv');
?>

<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>


<div class="l-content">
	<div class="m-box">
		<?php
		$post_type_slug = get_post_type_object(get_post_type())->name;
		$post_type_taxonomy = $post_type_slug.'_tax';
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

		<?php if(have_posts()): while(have_posts()): the_post() ?>
		<span class="p-news-list-date"><?php the_date('Y.m.d'); ?></span>
		<?php
			$post_id = get_the_ID();
			$terms = get_the_terms($post_id, $post_type_taxonomy);
		?>
		<?php foreach($terms as $term) :?>
			<span class="p-news-list-tag"><?php echo $term->name; ?></span>
		<?php endforeach; ?>
		<h1 class="p-detail-title"><?php the_title(); ?></h1>

		<div class="m-single-content clearfix">
			<?php the_content(); ?>

			<?php
				$url = get_the_permalink();
				$title = get_the_title();
				get_social_buttons($url, $title);
			?>
		</div><!--m-single-content-->

		<?php endwhile; endif ?>

	</div>
</div>