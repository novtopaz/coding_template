<div class="p-content-right">
	<?php
		$args = array(
			'post_type' => 'column',
			'posts_per_page' => 6,
		);
		$wp_query = new WP_Query( $args );
		$termArray = array();
	?>
	<p class="p-sidebar-title p-sidebar-title-search">キーワード検索</p>
	<div class="p-sidebar-tag-cover">
		<?php if($wp_query->have_posts() ) : ?>
		<?php while ($wp_query->have_posts() ) :$wp_query->the_post(); ?>
		<?php
			$terms = get_the_terms( get_the_ID(), 'column_tax' );
			if(!empty($terms)){
				foreach( $terms as $term ){
					$termName = $term->name;
					if(!in_array($termName, $termArray)){
						array_push($termArray, $termName);
						$termLink = get_term_link( $term );
						echo '<span class="m-tag fNotoR"><a class="imghover" href="' . esc_url( $termLink ) . '">' . $term->name . '</a></span>';
					}
				}
			}
		?>
		<?php endwhile; ?>
		<?php else: ?>
			<p class="m-txt">カテゴリーがありません。</p>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	</div>

	<p class="p-sidebar-title p-sidebar-title-notice">注目の記事</p>

	<?php
	if (function_exists('wpp_get_mostpopular')) {
		$args = array(
			// PV集計期間（daily, weekly, monthly, all から選べます）
			'range' => 'weekly',
			// PV数順で並び替え（comments を指定するとコメント順になります）
			'order_by' => 'views',
			// 投稿タイプ
			'post_type' => 'column',
			// 表示数
			'limit' => 3,
			// 閲覧数表示するか（1なら表示、 0なら非表示）
			'stats_views' => '0',
		);
		wpp_get_mostpopular($args); //リストが出力される。
	}
	?>
</div>