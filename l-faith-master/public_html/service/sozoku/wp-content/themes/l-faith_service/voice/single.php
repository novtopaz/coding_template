<div class="m-mv">
	<p class="m-mv-img">
		<picture>
			<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/voice/mv_pc.png">
			<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/voice/mv_sp.png">
			<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/voice/mv_pc.png" alt="お客様の声 メインビジュアル">
		</picture>
	</p>
	<div class="m-mv-content">
		<div class="m-mv-title-cover">
			<span class="m-mv-sub">VOICE</span>
			<h1 class="m-mv-title tac">お客様の声</h1>
		</div>
	</div>
</div>
<!-- .l-topicPath -->
<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>
<!-- /.l-topicPath -->

<div class="l-content">
	<?php if(have_posts() ) : ?>
	<?php while (have_posts() ) :the_post(); ?>
	<div class="p-single clearfix">
		<div class="p-single-content">
			<div class="p-single-title-cover">
				<h2 class="p-single-title"><?php the_title(); ?></h2>
				<?php $terms = get_the_terms( get_the_ID(), 'voice_tax' ); ?>
				<?php if(!empty($terms)) : ?>
				<?php foreach( $terms as $term ): ?>
					<p class="p-single-cat"><span><?php echo $term->name; ?></span>ご利用</p>
				<?php endforeach; ?>
				<?php endif; ?>
			</div>
			<p class="p-single-date"><?php echo get_post_time( 'Y/m/d' );  ?></p>
			<div class="m-txt fNotoR"><?php the_content(); ?></div>
		</div>
		<div class="p-single-img-cover">
			<?php $thumbnail = get_the_post_thumbnail(); ?>
			<?php if(!empty($thumbnail)) : ?>
				<p class="p-single-img">
					<a class="data-fancybox" href="<?php echo get_the_post_thumbnail_url(); ?>" data-fancybox data-caption="">
					<?php echo $thumbnail; ?>
					</a>
				</p>
				<p class="p-single-img-sub fNotoR">画像をクリックすると拡大表示されます。</p>
			<?php else: ?>
				<p class="p-single-img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/voice/img_default.png" alt="No Image">
				</p>
			<?php endif; ?>
		</div>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>

	<p class="btn btn-back"><a href="<?php echo home_url('/voice/'); ?>"><span>一覧へ戻る</span></a></p>
</div>