<?php
$post_type_slug = get_post_type_object(get_post_type())->name;
$post_type_taxonomy = $post_type_slug.'_category';
?>

<?php if(have_posts()): while(have_posts()): the_post() ?>

<?php $mv_img_pc = get_field('mv_img_pc'); ?>
<?php $mv_img_sp = get_field('mv_img_sp'); ?>
<div class="p-single-pagebody-sp" style="background-image: url(<?php if($mv_img_sp){ echo $mv_img_sp['url'];} ?>);">
	<div class="l-pagebody p-single-pagebody" style="background-image: url(<?php if($mv_img_pc){ echo $mv_img_pc['url'];} ?>);">
		<div class="l-content">

			<div class="p-h1-wrap">
				<div class="p-h1-content">
					<h1 class="p-h1"><?php the_field('mv_lead'); ?></h1>
					<p class="p-name"><?php the_title(); ?> <span><?php the_field('name_roma'); ?></span></p>
					<p class="p-name-sub"><?php the_field('year'); ?>年入社　<?php the_field('tag'); ?></p>
				</div>
			</div><!--p-h1-wrap-->

			<div class="l-main-contents">
				<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

				<?php $career_summary = get_field('career_summary'); ?>
				<?php if( $career_summary ): ?>
				<div class="p-career-summary">
					<h2 class="p-career-summary-mh">CAREER SUMMARY</h2>
					<p class="p-career-summary-txt"><?php echo $career_summary; ?></p>
				</div>
				<?php endif; ?>

				<?php if(have_rows('interview_wrap')): // リピート 社員インタビュー ?>
				<section>
					<h2 class="p-interview-mh m-mh-bb-center">社員インタビュー</h2>
				<?php while(have_rows('interview_wrap')): the_row(); ?>
					<?php $interview_mh = get_sub_field('interview_mh'); ?>
					<?php $interview_txt = get_sub_field('interview_txt'); ?>
					<?php $interview_img = get_sub_field('interview_img'); ?>
					<?php if($interview_mh): ?>
					<div class="p-interview-box clearfix">
						<h3 class="p-interview-sh"><?php echo $interview_mh; ?></h3>
						<?php if($interview_img): ?>
						<p class="p-interview-img"><?php echo wp_get_attachment_image( $interview_img['id'], 490 ); ?></p>
						<?php endif; ?>
						<?php if($interview_txt): ?>
						<p class="p-interview-txt"><?php echo $interview_txt; ?></p>
						<?php endif; ?>
					</div><!--p-interview-box-->
					<?php endif; ?>
				<?php endwhile; ?>
				</section>
				<?php endif; ?>

				<?php if(have_rows('favorites_wrap')): // グループ favorites ?>
				<?php while(have_rows('favorites_wrap')): the_row(); ?>
					<?php $favorites_img = get_sub_field('favorites_img'); ?>
					<?php $favorites_mh = get_sub_field('favorites_mh'); ?>
					<?php $favorites_txt = get_sub_field('favorites_txt'); ?>
					<?php if($favorites_mh || $favorites_txt): ?>
				<div class="p-favorites-box clearfix">
					<h2 class="p-favorites-mh">MY FAVORITES</h2>
					<?php if($favorites_img): ?>
					<p class="p-favorites-img"><?php echo wp_get_attachment_image( $favorites_img['id'], 570 ); ?></p>
					<?php endif; ?>
					<div class="p-favorites-content">
						<h3 class="p-favorites-sh m-mh-bb-left"><?php echo $favorites_mh; ?></h3>
						<?php if($favorites_txt): ?>
						<p class="p-favorites-txt"><?php echo $favorites_txt; ?></p>
						<?php endif; ?>
					</div>
				</div>
					<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>

				<?php if(have_rows('message_wrap')): // グループ Message ?>
				<?php while(have_rows('message_wrap')): the_row(); ?>
					<?php $message_img = get_sub_field('message_img'); ?>
					<?php $message_mh = get_sub_field('message_mh'); ?>
					<?php $message_txt = get_sub_field('message_txt'); ?>
					<?php if($message_mh || $message_txt): ?>
				<div class="p-message-box">
					<div class="p-message-inner" style="background-image: url(<?php if($message_img){ echo $message_img['url'];} ?>)">
						<h2 class="p-message-mh">Message　～将来の仲間へ～</h2>
						<p class="p-message-lead" style="background-image: url(<?php if($message_img){ echo $message_img['url'];} ?>)"><?php echo $message_mh; ?></p>
						<?php if($message_txt): ?>
						<p class="p-favorites-txt"><?php echo $message_txt; ?></p>
						<?php endif; ?>
					</div>
				</div>
					<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>

				<?php
				$args = array(
					'post_type' => $post_type_slug,
					'posts_per_page' => -1,
					'post__not_in' => array(get_the_ID()),
					'orderby' => 'rand',
				); ?>
				<?php $wp_query = new WP_Query( $args ); ?>
				<?php if( $wp_query->have_posts() ) : ?>
				<h2 class="p-relation-mh">他の社員紹介を見る</h2>
				<div class="p-relation-slide">
					<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
					<div class="p-relation-item">
						<a href="<?php the_permalink(); ?>" class="imghover">
							<p class="p-staff-img">
								<span class="p-staff-tag"><?php the_field('tag'); ?></span>
								<?php if( get_the_post_thumbnail() ): ?>
									<?php the_post_thumbnail( array( 300 ) ); ?>
								<?php endif; ?>
							</p>
							<div class="p-staff-content">
								<p class="p-staff-name"><?php the_title(); ?> <span><?php the_field('year'); ?>年入社</span></p>
							</div>
						</a>
					</div>
					<?php endwhile; wp_reset_postdata(); wp_reset_query(); ?>
				</div><!--p-relation-slide-->
				<?php endif; ?>

				<?php get_template_part( '/include/cv_entry' ); // エントリーボックス ?>
			</div><!--l-main-contents-->

		</div><!--l-content-->
	</div><!-- l-pagebody -->
</div><!-- p-single-pagebody-sp -->

<?php endwhile; endif ?>