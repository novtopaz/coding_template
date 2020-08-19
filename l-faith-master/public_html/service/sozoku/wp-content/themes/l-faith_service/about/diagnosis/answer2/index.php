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
			<p class="ff-mincho">あなたに最適なサービス・プランは、<br><span>「相続登記節約プラン」<span>です！</span></span></p>
			<p class="txt">不動産の相続手続きをお手伝いするプランです。<br>相続登記は土地や財産の所有権を明確にするためにもとても大切です。<br>お客様のご要望に応じて幅広くご対応いたします。</p>
			<a href="<?php echo home_url('/about/#no03') ?>" class="btn btn-bg-black btn-size-440"><span class="pc-block">「相続登記節約プラン」について</span>詳しくはこちら<i aria-hidden="true" class="btn-ico btn-ico-pos-r"></i></a>
		</div>
		<div class="area-btn ta-c">
			<a href="../" class="btn btn-bg-gray btn-size-240 btn-next">もう一度診断する</a>
		</div>
	</div>
</div></section><!-- / .sec-service-catch -->

<?php get_footer(); ?>