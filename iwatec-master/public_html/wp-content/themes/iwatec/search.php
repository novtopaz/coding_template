<?php get_header(); ?>

<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>
<div class="l-content">
	<div class="m-box">
		<h2 class="m-titleH2">検索結果</h2>
		
		<?php if ( have_posts() ) : ?>
			<?php 
				$query = get_search_query();
				echo '<p class="p-lead m-txt tac"><span>”'.$query.'”</span><br class="nopc">での検索結果は<span>' . $wp_query->found_posts . '件</span>です。</p>';
			?>

			<ul class="p-search-list">
			<?php while ( have_posts() ) : the_post(); ?>
				<li>
                    <p class="p-search-list-ttle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    <div>
	                    <?php the_excerpt();?>
                    </div>
                    <p class="p-search-list-link"><a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></p>
                </li>		
			<?php endwhile; ?>
			</ul>
			<?php m_page_navigation(); ?>


		<?php else : ?>
			<p class="m-txt mt30">表示する結果がありません。</p>

		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>