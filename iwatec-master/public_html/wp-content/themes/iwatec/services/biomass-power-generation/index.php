<?php
$mv_text = [
	'h1'=>'バイオマス<br class="nopc">発電事業',
];

set_query_var('mv_text', $mv_text);
get_template_part('include/mv');
?>

<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

<div class="l-content">
	<?php /*
	<div class="m-box">
		<p class="m-round m-titleH3 m-sectionLarge tac"><span>CO<span class="m-txtSmall">2</span>が増えない<br class="nopc">生物由来の廃棄物を燃料にした<br>
		バイオマス発電をご提案します。</span></p>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">バイオマス発電とは</h2>
			<!-- INTRO BEGIN -->
			<div class="p-intro m-sectionMedium">
				<!-- RESOURCE BEGIN -->
				<p class="p-intro-deco-resource p-intro-deco-animateDefault p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_resource.png" alt="バイオマス資源"></p>
				<p class="p-intro-deco-process p-intro-deco-animateDefault p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_process.png" alt="加工"></p>
				<!-- RESOURCE END -->

				<!-- ENERGY BEGIN -->
				<p class="p-intro-deco-energy p-intro-deco-animateDefault p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_energy.png" alt="バイオマスエネルギー"></p>
				<p class="p-intro-deco-use p-intro-deco-animateDefault p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_use.png" alt="利用"></p>
				<!-- ENERGY END -->

				<!-- UOE BEGIN -->
				<div class="p-intro-deco-animateDefault">
					<p class="p-intro-deco-uoe p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_uoe.png" alt="エネルギーの利用"></p>
					<p class="p-intro-deco-fire p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_fire.png" alt="火"></p>
					<p class="p-intro-deco-bulb p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_bulb.png" alt="電球"></p>
					<p class="p-intro-deco-co2 p-intro-deco-animateDefault p-intro-deco-animateInfinite p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_co2.png" alt="CO2"></p>
				</div>
				<p class="p-intro-deco-synthesis p-intro-deco-animateDefault p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_synthesis.png" alt="光合成"></p>
				<!-- UOE END -->

				<!-- PHOTOSYSTHESIS BEGIN -->
				<div class="p-intro-deco-animateDefault">
					<p class="p-intro-deco-photosysthesis p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_photosysthesis.png" alt="光合成"></p>

					<p class="p-intro-deco-tree p-intro-deco-animateDefault p-intro-deco-animateInfinite p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_tree.png" alt="木"></p>

					<p class="p-intro-deco-o2 p-intro-deco-animateDefault p-intro-deco-animateInfinite p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_o2.png" alt="O2"></p>
				</div>
				<p class="p-intro-deco-rsc p-intro-deco-animateDefault p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_rsc.png" alt="資源"></p>
				<!-- PHOTOSYSTHESIS END -->
			</div>
			<!-- INTRO END -->

			<p class="m-txt m-sectionSmall tac sptal">バイオマス発電とは、木くずや家畜の排せつ物など、生物由来の廃棄物を燃料として、<br class="nosp">燃焼する際の熱を利用した発電方式です。</p>
		</div>

		<div class="m-sectionLarge">
			<div class="p-box">
				<h3 class="p-box-title">バイオマス燃料を燃やすと環境に悪影響では？</h3>
				<p class="m-txt">バイオマス発電は、「カーボンニュートラル」という考え方に基づいて行われています。<br>
				バイオマス燃料は、燃やすと二酸化炭素（CO<span class="m-txtMini">2</span>）を排出しますが、植物の成長過程では光合成によりCO<span class="m-txtMini">2</span>を吸収しているので、植物が排出する炭素量と吸収する炭素量は同じとみなされ、大気中のCO<span class="m-txtMini">2</span>の増減に影響を与えないとされています。</p>
			</div>
		</div>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">バイオガス発電について</h2>

			<!-- BIOGAS BEGIN -->
			<div class="p-biogas m-sectionMedium">
				<p><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_about.gif" alt="バイオガス発電について"></p>
				<p class="m-txtSmall mt10 nosp">※カーソルを重ねると説明文が表示されます</p>

				<ul class="m-hover-area nosp">
					<li class="p-biogas-area-digestive"></li>
					<li class="p-biogas-area-fermenter"></li>
					<li class="p-biogas-area-holder"></li>
					<!-- <li class="p-biogas-area-condenser"></li> -->
					<li class="p-biogas-area-food"></li>
					<li class="p-biogas-area-heat"></li>
					<li class="p-biogas-area-engine"></li>

				</ul>

				<ul class="m-hover-comment nosp">
					<li class="p-biogas-comment-digestive m-hover-comment-down">発酵後の消化液を貯留します。<br>
						消化液は主に液肥として農地還元<br>
					できます。</li>
					<li class="p-biogas-comment-fermenter m-hover-comment-down">嫌気性発酵を行い、<br>バイオガスを発生させます。</li>
					<li class="p-biogas-comment-holder m-hover-comment-up">発生した消化ガスを<br>
					貯めておきます。</li>
					<!-- <li class="p-biogas-comment-condenser">発電後の蒸気を冷<br>却・液化させ、そ<br>の圧力を下げるこ<br>とで発電出力を向<br>上させます。</li> -->
					<li class="p-biogas-comment-food m-hover-comment-left">家畜糞尿や食品残渣、廃棄<br>される農作物などが原料と<br>なります。</li>
					<li class="p-biogas-comment-heat m-hover-comment-right">発電時の排熱を<br>温水として利用<br>できます。</li>
					<li class="p-biogas-comment-engine m-hover-comment-up">消化ガスを燃焼させ、<br>
					発電します。</li>
				</ul>
			</div>
			<!-- BIOGAS END -->

			<p class="m-txt m-sectionMedium">バイオマス発電には複数の発電方式がありますが、イワテックは“再生可能なバイオマス”に注目し、家畜のふん尿や食品などの廃棄物からエネルギーを取り出すバイオガス発電に取り組んでいます。</p>
		</div>

		<div class="m-sectionMedium">
			<div class="p-2col">
				<p class="p-2col-img"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_digestive.jpg" alt="消化液の活用"></p>
				<div class="p-2col-content">
					<div class="p-box">
						<h3 class="p-box-title">消化液の活用</h3>
						<p class="m-txt">消化ガスを発生した後に残る発酵残渣を消化液といいます。<br>
						イワテックはこの消化液についても無駄にせず、有効活用方法を検討します。</p>
						<p class="m-txt m-indent fwm mt10">・液肥としての利用</p>
						<p class="m-txt m-indent fwm">・固液分離し、固形分を堆肥や家畜の再生敷料として利用</p>
						<p class="m-txt m-indent fwm">・循環型農業の推進に寄与</p>
					</div> 
				</div>
			</div>
		</div>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">バイオマス・バイオガス発電を導入するメリット</h2>
			<ul class="m-merit m-sectionMedium animate-default-orderCover">
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_digestive_juice.jpg" alt="消化液の肥料化による廃棄コスト低減"></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">消化液の肥料化による<br>
						廃棄コスト低減</p>
					</div>
					<p class="m-txt">バイオガスプラントの副産物は液体肥料または堆肥として再利用できます。廃棄物の低減による廃棄コストの低減が期待できます。</p>
				</li>
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_saving.jpg" alt="熱利用による省エネルギー"></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">熱利用による省エネルギー</p>
					</div>
					<p class="m-txt">バイオマス資源を燃料とした発電では、その際に発生する排熱もエネルギーとして利用できるため、省エネルギーかつ、効率的です。</p>
				</li>
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_enviroment.jpg" alt="臭気等、周辺環境の改善"></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">臭気等、周辺環境の改善</p>
					</div>
					<p class="m-txt">堆肥化では腐熟するまで悪臭成分が放出されますが、バイオガスプラントでは発酵槽が完全に密閉されるため、臭気が外へ漏れることはなく、地域環境・臭気の改善に寄与できます。</p>
				</li>
			</ul>
		</div>
	</div>

	<!-- SERVICE CONSULT BEGIN -->
	<div class="m-serviceConsult-cover">
		<div class="m-serviceConsult">
			<div class="m-serviceConsult-content">
				<p class="m-serviceConsult-title">バイオマス・バイオガス発電についてのご相談</p>

				<div class="m-serviceConsult-inner">
					<div class="m-serviceConsult-left">
						<div class="m-serviceConsult-box m-serviceConsult-box-leftTop">
							<p class="m-serviceConsult-box-txt">家畜排泄物の<br>
							処理で困っている</p>
						</div>
						<div class="m-serviceConsult-box m-serviceConsult-box-leftBottom">
							<p class="m-serviceConsult-box-txt">バイオマス系廃棄物の<br class="nosp">処理費用を削減したい</p>
						</div>
					</div>
					<div class="m-serviceConsult-center tac">
						<p><img src="<?php echo ASSETS_PATH; ?>/images/common/img_consult_man.png" alt="地熱発電についてのご相談"></p>
						<p class="m-serviceConsult-center-deco"><img src="<?php echo ASSETS_PATH; ?>/images/common/img_consult_man_head.png" alt="頭"></p>
					</div>
					<div class="m-serviceConsult-right">
						<div class="m-serviceConsult-box m-serviceConsult-box-rightTop">
							<p class="m-serviceConsult-box-txt">食品等の廃棄物を<br>
							有効活用したい</p>
						</div>
						<div class="m-serviceConsult-box m-serviceConsult-box-rightBottom">
							<p class="m-serviceConsult-box-txt">環境にやさしい<br>
							循環型社会を目指したい</p>
						</div>
					</div>
				</div>

				<p class="m-serviceConsult-sub">事業の詳細、ご質問やお困りごとなど、<br class="nopc">下記より承っております。</p>
			</div>
			<?php get_template_part('include/contact_info') ?>
		</div>
	</div>
	<!-- SERVICE CONSULT END -->
	*/ ?>

	<?php if(have_posts()): while(have_posts()): the_post() ?>
		<?php the_content(); ?>
	<?php endwhile; endif ?>

	<?php get_template_part('include/service_link') ?>
</div>