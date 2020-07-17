<?php
$mv_text = [
	'h1'=>'Terms and <br class="nopc"> Conditions',
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
		<div class="l-sidenav nosp">
			<div class="l-sidenav-item">
				<p class="l-sidenav-title"><a href="#terms" class="l-linkMega is-pagelink">Terms of Use</a></p>
				<ul class="l-sidenav-list m-txt">
					<li><a href="#disclaimer" class="l-link l-link-underline is-pagelink">Disclaimer</a></li>
					<li><a href="#copyright" class="l-link l-link-underline is-pagelink">Copyright</a></li>
					<li><a href="#linksite" class="l-link l-link-underline is-pagelink">About Linked Sites</a></li>
					<li><a href="#link" class="l-link l-link-underline is-pagelink"><span>Linking to IWATEC’s </span><br>Website</a></li>
					<li><a href="#cookie" class="l-link l-link-underline is-pagelink">Cookies</a></li>
					<li><a href="#contact" class="l-link l-link-underline is-pagelink">Inquiry Email</a></li>
					<li><a href="#law" class="l-link l-link-underline is-pagelink">Governing Law</a></li>
				</ul>
			</div>

			<div class="l-sidenav-item">
				<p class="l-sidenav-title"><a href="#privacy" class="l-linkMega is-pagelink">Privacy Policy</a></p>
				<ul class="l-sidenav-list m-txt">
					<li><a href="#collect" class="l-link l-link-underline is-pagelink"><span>Collection of Personal</span><br>Information</a></li>
					<li><a href="#use" class="l-link l-link-underline is-pagelink"><span>Use of Personal</span><br>Information</a></li>
					<li><a href="#offer" class="l-link l-link-underline is-pagelink"><span>Disclosure and Provision of</span><br>Personal Information</a></li>
				</ul>
			</div>
		</div>
		<div id="sidenav-content" class="l-sidenav-content">
			<div class="l-sidenav-box">
				<p class="m-txt">Please read and agree to the following terms and conditions carefully before using the IWATEC Co., Ltd. (hereinafter “the Company”) website.<br>
				Please be aware that when you use this website, you are deemed to understand and agree to all the terms and conditions.<br>
				If you do not agree, please refrain from using this website.<br>
				Please note that the contents of this website are subject to change without notice as necessary.  Please contact us and check the latest contents when using it.</p>
				<div class="p-content-item">
					<h2 id="terms" class="p-title l-anchorMega">Terms of Use</h2>
					<h3 id="disclaimer" class="p-sub l-anchor">Disclaimer</h3>
					<p class="m-txt">The Company strives to do everything possible to maintain the accuracy of the information posted on this website, however it is possible that any information extracted by a site user might not be the most up-to date.  Users are advised that the Company provides no guarantees associated with the use of the Information on this website.  The Company accepts no responsibility for a kind of harm arising directly or indirectly from the use of this website.</p>
			
					<h3 id="copyright" class="p-sub l-anchor">Copyright</h3>
					<p class="m-txt">All information (hereinafter "content") such as images, texts, sounds, logos, etc. posted on this Website are copyrighted by IWATEC.<br>
					However, if some content was originally created by a third party, the copyright extends to the original creator.<br>
					It is forbidden to copy, reprint, publicly send, distribute, or sell all or any part of the content or modification to other websites or print media without permission, beyond the scope permitted by private use or other copyright laws.<br>
					If you use the contents with permission from the Company, please display the copyright specified by the Company (Copyright &copy; Since 2011-Iwatec All Rights Reserved.).<br>
					The use of Iwatec and Design is forbidden.</p>
			
					<h3 id="linksite" class="p-sub l-anchor">About Linked Sites</h3>
					<p class="m-txt">The Company does not assume any liability for the contents, or for any damage that may  incur by using this website or any third-party site that is linked to or from  this website.</p>
			
					<h3 id="link" class="p-sub l-anchor">Linking to IWATEC’s Website.</h3>
					<p class="m-txt">After agreeing to the link setting conditions below, the Company will accept link access including the URL of the website in magazines, books,  publications, etc., regardless of whether it is for-profit, non-profit, internet, or intranet. When linking, please notify us of the following items using the “Inquiry Form”.</p>
					<ul class="m-sectionSmall">
						<li class="m-indent2">●　Requesting Entity: Company name / address / phone number / position / person name / email address.</li>
						<li class="m-indent2">●　Linking website address.</li>
					</ul>
					<p class="m-txt m-sectionSmall">＜Link Setting Conditions＞</p>
					<ol class="m-sectionSmall">
						<li class="m-indent">1. For the website address link, please use the top page URL of the website (https://www.iwatec.co.jp/).  Please also be advised that the contents on this site are updated without notice,  and that such action may include changes to the relevant URLs.</li>
						<li class="m-indent">2. Please use “IWATEC Co., Ltd.” (text notation) for the link name.</li>
						<li class="m-indent">3. Link access from any websites containing the following nature is strictly prohibited.
							<ul class="m-sectionSmall pl20">
								<li class="m-indent2">●　Websites that slander or defame the Company, other companies or persons, or other organizations.</li>
								<li class="m-indent2">●　Websites that include adult content.</li>
								<li class="m-indent2">●　Websites that include contents recognized as offensive to public order and morals.</li>
								<li class="m-indent2">●　Websites that include contents recognized as illegal or having the possibility of involvement, or involve in activities recognized as illegal or having the possibility of involvement.</li>
								<li class="m-indent2">●　Websites that may or may not imply that the Company recognizes, guarantees, supports, or recommends the link source, the link source website, or the service or product provided by the link source.</li>
								<li class="m-indent2">●　Websites that may be misleading to third parties due to uncertainties regarding our content, such as the display of this website within a frame.</li>
							</ul>
						</li>
						<li class="m-indent m-sectionSmall">4. Unauthorized use of the content posted on this website is not permitted. When posting with the permission of the Company, please include the following description as a source.</li>
					</ol>
					<p class="m-txt m-sectionSmall">＜Source＞ </p>
					<p class="m-txt">Data provider：IWATEC Co., Ltd. <br>
					Publisher URL： https://www.iwatec.co.jp<br>
					Reprint date： 201*.**.**
					</p>
			
					<h3 id="cookie" class="p-sub l-anchor">Cookies</h3>
					<p class="m-txt">This website uses cookies.<br>
					Information about customers (age group, gender, etc.) collected through the use of cookies does not include information that violates your privacy. This information will only be used as a reference for providing better service to our customers.<br>
					Customers who refuse to accept cookies can disable the cookie functionality by changing their browser preferences.</p>
			
					<h3 id="contact" class="p-sub l-anchor">Inquiry Email</h3>
					<p class="m-txt">If you have any inquiries regarding this website, please contact us via the "<a href="<?php echo home_url('/contact/') ?>" target="_blank">Inquiry Form</a>“.<br>
					We will respond to your email in good faith, but we may not be able to respond to all of them.<br>
					sThank you for your understanding beforehand.
					</p>
			
					<h3 id="law" class="p-sub l-anchor">Governing Law</h3>
					<p class="m-txt">Unless otherwise specified, the use of this website and the interpretation and application of these terms of use shall be governed by the laws of Japan.</p>
				</div>

				<div class="p-content-item">
					<h2 id="privacy" class="p-title l-anchorMega">Privacy Policy</h2>
					<p class="m-txt m-sectionSmall">The Company recognizes that the proper management of personal information provided by customers on this website is a basic business activity and social responsibility, and is committed to protect the privacy of our customers.<br>
					The Company will act appropriately according to the following regarding the handling of customer’s personal information.</p>
					
					<h3 id="collect" class="p-sub l-anchor">Collection of Personal Information</h3>
					<p>When you visit the IWATEC website, providing personal information such as address, name, email address, etc. is not required. However in the event that we need to contact you, such information may be requested.<br>
					Additionally, this web server automatically records the IP address, domain name, browser, OS, number of times accessed, etc. of the computer used by the customer.<br>
					This information is not personally identifiable and is only used to collect access statistics for all of our customers.<br>
					When requesting personal information to be provided for purposes other than the above, the Company will clearly explain the purpose and scope of the use and limit it to the minimum amount of personal information required.</p>
							
					<h3 id="use" class="p-sub l-anchor">Use of Personal Information</h3>
					<p>The Company will use your personal information for the following purposes.</p>
					<ol class="m-sectionSmall">
						<li class="m-indent">1. When consigning the operation of this website to a subcontractor</li>
						<li class="m-indent">2. When conducting business or negotiations with customers</li>
						<li class="m-indent">3. When responding to customer inquiries or requests</li>
					</ol>
								
					<h3 id="offer" class="p-sub l-anchor">Disclosure and Provision of Personal Information</h3>
					<p>The Company will manage personal information appropriately and will not disclose or provide it to any third party except in the following cases.</p>
					<ol class="m-sectionSmall">
						<li class="m-indent">1. When a customer's consent has been obtained in advance</li>
						<li class="m-indent">2.When a contract binds subcontractors not to use personal information for other than the scope necessary to perform the purpose of use</li>
						<li class="m-indent">3. When disclosure to third parties is authorized by related laws or guidelines, or judicial organizations such as court, police etc. has ordered the disclosure of provision of personal information</li>
						<li class="m-indent">4. When the Company needs to protect or defend the rights and property of the Company and its website</li>
						<li class="m-indent">5. When it is deemed necessary for the protection of human life, personal property, etc., and it is difficult to obtain customer consent.</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>