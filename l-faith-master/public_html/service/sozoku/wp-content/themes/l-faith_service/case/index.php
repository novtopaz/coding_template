<div class="m-mv">
	<p class="m-mv-img">
		<picture>
			<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/case/mv_pc.png">
			<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/case/mv_sp.png">
			<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/case/mv_pc.png" alt="相談事例 メインビジュアル">
		</picture>
	</p>
	<div class="m-mv-content">
		<div class="m-mv-title-cover">
			<span class="m-mv-sub">CASE</span>
			<h1 class="m-mv-title tac">相談事例</h1>
		</div>
	</div>
</div>
<!-- .l-topicPath -->
<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>
<!-- /.l-topicPath -->

<div class="l-content">
	<p class="m-txt">リーガル・フェイスでは毎日たくさんのお客様のお悩みを解決しています。<br>
	リーガル・フェイスに寄せられた相続に関するご相談と解決事例を一部ご紹介いたします。</p>

	<ul class="p-listControl">
		<li class="p-listControl-all"><a class="is-active" href="<?php echo home_url('/case/'); ?>"><span>全て</span></a></li>
		<?php
			$terms = get_terms( array(
			    'taxonomy' => 'case_tax',
			) );
			foreach ($terms as $term) {
				$termName = $term->name;
				$termLink = get_term_link( $term );
				$termClass = 'p-listControl-btn ';

				if($termName == '相続手続おまかせプラン'){
					$termClass = $termClass.'p-listControl-btn-red';
				} elseif($termName == '生前対策サポートプラン'){
					$termClass = $termClass.'p-listControl-btn-gold';
				}elseif($termName == '相続登記おまかせプラン／相続登記節約プラン'){
					$termClass = $termClass.'p-listControl-btn-blue';
					$pos = mb_strpos($termName,"相続登記節約プラン");
					
					$termName = mb_substr_replace($termName, '<br>', $pos, 0);
				}else{
					$termClass = $termClass.'p-listControl-btn-other';
				}
				echo '<li class="'.$termClass.'"><a href="'.$termLink.'"><span>'.$termName.'</span></a></li>';
			}
		?>
	</ul>

	<?php
		$paged = $_GET['pages'] ? $_GET['pages'] : 1;
		$args = array(
			'post_type' => 'case',
			'posts_per_page' => 5,
			'paged' => $paged,
		);
		$wp_query = new WP_Query( $args );
	?>

	<?php if($wp_query->have_posts() ) : ?>
	<ul class="p-listCase">
		<?php while ($wp_query->have_posts() ) :$wp_query->the_post(); ?>
		<li class="p-listCase-item">
			<a class="imghover clearfix" href="<?php the_permalink(); ?>">
				<p class="p-listCase-item-img is-matchHeightPC flL-pc">
					<?php $thumbnail = get_the_post_thumbnail(); ?>
					<?php if(!empty($thumbnail)) : ?>
						<?php the_post_thumbnail( 'full', array( 'alt' => get_the_title() ) );  ?>
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/img_default.png" alt="No Image">
					<?php endif; ?>
				</p>
				<div class="p-listCase-item-content is-matchHeightPC flL-pc">
					<div class="p-listCase-item-inner">
						<p class="p-listCase-item-title"><?php the_title(); ?></p>
						<div class="m-txt fNotoR"><?php echo mb_substr(get_field('case_lead'), 0, 100).'...';?></div>
						<?php
							$terms = get_the_terms( get_the_ID(), 'case_tax' );
						?>
						<?php if(!empty($terms)) : ?>
						<div class="p-listCase-item-tag-cover">
						<?php foreach( $terms as $term ): ?>
							<?php
								$termClass = 'p-listCase-item-tag-';
								$termName = $term->name;

								if($termName == '相続手続おまかせプラン'){
									$termClass = $termClass.'red';
								} elseif($termName == '生前対策サポートプラン'){
									$termClass = $termClass.'gold';
								}elseif($termName == '相続登記おまかせプラン／相続登記節約プラン'){
									$termClass = $termClass.'blue';
								}else{
									$termClass = $termClass.'other';
								}
							?>
							<span class="m-tag fNotoR <?php echo $termClass; ?>"><?php echo $term->name; ?></span>
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