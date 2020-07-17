<?php
$mv_text = [
	'h1'=>'Our Work',
];

set_query_var('mv_text', $mv_text);
get_template_part('include/mv');
?>

<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

<div class="l-content clearfix">
	<div class="l-container clearfix">
		<div class="l-sidenav nosp">
			<?php
			$post_type_slug = 'works_en';
			$post_type_taxonomy = $post_type_slug.'_tax';

			// get term parent only
			$terms_parent = get_taxonomy_hierarchy($post_type_taxonomy);

			function getArgs($post_type_slug, $post_type_taxonomy, $term_id)
			{
				$result = array(
					'post_type' => $post_type_slug,
					'posts_per_page' => -1,
					'tax_query' => array(
			            array(
			                'taxonomy' => $post_type_taxonomy,
			                'field' => 'term_id',
			                'terms' => $term_id,
			            )
			        )
				);
				return $result;
			}

			function getWorkItem($title, $desc, $img_url){
				if(!(empty($title))){
					$title_txt = '<p class="p-work-item-title m-txt2">'.$title.'</p>';
				}
				$item = '
				<li class="is-matchHeightPC">
					<div class="p-work-item-img">
						<p><img src="'.$img_url.'" alt="'.$desc.'"></p>
						<div class="p-work-item-desc nosp">
							<p class="p-work-item-desc-txt">'.$desc.'</p>
						</div>
					</div>

					<div class="p-work-item-title-cover">
						'.$title_txt.'
						<p class="p-work-item-desc-txt nopc">'.$desc.'</p>
					</div>
				</li>
				';

				echo $item;
			}

			?>
			<?php foreach($terms_parent as $parent) :?>
				<?php
					$parent_id = $parent->term_id;
					$parent_slug = $parent->slug;
					$parent_name = $parent->name;
				?>
				<div class="l-sidenav-item">
					<p class="l-sidenav-title"><a href="#<?php echo $parent_slug; ?>" class="l-linkMega is-pagelink"><?php echo $parent_name; ?></a></p>

					<?php $terms_children = get_term_children( $parent_id, $post_type_taxonomy ); ?>
					<?php if(!empty($terms_children)) :?>
						<ul class="l-sidenav-list m-txt">
						<?php foreach($terms_children as $child) :?>
							<?php $term = get_term_by( 'id', $child, $post_type_taxonomy ); ?>
							<?php if($term->count > 0) :?>
								<li><a href="#<?php echo $term->slug; ?>" class="l-link l-link-underline is-pagelink"><?php echo $term->name; ?></a></li>
							<?php endif; ?>
						<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
			<div class="l-sidenav-item">
				<p class="l-sidenav-title"><a href="#om" class="l-linkMega is-pagelink">O＆M</a></p>
			</div>
		</div>
		<div id="sidenav-content" class="l-sidenav-content">
			<div class="l-sidenav-box">
				<p class="m-titleH3 tac">Below are some of the various systems that IWATEC has <br>
					delivered/installed over the past few years.</p>

				<?php foreach ($terms_parent as $parent): ?>
					<!-- WORKS BEGIN -->
					<?php
						$parent_id = $parent->term_id;
						$parent_slug = $parent->slug;
						$parent_name = $parent->name;
						$terms_children = get_term_children( $parent_id, $post_type_taxonomy );
					?>
					<div class="p-work">
						<h2 id="<?php echo $parent_slug; ?>" class="p-work-title l-anchorMega"><?php echo $parent_name; ?></h2>
						<!-- 小カテゴリーあり -->
						<?php if(!empty($terms_children)): ?>
							<?php foreach ($terms_children as $child) :?>
								<?php $term = get_term_by( 'id', $child, $post_type_taxonomy ); ?>
								<?php if($term->count > 0) :?>
									<div class="p-work-inner">
										<h3 id="<?php echo $term->slug; ?>" class="p-work-sub l-anchor"><?php echo $term->name; ?></h3>
										<?php
											$args = getArgs($post_type_slug, $post_type_taxonomy, $term->term_id);
											$wp_query = new WP_Query( $args );
										?>
										<?php if( $wp_query->have_posts() ) :?>
											<ul class="p-work-list">
												<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
													<?php
														$title = get_field('works_special');
														$desc = get_field('works_content');
														$img_default = ASSETS_PATH . '/images/works/img_default.png';
														$img_src = get_the_post_thumbnail_url();
														$img_src = $img_src ? $img_src : $img_default;
														getWorkItem($title, $desc, $img_src);
													?>
												<?php endwhile; ?>
											</ul>
										<?php endif; ?>
									</div>
								<?php endif; ?>
							<?php endforeach; ?>
						<!-- 小カテゴリーなし -->
						<?php else: ?>
							<?php
								$args = getArgs($post_type_slug, $post_type_taxonomy, $parent_id);
								$wp_query = new WP_Query( $args );
							?>
							<?php if( $wp_query->have_posts() ) :?>
								<ul class="p-work-list">
									<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
									<?php
										$title = get_field('works_special');
										$desc = get_field('works_content');
										$img_default = ASSETS_PATH . '/images/works/img_default.png';
										$img_src = get_the_post_thumbnail_url();
										$img_src = $img_src ? $img_src : $img_default;
										getWorkItem($title, $desc, $img_src);
									?>
									<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						<?php endif; ?>
					</div>
					<!-- WORKS END -->
				<?php endforeach; ?>

				<!-- WORKS BEGIN -->
				<div class="p-work">
					<h2 id="om" class="p-work-title l-anchorMega">O＆M</h2>

					<p class="tac"><img src="<?php echo ASSETS_PATH; ?>/images/works/img_om_en_pc.png" alt="Achievement by year（As of December 2018）"></p>
					<p class="m-sectionMLarge tac"><img src="<?php echo ASSETS_PATH; ?>/images/works/img_satellite.png" alt="イワテック第一温泉発電所"></p>

					<p class="m-txt2 fwm tac mt10">Solar Power plants under maintenance contracts  (Partial list)</p>

					<div class="m-sectionMedium">
						<h3 class="p-work-sub">■ Solar Power plant inspection<br class="nopc">（under “Solar Wellness”）</h3>

						<ul class="p-work-wellness">
							<li>
								<span class="p-work-wellness-place">Miyazaki Pref.</span>
								<span class="p-work-wellness-type">Extra-high voltage</span>
								<span>50MW~100MW</span>
							</li>
							<li>
								<span class="p-work-wellness-place">Okayama Pref.</span>
								<span class="p-work-wellness-type">Extra-high voltage</span>
								<span>200MW~250MW</span>
							</li>
							<li>
								<span class="p-work-wellness-place">Kagoshima Pref.</span>
								<span class="p-work-wellness-type">Extra-high voltage</span>
								<span>50MW~100MW</span>
							</li>
						</ul>

						<div class="p-work-box">
							<p class="p-work-box-txt">IWATEC is a member of <br class="nopc">“Solar Wellness”, PV power <br class="nopc">plant<br class="nosp">maintenance <br class="nopc">network.</p>
							<p class="p-work-box-btn"><a class="is-imghover" href="https://www.npcgroup.net/solarpower/inspection-service/solar-wellness" target="_blank"><img src="<?php echo ASSETS_PATH; ?>/images/works/bg_solarwellness.jpg" alt="Solar Wellness"></a></p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="clearfix">
		<div class="l-sidenav-content">
			<?php get_template_part('include/en/contact_en') ?>
		</div>
	</div>
</div>