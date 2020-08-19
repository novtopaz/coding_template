<?php get_header(); ?>
<?php get_template_part(get_post_type_object(get_post_type())->name.'/taxonomy'); ?>
<?php get_footer(); ?>