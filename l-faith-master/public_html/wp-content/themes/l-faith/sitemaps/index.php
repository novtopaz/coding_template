<div class="l-pagebody">
	<div class="l-content">

	<div class="l-h1-wrap">
		<h1 class="l-h1"><?php the_title(); ?></h1>
		<p class="l-h1-sub">SITEMAP</p>
	</div><!--l-h1-wrap-->

	<div class="l-main-contents">
		<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

		<div class="clearfix">
			<!--ホーム-->
			<div class="p-content is-matchHeight">
				<p class="p-content-title"><a href="<?php echo home_url(); ?>/" class="imghover">ホーム</a></p>
			</div>

			<!--企業情報-->
			<div class="p-content is-matchHeight">
				<p class="p-content-title"><a href="<?php echo home_url(); ?>/office/" class="imghover">グループ情報</a></p>
				<p class="p-content-sub"><a href="<?php echo home_url(); ?>/office/summary/" class="m-txt-hover">グループ概要</a></p>

				<p class="p-content-sub"><a href="<?php echo home_url(); ?>/office/access/" class="m-txt-hover">アクセス</a></p>
			</div>

			<!--事業内容-->
			<div class="p-content is-matchHeight">
				<p class="p-content-title"><a href="<?php echo home_url(); ?>/service/" class="imghover">事業内容</a></p>
			</div>

			<!--お知らせ-->
			<div class="p-content is-matchHeight">
				<p class="p-content-title"><a href="<?php echo home_url(); ?>/info/" class="imghover">お知らせ</a></p>
				<?php
				$info_tax = 'info_category';
				$args = array(
					'taxonomy' => $info_tax,
				);
				$the_query = new WP_Term_Query($args);
				if($the_query):
				foreach($the_query->get_terms() as $term):
					$term_slug = $term->slug;
					$term_link = get_term_link($term_slug, $info_tax);
					$term_name = $term->name;
				?>
				<p class="p-content-sub"><a href="<?php echo $term_link; ?>" class="m-txt-hover"><?php echo $term_name; ?></a></p>
				<?php endforeach; endif; ?>
			</div>

			<!--採用情報-->
			<div class="p-content is-matchHeight">
				<p class="p-content-title"><a href="<?php echo home_url(); ?>/recruit/" class="imghover">採用情報</a></p>
				<p class="p-content-sub"><a href="<?php echo home_url(); ?>/recruit/staff/" class="m-txt-hover">スタッフ紹介</a></p>
				<p class="p-content-sub"><a href="<?php echo home_url(); ?>/recruit/about/" class="m-txt-hover">リーガル・フェイスを知る</a></p>
				<p class="p-content-sub"><a href="<?php echo home_url(); ?>/recruit/work/" class="m-txt-hover">リーガル・フェイスの仕事を知る</a></p>
				<p class="p-content-sub"><a href="<?php echo home_url(); ?>/recruit/jobs/" class="m-txt-hover">募集職種</a></p>
				<p class="p-content-sub"><a href="<?php echo home_url(); ?>/recruit/entry/" target="_blank" class="m-txt-hover">エントリーフォーム</a></p>
			</div>

			<!--スタッフブログ-->
			<div class="p-content is-matchHeight">
				<p class="p-content-title"><a href="<?php echo home_url(); ?>/blog/" class="imghover">スタッフブログ</a></p>
				<?php
				$blog_tax = 'blog_category';
				$args = array(
					'taxonomy' => $blog_tax,
				);
				$the_query = new WP_Term_Query($args);
				if($the_query):
				foreach($the_query->get_terms() as $term):
					$term_slug = $term->slug;
					$term_link = get_term_link($term_slug, $blog_tax);
					$term_name = $term->name;
				?>
				<p class="p-content-sub"><a href="<?php echo $term_link; ?>" class="m-txt-hover"><?php echo $term_name; ?></a></p>
				<?php endforeach; endif; ?>
			</div>

			<!--お問い合わせ-->
			<div class="p-content is-matchHeight">
				<p class="p-content-title"><a href="<?php echo home_url(); ?>/contact/" target="_blank" class="imghover">お問い合わせ</a></p>
			</div>

			<!--プライバシーポリシー-->
			<div class="p-content is-matchHeight">
				<p class="p-content-title"><a href="<?php echo home_url(); ?>/privacy/" class="imghover">プライバシーポリシー</a></p>
			</div>

			<!--プライバシーポリシー-->
			<div class="p-content is-matchHeight">
				<p class="p-content-title"><a href="<?php echo home_url(); ?>/security/" class="imghover">情報セキュリティ基本方針</a></p>
			</div>
		</div><!--clearfix-->
	</div><!--l-contents-area-->

	</div><!--l-content-->
</div><!-- l-pagebody -->