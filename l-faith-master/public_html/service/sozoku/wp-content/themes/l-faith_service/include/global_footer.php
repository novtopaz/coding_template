<footer class="l-footer">
	<!-- /.l-pageTop -->
	<div class="l-pagetop clearfix">
		<?php if(is_tree('/about/diagnosis/')) :?>
			<?php
				global $post;
			    $post_slug = $post->post_name;
				$body_id = 'page-service-diagnosis';

			    if ( (strpos($post_slug, 'question') !== false) OR (strpos($post_slug, 'answer') !== false))  {
			    	$body_id = $body_id.'-'.$post_slug;
			    }
			?>
			<a class="pagelink" href="#<?php echo $body_id; ?>">
			<?php else :?>
			<a class="pagelink" href="#pagetop">
			<?php endif; ?>
			<img class="imgchange" src="<?php echo get_template_directory_uri() ?>/assets/images/common/footer/icn_pagetop.png" alt="トップへ戻る">
		</a>
	</div>
	<nav class="l-footer-list-cover">
		<ul class="l-footer-list">
			<li><a href="<?php echo home_url(''); ?>">ホーム</a></li>
			<li><a href="<?php echo home_url('/about/'); ?>">サービス</a></li>
			<li><a href="<?php echo home_url('/about/pricelist/'); ?>">料金表</a></li>
			<li><a href="<?php echo home_url('/case/'); ?>">相談事例</a></li>
			<li><a href="<?php echo home_url('/qa/'); ?>">相続Q＆A </a></li>
			<li><a href="<?php echo home_url('/voice/'); ?>">お客様の声</a></li>
			<li><a href="<?php echo home_url('/seminar/'); ?>">セミナー</a></li>
			<li><a href="<?php echo home_url('/column/'); ?>">コラム</a></li>
			<li><a class="l-footer-list-newtab" href="/office/summary/#anc01" target="_blank">事務所概要</a></li>
			<li><a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a></li>
		</ul>
	</nav>
	<div class="l-footer-content">
		<div class="l-content clearfix">
			<div class="l-footer-content-left">
				<p class="l-footer-content-logo"><a class="imghover" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/footer/logo.png" alt="Legal Faith リーガル・フェイス"></a></p>
				<p class="l-footer-content-txt">リーガル・フェイスグループ</p>
				<p class="l-footer-content-txt">〒163-1504<br>
					東京都新宿区西新宿一丁目6番1号<br>
					新宿エルタワー4F<br>
				tel： 03-5909-7560 fax：03-3347-5321<br>
			代表：03-5909-1990</p>
			</div>
			<div class="l-footer-content-right">
				<p class="l-footer-content-txt">お電話でのお問い合わせ</p>
				<p class="l-footer-content-tel">
					<a href="tel:0120-800-370">
						<picture class="is-tel">
							<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/footer/img_tel_pc.png">
							<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/footer/img_tel_sp.png">
							<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/footer/img_tel_pc.png" alt="0120-800-370 営業時間　09:00～18:00（土日祝要予約）">
						</picture>
					</a>
				</p>
				<p class="l-footer-content-btn btn btn-red"><a class="imghover" href="<?php echo home_url('/contact/') ?>"><span>メールでのお問い合わせ・<br>
			資料請求はこちら</span></a></p>
			</div>
		</div>
	</div>
	<p class="l-footer-copyright">Copyright© Legal Faith. All rights reserved.</p>
</footer>