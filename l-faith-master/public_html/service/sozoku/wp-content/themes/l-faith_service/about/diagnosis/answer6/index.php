<div class="m-mv">
	<p class="m-mv-img">
		<picture>
			<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/about/mv_pc.png">
			<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/about/mv_sp.png">
			<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/mv_pc.png" alt="PLAN 最適プラン診断">
		</picture>
	</p>
	<div class="m-mv-content">
		<div class="m-mv-title-cover">
			<span class="m-mv-sub">PLAN</span>
			<h1 class="m-mv-title tac">最適プラン診断</h1>
		</div>
	</div>
</div>
<!-- .l-topicPath -->
<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>
<!-- /.l-topicPath -->

<section id="a-question" class="sec-service-catch"><div class="area-contents">
	<h3 class="tit-catch ff-mincho">最適プラン診断</h3>
	<p class="txt">「何から始めれば？」「誰に頼めばいいの？」といった、相続の「？」は<br>リーガル・フェイス グループにお任せください。<br>いくつかの質問にお答えいただき、お客さまにとって最適なサービス・プランを導き出します。</p>
	<div class="sec-diagnosis">
		<div class="sec-diagnosis-in">
			<h4 class="ff-mincho">診断結果</h4>
			<p class="ff-mincho">一度、お電話または、メールフォームにてお問い合わせください。</p>
			<p class="txt">相続人の間で遺産分割に争いがあるなど、ご相談内容によっては<br>提携しております弁護士等、適切な窓口をご紹介させていただきます。</p>
			<p class="ff-mincho txt-tel">tel.0120-800-370</p>
			<div class="btn-mail">
				<a href="<?php echo home_url('/contact/'); ?>" class="btn btn-bg-black btn-size-310"><i class="ico ico-mail"></i> お問い合わせはこちら</a>
			</div>
		</div>
		<div class="area-btn ta-c">
			<a href="../" class="btn btn-bg-gray btn-size-240 btn-next">もう一度診断する</a>
		</div>
	</div>
</div></section><!-- / .sec-service-catch -->

<?php get_footer(); ?>