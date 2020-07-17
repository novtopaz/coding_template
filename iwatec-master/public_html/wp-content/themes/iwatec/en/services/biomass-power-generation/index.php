<?php
$mv_text = [
	'h1'=>'Biomass Power Generation',
];

set_query_var('mv_text', $mv_text);
get_template_part('include/mv');
?>

<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

<div class="l-content">
	<div class="m-box">
		<p class="m-round m-titleH3 m-sectionLarge tac"><span>Biomass Energy <br>
		Derived from Organic Waste <br>
		CO<span class="m-txtSmall">2</span>Neutral </span></p>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">What is Biomass Power Generation?</h2>
			<!-- INTRO BEGIN -->
			<div class="p-intro m-sectionMedium">
				<!-- RESOURCE BEGIN -->
				<p class="p-intro-deco-resource p-intro-deco-animateDefault p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_resource_en.png" alt="What is Biomass Power Generation"></p>
				<p class="p-intro-deco-process p-intro-deco-animateDefault p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_process_en.png" alt="processing"></p>
				<!-- RESOURCE END -->

				<!-- ENERGY BEGIN -->
				<p class="p-intro-deco-energy p-intro-deco-animateDefault p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_energy_en.png" alt="Biomass Energy"></p>
				<p class="p-intro-deco-use p-intro-deco-animateDefault p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_use_en.png" alt="Use"></p>
				<!-- ENERGY END -->

				<!-- UOE BEGIN -->
				<div class="p-intro-deco-animateDefault">
					<p class="p-intro-deco-uoe p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_uoe_en.png" alt="Use of energy"></p>
					<p class="p-intro-deco-fire p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_fire.png" alt="fire"></p>
					<p class="p-intro-deco-bulb p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_bulb.png" alt="light bulb"></p>
					<p class="p-intro-deco-co2 p-intro-deco-animateDefault p-intro-deco-animateInfinite p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_co2.png" alt="CO2"></p>
				</div>
				<p class="p-intro-deco-synthesis p-intro-deco-animateDefault p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_synthesis_en.png" alt="photosynthesis"></p>
				<!-- UOE END -->

				<!-- PHOTOSYSTHESIS BEGIN -->
				<div class="p-intro-deco-animateDefault">
					<p class="p-intro-deco-photosysthesis p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_photosysthesis_en.png" alt="photosynthesis"></p>

					<p class="p-intro-deco-tree p-intro-deco-animateDefault p-intro-deco-animateInfinite p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_tree.png" alt="wood"></p>

					<p class="p-intro-deco-o2 p-intro-deco-animateDefault p-intro-deco-animateInfinite p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_o2.png" alt="O2"></p>
				</div>
				<p class="p-intro-deco-rsc p-intro-deco-animateDefault p-intro-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_rsc_en.png" alt="resource"></p>
				<!-- PHOTOSYSTHESIS END -->
			</div>
			<!-- INTRO END -->

			<p class="m-txt m-sectionSmall tac sptal">Biomass Power Generation is a Power generation system that uses the heat from <br class="nosp">the combustion of organic waste derived from plants and animals as fuel.</p>
		</div>

		<div class="m-sectionLarge">
			<div class="p-box">
				<h3 class="p-box-title">Does burning biomass fuel have a negative impact on the environment?</h3>
				<p class="m-txt">Biomass power generation is “carbon neutral”. Biomass fuel emits carbon dioxide (CO<span class="m-txtMini">2</span>) when burned, but this CO<span class="m-txtMini">2</span> is absorbed by plants for photosynthesis and growth. So, the amount of carbon emitted by plants is considered the same as the amount of carbon absorbed. Thus, it does not increase or decrease the amount of CO<span class="m-txtMini">2</span>.</p>
			</div>
		</div>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">Biogas Power Generation</h2>

			<!-- BIOGAS BEGIN -->
			<div class="p-biogas m-sectionMedium">
				<p><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_biomass_about_en.gif" alt="Biogas Power Generation"></p>
				<p class="m-txtSmall mt10 nosp">※Mouseover the images to show a explanation</p>

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
					<li class="p-biogas-comment-digestive m-hover-comment-down">Stores digestate after digestion. <br> Digestate can be returned to <br>
					farmland as liquid fertilizer.</li>
					<li class="p-biogas-comment-fermenter m-hover-comment-down">Performs anaerobic digestion and <br> generates biogas.</li>
					<li class="p-biogas-comment-holder m-hover-comment-up">Stores the generated Biogas.</li>
					<!-- <li class="p-biogas-comment-condenser">発電後の蒸気を冷<br>却・液化させ、そ<br>の圧力を下げるこ<br>とで発電出力を向<br>上させます。</li> -->
					<li class="p-biogas-comment-food m-hover-comment-left">Livestock manure, food waste, and <br>discarded crops are used as raw <br>materials.</li>
					<li class="p-biogas-comment-heat m-hover-comment-right">Waste heat generated <br>during power generation can be<br>used for hot water.</li>
					<li class="p-biogas-comment-engine m-hover-comment-up">Biogas is burned to <br> generate electricity.</li>
				</ul>
			</div>
			<!-- BIOGAS END -->

			<p class="m-txt m-sectionMedium">There are many methods of Biomass power generation. Iwatec’s focus is on “Renewable Biomass” and we are working to extract energy from livestock manure a and food waste with biogas power generation.</p>
		</div>

		<div class="m-sectionMedium">
			<div class="p-2col">
				<p class="p-2col-img"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_digestive.jpg" alt="peptic juice"></p>
				<div class="p-2col-content">
					<div class="p-box">
						<h3 class="p-box-title">Digestate Utilization</h3>
						<p class="m-txt">The fermentation sludge that remains after Biogas is generated is <br>
						called digestate. Iwatec promotes effective ways for its utilization.</p>
						<p class="m-txt m-indent fwm mt10">・Use as fertilizer</p>
						<p class="m-txt m-indent fwm">・Separate liquids from solids and use the solids as compost <br>
						 and for livestock bedding.</p>
						<p class="m-txt m-indent fwm">・Promotes organic farming.</p>
					</div> 
				</div>
			</div>
		</div>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">Benefits of Biomass / Biogas Power Generation</h2>
			<ul class="m-merit m-sectionMedium animate-default-orderCover">
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_digestive_juice.jpg" alt="Reduce disposal costs by using digestate as fertilizer."></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">Reduce disposal costs by using digestate as fertilizer.</p>
					</div>
					<p class="m-txt">Biogas plant by-products can be reused as liquid fertilizer or compost. Disposal costs are also reduced in the process.</p>
				</li>
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_saving.jpg" alt="Energy saving by using the heat."></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">Energy saving by using the heat.</p>
					</div>
					<p class="m-txt">The exhaust heat generated during the conversion of biomass fuel to power can be used for heating purposes, further increasing the efficiency and saving energy.</p>
				</li>
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/biomass-power-generation/img_enviroment.jpg" alt="Keeping the surrounding environment odor free."></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">Keeping the surrounding environment odor free.</p>
					</div>
					<p class="m-txt">Composting releases pungent odors until it is fully composted, but the digester in biogas plant is completely sealed, so odors do not leak out and contribute to improve the local environment.</p>
				</li>
			</ul>
		</div>
	</div>

	<!-- SERVICE CONSULT BEGIN -->
	<div class="m-serviceConsult-cover p-serviceConsult-cover">
		<div class="m-serviceConsult">
			<div class="m-serviceConsult-content">
				<p class="m-serviceConsult-title">Consultation About Biomass / Biogas Power Generation</p>

				<div class="m-serviceConsult-inner">
					<div class="m-serviceConsult-left">
						<div class="m-serviceConsult-box m-serviceConsult-box-leftTop">
							<p class="m-serviceConsult-box-txt">We have problems with processing livestock manure.</p>
						</div>
						<div class="m-serviceConsult-box m-serviceConsult-box-leftBottom">
							<p class="m-serviceConsult-box-txt">I want to reduce the cost of processing biomass waste.</p>
						</div>
					</div>
					<div class="m-serviceConsult-center tac">
						<p><img src="<?php echo ASSETS_PATH; ?>/images/common/img_consult_man.png" alt="Consultation about geothermal power generation"></p>
						<p class="m-serviceConsult-center-deco"><img src="<?php echo ASSETS_PATH; ?>/images/common/img_consult_man_head.png" alt="head"></p>
					</div>
					<div class="m-serviceConsult-right">
						<div class="m-serviceConsult-box m-serviceConsult-box-rightTop">
							<p class="m-serviceConsult-box-txt">I want to make effective use of food waste.</p>
						</div>
						<div class="m-serviceConsult-box m-serviceConsult-box-rightBottom">
							<p class="m-serviceConsult-box-txt">I want to work towards an environment-friendly recycling society.</p>
						</div>
					</div>
				</div>

				<p class="m-serviceConsult-sub">Please contact us for business details, questions or concerns.</p>
			</div>
			<?php get_template_part('include/en/contact_info_en') ?>
		</div>
	</div>
	<!-- SERVICE CONSULT END -->

	<?php if(have_posts()): while(have_posts()): the_post() ?>
		<?php the_content(); ?>
	<?php endwhile; endif ?>

	<?php get_template_part('include/en/service_link_en') ?>
</div>