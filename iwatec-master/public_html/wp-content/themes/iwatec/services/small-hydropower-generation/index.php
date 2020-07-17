<?php
$mv_text = [
	'h1'=>'小水力発電事業',
];

set_query_var('mv_text', $mv_text);
get_template_part('include/mv');
?>

<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

<div class="l-content">
	<?php /*
	<div class="m-box">
		<p class="m-round m-titleH3 m-sectionLarge tac"><span>自然の恩恵である水を利用した<br class="nopc">最もクリーンな<br>
			発電方法をご提供します。</span></p>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">小水力発電とは</h2>

			<div class="p-about-img m-sectionMedium">
				<img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_hydropower.jpg" alt="小水力発電とは">

				<p class="p-about-img-deco-leaf01 p-about-img-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/icn_leaf.png" alt="葉"></p>
				<p class="p-about-img-deco-leaf02 p-about-img-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/icn_leaf.png" alt="葉"></p>

				<p class="p-about-img-deco-wheel p-about-img-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/icn_wheel.png" alt="水車"></p>

				<p class="p-about-img-deco-bulb p-about-img-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/icn_bulb.png" alt="電球"></p>
			</div>

			<p class="m-txt m-sectionMedium">小水力発電では、水の流れを利用して「発電用水車」を回転させ、電力を生み出します。一般的には「10,000kW以下」の水力発電を小水力発電と呼んでいます。<br>
			太陽光発電や風力発電と比べて天候に左右されることなく、生活圏に近いところでの稼働が可能です。また、発電設備がコンパクトなため、自然への影響が非常に少ないのも小水力発電の特徴です。</p>
		</div>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">小水力発電を設置できる場所</h2>
			<div class="p-place-cover m-sectionMedium">
				<div class="p-place-img-cover">
					<p class="p-place-imgDefault"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_place_default.png" alt="小水力発電を設置できる場所"></p>

					<p class="p-place-img"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_place_general.png" alt="一般河川"></p>
					<p class="p-place-img"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_place_agricultural.png" alt="農業用水路"></p>
					<p class="p-place-img"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_place_dam.png" alt="砂防ダム/治山ダム"></p>
					<p class="p-place-img"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_place_supply.png" alt="上水道施設"></p>
					<p class="p-place-img"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_place_treatment.png" alt="下水処理施設"></p>
					<p class="p-place-img"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_place_building.png" alt="ビルの循環水"></p>
				</div>

				<div class="p-control">
					<ul class="p-control-list clearfix">
						<li class="is-active">
							<p class="p-control-img">
								<?php getPicture('btn_general', 'jpg', 'services/small-hydropower-generation', '一般河川') ?>
							</p>
							<p class="p-control-txt">一般河川</p>
						</li>
						<li>
							<p class="p-control-img">
								<?php getPicture('btn_agricultural', 'jpg', 'services/small-hydropower-generation', '農業用水路') ?>
							</p>
							<p class="p-control-txt">農業用水路</p>
						</li>
						<li>
							<p class="p-control-img">
								<?php getPicture('btn_dam', 'jpg', 'services/small-hydropower-generation', '砂防ダム/治山ダム') ?>
							</p>
							<p class="p-control-txt">砂防ダム/<br class="nopc">治山ダム</p>
						</li>
						<li>
							<p class="p-control-img">
								<?php getPicture('btn_supply', 'jpg', 'services/small-hydropower-generation', '上水道施設') ?>
							</p>
							<p class="p-control-txt">上水道施設</p>
						</li>
						<li>
							<p class="p-control-img">
								<?php getPicture('btn_treatment', 'jpg', 'services/small-hydropower-generation', '下水処理施設') ?>
							</p>
							<p class="p-control-txt">下水処理施設</p>
						</li>
						<li>
							<p class="p-control-img">
								<?php getPicture('btn_building', 'jpg', 'services/small-hydropower-generation', 'ビルの循環水') ?>
							</p>
							<p class="p-control-txt">ビルの循環水/<br class="nopc">工業用水</p>
						</li>
					</ul>
				</div>
			</div>
			<p class="m-txtSmall mt10 tar sptal">※<span class="nosp">カーソルを重ねると</span><span class="nopc">タッチをすると</span>該当箇所が強調して表示されます</p>

			<p class="m-txt m-sectionSmall">小水力発電は水流量が多く、落差がある場所に設置することができます。<br>
			わたしたちの身近な場所へ設置することが可能なため、作られた電力は売電のほか、河川公園の設備や農産加工施設、観光施設など地域で必要とする目的でも使用することができます。</p>
		</div>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">小水力発電を導入する<br class="nopc">メリット</h2>
			<ul class="m-merit m-sectionMedium animate-default-orderCover">
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_season.jpg" alt="季節による影響を受けず、電力の供給が可能"></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">季節による影響を受けず、<br>
						電力の供給が可能</p>
					</div>
					<p class="m-txt">太陽光や風力と比べ、季節変動や昼夜を問わず安定的に電力を供給可能です。</p>
				</li>
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_stable.jpg" alt="安定した発電出力によりベース電源へ"></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">安定した発電出力により<br>
						ベース電源へ</p>
					</div>
					<p class="m-txt">発電出力の変動が小さいので、常時運転のベース電源に成り得ます。</p>
				</li>
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_small.jpg" alt="他の発電方式と比べ、設置面積が小さい"></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">他の発電方式と比べ、<br>
						設置面積が小さい</p>
					</div>
					<p class="m-txt">太陽光などの発電方式と比べ、発電機器を設置する面積が小さく、対応エリアも多くなります。</p>
				</li>
			</ul>
		</div>
	</div>

	<!-- SERVICE CONSULT BEGIN -->
	<div class="m-serviceConsult-cover">
		<div class="m-serviceConsult">
			<div class="m-serviceConsult-content">
				<p class="m-serviceConsult-title">小水力発電についてのご相談</p>

				<div class="m-serviceConsult-inner">
					<div class="m-serviceConsult-left">
						<div class="m-serviceConsult-box m-serviceConsult-box-leftTop">
							<p class="m-serviceConsult-box-txt">水利権の手続きは<br class="nosp">面倒なの？</p>
						</div>
						<div class="m-serviceConsult-box m-serviceConsult-box-leftBottom">
							<p class="m-serviceConsult-box-txt">小水力発電で<br class="nosp">エネルギーの地産地消を<br class="nosp">実現したい</p>
						</div>
					</div>
					<div class="m-serviceConsult-center tac">
						<p><img src="<?php echo ASSETS_PATH; ?>/images/common/img_consult_man.png" alt="地熱発電についてのご相談"></p>
						<p class="m-serviceConsult-center-deco"><img src="<?php echo ASSETS_PATH; ?>/images/common/img_consult_man_head.png" alt="頭"></p>
					</div>
					<div class="m-serviceConsult-right">
						<div class="m-serviceConsult-box m-serviceConsult-box-rightTop">
							<p class="m-serviceConsult-box-txt">排水のエネルギーを<br class="nosp">再利用したい</p>
						</div>
						<div class="m-serviceConsult-box m-serviceConsult-box-rightBottom">
							<p class="m-serviceConsult-box-txt">小水力発電で<br class="nosp">地域を活性化したい</p>
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