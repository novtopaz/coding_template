<?php
$mv_text = [
	'h1'=>'Company Profile',
];

set_query_var('mv_text', $mv_text);
get_template_part('include/mv');
?>

<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

<?php if(have_posts()): while(have_posts()): the_post() ?>
	<?php the_content(); ?>
<?php endwhile; endif ?>

<div class="l-content clearfix">
	<div class="l-container clearfix">
		<div class="l-sidenav">
			<ul class="p-sidenav-list">
				<li>
					<p class="l-sidenav-title"><a href="#philosophy" class="l-link l-link-underline is-pagelink">Business Philosophy</a></p>
				</li>
				<li>
					<p class="l-sidenav-title"><a href="#message" class="l-link l-link-underline is-pagelink">Message from the President</a></p>
				</li>
				<li>
					<p class="l-sidenav-title"><a href="#profile" class="l-link l-link-underline is-pagelink">Overview</a></p>
				</li>
				<li>
					<p class="l-sidenav-title"><a href="#history" class="l-link l-link-underline is-pagelink">History</a></p>
				</li>
				<li>
					<p class="l-sidenav-title"><a href="#csr" class="l-link l-link-underline is-pagelink">CSR Activities</a></p>
				</li>
			</ul>
		</div>
		<div id="sidenav-content" class="l-sidenav-content">
			<div class="l-sidenav-box">
				<h2 id="philosophy" class="m-titleH2 l-anchor">Business Philosophy</h2>
				<h3 class="m-titleH3 m-sectionSmall tac">Based on these five basic principles, IWATEC’s employees contribute to society on the same vector.</h3>

				<p class="m-sectionMedium tac">
					<?php getPicture('img_philosophy_en', 'jpg', 'about', 'Trust Technology environment contribution quality') ?>
				</p>

				<!-- MESSAGE BEGIN -->
				<div class="m-sectionUltra">
					<h2 id="message" class="m-titleH2 l-anchor">Message from the President</h2>
					<div class="p-message m-sectionSmall">
						<h3 class="p-message-txt m-titleH3">Renewable energy <br class="nopc"> is the answer <br> to passing on energy <br class="nopc"> to the next <br>generation.</h3>
						<?php getPicture('img_message', 'jpg', 'about', 'Message from the President') ?>

					</div>
					<div class="m-sectionMedium">
						<p class="m-txt">We can hear the cries of this beautiful earth where we live.<br>
						There is no end to the news of abnormal weather due to global warming, and sea levels rising due to melting of the Arctic and Antarctic ice shelfs.<br><br>
						People are now questioning their overdependence on fossil fuels and uncontrolled overdevelopment due to economic priorities.
						<br><br>
						We need to leave energy resources for our children, grandchildren and others beyond.<br><br>
						The answer to that is “Renewable Energy”.
						<br><br>
						It is never too late.<br>
						At IWATEC, we are facing the problem head on, and creating the solution.
						<br><br>
						Will you join hands with “IWATEC” for the next generation?
						</p>

						<p class="p-message-sign tar m-sectionMedium">Koichiro Iwamoto<br>
						General Managing Director &amp; CEO</p>
						<p class="tar mt10">
							<img src="<?php echo ASSETS_PATH; ?>/images/about/ing_sign.png" alt="Koichiro Iwamoto">
						</p>
					</div>
				</div>
				<!-- MESSAGE END -->

				<!-- PROFILE BEGIN -->
				<div class="m-sectionUltra">
					<h2 id="profile" class="m-titleH2 l-anchor">Overview</h2>
					<table class="p-profile-table p-profile-table-en m-txt2 m-sectionMedium">
						<tr>
							<th>Company Name</th>
							<td>IWATEC CORPORATION</td>
						</tr>
						<tr>
							<th>Head Office</th>
							<td>
								<p>No.2 Iwatec Bldg., 7-5 Takara-machi, <br> Nagasaki 850-0045, Japan<br>
								TEL: +81-95-843-6448 / FAX: +81-95-843-6447</p>
								<p class="m-btn m-sectionSmall"><a href="https://goo.gl/maps/zfv4MxAYQUkcu7CVA" target="_blank"><span>Click here for MAP</span></a></p>
							</td>
						</tr>
						<tr>
							<th>Established</th>
							<td>April 1989</td>
						</tr>
						<tr>
							<th>Capital</th>
							<td>20 million yen</td>
						</tr>
						<tr>
							<th>Board Members</th>
							<td>General Managing Director &amp; CEO, Koichiro Iwamoto <br>
							Managing Director, Ako Iwamoto<br>
							Managing Director, Masanobu Iwamoto</td>
						</tr>
						<tr>
							<th>License</th>
							<td>Special Construction Business licensed by Nagasaki Prefecture (Special-26) <br> No. 12915</td>
						</tr>
						<tr>
							<th>Offices</th>
							<td>
								<p class="fwm">Kurume Sales Office</p>
								<p class="mt5">Heisei Inter Bldg #102<br>
									3-2-17 Higashiaikawa, Kurume City, Fukuoka 839-0809, Japan<br>
								TEL/FAX: +81-942-27-6437</p>
								<p class="m-btn m-sectionSmall"><a href="https://goo.gl/maps/i7SQachfPD5S7wBr9" target="_blank"><span>Click here for MAP</span></a></p>

								<p class="fwm m-sectionSmall">India Engineering Centre</p>
								<p class="mt5">CD-135,Salt Lake City Sector I Kolkata－700 064,India</p>
								<p class="m-indent3">TEL：+91-33-2321-6732 <span class="nosp">/</span> 6733</p>
								<p>FAX：+91-33-2321-6731</p>
								<p>E-mail：info@iwateccorp.com</p>
								<p class="m-btn m-sectionSmall"><a href="https://goo.gl/maps/FCXKNBNG27eXtWum6" target="_blank"><span>Click here for MAP</span></a></p>

							</td>
						</tr>
						<tr>
							<th>Principal clients and business partners</th>
							<td>
								<div class="half">
									<div class="half-item">
										<p class="fwm">【Japan】<br>
										</p>
										<p class="mt5">Mitsubishi Hitachi Power Systems Ltd.<br>MHPS Control Systems Co, Ltd<br>
										Mitsubishi Heavy Industries, Ltd<br>
										Mitsubishi Electric Corporation<br>
										Mitsubishi Electric Engineering Co., Ltd</p>
									</div>
									<div class="half-item">
										<p class="fwm">【Overseas】<br>
										</p>
										<p class="mt5">ABB (Switzerland)<br>
										Siemens (Germany)<br>
										Alstom (France)<br>
										Beckwith Electric (USA)<br>
										Cummins (USA, Singapore)<br>
										GUTOR (Switzerland)<br>
										TEW (England)<br>
										DANIMEX (Denmark)<br>
										WILKEN (Kenya)<br>
										RAYLEIGH (England)<br>
										RTK (England)<br>
										CEWE (Sweden)<br>
										CROMPTON (England)</p>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th>Main Banks</th>
							<td>The Shinwa Bank, Ltd<br>
							The Bank of Fukuoka, Ltd.<br>
							The Shoko Chukin Bank, Ltd.<br>
							Japan Finance Corporation</td>
						</tr>
					</table>
				</div>
				<!-- PROFILE END -->

				<!-- HISTORY BEGIN -->
				<div class="m-sectionUltra">
					<h2 id="history" class="m-titleH2 l-anchor">History</h2>

					<div class="p-history m-sectionMedium">
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">1989</p>
<!--								<p class="p-history-year-sub">平成元年</p>-->
							</div>
							<div class="p-history-content m-txt2 fwm">
								Established Iwamoto Engineering Office<br>
								Organized International Business Department to enhance overseas procurement of electrical equipment
							</div>
						</div>
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">1995</p>
<!--								<p class="p-history-year-sub">平成7年</p>-->
							</div>
							<div class="p-history-content m-txt2 fwm">
								Moved its head office to IWATEC Building<br>
								Re-named IWATEC CORPORATION
							</div>
						</div>
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">2003</p>
<!--								<p class="p-history-year-sub">平成元年</p>-->
							</div>
							<div class="p-history-content m-txt2 fwm">
								Celebrated the 15th anniversary
							</div>
						</div>
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">2005</p>
<!--								<p class="p-history-year-sub">平成17年</p>-->
							</div>
							<div class="p-history-content m-txt2 fwm">
								Established “India Engineering Centre”, a branch office in Kolkata
							</div>
						</div>
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">2008</p>
<!--								<p class="p-history-year-sub">平成20年</p>-->
							</div>
							<div class="p-history-content m-txt2 fwm">
								Celebrated the 20th anniversary <br>
								Entered the solar power generation business.
							</div>
						</div>
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">2012</p>
<!--								<p class="p-history-year-sub">平成24年</p>-->
							</div>
							<div class="p-history-content m-txt2 fwm">
								Attained ISO 9001 certification
							</div>
						</div>
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">2013</p>
<!--								<p class="p-history-year-sub">平成25年</p>-->
							</div>
							<div class="p-history-content m-txt2 fwm">
								Opened Kurume Sales Office<br>
								Entered the O&amp;M business
							</div>
						</div>
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">2014</p>
<!--								<p class="p-history-year-sub">平成26年</p>-->
							</div>
							<div class="p-history-content m-txt2 fwm">
								Started commercial operation of IWATEC No.1 and No.2 Solar Power Stations
							</div>
						</div>
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">2015</p>
<!--								<p class="p-history-year-sub">平成27年</p>-->
							</div>
							<div class="p-history-content m-txt2 fwm">
								Started commercial operation of IWATEC No.3, No.4 and No.5 Solar Power Stations. <br>
								Entered into the hydrogen &amp; fuel cell oriented business. <br>
								Started the Renewable Energy Businesses including geothermal, biomass, and small hydropower generation.
							</div>
						</div>
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">2016</p>
<!--								<p class="p-history-year-sub">平成28年</p>-->
							</div>
							<div class="p-history-content m-txt2 fwm">
								Moved its head office to No.2 Iwatec Building
							</div>
						</div>
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">2018</p>
<!--								<p class="p-history-year-sub">平成30年</p>-->
							</div>
							<div class="p-history-content m-txt2 fwm">
								Celebrated the 30th anniversary<br>
								Started commercial operation of IWATEC No.1 Geothermal (Hot Spring) Power Plant
							</div>
						</div>
					</div>
				</div>
				<!-- HISTORY END -->

				<!-- CSR BEGIN -->
				<div class="m-sectionUltra">
					<h2 id="csr" class="m-titleH2 l-anchor">CSR Activities</h2>

					<ul class="p-csr m-sectionMedium">
						<li>
							<p><img src="<?php echo ASSETS_PATH; ?>/images/about/ing_cleaning.png" alt="Cleaning the area outside the office"></p>
							<p class="p-csr-txt">Cleaning the area outside the office <br><br class="nosp"></p>
						</li>
						<li>
							<p><img src="<?php echo ASSETS_PATH; ?>/images/about/ing_inhouse.png" alt="Attend community activities where our Power plants are located."></p>
							<p class="p-csr-txt">Attend community activities where our Power plants are located.</p>
						</li>
						<li>
							<p><img src="<?php echo ASSETS_PATH; ?>/images/about/ing_sponsor.png" alt="Sponsoring Local Events"></p>
							<p class="p-csr-txt">Sponsoring Local Events</p>
						</li>
						<li>
							<p><a class="is-imghover" href="https://www.v-varen.com/" target="_blank"><img src="<?php echo ASSETS_PATH; ?>/images/about/ing_sport.png" alt="Promote Regional Sports Teams"></a></p>
							<p class="p-csr-txt">Promote Regional Sports Teams</p>
						</li>
						<li>
							<p><img src="<?php echo ASSETS_PATH; ?>/images/about/ing_donate.png" alt="Donated company cars to disaster areas stricken by the Kumamoto earthquake"></p>
							<p class="p-csr-txt">Donated company cars to disaster areas stricken by the Kumamoto earthquake</p>
						</li>
					</ul>
				</div>
				<!-- CSR END -->
			</div>
		</div>
	</div>
	<div class="clearfix">
		<div class="l-sidenav-content">
			<?php get_template_part('include/en/contact_en') ?>
		</div>
	</div>
</div>