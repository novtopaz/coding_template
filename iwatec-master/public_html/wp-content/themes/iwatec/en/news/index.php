<?php
$mv_text = [
	'h1'=>'News',
];

set_query_var('mv_text', $mv_text);
get_template_part('include/mv');
?>

<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

<div class="l-content">
	<div class="m-box">
		<?php
		$post_type_slug = get_post_type_object(get_post_type())->name;
		$post_type_taxonomy = $post_type_slug.'_tax';

		$years = [];
		$args = array(
			'post_type' => $post_type_slug,
			'posts_per_page' => -1,
		);
		$wp_query = new WP_Query( $args );
		if( $wp_query->have_posts() ){
			while ( $wp_query->have_posts() ) {
				$wp_query->the_post();
				$year = get_the_date('Y');
				if(!in_array($year, $years)){
					array_push($years, $year);
				}
			} 
		}

		$current_year = $_GET["y"];

		wp_reset_query();
		
		?>

		<?php
		$paged = get_query_var('paged')? get_query_var('paged') : 1;
		$year = get_query_var('year');
		$args = array(
			'post_type' => $post_type_slug,
			'posts_per_page' => 10,
			'paged' => $paged,
			'post_status' => 'publish',
			'orderby' => 'date',
			'order' => 'DESC',
			'year' => $current_year,
		); ?>
		<?php
			$wp_query = new WP_Query( $args );
		?>

		<!-- CONTROL BEGIN -->
		<div class="p-control clearfix">
			<div class="p-control-category clearfix">
				<div class="p-control-category-btn-cover">
					<p class="p-control-category-btn"><span class="nopc">Select </span>Catelog</p>
				</div>
				<ul class="p-control-category-list">
					<li><a class="is-active" href="<?php echo home_url('/en/news/') ?>">All</a></li>
					<li><a href="<?php echo home_url('/en/new/info/') ?>">Info</a></li>
					<li><a href="<?php echo home_url('/en/new/blog/') ?>">Blog</a></li>
				</ul>
			</div>
			<div class="p-control-year">
				<div class="p-control-year-btn-cover">
					<?php
						$yearBtn = 'Select year';
						if($current_year){
							$yearBtn = $current_year;
						}
					?>
					<p class="p-control-year-btn"><?php echo $yearBtn; ?></p>
				</div>
				<form class="p-control-year-form" action="" method="GET">
					<ul class="p-control-year-list">
						<?php foreach($years as $year) :?>
							<li>
								<button type="submit" class="is-imghover" name="y" value="<?php echo $year; ?>"><?php echo $year; ?></button>
							</li>
						<?php endforeach; ?>
					</ul>
				</form>
			</div>
		</div>
		<!-- CONTROL END -->

		<!-- NEWS BEGIN -->
		<?php if( $wp_query->have_posts() ) : ?>
		<ul class="p-news-list">
			<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
			<li>
				<a class="is-imghover clearfix" href="<?php the_permalink(); ?>">
					<div class="p-news-list-thumb">
						<?php
							$img_default = ASSETS_PATH . '/images/news/img_news_default.png';
							$img_src = get_the_post_thumbnail_url();
							$img_src = $img_src ? $img_src : $img_default;
						?>
						<img src="<?php echo $img_src; ?>" alt="<?php the_title(); ?>">
					</div>
					<div class="p-news-list-content">
						<div class="p-news-list-info">
							<span class="p-news-list-date"><?php the_date('Y.m.d'); ?></span>
							<?php
								$post_id = get_the_ID();
								$terms = get_the_terms($post_id, $post_type_taxonomy);
							?>
							<?php foreach($terms as $term) :?>
								<span class="p-news-list-tag"><?php echo $term->name; ?></span>
							<?php endforeach; ?>
						</div>
						<h2 class="p-news-list-title"><?php the_title(); ?></h2>
						<p class="p-news-list-txt"><?php echo wp_trim_words(get_the_content(), 100); ?></p>
					</div>
				</a>
			</li>
			<?php endwhile; ?>
		</ul>
		<?php m_page_navigation(); ?>
		<?php else: ?>
		<p class="m-txt">現在お知らせはございません。</p>
		<?php endif; ?>
		<!-- NEWS END -->
	</div>
</div>

<?php wp_reset_query(); ?>

