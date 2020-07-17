<?php get_header(); ?>
<?php
	$post_type = get_post_type_object(get_post_type())->name;
	if($post_type == 'news_en'){
		get_template_part('en/news/taxonomy');
	} else{
		get_template_part($post_type.'/taxonomy');
	}
?>
<?php get_footer(); ?>