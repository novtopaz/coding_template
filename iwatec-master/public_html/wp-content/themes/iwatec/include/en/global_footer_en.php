<?php if(!is_page('en')) :?>
</div>
<?php endif; ?>

<div class="l-pagetop">
	<p><a class="is-pagelink is-imghover" href="#pagetop"><img src="<?php echo ASSETS_PATH; ?>/images/common/btn_pagetop.png" alt="PAGETOP"></a></p>
</div><!--l-pagetop-->

<footer class="l-footer">
	<div class="l-footer-cover">
		<div class="l-footer-inner clearfix">
			<div class="l-footer-left">
				<p class="l-footer-logo"><a class="is-imghover" href="<?php echo home_url()?>"><img src="<?php echo ASSETS_PATH; ?>/images/common/logo.png" alt="イワテック"></a></p>
				<ul class="l-footer-sns">
					<li><a class="is-imghover" href="https://www.facebook.com/Iwatec.corp/" target="_blank"><img src="<?php echo ASSETS_PATH; ?>/images/common/icn_facebook.png" alt="Facebook"></a></li>
					<li><a class="is-imghover" href="https://twitter.com/Iwatec_corp" target="_blank"><img src="<?php echo ASSETS_PATH; ?>/images/common/icn_twitter.png" alt="Twitter"></a></li>
					<li><a class="is-imghover" href="https://www.instagram.com/iwatec_corp/" target="_blank"><img src="<?php echo ASSETS_PATH; ?>/images/common/icn_instagram.png" alt="Instagram"></a></li>
				</ul>
			</div>

			<div class="l-footer-content clearfix">
				<div class="l-footer-col">
					<p class="l-footer-link nopc"><a href="<?php echo home_url()?>">Home</a></p>
					<p class="l-footer-link"><a href="<?php echo home_url('/en/services/')?>">Business Description</a></p>
					<ul class="l-footer-list">
						<li><a href="<?php echo home_url('/en/services/geothermal-power-generation/') ?>">Geothermal Power Generation</a></li>
						<li><a href="<?php echo home_url('/en/services/biomass-power-generation/') ?>">Biomass Power Generation</a></li>
						<li><a href="<?php echo home_url('/en/services/small-hydropower-generation/') ?>">Small Hydropower Generation</a></li>
						<li><a href="<?php echo home_url('/en/services/photovoltaic-power-generation/') ?>">Solar Power Generation</a></li>
						<li><a href="<?php echo home_url('/en/services/operation-maintenance/') ?>">Operation &amp; Maintenance</a></li>
						<li><a href="<?php echo home_url('/en/services/hydrogen-fuelcell/') ?>">Hydrogen &amp; Fuel Cell</a></li>
						<li><a href="<?php echo home_url('/en/services/overseas-business/') ?>">International Business</a></li>
					</ul>
				</div>
				<div class="l-footer-col">
					<p class="l-footer-link"><a href="<?php echo home_url('/en/about/')?>">Company Profile</a></p>
					<ul class="l-footer-list">
						<li><a href="<?php echo home_url('/en/about/#philosophy') ?>">Business Philosophy</a></li>
						<li><a href="<?php echo home_url('/en/about/#message') ?>">Message from the President</a></li>
						<li><a href="<?php echo home_url('/en/about/#profile') ?>">Overview</a></li>
						<li><a href="<?php echo home_url('/en/about/#history') ?>">History</a></li>
						<li><a href="<?php echo home_url('/en/about/#csr') ?>">CSR Activities</a></li>
					</ul>
				</div>
				<div class="l-footer-col">
					<p class="l-footer-link"><a href="<?php echo home_url('/en/works/')?>">Our Work</a></p>
					<p class="l-footer-link"><a href="<?php echo home_url('/en/recruit/')?>">Recruitment</a></p>
					<p class="l-footer-link"><a href="<?php echo home_url('/en/news/')?>">What’s New</a></p>
				</div>
				<div class="l-footer-col">
					<p class="l-footer-link"><a href="<?php echo home_url('/en/privacy-policy/') ?>">Terms and Conditions</a></p>
					<p class="l-footer-link"><a href="<?php echo home_url('/contact/') ?>" target="_blank">Contact</a></p>
				</div>

				<?php /*
				<p class="l-footer-point"><img src="<?php echo ASSETS_PATH; ?>/images/common/icn_tpoint.png" alt="T-POINTが貯まります。"></p>
				*/ ?>
			</div>
		</div>
	</div>

	<p class="l-footer-copyright">Copyright © Since 2011-<?php echo date("Y"); ?> IWATEC All Rights Reserved.</p>
</footer><!-- l-footer -->