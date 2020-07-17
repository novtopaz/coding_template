<?php get_header(); ?>

<?php
	$post_type = get_post_type();
	if($post_type == 'news_en'){
		get_template_part('en/news/single');
	} else{
		get_template_part($post_type.'/single');
	}
?>
<?php get_footer(); ?>