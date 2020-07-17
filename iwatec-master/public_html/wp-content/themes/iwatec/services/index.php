<?php
$mv_text = [
'h1'=>'事業内容',
];

set_query_var('mv_text', $mv_text);
get_template_part('include/mv');
?>

<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

<?php if(have_posts()): while(have_posts()): the_post() ?>
	<?php the_content(); ?>
<?php endwhile; endif ?>

<?php /*
<div class="l-content clearfix">
	<div class="m-box">
		<p class="m-titleH3 tac">限りない自然からの恩恵をうけ、<br>
		イワテックは太陽光発電をはじめ、<br class="nopc">地熱・バイオマス・<br class="nosp">
		小水力発電等の<br class="nopc">システム開発を通して、<br>
		環境にやさしい循環型エネルギー<br class="nopc">社会の実現を目指しています。</p>

		<!-- ENERGY BEGIN -->
		<div class="m-sectionLarge">
			<h2 class="m-titleH2">再生可能エネルギーとは</h2>

			<p class="m-sectionMedium tac"><img src="<?php echo ASSETS_PATH; ?>/images/services/ing_energy.png" alt="再生可能エネルギー"></p>

			<h3 class="m-round m-titleH3 m-sectionLarge tac"><span>再生可能エネルギーとは、<br class="nopc">繰り返し利用できる、<br>
			環境にやさしいエネルギーのことです。</span></h3>

			<p class="m-txt m-sectionLarge">
			資源に限りのある石油や石炭、天然ガスといった化石エネルギーとは違い、一度利用しても継続して再生が可能であり、資源の枯渇を心配する必要がなく、持続的に利用することが出来ると考えられています。<br><br>
			発電時や熱利用時に、地球温暖化の原因となるCO<span class="m-txtMini">2</span>をほとんど排出しない為、環境にやさしいエネルギー源です。
			</p>
		</div>
		<!-- ENERGY END -->

		<!-- BUSINESS BEGIN -->
		<div class="m-sectionLarge">
			<h2 class="m-titleH2">イワテックの事業</h2>

			<ul class="p-business m-sectionMedium">
				<li class="clearfix">
					<div class="p-business-img p-business-right">
						<div class="p-business-img-inner">
							<img src="<?php echo ASSETS_PATH; ?>/images/services/ing_geotherma.png" alt="地熱発電事業">
							<p class="p-business-deco p-geotherma-deco1"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_geotherma_01.png" alt="煙"></p>
							<p class="p-business-deco p-geotherma-deco2"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_geotherma_02.png" alt="煙"></p>
							<p class="p-business-deco p-geotherma-deco3"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_geotherma_03.png" alt="煙"></p>
							<p class="p-business-deco p-geotherma-deco4"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_geotherma_04.png" alt="火山"></p>
						</div>
					</div>
				
					<div class="p-business-content p-business-left">
						<h4 class="p-business-title">地熱発電事業</h4>
						<p class="m-txt">当社は既存の温泉井戸の持つ地熱エネルギーを有効活用し、温泉街の皆様と協調した地域密着型の地熱発電事業を目指します。<br>
						<br>
						自社発電所で培ったノウハウを活かし、建設に係る諸手続きのサポートからシステム設計、機器調達、発電所建設や保守・管理に至るまでお客様に満足頂けるサービスをご提供します。
						</p>
						<p class="p-business-btn m-btn m-sectionMedium"><a href="<?php echo home_url('/services/geothermal-power-generation/') ?>"><span>詳細を見る</span></a></p>
					</div>
				</li>
				<li class="clearfix">
					<div class="p-business-img p-business-left">
						<div class="p-business-img-inner">
							<img src="<?php echo ASSETS_PATH; ?>/images/services/ing_bio.png" alt="バイオマス発電事業">
							<p class="p-business-deco p-bio-deco1"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_bio_01.png" alt="牛"></p>
							<p class="p-business-deco p-bio-deco2"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_bio_02.png" alt="牛"></p>
						</div>
					</div>
					<div class="p-business-content p-business-right tal">
						<h4 class="p-business-title">バイオマス発電事業</h4>
						<p class="m-txt">バイオマス発電は、未利用資源の有効活用、廃棄物削減などが可能であり、農畜産業における周辺環境の改善、地域経済活性化などに役立ちます。<br>
						<br>
						当社の強みである国際的なネットワークを活用し、国内外の高度なバイオマス技術を取り入れたシステムをご提案します。
						</p>
						<p class="p-business-btn m-btn m-sectionMedium"><a href="<?php echo home_url('/services/biomass-power-generation/') ?>"><span>詳細を見る</span></a></p>
					</div>
				</li>

				<li class="clearfix">
					<div class="p-business-img p-business-right">
						<div class="p-business-img-inner">
							<img src="<?php echo ASSETS_PATH; ?>/images/services/ing_water.png" alt="小水力発電事業">
							<p class="p-business-deco p-water-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_water.png" alt="小水力発電事業"></p>
						</div>
					</div>
					<div class="p-business-content p-business-left">
						<h4 class="p-business-title">小水力発電事業</h4>
						<p class="m-txt">小水力発電は、一般河川、農業用水、砂防ダム、上下水道など、現在無駄に捨てられている水流のエネルギーを有効利用します。<br>
						<br>
						当社は、地域の資源である小水力エネルギーを、農産加工施設や観光施設への利用など、地域の皆様と連携した事業でご提案します。
						</p>
						<p class="p-business-btn m-btn m-sectionMedium"><a href="<?php echo home_url('/services/small-hydropower-generation/') ?>"><span>詳細を見る</span></a></p>
					</div>
				</li>
				<li class="clearfix">
					<div class="p-business-img p-business-left">
						<div class="p-business-img-inner">
							<img src="<?php echo ASSETS_PATH; ?>/images/services/ing_solar.png" alt="太陽光発電事業">
							<p class="p-business-deco p-solar-deco1"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_solar01.png" alt="ライト"></p>
							<p class="p-business-deco p-solar-deco2"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_solar02.png" alt="ライト"></p>
							<p class="p-business-deco p-solar-deco3"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_solar03.png" alt="ライト"></p>
						</div>
					</div>
					<div class="p-business-content p-business-right tal">
						<h4 class="p-business-title">太陽光発電事業</h4>
						<p class="m-txt">創立以来、数多くの発電システム設計に携わってきました。その技術やノウハウを、最初に活かした再エネ事業が太陽光発電です。<br>
						<br>
						当社では設計・販売のみならず、産業用においてはEPCからO&Mに至るまで、安心・安全なトータルサービスをご提供します。
						</p>
						<p class="p-business-btn m-btn m-sectionMedium"><a href="<?php echo home_url('/services/photovoltaic-power-generation/') ?>"><span>詳細を見る</span></a></p>
					</div>
				</li>

				<li class="clearfix">
					<div class="p-business-img p-business-right">
						<div class="p-business-img-inner">
							<img src="<?php echo ASSETS_PATH; ?>/images/services/ing_om.png" alt="O＆M事業">
							<p class="p-business-deco p-om-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_om.png" alt="手"></p>
						</div>
					</div>
					<div class="p-business-content p-business-left">
						<h4 class="p-business-title">O＆M事業</h4>
						<p class="m-txt">発電設備のメンテナンスを確実に行うことは、発電性能を長く維持することに繋がります。当社では設計エンジニアの目線から点検を行うことで、より高い発電効率システムへの改善提案も可能です。</p>
						<p class="p-business-btn m-btn m-sectionMedium"><a href="<?php echo home_url('/services/operation-maintenance/') ?>"><span>詳細を見る</span></a></p>
					</div>
				</li>
				<li class="clearfix">
					<div class="p-business-img p-business-left">
						<div class="p-business-img-inner">
							<img src="<?php echo ASSETS_PATH; ?>/images/services/ing_h2.png" alt="水素・燃料電池事業">
							<p class="p-business-deco p-h2-deco01"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_h2_01.png" alt="ライト"></p>
							<div class="p-h2-deco-inner">
								<p class="p-business-deco p-h2-deco02"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_h2_02.png" alt="H2"></p>
								<p class="p-business-deco p-h2-deco03"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_h2_03.png" alt="H2"></p>
							</div>
						</div>
					</div>
				<div class="p-business-content p-business-right tal">
					<h4 class="p-business-title">水素・燃料電池事業</h4>
					<p class="m-txt">さまざまな資源からの製造が可能である水素は、エネルギー供給システムの柔軟性を確立し、世界に多くの恩恵をもたらすと考えられます。<br>
					<br>
					当社は、地球環境に寄り添い、安全で豊かな暮らしを実現するために、水素エネルギーを生成・利用するシステムづくりに邁進しています。
					</p>
					<p class="p-business-btn m-btn m-sectionMedium"><a href="<?php echo home_url('/services/hydrogen-fuelcell/') ?>"><span>詳細を見る</span></a></p>
				</div>
				</li>

				<li class="clearfix">
					<div class="p-business-img p-business-right">
						<div class="p-business-img-inner">
							<img src="<?php echo ASSETS_PATH; ?>/images/services/ing_oversea.png" alt="海外事業展開">
							<div class="p-oversea-deco-cover">
							<p class="p-business-deco p-oversea-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_oversea.png" alt="飛行機"></p>
							</div>
						</div>
					</div>
					<div class="p-business-content p-business-left">
						<h4 class="p-business-title">海外事業展開</h4>
						<p class="m-txt">インドコルカタに支社を配し、本社との技術連携により、グローバルな視点からの最新技術と、信頼性の高いシステム及びサービスをご提供します。</p>
						<p class="p-business-btn m-btn m-sectionMedium"><a href="<?php echo home_url('/services/overseas-business/') ?>"><span>詳細を見る</span></a></p>
					</div>
				</li>
			</ul>

		</div>
		<!-- BUSINESS END -->
	</div>

<?php get_template_part('include/contact') ?>
</div>
*/ ?>