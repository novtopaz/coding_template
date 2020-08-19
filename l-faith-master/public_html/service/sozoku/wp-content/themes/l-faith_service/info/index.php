<div class="m-mv">
	<p class="m-mv-img">
		<picture>
			<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/info/mv_pc.png">
			<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/info/mv_sp.png">
			<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/info/mv_pc.png" alt="お知らせ メインビジュアル">
		</picture>
	</p>
	<div class="m-mv-content">
		<div class="m-mv-title-cover">
			<span class="m-mv-sub">NEWS</span>
			<h1 class="m-mv-title tac">お知らせ</h1>
		</div>
	</div>
</div>
<!-- .l-topicPath -->
<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>
<!-- /.l-topicPath -->

<div class="l-content">
	<div class="p-control clearfix">
		<?php
			$query_year = $_GET['post_year'];
			$args = array(
				'post_type' => 'info',
				'post_status' => 'publish',
			);
			$wp_query = new WP_Query( $args );
			$yearArray = array();
		?>
		<?php if($wp_query->have_posts() ) : ?>

		<p class="p-control-year"></p>
		<form action="<?php echo home_url('/info/'); ?>" method="GET">
		<select class="p-control-select" name="post_year" onchange="this.form.submit()">
			<?php while ($wp_query->have_posts() ) :$wp_query->the_post(); ?>
				<?php
					$year = get_the_date('Y');
					if(!in_array($year, $yearArray)){
						array_push($yearArray, $year);
						if(!empty($query_year)){
							if($query_year == $year.'年'){
								$selected = 'selected';
							}
						}
						echo '<option value="'.$year.'年" '.$selected.'>'.$year.'年</option>';
						$selected = '';
					}
				?>
			
			<?php endwhile; ?>
		</select>
		</form>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>

	<?php
		if((empty($query_year))){
			$query_year = max($yearArray);
		}
		$args = array(
			'post_type' => 'info',
			'post_status' => 'publish',
			'year' => $query_year,
		);
		$wp_query = new WP_Query( $args );
	?>

	<?php if($wp_query->have_posts() ) : ?>
	<ul class="p-newsList">
		<?php while ($wp_query->have_posts() ) :$wp_query->the_post(); ?>
		<li class="p-newsList-item clearfix">
			<p class="p-newsList-item-date flL-pc"><?php the_time('Y/m/d'); ?></p>
			<p class="p-newsList-item-title flL-pc"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></p>
		</li>
		<?php endwhile; ?>
	</ul>
	<?php else: ?>
		<p class="m-txt">お知らせがありません。</p>
	<?php endif; ?>
</div>