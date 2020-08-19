<div class="m-mv">
	<p class="m-mv-img">
		<picture>
			<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/seminar/mv_pc.png">
			<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/seminar/mv_sp.png">
			<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar/mv_pc.png" alt="開催セミナー情報 メインビジュアル">
		</picture>
	</p>
	<div class="m-mv-content">
		<div class="m-mv-title-cover">
			<span class="m-mv-sub">SEMINAR</span>
			<h1 class="m-mv-title tac">開催セミナー情報</h1>
		</div>
	</div>
</div>
<!-- .l-topicPath -->
<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>
<!-- /.l-topicPath -->

<div class="l-content">
	<p class="m-txt">リーガル・フェイスで開催しているセミナー、個別相談会、ワークショップをご紹介いたします。皆様が相続や老後の財産管理について考えるきっかけになるようにわかりやすくお伝えいたします。また法改正や新しい制度などの最新情報もご説明させていただきます。<br>
	ぜひお気軽にご参加ください。</p>

	<?php
		$today = date('Ymd');
		$args = array(
			'post_type' => 'seminar',
			'posts_per_page' => -1,
			'meta_key' => 'seminar_status',
			'meta_query'=> array(
				// SORT ARRAY
				array(
					'relation' => 'AND',
		            'status' => array(
		              'key' => 'seminar_status',
		              'compare' => '>',
		            ),
					'seminar_start' => array(
		              'key' => 'seminar_date_start',
		              'compare' => '>=',
		              'type' => 'date'
		            ),
				),
				// FUTURE POST ARRAY
				array(
					'relation' => 'OR',
		            array(
    	              'key' => 'seminar_date_end',
    	              'compare' => '>=',
    	              'value' => $today,
    	              'type' => 'date'
    	            ),
    	            array(
    	              'key' => 'seminar_date_start',
    	              'compare' => '>=',
    	              'value' => $today,
    	              'type' => 'date'
    	            )
				),
	        ),
			'orderby' => array(
			    'status' => 'ASC',
			    'seminar_start' => 'ASC',
			),
		);
		$wp_query = new WP_Query( $args );
	?>

	<?php if($wp_query->have_posts() ) : ?>

	<ul class="m-seminar-list p-seminar-list">
		<?php while ($wp_query->have_posts() ) :$wp_query->the_post(); ?>
		<li class="m-seminar-list-item">
			<a class="imghover clearfix" href="<?php the_permalink(); ?>">
				<?php 
					$seminar_status = get_field('seminar_status');
					$seminar_class = 'm-seminar-list-item-img-';
					if($seminar_status == 'accepting'){
						$seminar_class = $seminar_class.'accept';
					} elseif($seminar_status == 'reception_end'){
						$seminar_class = $seminar_class.'end';
					}
				?>
				<p class="m-seminar-list-item-img <?php echo $seminar_class; ?>">
					<?php $thumbnail = get_the_post_thumbnail(); ?>
					<?php if(!empty($thumbnail)) : ?>
						<?php the_post_thumbnail( 'full', array( 'alt' => get_the_title() ) );  ?>
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/img_default.png" alt="No Image">
					<?php endif; ?>
				</p>
				<div class="m-seminar-list-item-content">
					<p class="m-seminar-list-item-title"><?php the_title(); ?></p>

					<div class="m-seminar-list-item-table-cover">
						<table class="m-seminar-list-item-table">
							<tr>
								<th>開催日</th>
								<?php
									$week = array("日", "月", "火", "水", "木", "金", "土");

									$date_start = get_field('seminar_date_start');
									$date_startObj = new DateTime($date_start);
									$date_start_week = $week[(int)date_format($date_startObj,'w')];

									$date_end = get_field('seminar_date_end');

									$date_start = strtotime($date_start);
									$date_end = strtotime($date_end);

									$date_diff = round(($date_end - $date_start)/ (60 * 60 * 24));
								?>
								<td class="fNotoR">
									<?php echo $date_startObj->format('Y年m月d日').'('.$date_start_week.')'; ?><?php
										if(!empty($date_end && $date_end!=$date_start)){
											$date_mid = $date_startObj;
											// IF NEXT DATE HAS MONTH LARGER THAN PREVIOUS -> SHOW THE MONTH ONCE
											$month_start = (int)$date_mid->format('m');
											for($i = 0; $i < $date_diff; $i++){
												$date_mid = $date_mid->modify('+1 day');

												$month_current = (int)$date_mid->format('m');
												if($month_current != $month_start){
													$month_mid = $date_mid->format('m月');
													$month_start = $month_current;
												} else{
													$month_mid = '';
												}

												$date_mid_week = $week[(int)date_format($date_mid,'w')];
												echo '、'.$month_mid.$date_mid->format('d日').'('.$date_mid_week.')'; 
											}
										}
									?>
									</td>
							</tr>
							<tr class='nosp'>
								<th>時間</th>
								<td class="fNotoR">
									<?php if( have_rows('seminar_time') ): ?>
									<?php while ( have_rows('seminar_time') ) : the_row(); ?>
									<div class="m-seminar-list-item-time-cover">
										<span class="m-seminar-list-item-timeTitle"><?php the_sub_field('seminar_time_item'); ?></span>
										<span class="m-seminar-list-item-timeContent"><?php the_sub_field('seminar_time_detail'); ?></span>
									</div>
									<?php endwhile; ?>
									<?php endif; ?>
								</td>
							</tr>
							<tr class='nosp'>
								<th>会場</th>
								<td class="fNotoR"><?php the_field('seminar_place'); ?></td>
							</tr>
						</table>
						<p class="p-seminar-list-item-btn nopc"><span>詳細はこちら</span></p>
					</div>
				</div>
			</a>
		</li>
		<?php endwhile; ?>
	</ul>
	<?php wp_reset_postdata(); ?>
	<?php else: ?>
		<p class="m-txt mt30">現在開催中のセミナーはありません。</p>
	<?php endif; ?>

	<h2 class="p-titleH2 clearfix">開催済セミナー<span>受付終了</span></h2>
	<?php
		$paged = $_GET['pages'] ? $_GET['pages'] : 1;
		$args = array(
			'post_type' => 'seminar',
			'posts_per_page' => 9,
			'paged' => $paged,
			'meta_query'=> array(
				// SORT ARRAY
				array(
					'relation' => 'AND',
		            'status' => array(
		              'key' => 'seminar_status',
		              'compare' => '>',
		            ),
					'seminar_start' => array(
		              'key' => 'seminar_date_start',
		              'compare' => '>=',
		              'type' => 'date'
		            ),
				),
				array(
					'relation' => 'AND',
    	            array(
    	              'key' => 'seminar_date_end',
    	              'compare' => '<',
    	              'value' => $today,
    	              'type' => 'date'
    	            ),
				),
	        ),
	        'orderby' => array(
			    'status' => 'DESC',
			    'seminar_start' => 'DESC',
			),
		);

		$wp_query = new WP_Query( $args );
	?>

	<?php if($wp_query->have_posts() ) : ?>
	<ul class="p-seminar-listPast clearfix">
		<?php while ($wp_query->have_posts() ) :$wp_query->the_post(); ?>
		<li class="p-seminar-listPast-item">
			<a class="imghover is-matchHeightPC" href="<?php the_permalink(); ?>">
				<p class="p-seminar-listPast-item-img">
					<?php $thumbnail = get_the_post_thumbnail(); ?>
					<?php if(!empty($thumbnail)) : ?>
						<?php the_post_thumbnail( 'full', array( 'alt' => get_the_title() ) );  ?>
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/img_default.png" alt="No Image">
					<?php endif; ?>
				</p>
				<?php
					$report = get_field('seminar_report');
				?>
				<?php if($report == 'true') : ?>
					<p class="p-seminar-listPast-report">開催レポート掲載</p>
				<?php endif; ?>
				<p class="p-seminar-listPast-item-title"><?php the_title(); ?></p>
				<?php
					$week = array("日", "月", "火", "水", "木", "金", "土");

					$date_start = get_field('seminar_date_start');
					$date_startObj = new DateTime($date_start);
					$date_start_week = $week[(int)date_format($date_startObj,'w')];

					$date_end = get_field('seminar_date_end');

					$date_start = strtotime($date_start);
					$date_end = strtotime($date_end);

					$date_diff = round(($date_end - $date_start)/ (60 * 60 * 24));

				?>
				<p class="p-seminar-listPast-item-date fNotoR nosp">開催日：<?php echo $date_startObj->format('Y年m月d日').'('.$date_start_week.')'; ?>
					<?php
						if(!empty($date_end && $date_end!=$date_start)){
							$date_mid = $date_startObj;
							// IF NEXT DATE HAS MONTH LARGER THAN PREVIOUS -> SHOW THE MONTH ONCE
							$month_start = (int)$date_mid->format('m');
							for($i = 0; $i < $date_diff; $i++){
								$date_mid = $date_mid->modify('+1 day');

								$month_current = (int)$date_mid->format('m');
								if($month_current != $month_start){
									$month_mid = $date_mid->format('m月');
									$month_start = $month_current;
								} else{
									$month_mid = '';
								}

								$date_mid_week = $week[(int)date_format($date_mid,'w')];
								echo '、'.$month_mid.$date_mid->format('d日').'('.$date_mid_week.')'; 
							}
						}
					?>		
				</p>
				<p class="p-seminar-list-item-btn nopc"><span>詳細はこちら</span></p>
			</a>
		</li>
		<?php endwhile; ?>
	</ul>
	<div class="m-paginate">
		<?php page_navigation(); ?>
	</div>
	<?php else: ?>
		<p class="m-txt mt20">記事がありません。</p>
	<?php endif; ?>

</div>
