<header class="l-header clearfix<?php if( is_front_page() ){ echo ' is-fv'; } ?>">
	<?php if( is_front_page() ): ?>
	<h1 class="l-logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/img_logo_white.png" alt="Legal faith"></a></h1>
	<?php else: ?>
	<p class="l-logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/img_logo.png" alt="Legal faith"></a></p>
	<?php endif; ?>

	<nav class="l-gnav-wrap clearfix">
		<ul class="l-gnav">
			<li><a href="/office/">
				<span class="l-gnav-en">OFFICE</span>
				<span class="l-gnav-ja">グループ情報</span>
			</a></li>
			<li><a href="/service/">
				<span class="l-gnav-en">SERVICE</span>
				<span class="l-gnav-ja">事業内容</span>
			</a></li>
			<li><a href="/recruit/">
				<span class="l-gnav-en">RECRUIT</span>
				<span class="l-gnav-ja">採用情報</span>
			</a></li>
			<li><a href="/info/">
				<span class="l-gnav-en">INFO</span>
				<span class="l-gnav-ja">お知らせ</span>
			</a></li>
		</ul>
		<ul class="l-gnav-cv">
			<li><a href="tel:0359091990"><p class="is-tel">
				<span class="l-gnav-cv-tel"><span>TEL.</span> 03-5909-1990</span>
				<span class="l-gnav-cv-tel-txt">営業時間：09:00～18:00</span>
			</p></a></li>
			<li><a href="/contact/" target="_blank" class="m-cvbtn-hover">
				<span>CONTACT</span>
				お問い合わせ
			</a></li>
		</ul>
	</nav>

	<div class="l-nav-btn"><p></p><p></p><p></p><span>MENU</span></div>
</header>