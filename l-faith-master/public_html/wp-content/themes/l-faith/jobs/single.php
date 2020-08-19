<div class="l-pagebody">
	<div class="l-content">

		<div class="l-h1-wrap">
			<p class="l-h1"><?php echo get_post_type_object(get_post_type())->labels->name; ?></p>
			<p class="l-h1-sub">REQUIREMENTS</p>
		</div><!--l-h1-wrap-->

		<div class="l-main-contents">
			<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

			<?php if(have_posts()): while(have_posts()): the_post()?>
			<h1 class="m-mh01"><?php the_title(); ?></h1>
			<div class="m-table">
				<?php the_content(); ?>
			</div>
			<?php endwhile; endif ?>

			<?php get_template_part( '/include/cv_entry' ); // エントリーボックス ?>

			<div class="tac mt30 spmt70">
				<p class="m-back-btn"><a href="/recruit/jobs/"><span>募集要項一覧へ戻る</span></a></p>
			</div>
		</div><!--l-main-contents-->

	</div><!--l-content-->
</div><!-- l-pagebody -->