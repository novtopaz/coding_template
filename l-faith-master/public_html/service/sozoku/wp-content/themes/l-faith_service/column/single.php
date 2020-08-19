<div class="m-mv">
	<p class="m-mv-img">
		<picture>
			<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/column/mv_pc.png">
			<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/column/mv_sp.png">
			<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/column/mv_pc.png" alt="士業コラム メインビジュアル">
		</picture>
	</p>
	<div class="m-mv-content">
		<div class="m-mv-title-cover">
			<span class="m-mv-sub">COLUMN</span>
			<h1 class="m-mv-title tac">リーガル・フェイスの<br>
			士業コラム</h1>
		</div>
	</div>
</div>
<!-- .l-topicPath -->
<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>
<!-- /.l-topicPath -->

<div class="l-content clearfix">
	<div class="p-content-left">
		<div class="p-single-cover">
			<?php if(have_posts() ) : ?>
			<?php while (have_posts() ) :the_post(); ?>
			<div class="p-single-intro clearfix">
				<p class="p-single-intro-img flL-pc">
					<?php $thumbnail = get_the_post_thumbnail(); ?>
					<?php if(!empty($thumbnail)) : ?>
						<?php the_post_thumbnail( 'full', array( 'alt' => get_the_title() ) );  ?>
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/img_default.png" alt="No Image">
					<?php endif; ?>
				</p>
				<div class="p-single-intro-content flR-pc">
					<div class="p-single-intro-content-info clearfix">
						<?php $terms = get_the_terms( get_the_ID(), 'column_tax' ); ?>
						<?php if(!empty($terms)) : ?>
						<?php foreach( $terms as $term ): ?>
							<?php $termLink = get_term_link( $term ); ?>
							<span class="m-tag fNotoR flL"><a class="imghover" href="<?php echo esc_url($termLink); ?>"><?php echo $term->name; ?></a></span>
						<?php endforeach; ?>
						<?php endif; ?>
						<p class="p-single-intro-content-info-date fNotoR flR"><?php echo get_post_time( 'Y.m.d' ); ?></p>
					</div>
					<h2 class="p-single-intro-content-title"><?php the_title(); ?></h2>
				</div>
			</div>
			<div class="p-single-content">
				<?php the_content(); ?>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
		<p class="btn btn-back"><a href="<?php echo home_url('/column/'); ?>"><span>一覧へ戻る</span></a></p>
	</div>

	<!-- .p-sidebar -->
	<?php get_template_part( '/include/sidebar_column' ); // サイドバー ?>
	<!-- /.p-sidebar -->
</div>
