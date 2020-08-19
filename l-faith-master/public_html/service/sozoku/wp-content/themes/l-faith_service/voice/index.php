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
	<p class="m-txt">これまでリーガル・フェイスのサービスをご利用いただいたお客様の生の声を掲載いたします。<br>
	お客様の声を真摯に受け止め、より良いサービスの向上を目指します。</p>

	<?php
		$paged = $_GET['pages'] ? $_GET['pages'] : 1;
		$args = array(
			'post_type' => 'voice',
			'posts_per_page' => 6,
			'paged' => $paged,
		);
		$wp_query = new WP_Query( $args );
	?>

	<?php if($wp_query->have_posts() ) : ?>
	<ul class="p-voiceList">
		<?php while ($wp_query->have_posts() ) :$wp_query->the_post(); ?>
		<li class="p-voiceList-item">
			<?php
				$published_date = strtotime(get_the_date("Ymd"));
				$time = time();
				$datediff = $time - $published_date;

				$datediff = round($datediff / (60 * 60 * 24));

				if($datediff <= 31){
					$is_new = 'is-new';
				} else{
					$is_new = '';
				}

			?>
			<a class="imghover clearfix is-matchHeightPC <?php echo $is_new; ?>" href="<?php the_permalink(); ?>">
				<p class="p-voiceList-item-img">
					<?php $thumbnail = get_the_post_thumbnail(); ?>
					<?php if(!empty($thumbnail)) : ?>
						<?php the_post_thumbnail( 'full', array( 'alt' => get_the_title() ) );  ?>
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/voice/img_default.png" alt="No Image">
					<?php endif; ?>
				</p>
				<div class="p-voiceList-item-content">
					<?php
						$terms = get_the_terms( get_the_ID(), 'voice_tax' );
					?>
					<?php if(!empty($terms)) : ?>
					<?php foreach( $terms as $term ): ?>
						<p class="p-voiceList-item-cat"><span><?php echo $term->name; ?></span>ご利用</p>
					<?php endforeach; ?>
					<?php endif; ?>
					<p class="p-voiceList-item-title"><?php the_title(); ?></p>
					<p class="p-voiceList-item-date"><?php echo get_post_time( 'Y/m/d' ); ?></p>
					<div class="m-txt"><?php echo wp_trim_words( get_the_content(), 50, '...' ); ?></div>
				</div>
			</a>
		</li>
		<?php endwhile; ?>
	</ul>
	<div class="m-paginate">
		<?php page_navigation(); ?>
	</div>
	<?php else: ?>
		<p class="m-txt">記事がありません。</p>
	<?php endif; ?>
</div>