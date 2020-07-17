<?php if(!is_home() && !is_front_page()) :?>
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
					<p class="l-footer-link nopc"><a href="<?php echo home_url()?>">ホーム</a></p>
					<p class="l-footer-link"><a href="<?php echo home_url('/services/')?>">事業内容</a></p>
					<ul class="l-footer-list">
						<li><a href="<?php echo home_url('/services/geothermal-power-generation/') ?>">地熱発電事業</a></li>
						<li><a href="<?php echo home_url('/services/biomass-power-generation/') ?>">バイオマス発電事業</a></li>
						<li><a href="<?php echo home_url('/services/small-hydropower-generation/') ?>">小水力発電事業</a></li>
						<li><a href="<?php echo home_url('/services/photovoltaic-power-generation/') ?>">太陽光発電事業</a></li>
						<li><a href="<?php echo home_url('/services/operation-maintenance/') ?>">O＆M事業</a></li>
						<li><a href="<?php echo home_url('/services/hydrogen-fuelcell/') ?>">水素・燃料電池事業</a></li>
						<li><a href="<?php echo home_url('/services/overseas-business/') ?>">海外事業展開</a></li>
					</ul>
				</div>
				<div class="l-footer-col">
					<p class="l-footer-link"><a href="<?php echo home_url('/about/')?>">会社案内</a></p>
					<ul class="l-footer-list">
						<li><a href="<?php echo home_url('/about/#philosophy') ?>">経営理念</a></li>
						<li><a href="<?php echo home_url('/about/#message') ?>">代表挨拶</a></li>
						<li><a href="<?php echo home_url('/about/#profile') ?>">会社概要</a></li>
						<li><a href="<?php echo home_url('/about/#history') ?>">沿革</a></li>
						<li><a href="<?php echo home_url('/about/#csr') ?>">CSR活動</a></li>
					</ul>
				</div>
				<div class="l-footer-col">
					<p class="l-footer-link"><a href="<?php echo home_url('/works/')?>">納入事例・導入事例</a></p>
					<p class="l-footer-link"><a href="<?php echo home_url('/recruit/')?>">採用情報</a></p>
					<p class="l-footer-link"><a href="<?php echo home_url('/news/')?>">新着情報</a></p>
				</div>
				<div class="l-footer-col">
					<p class="l-footer-link"><a href="<?php echo home_url('/privacy-policy/') ?>">注意事項</a></p>
					<p class="l-footer-link"><a href="<?php echo home_url('/contact/') ?>" target="_blank">お問い合わせ</a></p>
				</div>


				<p class="l-footer-point"><img src="<?php echo ASSETS_PATH; ?>/images/common/icn_tpoint.png" alt="T-POINTが貯まります。"></p>
			</div>
		</div>
	</div>

	<p class="l-footer-copyright">Copyright © Since 2011-<?php echo date("Y"); ?> IWATEC All Rights Reserved.</p>
</footer><!-- l-footer -->