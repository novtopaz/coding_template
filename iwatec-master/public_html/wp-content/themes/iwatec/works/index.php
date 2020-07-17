<?php
$mv_text = [
	'h1'=>'納入事例・<br class="nopc">導入事例',
];

set_query_var('mv_text', $mv_text);
get_template_part('include/mv');
?>

<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

<div class="l-content clearfix">
	<div class="l-container clearfix">
		<div class="l-sidenav nosp">
			<?php
			$post_type_slug = get_post_type_object(get_post_type())->name;
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
			                'orderby' => 'order',
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
				<p class="m-titleH3 tac">イワテックが<br class="nopc">これまで取り組んできた、<br>
					様々なエネルギーシステムの<br class="nopc">納入事例・導入事例をご紹介します。</p>

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
														$title = get_field('works_jp')['works_special'];
														$desc = get_field('works_jp')['works_content'];
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
										$title = get_field('works_jp')['works_special'];
										$desc = get_field('works_jp')['works_content'];
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

					<p class="tac"><?php getPicture('img_om', 'png', 'works', '年別点検実積（2018.12時点）') ?></p>
					<p class="m-sectionMLarge tac"><img src="<?php echo ASSETS_PATH; ?>/images/works/img_satellite.png" alt="イワテック第一温泉発電所"></p>

					<p class="m-txt2 fwm tac mt10">メンテナンスご契約中の発電所（一部）</p>

					<div class="m-sectionMedium">
						<h3 class="p-work-sub">■ 発電所検査作業請負<br class="nopc">（ソーラーウェルネス）</h3>

						<ul class="p-work-wellness">
							<li>
								<span class="p-work-wellness-place">宮崎県</span>
								<span class="p-work-wellness-type">特別高圧</span>
								<span>50ＭＷ以上100ＭＷ未満</span>
							</li>
							<li>
								<span class="p-work-wellness-place">岡山県</span>
								<span class="p-work-wellness-type">特別高圧</span>
								<span>200ＭＷ以上250ＭＷ未満</span>
							</li>
							<li>
								<span class="p-work-wellness-place">鹿児島県</span>
								<span class="p-work-wellness-type">特別高圧</span>
								<span>50ＭＷ以上100ＭＷ未満</span>
							</li>
						</ul>

						<div class="p-work-box">
							<p class="p-work-box-txt">当社は、太陽光発電所の<br class="nopc">メンテナンスネットワーク<br>「ソーラーウェルネス」の<br class="nopc">加盟パートナーです。</p>
							<p class="p-work-box-btn"><a class="is-imghover" href="https://www.npcgroup.net/solarpower/inspection-service/solar-wellness" target="_blank"><img src="<?php echo ASSETS_PATH; ?>/images/works/bg_solarwellness.jpg" alt="Solar Wellness"></a></p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="clearfix">
		<div class="l-sidenav-content">
			<?php get_template_part('include/contact') ?>
		</div>
	</div>
</div>