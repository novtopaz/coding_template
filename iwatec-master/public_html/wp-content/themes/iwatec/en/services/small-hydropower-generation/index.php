<?php
$mv_text = [
	'h1'=>'Small Hydropower Generation',
];

set_query_var('mv_text', $mv_text);
get_template_part('include/mv');
?>

<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

<div class="l-content">
	<div class="m-box">
		<p class="m-round m-titleH3 m-sectionLarge tac"><span>Water <br>
		A Gift of Nature <br>
		The Cleanest Power Generation Method</span></p>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">What is Small Hydropower Generation?</h2>

			<div class="p-about-img m-sectionMedium">
				<img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_hydropower_en.jpg" alt="小水力発電とは">

				<p class="p-about-img-deco-leaf01 p-about-img-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/icn_leaf.png" alt="leaf"></p>
				<p class="p-about-img-deco-leaf02 p-about-img-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/icn_leaf.png" alt="leaf"></p>

				<p class="p-about-img-deco-wheel p-about-img-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/icn_wheel.png" alt="Water wheel"></p>

				<p class="p-about-img-deco-bulb p-about-img-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/icn_bulb.png" alt="light bulb"></p>
			</div>

			<p class="m-txt m-sectionMedium">In small hydropower generation, electricity is generated by rotating a “water turbine” using the flow of water. In general terms, a small hydropower plant is any hydropower plant that is less than 10,000kW. <br>
			Compared to solar and wind power generation, it is not affected by the weather and can be placed near areas where people are living. Also, because of its compact size, it has very little effect on the environment.</p>
		</div>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">Places Where Small Hydropower Can Be Installed.</h2>
			<div class="p-place-cover m-sectionMedium">
				<div class="p-place-img-cover">
					<p class="p-place-imgDefault"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_place_default_en.png" alt="小水力発電を設置できる場所"></p>

					<p class="p-place-img">
						<img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_place_general_en.png" alt="River">
					</p>
					<p class="p-place-img">
						<img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_place_agricultural_en.png" alt="Agricultural Water Way">
					</p>
					<p class="p-place-img">
						<img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_place_dam_en.png" alt="Erosion Control Dam">
					</p>
					<p class="p-place-img">
						<img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_place_supply_en.png" alt="上水道施設">
					</p>
					<p class="p-place-img">
						<img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_place_treatment_en.png" alt="Sewage Treatment Facilities">
					</p>
					<p class="p-place-img">
						<img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_place_building_en.png" alt="Commercial / Industrial Water">
					</p>
				</div>

				<div class="p-control">
					<ul class="p-control-list clearfix">
						<li class="is-active">
							<p class="p-control-img">
								<?php getPicture('btn_general', 'jpg', 'services/small-hydropower-generation', 'River') ?>
							</p>
							<p class="p-control-txt">River</p>
						</li>
						<li>
							<p class="p-control-img">
								<?php getPicture('btn_agricultural', 'jpg', 'services/small-hydropower-generation', 'Agricultural Water Way') ?>
							</p>
							<p class="p-control-txt">Agricultural Water Way</p>
						</li>
						<li>
							<p class="p-control-img">
								<?php getPicture('btn_dam', 'jpg', 'services/small-hydropower-generation', 'Erosion Control Dam') ?>
							</p>
							<p class="p-control-txt">Erosion Control Dam</p>
						</li>
						<li>
							<p class="p-control-img">
								<?php getPicture('btn_supply', 'jpg', 'services/small-hydropower-generation', '上水道施設') ?>
							</p>
							<p class="p-control-txt">Water Supply Facilities</p>
						</li>
						<li>
							<p class="p-control-img">
								<?php getPicture('btn_treatment', 'jpg', 'services/small-hydropower-generation', 'Sewage Treatment Facilities') ?>
							</p>
							<p class="p-control-txt">Sewage Treatment Facilities</p>
						</li>
						<li>
							<p class="p-control-img">
								<?php getPicture('btn_building', 'jpg', 'services/small-hydropower-generation', 'Commercial / Industrial Water') ?>
							</p>
							<p class="p-control-txt">Commercial / <br> Industrial Water</p>
						</li>
					</ul>
				</div>
			</div>
			<p class="m-txtSmall mt10 tar sptal">※<span class="nosp">Mouseover</span><span class="nopc">Touch</span> the contents above to highlight the applicable part in the picture</p>

			<p class="m-txt m-sectionSmall">Small hydropower can be installed where there is a lot of water flow and there is a drop in height. As it can be installed in places familiar to us, the generated power can be used for purposes required in the area, such as river park facilities, agricultural processing facilities, and tourist facilities, in addition to selling electricity.</p>
		</div>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">Benefits of Small Hydropower Generation</h2>
			<ul class="m-merit m-sectionMedium animate-default-orderCover">
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_season.jpg" alt="Electricity supplied is  unaffected by the season."></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">Electricity supplied is  unaffected by the season.</p>
					</div>
					<p class="m-txt">Compared to solar and wind power, it can supply stable power regardless of seasonal fluctuations day and night.</p>
				</li>
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_stable_en.jpg" alt="Stable power output for base power supply."></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">Stable power output for base power supply.</p>
					</div>
					<p class="m-txt">Since the power output fluctuation is small, it can be used as a base power supply that operates constantly</p>
				</li>
				<li class="is-matchHeightPC2">
					<p class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/small-hydropower-generation/img_small.jpg" alt="Smaller footprint compared to other power generation methods"></p>
					<div class="m-merit-title-cover is-matchHeightPC">
						<p class="m-merit-title">Smaller footprint compared to other power generation methods</p>
					</div>
					<p class="m-txt">Compared to other power generation methods, the required installation area is smaller, and the number of possible installation locations are much higher.</p>
				</li>
			</ul>
		</div>
	</div>

	<!-- SERVICE CONSULT BEGIN -->
	<div class="m-serviceConsult-cover">
		<div class="m-serviceConsult">
			<div class="m-serviceConsult-content">
				<p class="m-serviceConsult-title">Consultation About Small Hydropower</p>

				<div class="m-serviceConsult-inner">
					<div class="m-serviceConsult-left">
						<div class="m-serviceConsult-box m-serviceConsult-box-leftTop">
							<p class="m-serviceConsult-box-txt p-serviceConsult-box-txt">Are the procedures for water rights complicated?</p>
						</div>
						<div class="m-serviceConsult-box m-serviceConsult-box-leftBottom">
							<p class="m-serviceConsult-box-txt p-serviceConsult-box-txt">We want to implement local energy production and consumption with a small hydropower generation system.</p>
						</div>
					</div>
					<div class="m-serviceConsult-center tac">
						<p><img src="<?php echo ASSETS_PATH; ?>/images/common/img_consult_man.png" alt="I want to reuse the wastewater energy."></p>
						<p class="m-serviceConsult-center-deco"><img src="<?php echo ASSETS_PATH; ?>/images/common/img_consult_man_head.png" alt="頭"></p>
					</div>
					<div class="m-serviceConsult-right">
						<div class="m-serviceConsult-box m-serviceConsult-box-rightTop">
							<p class="m-serviceConsult-box-txt p-serviceConsult-box-txt">I want to reuse the wastewater energy.</p>
						</div>
						<div class="m-serviceConsult-box m-serviceConsult-box-rightBottom">
							<p class="m-serviceConsult-box-txt p-serviceConsult-box-txt">I want to revitalize the region with a small hydropower system.</p>
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