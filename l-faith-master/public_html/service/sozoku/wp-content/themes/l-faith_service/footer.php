</div><!-- l-pageBody -->

<?php if(is_page('seminar-entry') ):?>
	<?php get_template_part( '/include/simple_footer' ); // シンプルフッター ?>
<?php else :?>
	<?php get_template_part( '/include/global_footer' ); // フルフッター ?>
<?php endif; ?>


<?php wp_footer(); ?>
</body>
</html>