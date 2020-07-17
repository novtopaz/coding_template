<?php get_header(); ?>
<?php
	$post_type = get_query_var('post_type');
	if($post_type == 'news_en'){
		get_template_part('en/news/index');
	} else{
		get_template_part($post_type.'/index');
	}
?>
<?php get_footer(); ?>