<?php $l_header_class = is_front_page() || is_page('en') ? 'is-top' : ''; ?>

<header class="l-header <?php echo $l_header_class; ?>">
	<div class="l-header-inner clearfix">
		<?php $logo_slug = is_front_page() ? 'h1' : 'p'; ?>
		<<?php echo $logo_slug; ?> class="l-header-logo">
			<a class="is-imghover" href="<?php echo home_url('/en/'); ?>"><img src="<?php echo ASSETS_PATH; ?>/images/common/logo.png" alt="IWATEC"></a>
		</<?php echo $logo_slug; ?>>

		<p class="l-header-menu-btnSP nopc"><img src="<?php echo ASSETS_PATH; ?>/images/common/btn_menu.png" alt="MENu"></p>

		<div class="l-header-content">
			<div class="l-header-content-top nopc clearfix">
				<p class="l-header-content-top-logo">
					<a class="is-imghover" href="<?php echo home_url(); ?>"><img src="<?php echo ASSETS_PATH; ?>/images/common/logo.png" alt="IWATEC"></a>
				</p>
				<p class="l-header-menu-btnSP-close"><img src="<?php echo ASSETS_PATH; ?>/images/common/btn_menu_close.png" alt="CLOSE"></p>
			</div>

			<!-- CONTROL BEGIN -->
			<div class="l-header-control clearfix">
				<div class="l-header-control-fontsize">
					<span class="l-header-control-txt">Font Size</span>
					<p class="l-header-control-fontsize-btn"><span class="l-header-control-fontsize-normal is-active">Standard</span><span class="l-header-control-fontsize-large">Large</span></p>
				</div>

				<div class="l-header-control-language nosp">
					<span class="l-header-control-txt">Language</span>
					<ul class="l-header-control-language-btn">
						<li><a href="<?php echo home_url(); ?>"><img src="<?php echo ASSETS_PATH; ?>/images/common/icn_japan.png" alt="日本語"></a></li>
						<li><a href="<?php echo home_url('/en/'); ?>"><img src="<?php echo ASSETS_PATH; ?>/images/common/icn_america.png" alt="English"></a></li>
					</ul>
				</div>

				<div class="l-header-control-search">
					<form autocomplete="off" role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url(); ?>">
						<div>
							<input type="text" placeholder="Search" name="s" id="s">
							<input type="submit" id="searchsubmit" value="Search">
						</div>
					</form>
				</div>

			</div>
			<!-- CONTROL END -->

			<!-- MENU BEGIN -->
			<ul class="l-header-menu">
				<li class="l-header-menu-item">
					<a class="l-header-menu-link" href="<?php echo home_url('/en/about/') ?>">
						<p class="l-header-menu-title">Company Profile</p>
<!--						<p class="l-header-menu-sub">Company Profile</p>-->
					</a>
				</li>
				<li class="l-header-menu-item">
					<a class="l-header-menu-btn l-header-menu-link" href="<?php echo home_url('/en/services/') ?>">
						<p class="l-header-menu-title">Business Description</p>
<!--						<p class="l-header-menu-sub">Business Description</p>-->
					</a>
					<span class="l-header-menu-btn-accordion nopc"></span>
					<ul class="l-header-menu-subMenu nopc"></ul>
				</li>
				<li class="l-header-menu-item">
					<a class="l-header-menu-link" href="<?php echo home_url('/en/works/') ?>">
						<p class="l-header-menu-title">Our Work</p>
<!--						<p class="l-header-menu-sub">Our Work</p>-->
					</a>
				</li>
				<li class="l-header-menu-item">
					<a class="l-header-menu-link" href="<?php echo home_url('/en/news/') ?>">
						<p class="l-header-menu-title">What's New</p>
<!--						<p class="l-header-menu-sub">What's New</p>-->
					</a>
				</li>
				<li class="l-header-menu-item">
					<a class="l-header-menu-link" href="<?php echo home_url('/en/recruit/') ?>">
						<p class="l-header-menu-title">Recruitment</p>
<!--						<p class="l-header-menu-sub">Recruitment</p>-->
					</a>
				</li>
			</ul>
			<!-- MENU END -->

			<div class="l-header-content-bottom">
				<!-- CONTACT BEGIN -->
				<div class="l-header-contact">
					<p class="l-header-contact-btn">
						<a href="<?php echo home_url('/contact/') ?>" target="_blank">
							<img src="<?php echo ASSETS_PATH; ?>/images/common/icn_mail.png" alt="contact">
							<span>Contact</span>
						</a>
					</p>
				</div>
				<!-- CONTACT END -->
				
				<p class="l-header-content-bottom-language nopc"><a href="<?php echo home_url('/en/'); ?>"><img src="<?php echo ASSETS_PATH; ?>/images/common/icn_america_sp.png" alt="English"></a></p>
			</div>
			
		</div>

		<nav class="l-gnav">
			<div class="l-gnav-inner clearfix">
				<div class="l-gnav-intro">
					<h2 class="l-gnav-intro-titleH2">SERVICES</h2>
<!--					<h2 class="l-gnav-intro-titleH2-sub">事業内容</h2>-->
					<p class="l-gnav-intro-btn m-btn"><a href="<?php echo home_url('/en/services/') ?>"><span>For More Details</span></a></p>
				</div>
				<ul class="l-gnav-list">
					<li>
						<a href="<?php echo home_url('/en/services/geothermal-power-generation/') ?>">
							<p class="l-gnav-list-img"><img src="<?php echo ASSETS_PATH; ?>/images/common/img_gnav_geotherma.png" alt="Geothermal Power Generation"></p>
							<p class="l-gnav-list-txt">Geothermal Power Generation</p>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url('/en/services/biomass-power-generation/') ?>">
							<p class="l-gnav-list-img"><img src="<?php echo ASSETS_PATH; ?>/images/common/img_gnav_bio.png" alt="Biomass Power Generation"></p>
							<p class="l-gnav-list-txt">Biomass Power Generation</p>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url('/en/services/small-hydropower-generation/') ?>">
							<p class="l-gnav-list-img"><img src="<?php echo ASSETS_PATH; ?>/images/common/img_gnav_water.png" alt="Small Hydropower Generation"></p>
							<p class="l-gnav-list-txt">Small Hydropower Generation</p>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url('/en/services/photovoltaic-power-generation/') ?>">
							<p class="l-gnav-list-img"><img src="<?php echo ASSETS_PATH; ?>/images/common/img_gnav_solar.png" alt="Solar Power Generation"></p>
							<p class="l-gnav-list-txt">Solar Power Generation</p>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url('/en/services/operation-maintenance/') ?>">
							<p class="l-gnav-list-img"><img src="<?php echo ASSETS_PATH; ?>/images/common/img_gnav_om.png" alt="Operation & Maintenance"></p>
							<p class="l-gnav-list-txt">Operation &amp; Maintenance</p>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url('/en/services/hydrogen-fuelcell/') ?>">
							<p class="l-gnav-list-img"><img src="<?php echo ASSETS_PATH; ?>/images/common/img_gnav_h2.png" alt="Hydrogen & Fuel Cell"></p>
							<p class="l-gnav-list-txt">Hydrogen &amp; Fuel Cell</p>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url('/en/services/overseas-business/') ?>">
							<p class="l-gnav-list-img"><img src="<?php echo ASSETS_PATH; ?>/images/common/img_gnav_oversea.png" alt="International Business"></p>
							<p class="l-gnav-list-txt">International Business</p>
						</a>
					</li>
				</ul>
			</div>
		</nav><!-- l-gnav -->
		
	</div>

</header><!-- l-header -->

<?php if(!is_page('en')) :?>
<div class="l-pageBody">
<?php endif; ?>

