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
	<?php if(have_posts() ) : ?>
	<?php while (have_posts() ) :the_post(); ?>
	<div class="p-single-cover">
		<div class="p-single-intro clearfix">
			<p class="p-single-intro-img is-matchHeightPC flL-pc">
				<?php $thumbnail = get_the_post_thumbnail(); ?>
				<?php if(!empty($thumbnail)) : ?>
					<?php the_post_thumbnail( 'full', array( 'alt' => get_the_title() ) );  ?>
				<?php else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/img_default.png" alt="No Image">
				<?php endif; ?>
			</p>
			<div class="p-single-intro-content is-matchHeightPC flR-pc">
				<div class="p-single-intro-content-inner">
					<?php $terms = get_the_terms( get_the_ID(), 'case_tax' ); ?>
					<div class="p-single-intro-tag-cover">
						<?php if(!empty($terms)) : ?>
						<?php foreach( $terms as $term ): ?>
							<?php
								$termClass = 'p-listCase-item-tag-';
								$termName = $term->name;
								$termLink = get_term_link( $term );

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
							<span class="m-tag fNotoR <?php echo $termClass; ?>"><a class="imghover" href="<?php echo $termLink; ?>"><?php echo $term->name; ?></a></span>
						<?php endforeach; ?>
						<?php endif; ?>
					</div>
					<h1 class="p-single-intro-title"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>

		<div class="p-single-content">
			<div class="p-single-content-block">
				<h2 class="p-single-titleH2">1. 相談の背景</h2>
				<?php the_field('case_background'); ?>
			</div>
			<div class="p-single-content-block">
				<h2 class="p-single-titleH2">2. 相談に対する弊所の対応</h2>
				<?php the_field('case_response'); ?>
			</div>
			<div class="p-single-content-block">
				<h2 class="p-single-titleH2">3. 結果</h2>
				<?php the_field('case_result'); ?>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
	<p class="btn btn-back"><a href="<?php echo home_url('/case/'); ?>"><span>一覧へ戻る</span></a></p>
</div>