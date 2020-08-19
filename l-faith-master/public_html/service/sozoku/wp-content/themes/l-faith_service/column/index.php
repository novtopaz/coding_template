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
	<?php
		$paged = $_GET['pages'] ? $_GET['pages'] : 1;
		$args = array(
			'post_type' => 'column',
			'posts_per_page' => 6,
			'paged' => $paged,
		);
		$wp_query = new WP_Query( $args );
	?>
	<div class="p-content-left">
		<?php if($wp_query->have_posts() ) : ?>
		<ul class="p-listMain">
			<?php while ($wp_query->have_posts() ) :$wp_query->the_post(); ?>
			<li class="p-listMain-item">
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

				<a class="imghover is-matchHeightPC <?php echo $is_new; ?>" href="<?php the_permalink(); ?>">
					<p class="p-listMain-item-img">
						<?php $thumbnail = get_the_post_thumbnail(); ?>
						<?php if(!empty($thumbnail)) : ?>
							<?php the_post_thumbnail( 'full', array( 'alt' => get_the_title() ) );  ?>
						<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/img_default.png" alt="No Image">
						<?php endif; ?>
					</p>
					<div class="p-listMain-item-info clearfix">
						<?php
							$terms = get_the_terms( get_the_ID(), 'column_tax' );
						?>
						<?php if(!empty($terms)) : ?>
						<div class="p-listMain-item-info-tag-cover">
						<?php foreach( $terms as $term ): ?>
							<span class="m-tag fNotoR"><?php echo $term->name; ?></span>
						<?php endforeach; ?>
						</div>
						<?php endif; ?>
						<p class="p-listMain-item-info-date fNotoR"><?php echo get_post_time( 'Y.m.d' ); ?></p>
					</div>
					<p class="p-listMain-item-desc"><?php echo wp_trim_words( get_the_title(), 30, '...' );?></p>
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
	
	<!-- .p-sidebar -->
	<?php get_template_part( '/include/sidebar_column' ); // サイドバー ?>
	<!-- /.p-sidebar -->
	
</div>