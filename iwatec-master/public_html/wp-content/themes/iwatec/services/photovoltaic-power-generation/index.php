<?php
$mv_text = [
	'h1'=>'太陽光発電事業',
];

set_query_var('mv_text', $mv_text);
get_template_part('include/mv');
?>

<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

<div class="l-content">
	<?php /*
	<div class="m-box">
		<p class="m-round m-titleH3 m-sectionLarge tac"><span>住宅用、産業用太陽光発電システムで<br>
		エネルギーの地産地消や企業の<br class="nopc">発電事業を支援します。</span></p>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">太陽光発電とは</h2>
			<p class="m-sectionMedium tac"><img src="<?php echo ASSETS_PATH; ?>/images/services/photovoltaic-power-generation/img_solar_power.gif" alt="太陽光発電とは"></p>

			<p class="m-txt m-sectionMedium tac sptal">太陽光発電は、太陽の光エネルギーを電気エネルギーに変換する、再生可能エネルギーの1つです。</p>
		</div>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">売電契約・自家消費の仕組み</h2>
			<div class="m-sectionSmall">
				<h3 class="m-titleH3 tac">売電契約（余剰・全量）</h3>

				<ul class="p-listCenter mt15 animate-default-orderCover">
					<li class="tar sptac animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/photovoltaic-power-generation/img_contract01.jpg" alt="売電契約（余剰・全量）"></li>
					<li class="tal sptac animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/photovoltaic-power-generation/img_contract02.jpg" alt="売電契約（余剰・全量）"></li>
				</ul>

				<p class="m-txt m-sectionSmall tac sptal">太陽光で発電した電力をFIT（固定価格買取制度）等を利用して電力会社等に買い取ってもらう仕組みです。<br>
				10kW未満は余剰売電、10kW以上は余剰か全量かの選択ができます。</p>
			</div>

			<div class="m-sectionLarge">
				<h3 class="m-titleH3 tac">自家消費</h3>
				<p class="m-sectionSmall tac animate-default"><img src="<?php echo ASSETS_PATH; ?>/images/services/photovoltaic-power-generation/img_self_consumption.jpg" alt="自家消費"></p>

				<p class="m-txt m-sectionSmall tac sptal">太陽光で発電した電力を住宅や工場で全て使用する仕組みです。<br>
				FIT期間の終了した住宅や、電気料金を抑えたい工場・事務所などに採用されています。</p>

				<p class="m-btn m-btn-down m-sectionMedium tac"><a href="#self-consum" class="is-pagelink"><span>自家消費について詳しく見る</span></a></p>
			</div>
		</div>

		<!-- MERIT BEGIN -->
		<div class="m-sectionMega">
			<h2 class="m-titleH2">太陽光発電を導入する<br class="nopc">メリット</h2>
			<ul class="m-merit m-sectionMedium animate-default-orderCover">
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/photovoltaic-power-generation/img_friendly.jpg" alt="エネルギー源が枯渇せず、環境に優しい"></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">エネルギー源が枯渇せず、<br>
						環境に優しい</p>
					</div>
					<p class="m-txt">太陽光発電は、エネルギー源の枯渇を心配する必要がなく、発電時に大気汚染物質が発生しないため、自然に優しいエネルギーです。</p>
				</li>
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/photovoltaic-power-generation/img_reduce.jpg" alt="光熱費が削減できる"></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">光熱費が削減できる</p>
					</div>
					<p class="m-txt">発電した電気で、購入する電気を削減できます。オール電化に変えると、夜間の電気代が安くなるため、光熱費の削減が期待できます。</p>
				</li>
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/photovoltaic-power-generation/img_short.jpg" alt="設計・施工期間が短い"></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">設計・施工期間が短い</p>
					</div>
					<p class="m-txt">再エネ発電事業の中で最もメジャーなため、設計技術や施工工法が確立されており、短期間での完成が可能です。</p>
				</li>
			</ul>
		</div>
		<!-- MERIT END -->

		<div class="m-sectionMega">
			<h2 id="self-consum" class="m-titleH2">自家消費型太陽光発電</h2>

			<p class="m-round m-titleH3 m-sectionLarge tac"><span>設備や目的に合わせ、<br class="nopc">自家消費の最適なシステムを<br class="nopc">ご提案致します。</span></p>

			<div class="p-box m-sectionMega">
				<p class="m-txtLarge tac fwb">自家消費太陽光発電とは？</p>
				<p class="m-txt tac sptal mt10">発電・蓄電したエネルギーを事業所などで自ら消費する仕組みのことを指します。</p>
			</div>

			<p class="m-sectionSmall tac">
				<video id="solar-self" loop autoplay muted playsinline>
					<source src="<?php echo ASSETS_PATH; ?>/video/services/photovoltaic-power-generation/vid_solar_self.mp4" type="video/mp4">
				</video>
			</p>
			<p class="m-txt m-sectionMedium">太陽光発電でつくった電力を、電力会社に売電せず<span class="m-txtSmall">(※)</span>自家消費するシステムです。<br>
			太陽光・蓄電池・EMSを合わせる事で、施設のデマンド値や電気料金の抑制、固定買取期間終了後の住宅用太陽光発電システムなど、設備や目的に合わせたご提案をいたします。</p>

			<p class="m-txtSmall mt5">※住宅用は一部売電する場合があります。</p>
		</div>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">エネルギーマネジメント<br class="nopc">システム</h2>
			<p class="m-round m-titleH3 m-sectionLarge tac"><span>エネルギーマネジメント<br class="nopc">システムを通して、<br>
				「快適で無理のないスマートライフ」<br class="nopc">をご提案致します。
			</span></p>

			<div class="p-box m-sectionMega">
				<p class="m-txtLarge tac fwb">エネルギーマネジメントシステム（EMS）とは？</p>
				<p class="m-txt tac sptal mt10">エネルギーの消費量や使用状況を把握・解析するシステムのことを指します。</p>
			</div>

			<div class="p-ems">
				<p class="m-sectionMedium tac"><img src="<?php echo ASSETS_PATH; ?>/images/services/photovoltaic-power-generation/img_ems.jpg" alt="自家消費型太陽光発電"></p>

				<div class="p-ems-deco-cover-overlay">
					<p class="p-ems-deco-check p-ems-deco-cover"><img src="<?php echo ASSETS_PATH; ?>/images/services/photovoltaic-power-generation/img_ems_check.png" alt="見る Check"></p>
				</div>

				<div class="p-ems-deco-cover-overlay">
					<p class="p-ems-deco-control p-ems-deco-cover"><img src="<?php echo ASSETS_PATH; ?>/images/services/photovoltaic-power-generation/img_ems_control.png" alt="コントロール Control"></p>
				</div>

				<p class="p-ems-deco-production p-ems-deco-inner"><img src="<?php echo ASSETS_PATH; ?>/images/services/photovoltaic-power-generation/img_ems_production.png" alt="つくる Production"></p>
				<p class="p-ems-deco-storage p-ems-deco-inner"><img src="<?php echo ASSETS_PATH; ?>/images/services/photovoltaic-power-generation/img_ems_storage.png" alt="ためる Storage"></p>
				<p class="p-ems-deco-use p-ems-deco-inner"><img src="<?php echo ASSETS_PATH; ?>/images/services/photovoltaic-power-generation/img_ems_use.png" alt="つかう Use"></p>
			</div>


			<div class="m-sectionLarge">
				<ul class="p-listCenter animate-default-orderCover">
					<li>
						<p class="m-sectionMedium tac animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/photovoltaic-power-generation/img_visualization.jpg" alt="エネルギー使用量の可視化"></p>
						<p class="p-listCenter-txt fwn mt10">エネルギー使用量の<br class="nosp">可視化</p>
					</li>
					<li>
						<p class="m-sectionMedium tac animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/photovoltaic-power-generation/img_analysis.jpg" alt="エネルギー使用量の分析"></p>
						<p class="p-listCenter-txt fwn mt10">エネルギー使用量の<br class="nosp">分析</p>
					</li>
					<li>
						<p class="m-sectionMedium tac animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/photovoltaic-power-generation/img_monitoring.jpg" alt="エネルギー使用量の監視・制御"></p>
						<p class="p-listCenter-txt fwn mt10">エネルギー使用量の<br>監視・制御</p>
					</li>
				</ul>

				<p class="m-txt m-sectionMedium">エネルギーマネジメントシステム（EMS）を導入し、エネルギー使用量を把握、解析することで、無駄なエネルギーを削減できます。また、さまざまな装置と連動することで、省エネ・節電の実現へも繋がります。</p>
			</div>

			<div class="m-sectionLarge">
				<h3 class="m-titleH3 tac">EMSで実現できる省エネ方法</h3>

				<ul class="p-list-2col animate-default-orderCover m-sectionMedium ">
					<li class="animate-default-order">
						<img src="<?php echo ASSETS_PATH; ?>/images/services/photovoltaic-power-generation/img_ems_method_noon.png" alt="昼の時間帯の使用量が多い">
					</li>
					<li class="animate-default-order">
						<img src="<?php echo ASSETS_PATH; ?>/images/services/photovoltaic-power-generation/img_ems_method_night.png" alt="蓄電池から放電">
					</li>
				</ul>

				<p class="m-sectionMedium tac animate-default"></p>

				<p class="m-txt m-sectionMedium">EMSによる省エネの手段には多くの方法がありますが、中でも一般家庭・企業ともに多く採用されている方法が『ピークカット』と『ピークシフト』です。<br>
				<br>
				消費が多い時間帯に節約などで使用量を抑えることを『ピークカット』と言い、消費が少ない時間帯にエネルギーを蓄え、消費が多い時間帯に使用することを『ピークシフト』と言います。</p>

				<p class="m-txtLarge fwb mt20"><a class="inherit" href="https://www.iwatec.co.jp/wp-content/uploads/2019/05/fc06b195ad7b47a8d8707a15dda07041.pdf" target="_blank">■「使用済太陽電池モジュールの適正処理に資する情報提供のガイドライン」に基づく情報提供について</a></p>
			</div>
		</div>
	</div>

	<!-- SERVICE CONSULT BEGIN -->
	<div class="m-serviceConsult-cover">
		<div class="m-serviceConsult">
			<div class="m-serviceConsult-content">
				<p class="m-serviceConsult-title">太陽光発電についてのご相談</p>

				<div class="m-serviceConsult-inner">
					<div class="m-serviceConsult-left">
						<div class="m-serviceConsult-box m-serviceConsult-box-leftTop">
							<p class="m-serviceConsult-box-txt">工場で使用している<br class="nosp">電気代を<br class="nopc">抑えたい</p>
						</div>
					</div>
					<div class="m-serviceConsult-center tac">
						<p><img src="<?php echo ASSETS_PATH; ?>/images/common/img_consult_man.png" alt="地熱発電についてのご相談"></p>
						<p class="m-serviceConsult-center-deco"><img src="<?php echo ASSETS_PATH; ?>/images/common/img_consult_man_head.png" alt="頭"></p>
					</div>
					<div class="m-serviceConsult-right">
						<div class="m-serviceConsult-box m-serviceConsult-box-rightTop">
							<p class="m-serviceConsult-box-txt">買取期間が<br class="nopc">終了する<br class="nosp">自宅の太陽光について<br>
						相談したい</p>
						</div>
						<div class="m-serviceConsult-box m-serviceConsult-box-rightBottom">
							<p class="m-serviceConsult-box-txt">省エネの費用<br class="nopc">対効果が<br class="nosp">不明確なので知りたい</p>
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