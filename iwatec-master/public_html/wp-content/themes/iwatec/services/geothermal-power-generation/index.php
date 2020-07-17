<?php
$mv_text = [
	'h1'=>'地熱発電事業',
];

set_query_var('mv_text', $mv_text);
get_template_part('include/mv');
?>

<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

<div class="l-content">
	<?php /*
	<div class="m-box">
		<p class="m-round m-titleH3 m-sectionLarge tac"><span>火山大国日本の<br class="nopc">豊富な資源を活用した<br>
			地熱発電事業をご提案します。</span></p>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">地熱発電とは</h2>
			<p class="m-txt m-sectionSmall tac sptal">地下のマグマによって温められた熱水・蒸気を利用した発電方法です。</p>
		</div>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">フラッシュ発電</h2>

			<!-- FLASH BEGIN -->
			<div class="p-flash m-sectionMedium">
				<p><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/img_geothermal_power.gif" alt="フラッシュ発電"></p>
				<p class="m-txtSmall mt10 nosp">※カーソルを重ねると説明文が表示されます</p>

				<ul class="m-hover-area nosp">
					<li class="p-flash-area-serparator"></li>
					<li class="p-flash-area-turbin"></li>
					<li class="p-flash-area-condenser"></li>
					<li class="p-flash-area-cooling"></li>
				</ul>

				<ul class="m-hover-comment nosp">
					<li class="p-flash-comment-serparator m-hover-comment-up">蒸気と熱水を<br>
					分けます。</li>
					<li class="p-flash-comment-turbin m-hover-comment-down">蒸気でタービンを回転させ<br>
						流体の持つエネルギーを<br>
					電気エネルギーに変換します。</li>
					<li class="p-flash-comment-condenser m-hover-comment-up">発電後の蒸気を冷却・液化させ、<br>
					その圧力を下げることで発電出力<br>を向上させます。</li>
					<li class="p-flash-comment-cooling m-hover-comment-down">復水器で生じた温水を冷却<br>します。冷まされた冷却水<br>は再び復水器へ送られ蒸気<br>の冷却に再利用されます。</li>
				</ul>
			</div>
			<!-- FLASH END -->

			<p class="m-txt m-sectionMedium tac sptal">地中から地熱流体を取り出し、蒸気と熱水に分離させ、蒸気でタービンを回して発電します。</p>
		</div>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">バイナリー発電</h2>

			<div class="p-binary-gif m-sectionSmall">
				<p><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/img_binary_power.gif" alt="バイナリー発電"></p>
				<p class="m-txtSmall mt10 nosp">※カーソルを重ねると説明文が表示されます</p>

				<ul class="m-hover-area nosp">
					<li class="p-binary-area-separate"></li>
					<li class="p-binary-area-create"></li>
					<li class="p-binary-area-lique"></li>
					<li class="p-binary-area-condenser"></li>
					<li class="p-binary-area-power"></li>
					<li class="p-binary-area-heat"></li>
				</ul>

				<ul class="m-hover-comment nosp">
					<li class="p-binary-comment-separate m-hover-comment-down">蒸気と熱水を<br>
					分けます。</li>
					<li class="p-binary-comment-create m-hover-comment-up">蒸気と水を熱交換し<br>
					温水をつくります。</li>
					<li class="p-binary-comment-lique m-hover-comment-up">温水と媒体を熱交換し<br>
						液体の媒体を気化させ<br>
					ます。</li>
					<li class="p-binary-comment-condenser m-hover-comment-down">気化した媒体でタービンを回転<br>
						させ流体の持つエネルギーを<br>
					電気エネルギーに変換します。</li>
					<li class="p-binary-comment-power m-hover-comment-up">発電後の媒体を冷却・液化させ、<br>
						その圧力を下げることで発電出力<br>
						を向上させます。<br>
						液化した媒体は再び蒸発器へ送ら<br>
					れます。</li>
					<li class="p-binary-comment-heat m-hover-comment-up">凝縮器で媒体と熱交換し温<br>まった冷却水を冷却しま<br>
						す。冷まされた冷却水は再<br>
					び凝縮器へ送られます。</li>
				</ul>

			</div>
			<p class="m-txt m-sectionMedium">地中から取り出した蒸気または熱水によって沸点の低い媒体を蒸発させ、その蒸気でタービンを回して発電します。この発電方式は、加熱源系統と媒体系統、二つの熱サイクルを利用することから、バイナリー発電と呼ばれます。</p>
		</div>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">バイナリー発電の特徴</h2>

			<ul class="p-binary m-sectionMedium">
				<li>
					<p><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/img_low_temperature.jpg" alt="低温度の蒸気・熱水で発電可能"></p>
					<div class="p-binary-content">
						<p class="p-binary-title">低温度の蒸気・熱水で発電可能</p>
						<p class="m-txt">低沸点媒体を利用することでフラッシュ発電よりも低い150℃以下の蒸気や熱水でも発電が可能です。</p>
					</div>
				</li>
				<li>
					<p><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/img_exsiting_hotspring.jpg" alt="既存の温泉井戸を活用できる"></p>
					<div class="p-binary-content">
						<p class="p-binary-title">既存の温泉井戸を活用できる</p>
						<p class="m-txt">低温度の熱源でも発電できるため既存の温泉井戸を熱源として活用することが可能です。これにより井戸の掘削コスト削減、工期短縮に繋がります。</p>
					</div>
				</li>
			</ul>
		</div>

		<div class="m-sectionMega">
			<h3 class="m-titleH3 tac">イワテックでは既存の温泉井戸を有効活用し、<br class="nosp">温泉街の皆様と協調した発電事業をご提案します</h3>

			<p class="m-sectionMedium tac"><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/img_corporation.jpg" alt="イワテックでは既存の温泉井戸を有効活用し、温泉街の皆様と協調した発電事業をご提案します"></p>
		</div>

		<div class="m-sectionMega">
			<h3 class="m-titleH3 tac">温泉井戸を活用した導入事例</h3>

			<ul class="p-intro m-sectionSmall">
				<li>
					<p class="p-intro-title"><span>01<em class="nosp">---</em></span>温泉街で捨てている蒸気を活用</p>
					<div class="p-intro-thrown p-intro-content m-sectionLarge">
						<p class="p-intro-thrown-base"><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/img_thrown.png" alt="温泉街で捨てている蒸気を活用"></p>
						<p class="p-intro-thrown-base-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/icn_spring_smoke03.png" alt="煙"></p>

						<div class="p-intro-thrown-block">
							<p class="p-intro-thrown-pipe p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/icn_pipe.png" alt="パイプ"></p>
							<p class="p-intro-thrown-smoke p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/icn_smoke.png" alt="煙"></p>
						</div>

						<div class="p-intro-thrown-block">
							<p class="p-intro-thrown-generation p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/icn_generation.png" alt="発電に利用"></p>
						
							<p class="p-intro-thrown-gear p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/icn_gear.png" alt="歯車"></p>
							<p class="p-intro-thrown-bulb p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/icn_bulb.png" alt="電球"></p>
							
							<p class="p-intro-thrown-arrow p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/icn_arrow.png" alt="売電"></p>
						
							<p class="p-intro-thrown-tower p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/icn_tower.png" alt="タワー"></p>
						</div>
					</div>
				</li>
				<li>
					<p class="p-intro-title"><span>02<em class="nosp">---</em></span>熱い温泉がもつエネルギーを活用</p>
					<div class="p-intro-hotspring p-intro-content m-sectionLarge">
						<div class="p-intro-hotspring-block is-appear">
							<p class="p-intro-hotspring-block-base"><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/img_hotspring.png" alt="熱い温泉がもつエネルギーを活用"></p>
							<span class="p-intro-hotspring-smoke p-intro-hotspring-smoke01"><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/icn_spring_smoke01.png" alt="煙"></span>
							<span class="p-intro-hotspring-smoke p-intro-hotspring-smoke02"><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/icn_spring_smoke02.png" alt="煙"></span>
							<span class="p-intro-hotspring-smoke p-intro-hotspring-smoke03"><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/icn_spring_smoke03.png" alt="煙"></span>
						</div>

						<div class="p-intro-hotspring-block">
							<p class="p-intro-hotspring-block-base p-intro-hotspring-block-base-second"><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/img_hotspring02.png" alt="熱い温泉がもつエネルギーを活用"></p>
							<span class="p-intro-hotspring-smoke p-intro-hotspring-smoke04"><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/icn_spring_smoke03.png" alt="煙"></span>

							<p class="p-intro-hotspring-gear p-intro-hotspring-deco">
								<img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/icn_gear.png" alt="歯車">
							</p>

							<p class="p-intro-hotspring-bulb p-intro-hotspring-deco">
								<img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/icn_bulb.png" alt="電球">
							</p>

						</div>
					</div>
				</li>
			</ul>
		</div>
		
		<!-- MERIT BEGIN -->
		<div class="m-sectionMega">
			<h2 class="m-titleH2">地熱発電を導入するメリット</h2>
			<ul class="m-merit m-sectionMedium animate-default-orderCover">
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/img_stable.jpg" alt="発電量が安定している"></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">発電量が安定している</p>
					</div>
					<p class="m-txt">一年を通じて一定量を発電でき、ベースロード電源として注目されています。</p>
				</li>
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/img_reused.jpg" alt="蒸気や熱水の再利用が可能"></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">蒸気や熱水の再利用が可能</p>
					</div>
					<p class="m-txt">発電に利用後の熱水・蒸気を浴用やハウス栽培に再利用が可能です。</p>
				</li>
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/geothermal-power-generation/img_co2.jpg" alt="二酸化炭素排出量が少ない"></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">二酸化炭素排出量が少ない</p>
					</div>
					<p class="m-txt">自然エネルギーを利用して発電を行うので、火力発電などと比べ二酸化炭素の排出量が少なくなります。</p>
				</li>
			</ul>
		</div>
		<!-- MERIT END -->

	</div>
	<!-- SERVICE CONSULT BEGIN -->
	<div class="m-serviceConsult-cover">
		<div class="m-serviceConsult">
			<div class="m-serviceConsult-content">
				<p class="m-serviceConsult-title">地熱発電についてのご相談</p>

				<div class="m-serviceConsult-inner">
					<div class="m-serviceConsult-left">
						<div class="m-serviceConsult-box m-serviceConsult-box-leftTop">
							<p class="m-serviceConsult-box-txt">いくらくらい<br>
							かかるの？</p>
						</div>
						<div class="m-serviceConsult-box m-serviceConsult-box-leftBottom">
							<p class="m-serviceConsult-box-txt">うちの温泉でも<br>
							できる？</p>
						</div>
					</div>
					<div class="m-serviceConsult-center tac">
						<p><img src="<?php echo ASSETS_PATH; ?>/images/common/img_consult_man.png" alt="地熱発電についてのご相談"></p>
						<p class="m-serviceConsult-center-deco"><img src="<?php echo ASSETS_PATH; ?>/images/common/img_consult_man_head.png" alt="頭"></p>
					</div>
					<div class="m-serviceConsult-right">
						<div class="m-serviceConsult-box m-serviceConsult-box-rightTop">
							<p class="m-serviceConsult-box-txt">どれくらいの<br>
							発電ができる？</p>
						</div>
						<div class="m-serviceConsult-box m-serviceConsult-box-rightBottom">
							<p class="m-serviceConsult-box-txt">建設の手続きは<br>
							面倒なの？</p>
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
