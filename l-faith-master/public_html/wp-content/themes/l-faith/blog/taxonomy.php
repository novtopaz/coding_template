<?php
$post_type_slug = get_post_type_object(get_post_type())->name;
$post_type_taxonomy = $post_type_slug.'_category';
?>

<div class="l-pagebody">
	<div class="l-content">

		<div class="l-h1-wrap">
			<p class="l-h1"><?php echo get_post_type_object(get_post_type())->labels->name; ?></p>
			<p class="l-h1-sub">BLOG</p>
		</div><!--l-h1-wrap-->

		<div class="l-main-contents">
			<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

			<div class="clearfix">
				<div class="p-article">
					<?php
					$paged = get_query_var('paged')? get_query_var('paged') : 1;
					$args = array(
						'post_type' => $post_type_slug,
						'posts_per_page' => 5,
						'paged' => $paged,
						'post_status' => 'publish',
						'orderby' => 'date',
						'order' => 'DESC',
						'tax_query' => array(
							'relation' => 'OR',
							array(
								'taxonomy' => $post_type_taxonomy,
								'terms' => $term,
								'field' => 'slug',
								'operator' => 'IN'
							),
						),
					); ?>
					<?php $wp_query = new WP_Query( $args ); ?>
					<?php if( $wp_query->have_posts() ) : ?>
					<h1 class="p-article-title"><?php echo single_term_title(); ?></h1>

					<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
					<div class="p-blog clearfix">
						<p class="p-blog-img"><a href="<?php the_permalink(); ?>" class="imghover">
						<?php if( get_the_post_thumbnail() ): ?>
							<?php echo get_the_post_thumbnail(); ?>
						<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/img_blog_noimage.png" alt="<?php the_title(); ?>">
						<?php endif; ?>
						</a></p>
						<div class="p-blog-content">
							<div class="p-blog-top">
								<p class="p-date"><?php echo get_the_date('Y/m/d'); ?></p>
								<?php $terms_current = get_the_terms($post->ID, $post_type_taxonomy);
								if( $terms_current ):
								foreach($terms_current as $term):
									$term_slug = $term->slug;
									$term_link = get_term_link($term_slug, $post_type_taxonomy);
									$term_name = $term->name;
								?>
								<p class="p-cat"><a href="<?php echo $term_link; ?>"><?php echo $term_name; ?></a></p>
								<?php endforeach; endif; ?>
							</div>
							<h3 class="p-blog-title"><?php the_title(); ?></h3>
							<p class="p-blog-text">
							<?php
							if( mb_strlen(strip_tags(get_the_content()),'UTF-8') > 62 ){
								$content= str_replace( '\n', '', mb_substr( strip_tags( get_the_content() ), 0, 62,'UTF-8' ) );
								echo $content.'...';
							} else {
								echo str_replace( '\n', '', strip_tags( get_the_content() ) );
							}
							?>
							</p>
							<p class="m-more-btn"><a href="<?php the_permalink(); ?>"><span>記事の続きを読む</span></a></p>
						</div><!--/.p-blog-text-->
					</div><!--/.p-blog clearfix-->
					<?php endwhile; ?>

					<?php m_page_navigation(); ?>
					<?php else: ?>
					<p class="m-normal-txt">現在<?php echo single_term_title(); ?>カテゴリーのブログはございません。</p>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div><!--/.p-article-->

				<!--サイドメニュー-->
				<div class="p-sidebar">
					<h2 class="p-sidebar-title">カテゴリ</h2>
					<ul class="p-sidebar-list">
						<li><a href="/blog/">最新記事</a></li>
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
				</div><!--p-sidebar-->
			</div><!--/.clearfix-->

		</div><!--l-main-contents-->
	</div><!--l-content-->
</div><!-- l-pagebody -->