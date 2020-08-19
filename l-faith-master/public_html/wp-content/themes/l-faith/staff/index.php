<?php
$post_type_slug = get_post_type_object(get_post_type())->name;
$post_type_taxonomy = $post_type_slug.'_category';
?>

<div class="l-pagebody">
	<div class="l-content">

		<div class="l-h1-wrap">
			<h1 class="l-h1"><?php echo get_post_type_object(get_post_type())->labels->name; ?></h1>
			<p class="l-h1-sub">MEMBERS</p>
		</div><!--l-h1-wrap-->

		<div class="l-main-contents">
			<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

			<p class="p-lead-txt">リーガル・フェイスグループでは30代を中心に現在100名以上の個性豊かなメンバーが働いています。<br>
			若手からベテランまでが切磋琢磨し、また互いを理解し、協力して業務を進めています。<br>
			リーガル・フェイスを選んだ理由や、やりがいなどメンバーの想いを紹介します。</p>

			<?php
			$args = array(
				'post_type' => $post_type_slug,
				'posts_per_page' => -1,
			); ?>
			<?php $wp_query = new WP_Query( $args ); ?>
			<?php if( $wp_query->have_posts() ) : ?>
			<ul class="p-staff-box clearfix">
				<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
				<li><a href="<?php the_permalink(); ?>" class="imghover">
					<p class="p-staff-img">
						<span class="p-staff-tag"><?php the_field('tag'); ?></span>
						<?php if( get_the_post_thumbnail() ): ?>
							<?php the_post_thumbnail( array( 300 ) ); ?>
						<?php endif; ?>
					</p>
					<div class="p-staff-content">
						<p class="p-staff-lead"><?php the_field('mv_lead'); ?></p>
						<p class="p-staff-name"><?php the_title(); ?> <span><?php the_field('year'); ?>年入社</span></p>
					</div>
				</a></li>
				<?php endwhile; wp_reset_postdata(); wp_reset_query(); ?>
			</ul>
			<?php endif; ?>

			<?php get_template_part( '/include/cv_entry' ); // エントリーボックス ?>
		</div><!--l-main-contents-->

	</div><!--l-content-->
</div><!-- l-pagebody -->