<div class="m-mv">
	<p class="m-mv-img">
		<picture>
			<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/staff/mv_pc.png">
			<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/staff/mv_sp.png">
			<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/staff/mv_pc.png" alt="スタッフ紹介 メインビジュアル">
		</picture>
	</p>
	<div class="m-mv-content">
		<div class="m-mv-title-cover">
			<span class="m-mv-sub">STAFF</span>
			<h1 class="m-mv-title tac">スタッフ紹介</h1>
		</div>
	</div>
</div>
<!-- .l-topicPath -->
<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>
<!-- /.l-topicPath -->

<div class="l-content">
	<div class="p-single-cover">
		<?php if(have_posts() ) : ?>
		<?php while (have_posts() ) :the_post(); ?>
		<div class="p-single-intro clearfix">
			<p class="p-single-intro-img is-matchHeightPC flL-pc">
				<?php $thumbnail = get_the_post_thumbnail(); ?>
				<?php if(!empty($thumbnail)) : ?>
					<?php the_post_thumbnail( 'full', array( 'alt' => get_the_title() ) );  ?>
				<?php else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/img_default.png" alt="No Image">
				<?php endif; ?>
			</p>
			<div class="p-single-intro-content is-matchHeightPC flR-pc">
				<div class="p-single-intro-inner">
					<h2 class="p-single-intro-lead"><?php the_field('staff_lead'); ?></h2>
					<p class="p-single-intro-name"><?php the_field('staff_name'); ?><span><?php the_field('staff_name_hiragana'); ?></span></p>
					<div class="p-single-intro-tag">
						<?php $terms = get_the_terms( get_the_ID(), 'staff_tax' ); ?>
						<?php if(!empty($terms)) : ?>
						<?php foreach( $terms as $term ): ?>
							<?php
								$termName = $term->name;
								$termLink = get_term_link( $term );
								$termClass = 'p-single-intro-tag-';

								if($termName == '司法書士'){
									$termClass = $termClass.'red';
								} elseif($termName == '行政書士'){
									$termClass = $termClass.'blue';
								}else{
									$termClass = $termClass.'green';
								}
							?>
							<span class="m-tag imghover <?php echo $termClass; ?>"><a href="<?php echo $termLink; ?>"><?php echo $term->name; ?></a></span>
						<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="p-single-content"><?php the_content(); ?></div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<p class="btn btn-back"><a href="<?php echo home_url('/staff/'); ?>"><span>スタッフ紹介に戻る</span></a></p>
</div>