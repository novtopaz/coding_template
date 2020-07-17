<?php
$mv_text = [
'h1'=>'Business <br class="nopc"> Description',
];

set_query_var('mv_text', $mv_text);
get_template_part('include/mv');
?>

<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

<div class="l-content clearfix">
	<div class="m-box">
		<p class="m-titleH3 tac">With the blessing of nature, IWATEC is aiming to realize an environmentally friendly renewable energy oriented  society through the development of solar, geothermal, biomass, and small hydropower generation systems.</p>

		<!-- ENERGY BEGIN -->
		<div class="m-sectionLarge">
			<h2 class="m-titleH2">What is Renewable Energy?</h2>

			<p class="m-sectionMedium tac"><img src="<?php echo ASSETS_PATH; ?>/images/services/ing_energy_en.png" alt="What is Renewable Energy?"></p>

			<h3 class="m-round m-titleH3 m-sectionLarge tac"><span>Renewable energy is environmentally friendly energy <br>that can be replenished.</span></h3>

			<p class="m-txt m-sectionLarge">
			Unlike fossil fuels such as petroleum, coal, and natural gas, where resources are limited, even if it is used once, Renewable Energy can be regenerated continuously and can be used repeatedly, with no need to worry about the depletion of natural resources.
			<br><br>
			It is an environmentally friendly energy source because it emits almost no global warming causing CO<span class="m-txtMini">2</span> while generating power or heat.
			</p>
		</div>
		<!-- ENERGY END -->

		<!-- BUSINESS BEGIN -->
		<div class="m-sectionLarge">
			<h2 class="m-titleH2">IWATEC’s Business</h2>

			<ul class="p-business m-sectionMedium">
				<li class="clearfix">
					<div class="p-business-img p-business-right">
						<div class="p-business-img-inner">
							<img src="<?php echo ASSETS_PATH; ?>/images/services/ing_geotherma.png" alt="Geothermal Power Generation">
							<p class="p-business-deco p-geotherma-deco1"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_geotherma_01.png" alt="smoke"></p>
							<p class="p-business-deco p-geotherma-deco2"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_geotherma_02.png" alt="smoke"></p>
							<p class="p-business-deco p-geotherma-deco3"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_geotherma_03.png" alt="smoke"></p>
							<p class="p-business-deco p-geotherma-deco4"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_geotherma_04.png" alt="火山"></p>
						</div>
					</div>
				
					<div class="p-business-content p-business-left">
						<h4 class="p-business-title">Geothermal Power Generation</h4>
						<p class="m-txt">IWATEC effectively utilizes the geothermal energy of existing hot spring wells for a community-based geothermal power generation business, in collaboration with hot spring towns.<br><br>
						Leveraging the experience and the know-how acquired through the design and development of our own power plant, we provide services to customers for procedural support, system design, equipment procurement, power plant construction, maintenance and management.</p>
						<p class="p-business-btn m-btn m-sectionMedium"><a href="<?php echo home_url('/en/services/geothermal-power-generation/') ?>"><span>For More Details</span></a></p>
					</div>
				</li>
				<li class="clearfix">
					<div class="p-business-img p-business-left">
						<div class="p-business-img-inner">
							<img src="<?php echo ASSETS_PATH; ?>/images/services/ing_bio.png" alt="Biomass Power Generation">
							<p class="p-business-deco p-bio-deco1"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_bio_01.png" alt="cow"></p>
							<p class="p-business-deco p-bio-deco2"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_bio_02.png" alt="cow"></p>
						</div>
					</div>
					<div class="p-business-content p-business-right tal">
						<h4 class="p-business-title">Biomass Power Generation</h4>
						<p class="m-txt">Biomass power generation enables effective utilization of unused resources and reduction of waste, providing satisfactory improvement of the surrounding environment and for vitalization of local agriculture and livestock industries.<br><br>
						With our wide perspective and global network , we recommend the optimal system incorporating advanced biomass technologies from Japan and overseas.</p>
						<p class="p-business-btn m-btn m-sectionMedium"><a href="<?php echo home_url('/en/services/biomass-power-generation/') ?>"><span>For More Details</span></a></p>
					</div>
				</li>

				<li class="clearfix">
					<div class="p-business-img p-business-right">
						<div class="p-business-img-inner">
							<img src="<?php echo ASSETS_PATH; ?>/images/services/ing_water.png" alt="Small Hydropower Generation">
							<p class="p-business-deco p-water-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_water.png" alt="Small Hydropower Generation"></p>
						</div>
					</div>
					<div class="p-business-content p-business-left">
						<h4 class="p-business-title">Small Hydropower Generation</h4>
						<p class="m-txt">Small hydropower generation makes effective use of the energy from water that is currently untapped in commonplace rivers, agricultural water, erosion control dams, water supply facilities and sewage treatment facilities.<br><br>
						We recommend small hydro energy system projects working in collaboration with local communities, and are utilized by agricultural processing facilities, tourist facilities, etc.</p>
						<p class="p-business-btn m-btn m-sectionMedium"><a href="<?php echo home_url('/en/services/small-hydropower-generation/') ?>"><span>For More Details</span></a></p>
					</div>
				</li>
				<li class="clearfix">
					<div class="p-business-img p-business-left">
						<div class="p-business-img-inner">
							<img src="<?php echo ASSETS_PATH; ?>/images/services/ing_solar.png" alt="Solar Power Generation">
							<p class="p-business-deco p-solar-deco1"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_solar01.png" alt="light"></p>
							<p class="p-business-deco p-solar-deco2"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_solar02.png" alt="light"></p>
							<p class="p-business-deco p-solar-deco3"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_solar03.png" alt="light"></p>
						</div>
					</div>
					<div class="p-business-content p-business-right tal">
						<h4 class="p-business-title">Solar Power Generation</h4>
						<p class="m-txt">Since our founding, we have been involved in numerous power generation system designs.  With our background of expertise and know-how, solar power generation was our first segment of our renewable energy business.  We offer safe, secure and comprehensive services from system design and sales, as well as providing EPC and O&amp;M services for commercial sites.</p>
						<p class="p-business-btn m-btn m-sectionMedium"><a href="<?php echo home_url('/en/services/photovoltaic-power-generation/') ?>"><span>For More Details</span></a></p>
					</div>
				</li>

				<li class="clearfix">
					<div class="p-business-img p-business-right">
						<div class="p-business-img-inner">
							<img src="<?php echo ASSETS_PATH; ?>/images/services/ing_om.png" alt="Operation & Maintenance">
							<p class="p-business-deco p-om-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_om.png" alt="hand"></p>
						</div>
					</div>
					<div class="p-business-content p-business-left">
						<h4 class="p-business-title">Operation &amp; Maintenance</h4>
						<p class="m-txt">Reliable maintenance leads to the long-term durability and high efficiency of power generation systems and facilities.  By inspecting from a design engineer perspective, we can offer optimal solutions and improvement plans to achieve higher efficiency systems.</p>
						<p class="p-business-btn m-btn m-sectionMedium"><a href="<?php echo home_url('/en/services/operation-maintenance/') ?>"><span>For More Details</span></a></p>
					</div>
				</li>
				<li class="clearfix">
					<div class="p-business-img p-business-left">
						<div class="p-business-img-inner">
							<img src="<?php echo ASSETS_PATH; ?>/images/services/ing_h2.png" alt="Hydrogen & Fuel Cell">
							<p class="p-business-deco p-h2-deco01"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_h2_01.png" alt="light"></p>
							<div class="p-h2-deco-inner">
								<p class="p-business-deco p-h2-deco02"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_h2_02.png" alt="H2"></p>
								<p class="p-business-deco p-h2-deco03"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_h2_03.png" alt="H2"></p>
							</div>
						</div>
					</div>
				<div class="p-business-content p-business-right tal">
					<h4 class="p-business-title">Hydrogen &amp; Fuel Cell</h4>
					<p class="m-txt">Hydrogen, which can be produced from various resources, introduces flexibility to the energy supply system and brings many benefits to the world. We are working to create a system for the production and usage of hydrogen energy in order to become a steward to the global environment and achieve a safe and comfortable life.</p>
					<p class="p-business-btn m-btn m-sectionMedium"><a href="<?php echo home_url('/en/services/hydrogen-fuelcell/') ?>"><span>For More Details</span></a></p>
				</div>
				</li>

				<li class="clearfix">
					<div class="p-business-img p-business-right">
						<div class="p-business-img-inner">
							<img src="<?php echo ASSETS_PATH; ?>/images/services/ing_oversea.png" alt="International Business">
							<div class="p-oversea-deco-cover">
							<p class="p-business-deco p-oversea-deco"><img src="<?php echo ASSETS_PATH; ?>/images/services/icn_oversea.png" alt="airplane"></p>
							</div>
						</div>
					</div>
					<div class="p-business-content p-business-left">
						<h4 class="p-business-title">International Business</h4>
						<p class="m-txt">Working close with our branch office in Kolkata, India, we offer the best and the latest technologies available from a global perspective, and provide the most reliable systems and services to customers.</p>
						<p class="p-business-btn m-btn m-sectionMedium"><a href="<?php echo home_url('/en/services/overseas-business/') ?>"><span>For More Details</span></a></p>
					</div>
				</li>
			</ul>
		</div>
		<!-- BUSINESS END -->
	</div>

<?php get_template_part('include/en/contact_en') ?>
</div>

