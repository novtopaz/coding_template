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
	<p class="p-lead">リーガル・フェイスで働くスタッフをご紹介します。</p>
	<p class="m-txt">お客様から「リーガル・フェイスに頼んでよかった」と言っていただけるサービスの提供を目指しています。
相続に関する疑問やお悩みは私たちスタッフまでお気軽にご相談ください。</p>
	<?php
		$paged = $_GET['pages'] ? $_GET['pages'] : 1;
		$args = array(
			'post_type' => 'staff',
			'posts_per_page' => 5,
			'paged' => $paged,
		);
		$wp_query = new WP_Query( $args );
	?>

	<?php if($wp_query->have_posts() ) : ?>
	
	<div class="p-listControl-cover">
		<ul class="p-listControl">
			<li class="p-listControl-item-all"><a href="<?php echo home_url('/staff/'); ?>">全て</a></li>
			<?php
				$terms = get_terms( array(
				    'taxonomy' => 'staff_tax',
				    'hide_empty' => false,
				) );
				foreach ($terms as $term) {
					$termName = $term->name;
					$termLink = get_term_link( $term );
					$termClass = 'p-listControl-item-';

					if($termName == '司法書士'){
						$termClass = $termClass.'red';
					} elseif($termName == '行政書士'){
						$termClass = $termClass.'blue';
					}else{
						$termClass = $termClass.'green';
					}
					echo '<li class="'.$termClass.'"><a href="'.$termLink.'">'.$termName.'</a></li>';
				}
			?>
		</ul>
	</div>

	<ul class="p-listStaff">
		<?php while ($wp_query->have_posts() ) :$wp_query->the_post(); ?>
		<li class="p-listStaff-item">
			<a class="clearfix" href="<?php the_permalink(); ?>">
				<p class="p-listStaff-item-img is-matchHeightPC flL-pc">
					<?php $thumbnail = get_the_post_thumbnail(); ?>
					<?php if(!empty($thumbnail)) : ?>
						<?php the_post_thumbnail( 'full', array( 'alt' => get_the_title() ) );  ?>
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/img_default.png" alt="No Image">
					<?php endif; ?>
				</p>
				<div class="p-listStaff-item-content is-matchHeightPC flL-pc">
					<div class="p-listStaff-item-content-inner">
						<p class="p-listStaff-item-lead"><?php the_field('staff_lead'); ?></p>
						<p class="p-listStaff-item-name"><?php the_field('staff_name'); ?><span><?php the_field('staff_name_hiragana'); ?></span></p>

						<?php
							$terms = get_the_terms( get_the_ID(), 'staff_tax' );
						?>
						<?php if(!empty($terms)) : ?>
						<div class="p-listStaff-item-tag-cover">
							<?php foreach( $terms as $term ): ?>
							<?php
								$termName = $term->name;
								$termClass = 'p-listStaff-item-tag-';
								if($termName == '司法書士'){
									$termClass = '';
								} elseif($termName == '行政書士'){
									$termClass = $termClass.'blue';
								}else{
									$termClass = $termClass.'green';
								}
							?>
							<span class="m-tag <?php echo $termClass; ?>"><?php echo $termName; ?></span>
							<?php endforeach; ?>
						</div>
						<?php endif; ?>
					</div>
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