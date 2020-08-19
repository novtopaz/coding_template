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

<div class="l-content p-single">
	<?php if($wp_query->have_posts() ) : ?>
	<?php while ($wp_query->have_posts() ) :$wp_query->the_post(); ?>
	<?php
		$date_end = get_field('seminar_date_end');
		$today = date('Ymd');
		if($date_end < $today){
			$is_end = true;
		}
	?>
	<ul class="m-seminar-list">
		<li class="m-seminar-list-item">
			<a class="clearfix">
				<?php 
					$seminar_status = get_field('seminar_status');
					if(!$is_end){
						$seminar_class = 'm-seminar-list-item-img-';
						if($seminar_status == 'accepting'){
							$seminar_class = $seminar_class.'accept';
						} elseif($seminar_status == 'reception_end'){
							$seminar_class = $seminar_class.'end';
						}
					}
				?>
				<p class="m-seminar-list-item-img is-matchHeightPC <?php echo $seminar_class; ?>">
					<?php $thumbnail = get_the_post_thumbnail(); ?>
					<?php if(!empty($thumbnail)) : ?>
						<?php the_post_thumbnail( 'full', array( 'alt' => get_the_title() ) );  ?>
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/img_default.png" alt="No Image">
					<?php endif; ?>
				</p>
				<div class="m-seminar-list-item-content is-matchHeightPC">
					<div class="p-seminar-list-item-inner">
						<?php
							$report = get_field('seminar_report');
						?>
						<?php if($report == 'true') : ?>
							<p class="p-single-report-tag">開催レポート掲載</p>
						<?php endif; ?>
						<h1 class="m-seminar-list-item-title"><?php the_title(); ?></h1>
						<p class="p-lead m-txt fNotoR"><?php the_field('seminar_lead'); ?></p>
					</div>
				</div>
			</a>
		</li>
	</ul>

	<h2 class="p-titleH2 clearfix">セミナー内容</h2>
	<div class="p-single-seminar p-single-content">
		<?php the_field('seminar_content'); ?>
	</div>

	<?php if($report == 'true') : ?>
	<h2 class="p-titleH2 clearfix">開催レポート</h2>
	<div class="p-single-report p-single-content">
		<?php the_field('seminar_report_content'); ?>
	</div>
	<?php endif; ?>

	<table class="p-single-table">
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
			<td>
				<?php echo $date_startObj->format('Y年m月d日').'('.$date_start_week.')'; ?>
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
			</td>
		</tr>
		<tr>
			<th>時間</th>
			<td>
				<?php if( have_rows('seminar_time') ): ?>
				<?php while ( have_rows('seminar_time') ) : the_row(); ?>
					<div class="p-single-table-time-cover">
						<span class="p-single-table-timeTitle"><?php the_sub_field('seminar_time_item'); ?></span>
						<span class="p-single-table-timeContent"><?php the_sub_field('seminar_time_detail'); ?></span>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<th>会場</th>
			<td><?php the_field('seminar_place'); ?></td>
		</tr>
	</table>
	<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php if(!$is_end) :?>
<div class="p-single-banner">
	<div class="p-single-banner-box">
		<p class="p-single-banner-box-title">セミナー参加予約受付</p>
		<div class="p-single-banner-box-content clearfix">
			<div class="p-single-banner-box-left flL-pc">
				<p class="p-single-banner-box-left-txt m-txt">セミナーへの参加は、WEBから簡単にご予約<br class="nosp">
				いただくことができます。</p>
				<p><a class="imghover" href="<?php echo home_url('/seminar-entry/') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar/btn_reserve.png" alt="WEBから予約する"></a></p>
			</div>
			<div class="p-single-banner-box-right flL-pc">
				<p class="p-single-banner-box-right-txt m-txt">お電話でのお申込みはこちら</p>
				<p>
					<a href="tel:0120-800-370">
						<picture class="is-tel">
							<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/seminar/btn_tel_pc.png">
							<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/seminar/btn_tel_sp.png">
							<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar/btn_tel_pc.png" alt="0120-800-370">
						</picture>	
					</a>
				</p>
				<p class="p-single-banner-box-right-txt m-txt nopc">受付時間 9：00～18：00(土日祝要予約)</p>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<div class="l-content">
	<p class="btn btn-back"><a href="<?php echo home_url('/seminar/'); ?>"><span>セミナー一覧に戻る</span></a></p>
</div>