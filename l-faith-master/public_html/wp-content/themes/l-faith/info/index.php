<?php
$post_type_slug = get_post_type_object(get_post_type())->name;
$post_type_taxonomy = $post_type_slug.'_category';
?>

<div class="l-pagebody">
	<div class="l-content">

		<div class="l-h1-wrap">
			<h1 class="l-h1"><?php echo get_post_type_object(get_post_type())->labels->name; ?></h1>
			<p class="l-h1-sub">INFO</p>
		</div><!--l-h1-wrap-->

		<div class="l-main-contents">
			<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

			<div class="clearfix">
				<!--新着記事-->
				<div class="p-new">
					<?php
					$paged = get_query_var('paged')? get_query_var('paged') : 1;
					$year = get_query_var('year');
					$monthnum = get_query_var('monthnum');
					$args = array(
						'post_type' => $post_type_slug,
						'posts_per_page' => 5,
						'paged' => $paged,
						'post_status' => 'publish',
						'orderby' => 'date',
						'order' => 'DESC',
						'year' => $year,
						'monthnum' => $monthnum,
					); ?>
					<?php $wp_query = new WP_Query( $args ); ?>
					<?php if( $wp_query->have_posts() ) : ?>
					<?php if( $year && $monthnum ): ?>
					<h2 class="p-new-title"><?php echo $year.'年'.$monthnum.'月'; ?></h2>
					<?php else: ?>
					<h2 class="p-new-title">新着</h2>
					<?php endif; ?>
					<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
					<div class="p-new-content">
						<div class="p-new-top">
							<p class="p-top-text"><?php echo get_the_date('Y/m/d'); ?></p>
							<?php $terms_current = get_the_terms($post->ID, $post_type_taxonomy);
							if( $terms_current ):
							foreach($terms_current as $term):
								$term_slug = $term->slug;
								$term_link = get_term_link($term_slug, $post_type_taxonomy);
								$term_name = $term->name;
							?>
							<p class="p-top-text"><a href="<?php echo $term_link; ?>"><?php echo $term_name; ?></a></p>
							<?php endforeach; endif; ?>
						</div><!--/.p-new-top-->
						<p class="p-new-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
					</div><!--/.p-new-content-->
					<?php endwhile; ?>

					<?php m_page_navigation(); ?>
					<?php else: ?>
					<p class="m-normal-txt">現在お知らせはございません。</p>
					<?php endif; ?>
					<?php wp_reset_query(); ?>

				</div><!--/.p-new-->

				<!--サイドメニュー-->
				<div class="p-sidebar">
					<!--カテゴリ-->
					<div class="p-sidebar-category">
						<h2 class="p-sidebar-title p-category">カテゴリ</h2>
						<ul class="p-sidebar-list">
							<li><a href="/info/">新着</a></li>
							<?php
							$args = array(
								'orderby' => 'count',
								'order' => 'DESC',
							);
							if( get_terms($post_type_taxonomy) ):
							foreach(get_terms($post_type_taxonomy, $args) as $term):
								$term_slug = $term->slug;
								$term_link = get_term_link($term_slug, $post_type_taxonomy);
								$term_name = $term->name;
								$term_count = $term->count;
							?>
							<li><a href="<?php echo $term_link; ?>"><?php echo $term_name; ?><span class="m-smaller">（<?php echo $term_count; ?>）</span></a></li>
							<?php endforeach; endif; ?>
						</ul>
					</div><!--/.p-sidebar-category-->

					<!--アーカイブ-->
					<div class="p-sidebar-archive">
						<h2 class="p-sidebar-title p-archive">アーカイブ</h2>
						<ul class="p-sidebar-list">
							<?php wp_get_archives('type=monthly&post_type=info'); ?>
						</ul>
					</div><!--/.p-sidebar-category-->
				</div><!--/.p-sidebar-->
			</div><!--/.clearfix-->

		</div><!--l-main-contents-->

	</div><!--l-content-->
</div><!-- l-pagebody -->