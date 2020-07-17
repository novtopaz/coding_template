<?php
$mv_text = [
	'h1'=>'水素・<br class="nopc">燃料電池事業',
];

set_query_var('mv_text', $mv_text);
get_template_part('include/mv');
?>

<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

<div class="l-content">
	<?php /*
	<div class="m-box">
		<h2 class="m-titleH2">水素がもたらす未来図</h2>

		<!-- FUTURE BEGIN -->
		<div class="p-future m-sectionMedium">
			<p class="p-future-map"><img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/ing_future.png" alt="水素がもたらす未来図"></p>

			<div class="p-future-animateItem">
				<span class="p-future-deco-metan p-future-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/icn_metan.png" alt="メタン"></span>

				<span class="p-future-deco-thunder01 p-future-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/icn_thunder.png" alt="電気"></span>
				<span class="p-future-deco-thunder02 p-future-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/icn_thunder.png" alt="電気"></span>
				<span class="p-future-deco-thunder03 p-future-deco" data-turn="3"><img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/icn_thunder.png" alt="電気"></span>
			</div>

			<div class="p-future-animateItem">
				<ul class="p-future-deco-water p-future-deco">
					<li><img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/icn_water.png" alt="H2"></li>
					<li><img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/icn_water.png" alt="H2"></li>
					<li><img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/icn_water.png" alt="H2"></li>
					<li><img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/icn_water.png" alt="H2"></li>
				</ul>

				<p class="p-future-deco-water02 p-future-deco" data-turn="4"><img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/icn_water.png" alt="H2"></p>

				<p class="p-future-deco-water03 p-future-deco" data-turn="3"><img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/icn_water.png" alt="H2"></p>

				<span class="p-future-deco-truck p-future-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/icn_truck.png" alt="車"></span>
			</div>

			<span class="p-future-deco-bubble" data-bounce="1"><img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/icn_bubble.png" alt="バブル"></span>

			<span class="p-future-deco-wheel"><img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/icn_wheel.png" alt="車輪"></span>
		</div>
		<!-- FUTURE END -->


		<p class="m-txt m-sectionMLarge tac sptal">水素エネルギーは新しいエネルギーの在り方をもたらします。<br>
			地域の資源を活用して作り出した水素エネルギーは、水素ガスとして貯蔵、運搬され、家庭や事業所の電源、熱源として、自動車の燃料としてなど、さまざまな用途に利用できます。</p>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">なぜ水素エネルギーなのか？</h2>

			<!-- MERIT BEGIN -->
			<ul class="m-merit m-sectionSMedium m-merit-2col animate-default-orderCover">
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/img_co2.jpg" alt="発電時にCO2を排出しない"></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">発電時にCO<span class="m-txtMini">2</span>を排出しない</p>
					</div>
					<p class="m-txt">燃料電池は、水素と酸素が反応することで電気と熱を生成します。残るのは水だけであり、発電時にCO<span class="m-txtMini">2</span>は排出されません。</p>
				</li>
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/img_various.jpg" alt="さまざまな資源から、さまざまな方法で生成可能"></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">さまざまな資源から、<br>
						さまざまな方法で生成可能</p>
					</div>
					<p class="m-txt">水を電気分解することで水素を得られるほか、炭化水素などからも取り出すことができます。</p>
				</li>
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/img_storage.jpg" alt="貯蔵・運搬が可能"></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">貯蔵・運搬が可能</p>
					</div>
					<p class="m-txt">水素はガスの状態で貯めることができ、使用したいときに使用することができます。また、作る場所から使う場所へエネルギーを運搬することも可能です。</p>
				</li>
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/img_local.jpg" alt="地産地消のエネルギー"></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">地産地消のエネルギー</p>
					</div>
					<p class="m-txt">地域で作った水素を地域で使うことで、エネルギーセキュリティやエネルギー自給率の向上ができます。災害時のエネルギー源として活用できます。</p>
				</li>
			</ul>
			<!-- MERIT END -->
		</div>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">再エネ由来水素製造</h2>

			<p class="m-txt m-sectionSMedium">水素は水と電気から生成することができます。<br>
				<br>
				水素の生成に使用する電力を再生可能エネルギーとすることで、クリーンな水素エネルギーをつくることができます。<br>
				<br>
				水素は、化石燃料の化学反応、コークス炉などの副生ガス精製、メタノールやメタンガスからの改質などにより生成することもできます。<br>
				<br>
				しかしながら、これらの方法はどれも反応の際に、高温廃熱や二酸化炭素が発生するため、環境にやさしいとは言えません。<br>
				<br>
				また、環境にやさしい再生可能エネルギーは、クリーンな電力である一方、出力が時間帯や気候などにより変動するため不安定であることや、設置場所が限られているという課題を抱えています。<br>
				<br>
				再生可能エネルギーと水素を組み合わせることにより、さらなる再生可能エネルギーの導入加速、クリーンなエネルギー利用、エネルギーを自給自足する社会の創出が実現されます。
			</p>

			<!-- 2COL BEGIN -->
			<ul class="p-2col">
				<li><img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/ing_renewable_outside.png" alt="再エネ由来水素製造"></li>
				<li><img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/ing_renewable_inside.png" alt="再エネ由来水素製造"></li>
			</ul>
			<!-- 2COL END -->

			<!-- INFO BEGIN -->
			<!-- <div class="p-info m-sectionMLarge">
				<p class="p-info-img">
					<img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/ing_demonstrate.png" alt="再エネ由来水素製造">
				</p>
				<div class="p-info-content">
					<p class="m-txt">イワテックでは水素サプライチェーンの構築を目指し、再エネ由来水素製造の実証に取り組んでいます。</p>
					<p class="p-info-btn m-btn"><a href="<?php echo home_url('/services/404/') ?>"><span>詳しくはこちら</span></a></p>
				</div>
			</div> -->
			<!-- INFO END -->
		</div>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">燃料電池</h2>

			<p class="m-txt m-sectionSMedium">固体高分子形燃料電池（PEFCまたはPEM型燃料電池）は、水素と酸素の化学反応によって、電気と熱を発生する装置です。<br>
			化学反応により発生する物質は水のみであるため、大気汚染の原因となるNOxやSOx、粒子状物質(PM)などの排出が無く排ガスがクリーンです。</p>

			<!-- 2COL BEGIN -->
			<ul class="p-2col">
				<li>
					<div class="p-fuel-cover">
						<p class="p-fuelDefault"><img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/ing_fuel.png" alt="燃料電池"></p>
					</div>
				</li>
				<li><p class="m-txt">カソードとアノードの間に挟まれた、<br>
				固形のイオン交換膜で構成されています。</p></li>
			</ul>
			<!-- 2COL END -->

			<p class="m-txt m-sectionMedium">酸性ポリマー膜を電解質として使用し、白金ベースの電極を備えています。PEM型燃料電池セルは、比較的低い温度（摂氏100℃以下）で動作し、電力需要に合わせて電力を調整できます。<br>
				<br>
			PEM型燃料電池は、小型車やフォークリフトの他、廃熱が利用できるため、熱と電源の組合せ（CHP）として住宅用途にも広く使用されています。</p>
		</div>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">発電のメカニズム</h2>
			<!-- MECHANISM BEGIN -->
			<div class="p-mechanism m-sectionMedium">
				<p>
					<img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/ing_mechanism.gif" alt="発電のメカニズム">
				</p>
				<div class="p-mechanism-content">
					<div class="p-mechanism-box">
						<p class="p-mechanism-box-title">燃料電池スタック</p>
						<p class="p-mechanism-box-txt">Fuel Cell Stack</p>
					</div>

					<ul class="p-mechanism-list m-txtSmall">
						<li class="p-mechanism-list-red">水素 Hydrogen</li>
						<li class="p-mechanism-list-blue">酸素 Oxygen</li>
						<li class="p-mechanism-list-green">水素イオン Proton</li>
						<li class="p-mechanism-list-yellow">電子 Electron</li>
					</ul>
				</div>
				
			</div>
			<!-- MECHANISM BEGIN -->
			<!-- INFO BEGIN -->
			<!-- <div class="p-info m-sectionMLarge">
				<p class="p-info-img">
					<img src="<?php echo ASSETS_PATH; ?>/images/services/hydrogen-fuelcell/ing_development.png" alt="発電のメカニズム">
				</p>
				<div class="p-info-content">
					<p class="m-txt">イワテックでは水素エネルギー社会を達成するため、純水素燃料電池システムの開発に取り組んでいます。</p>
					<p class="p-info-btn m-btn"><a href="<?php echo home_url('/services/404/') ?>"><span>詳しくはこちら</span></a></p>
				</div>
			</div> -->
			<!-- INFO END -->
		</div>

		<div class="m-sectionMega">
			<div class="p-box">
				<p class="p-box-title tac">当社が提供できること</p>
				<ul class="p-box-list">
					<li class="m-indent">プロジェクト立案検討</li>
					<li class="m-indent">再エネ水素プラント設計、機器調達、建設</li>
					<li class="m-indent">O&Mのご提案</li>
					<li class="m-indent">燃料電池システム構築、提案</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- SERVICE CONSULT BEGIN -->
	<div class="m-serviceConsult-cover">
		<div class="m-serviceConsult">
			<div class="m-serviceConsult-content">
				<p class="m-serviceConsult-sub">水素・燃料電池の<br class="nopc">事業開発・導入をご検討の方</p>
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