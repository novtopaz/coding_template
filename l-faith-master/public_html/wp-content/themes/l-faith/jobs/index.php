<?php
$post_type_slug = get_post_type_object(get_post_type())->name;
$post_type_taxonomy = $post_type_slug.'_category';
?>

<div class="l-pagebody">
	<div class="l-content">

		<div class="l-h1-wrap">
			<h1 class="l-h1"><?php echo get_post_type_object(get_post_type())->labels->name; ?></h1>
			<p class="l-h1-sub">REQUIREMENTS</p>
		</div><!--l-h1-wrap-->

		<div class="l-main-contents">
			<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

			<p class="p-lead-txt">現在、下記の職種で募集しています。<br>
			リーガル・フェイスのビジョンに共感しその実現を一緒に目指していただける方、<br>
			培ってきたスキルを思う存分に発揮いただける方のご応募をお待ちしております。</p>

			<?php
			$args = array(
				'taxonomy' => $post_type_taxonomy,
				'orderby' => 'slug',
				'order' => 'ASC',
			);
			$categories = get_categories( $args );
			?>
			<?php if( $categories ): ?>
			<div class="p-box-wrap clearfix">
				<?php foreach( $categories as $category ): ?>
				<div class="p-box is-matchHeight">
					<h2 class="p-cat-mh p-<?php echo $category->slug; ?>"><?php echo $category->name; ?></h2>
					<?php
						$args = array(
							'post_type' => $post_type_slug,
							'posts_per_page' => -1,
							'post_status' => 'publish',
							'tax_query' => array(
							 array(
								'taxonomy' => $post_type_taxonomy,
								'terms' => $category->slug,
								'field' => 'slug',
								'operator' => 'IN'
								),
							)
						);
					?>
					<?php $wp_query = new WP_Query( $args ); ?>
					<?php if( $wp_query->have_posts() ) : ?>
					<ul class="p-list">
					<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>" class="m-txt-hover"><?php the_title(); ?></a></li>
					<?php endwhile; ?>
					</ul>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
				<?php endforeach; ?>
			</div><!--p-box-wrap-->
			<?php endif; ?>

			<h2 class="m-mh01">採用の流れ</h2>
			<div class="p-flow-box-wrap">
				<div class="p-flow-box">
					<p class="p-flow-mh"><span>STEP 1</span>エントリー</p>
					<p class="p-flow-txt">エントリーフォームよりご応募ください。</p>
				</div>
				<div class="p-flow-box">
					<p class="p-flow-mh"><span>STEP 2</span>一次選考</p>
					<p class="p-flow-txt">応募フォームによる一次選考（書類選考）を行います。<br>
					一次選考後、採用担当者よりご連絡します。</p>
				</div>
				<div class="p-flow-box">
					<p class="p-flow-mh"><span>STEP 3</span>面接</p>
					<p class="p-flow-txt">面接を実施します。</p>
				</div>
				<div class="p-flow-box">
					<p class="p-flow-mh"><span>STEP 4</span>内定</p>
					<p class="p-flow-txt">採用担当者より条件を提示させていただき、入社に向けてご案内します。</p>
				</div>
				<div class="p-flow-box">
					<p class="p-flow-mh"><span>STEP 5</span>入社</p>
					<p class="p-flow-txt">入社日はご相談に応じます。<br>
					入社に際しての手続きは、採用担当者よりご案内します。</p>
				</div>
			</div><!--p-flow-box-wrap-->

			<?php get_template_part( '/include/cv_entry' ); // エントリーボックス ?>
		</div><!--l-main-contents-->

	</div><!--l-content-->
</div><!-- l-pagebody -->