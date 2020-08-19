<div class="m-mv">
	<p class="m-mv-img">
		<picture>
			<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/info/mv_pc.png">
			<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/info/mv_sp.png">
			<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/info/mv_pc.png" alt="お知らせ メインビジュアル">
		</picture>
	</p>
	<div class="m-mv-content">
		<div class="m-mv-title-cover">
			<span class="m-mv-sub">NEWS</span>
			<h1 class="m-mv-title tac">お知らせ</h1>
		</div>
	</div>
</div>
<!-- .l-topicPath -->
<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>
<!-- /.l-topicPath -->

<div class="l-content">
	<?php if(have_posts() ) : ?>
	<?php while (have_posts() ) :the_post(); ?>
	<div class="p-single-titleH1-cover">
		<h1 class="p-single-titleH1"><?php the_title(); ?></h1>
		<p class="p-single-date"><?php the_time('Y/m/d'); ?></p>
	</div>

	<div class="p-single-content">
		<?php the_content(); ?>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
	<p class="btn btn-back"><a href="<?php echo home_url('/info/'); ?>"><span>一覧へ戻る</span></a></p>
</div>