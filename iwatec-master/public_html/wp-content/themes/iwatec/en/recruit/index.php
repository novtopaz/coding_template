<?php
$mv_text = [
	'h1'=>'Recruitment',
];

set_query_var('mv_text', $mv_text);
get_template_part('include/mv');
?>

<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

<?php if(have_posts()): while(have_posts()): the_post() ?>
	<?php the_content(); ?>
<?php endwhile; endif ?>

<div class="l-content">
	<div class="m-box">
		<p class="m-round m-titleH3 m-sectionLarge tac"><span>What IWATEC is Aiming For</span></p>

		<p class="m-txt m-sectionMega tac">Our desire is that while living comfortably,  our lives will be in harmony <br> with the earth. IWATEC hopes to gather the knowledge and wisdom of a <br> live and let live society to protect all living creatures and nature.</p>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">IWATEC’s Staff</h2>

			<ul class="p-listPeople animate-default-orderCover m-sectionMedium">
				<li class="animate-default-order">
					<p class="p-listPeople-txt">Gender Ratio</p>
					<p><img src="<?php echo ASSETS_PATH; ?>/images/recruit/ing_gender_en.png" alt="Men78% Women22%"></p>
				</li>
				<li class="animate-default-order">
					<p class="p-listPeople-txt">Age Group</p>
					<p><img src="<?php echo ASSETS_PATH; ?>/images/recruit/ing_age_en.png" alt="20’s14% 30’s
					31% 40’s33% 50’s33% 60’s14%"></p>
				</li>
			</ul>
		</div>

		<h3 class="p-title">■ Qualification</h3>
		<p class="m-txt">1st class/2nd class Certified Electrician, 2nd class/3rd class Electric Works Specialist, Energy Management Specialist, TOEIC score of 800 or higher, EIKEN Test in Practical English Proficiency Pre 1st-level, the Official Business Skills Test in Bookkeeping (NISSHO) 2nd-level.</p>
		<p class="p-txtMini">*As of September 2019. Not including India office.</p>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">Application Guidelines</h2>

			<table class="p-table m-txt">
				<tr>
					<th>Open Positions</th>
					<td>
						<div class="p-table-half">
							<div class="p-table-half-item">
								<p class="p-table-title">Technical</p>
								<p class="mt5">Renewable Energy oriented<br>
								・Development &amp; design engineer<br>
								・Electrical engineer<br>
								・Plant engineer<br>
								・Mechanical engineer<br>
								・Instrumentation &amp; Control engineer</p>
							</div>
							<div class="p-table-half-item">
								<p class="p-table-title">Clerical &amp; Admin</p>
								<p class="mt5">・Sales<br>
								・Salesclerk<br>
								・Accountant<br>
								・HR General Affairs personnel<br>
								・Public relations personnel<br>
								・Import/Export administrator<br>
								・Translator</p>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<th>Employee Benefits &amp; Welfare</th>
					<td>
						<p class="p-table-head p-table-head-en"><span class="p-table-title">Holidays</span>Saturdays, Sundays, National holidays, New Years, OBon.</p>
						<p class="p-table-head p-table-head-en"><span class="p-table-title">Allowance</span>Perfect attendance allowance, Family allowance, Qualification allowance.</p>
						<p class="p-table-head p-table-head-en"><span class="p-table-title">Education</span>In-house English conversation class, In-house/off-site seminars</p>
						<p class="p-table-head p-table-head-en"><span class="p-table-title">Others</span>Discount coupons (movies, art, public baths, etc.) massage ticket, soccer game ticket</p>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="p-contact-cover">
		<div class="p-contact">
			<h2 class="p-contact-title">Contact</h2>
			<p class="p-contact-txt">If you would like to apply for a position currently available</p>
			<p><a class="is-imghover" href="<?php echo home_url('/contact/') ?>" target="_blank">
				<?php getPicture('btn_contact_en', 'png', 'recruit', 'Click here to apply') ?>
			</a></p>
		</div>
	</div>
</div>