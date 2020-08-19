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
			<p class="ff-mincho">あなたに最適なサービス・プランは、<br><span>「生前対策サポートプラン」<span>です！</span></span></p>
			<p class="txt">相続に関するトラブルを回避するためのプランです。<br>生前贈与や遺言書作成等の不安や疑問にも丁寧にお答えいたします。お気軽にご相談ください。</p>
			<a href="<?php echo home_url('/about/support/') ?>" class="btn btn-bg-black btn-size-440"><span class="pc-block">「生前対策サポートプラン」について</span>詳しくはこちら<i aria-hidden="true" class="btn-ico btn-ico-pos-r"></i></a>
		</div>
		<div class="area-btn ta-c">
			<a href="../" class="btn btn-bg-gray btn-size-240 btn-next">もう一度診断する</a>
		</div>
	</div>
</div></section><!-- / .sec-service-catch -->

<?php get_footer(); ?>