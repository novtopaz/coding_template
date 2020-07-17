<?php
$php_charset = 'utf-8';
header('content-type: text/html; charset='.$php_charset);
header("Expires: Thu, 01 Dec 1994 16:00:00 GMT");
header("Last-Modified: ". gmdate("D, d M Y H:i:s"). " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');

get_template_part('config/config');
?>
<!DOCTYPE html>
<html lang="ja">
<head>

<?php require_once('include/ftinput.php'); //form 入力ページ ?>
<?php
	$title = 'お問い合わせ';
	$description = 'お問い合わせ入力';
	require_once(get_template_directory() .'/include/form/form_common_head.php'); //共通head ?>
</head>

<body id="pagetop">
	<?php get_template_part('/include/form/form_header');?>

	<?php
	$mv_text = [
		'h1'=>'お問い合わせ',
		'sub'=>'CONTACT',
	];

	set_query_var('mv_text', $mv_text);
	get_template_part('include/mv');
	?>
	</div>

	<div class="l-content">

		<ul class="p-step-type01">
			<li class="p-step01">
				<span>01</span>フォームへのご入力<br>
				Form Entry
			</li>
			<li class="p-step02">
				<span>02</span>入力内容確認<br>
				Entry Verification
			</li>
			<li>
				<span>03</span>送信完了<br>
				Submit
			</li>
		</ul>

		<p class="p-lead tac fwm">ご回答につきましては、<br class="nopc">内容により数日お時間をいただく場合がございます。<br>
		尚、弊社への営業を目的とした<br class="nopc">お問い合わせはご遠慮ください。</p>
		<p class="p-sub tac mt15">Depending on the content,<br class="nopc"> it may take several days to respond.<br>
		Please refrain from making sales inquiries.</p>

		<div class="contactform-cover">
			<h2 class="p-title">お問い合わせ内容　<span>Content of inquiry</span></h2>
			<p class="contactform-note">＊ は必須項目です。<br class="nosp">
			＊ Required field</p>
			<form action="./" name="contactform" method="post" enctype="multipart/form-data" id="contactform" class="contactform">

				<table class="p-table">
					<tr>
						<th>お問い合わせ区分<span class="p-icn-required">＊</span><br class="nosp">
							<em class="fwn">Inquiry category</em></th>
						<td><div class="is-must-box">
							<ul class="p-inline-list">
								<li><label for="contact_us"><input type="radio" name="inquiry_category" value="お問い合わせ　Contact Us" id="contact_us" class="validate[required]">お問い合わせ　<em class="fwn">Contact Us</em></label></li>
								<li><label for="information_request"><input type="radio" name="inquiry_category" value="資料請求　Information request" id="information_request" class="validate[required]">資料請求　<em class="fwn">Information request</em></label></li>
								<li><label for="recruitment"><input type="radio" name="inquiry_category" value="採用に関して　Recruitment" id="recruitment" class="validate[required]">採用に関して　<em class="fwn">Recruitment</em></label></li>
							</ul>
							<?php
								if($ob_input->isValidateErrorScreen()){
									if($ob_input->isAllValidateResult("inquiry_category")===false){
										if($ob_input->isValidateResult("inquiry_category","must")===false){
											echo "<p class='p-error-txt'>※＊項目です。</p>";
										}else{
											echo "<p class='p-error-txt'>※入力内容が正しくありません。</p>";
										}
									}
								}
							?>
						</div></td>
					</tr>
					<tr>
						<th>事業区分<span class="p-icn-required">＊</span><br class="nosp">
							<em class="fwn">Business category</em></th>
						<td><div class="is-must-box">
							<select name="business_category" class="validate[required]">
								<option value="">選択してください　<em class="fwn">Please choose</em></option>
								<option value="地熱発電事業　Geothermal power generation">地熱発電事業　Geothermal power generation</option>
								<option value="バイオマス発電事業　Biomass power generation">バイオマス発電事業　Biomass power generation</option>
								<option value="小水力発電事業　Small hydropower generation">小水力発電事業　Small hydropower generation</option>
								<option value="太陽光発電事業　Photovoltaic power generation">太陽光発電事業　Photovoltaic power generation</option>
								<option value="水素・燃料電池事業　Hydrogen & Fuel cell">水素・燃料電池事業　Hydrogen & Fuel cell</option>
								<option value="O＆M事業　Operation & Maintenance">O＆M事業　Operation & Maintenance</option>
								<option value="海外事業　International Business">海外事業　International Business</option>
								<option value="その他　Other">その他　Other</option>
							</select>
						</div></td>
					</tr>
					<tr>
						<th>お問い合わせ内容<br class="nosp">
							<em class="fwn">Description of inquiry</em></th>
						<td><div class="is-must-box">
							<textarea name="body" placeholder="例）ホームページを見ました。ご連絡ください。" id="form-validation-field-3"></textarea>
						</div></td>
					</tr>
				</table>

				<h2 class="p-title">お客様情報　<span>Customer Information</span></h2>
			

				<table class="p-table">
					<tr>
						<th>個人／法人<span class="p-icn-required">＊</span><br class="nosp">
							<em class="fwn">Personal／Corporation</em></th>
						<td><div class="is-must-box">
							<ul class="p-inline-list">
								<li><label class="customer-type" customer-type="personal" for="customer"><input  type="radio" name="customer" value="個人　Personal" id="customer" class="validate[required]" checked="">個人　<em class="fwn">Personal</em></label></li>
								<li><label class="customer-type" customer-type="corporation" for="corporation"><input type="radio" name="customer" value="法人　Corporation" id="corporation" class="validate[required]">法人　<em class="fwn">Corporation</em></label></li>
							</ul>
						</div></td>
					</tr>
					<tr>
						<th>氏名<span class="p-icn-required">＊</span><br class="nosp">
							<em class="fwn">Full name</em></th>
						<td><div class="is-must-box">
							<input type="text" name="name" placeholder="例）山田　太郎" class="validate[required]" value="<?php $ob_input->text("name"); ?>" id="name">
							<?php
								if($ob_input->isValidateErrorScreen()){
									if($ob_input->isAllValidateResult("name")===false){
										if($ob_input->isValidateResult("name","must")===false){
											echo "<p class='p-error-txt'>※＊項目です。</p>";
										}else{
											echo "<p class='p-error-txt'>※入力内容が正しくありません。</p>";
										}
									}
								}
							?>
						</div></td>
					</tr>
					<tr>
						<th>フリガナ<span class="p-icn-required">＊</span></th>
						<td><div class="is-must-box">
							<input type="text" name="name_kana" placeholder="例）ヤマダ　タロウ" class="validate[required]" value="<?php $ob_input->text("name_kana"); ?>" id="name_kana">
							<?php
								if($ob_input->isValidateErrorScreen()){
									if($ob_input->isAllValidateResult("name_kana")===false){
										if($ob_input->isValidateResult("name_kana","must")===false){
											echo "<p class='p-error-txt'>※＊項目です。</p>";
										}else{
											echo "<p class='p-error-txt'>※入力内容が正しくありません。</p>";
										}
									}
								}
							?>
						</div></td>
					</tr>
					<tr class="corporation-item">
						<th>会社名<span class="p-icn-required">＊</span><br class="nosp">
							<em class="fwn">Company name</em></th>
						<td><div class="is-must-box">
							<input type="text" name="company" placeholder="例）株式会社イワテック" class="validate[required]" value="<?php $ob_input->text("company"); ?>" id="company">
							<?php
								if($ob_input->isValidateErrorScreen()){
									if($ob_input->isAllValidateResult("company")===false){
										if($ob_input->isValidateResult("company","must")===false){
											echo "<p class='p-error-txt'>※＊項目です。</p>";
										}else{
											echo "<p class='p-error-txt'>※入力内容が正しくありません。</p>";
										}
									}
								}
							?>
						</div></td>
					</tr>
					<tr class="corporation-item">
						<th>部署名／役職名<br class="nosp">
							<em class="fwn">Department name／Title</em></th>
						<td><div class="is-must-box">
							<input type="text" name="department" value="<?php $ob_input->text("department"); ?>">
						</div></td>
					</tr>
					<tr>
						<th>メールアドレス<span class="p-icn-required">＊</span><br class="nosp">
							<em class="fwn">E-mail address</em></th>
						<td><div class="is-must-box">
							<input type="email" name="mail" id="mail" placeholder="例）sample＠co.jp" class="validate[required, custom[email]] is-character-change-01" value="<?php $ob_input->text("mail"); ?>">
							<?php
								if($ob_input->isValidateErrorScreen()){
									if($ob_input->isAllValidateResult("mail")===false){
										if($ob_input->isValidateResult("mail","must")===false){
											echo "<p class='p-error-txt'>※＊項目です。</p>";
										}else{
											echo "<p class='p-error-txt'>※入力内容が正しくありません。</p>";
										}
									}
								}
							?>
						</div></td>
					</tr>
					<tr>
						<th>電話番号<span class="p-icn-required">＊</span><br class="nosp">
							<em class="fwn">Phone number</em></th>
						<td><div class="is-must-box">
							<input type="text" name="tel" placeholder="例）0999999999" class="validate[required, custom[phone]] is-character-change-01" value="<?php $ob_input->text("tel"); ?>">
							<?php
								if($ob_input->isValidateErrorScreen()){
									if($ob_input->isAllValidateResult("tel")===false){
										if($ob_input->isValidateResult("tel","must")===false){
											echo "<p class='p-error-txt'>※＊項目です。</p>";
										}else{
											echo "<p class='p-error-txt'>※入力内容が正しくありません。</p>";
										}
									}
								}
							?>
						</div></td>
					</tr>
				</table>

				<div class="m-sectionMedium">
					<div class="p-privacy-box">
						<p class="p-privacy-box-title fwm">プライバシーポリシー</p>
						<div class="p-privacy-box-content">
						当社は、イワテックウェブサイト上でお客様からご提供された個人情報を適切に管理することは事業活動の基本であるとともに社会的責務であると認識しており、プライバシーの保護に努めております。<br>
						お客様の個人情報の取り扱いについて下記に従って適切に行動いたします。<br>
						<br>
						個人情報の収集について<br>
						お客様がイワテックウェブサイトを閲覧する場合、通常、住所、氏名、電子メールアドレス等の個人情報をご提供いただく必要はありませんが、当社はお客様個人を特定できる情報 (個人情報)や、お客様にご連絡を差し上げるための情報が必要な場合に、情報の提供をお願いすることがあります。<br>
						また、当社のウェブサーバーは、お客様がアクセスされたパソコンのIPアドレス、ドメイン名、ブラウザ、OS、アクセス回数等を自動的に記録します。<br>
						これらの情報は個人を特定できるものではなく、お客様全体のアクセス状況の統計を集めるために利用します。<br>
						上記以外の用途で個人情報の提供をお願いする場合は、その利用目的及び利用範囲を明確にご説明し、必要最小限の個人情報に限らせて頂きます。<br>
						<br>
						個人情報の利用について<br>
						当社では、お客様の個人情報を以下の利用目的の範囲で利用します。<br>
						<br>
						1. 業務委託先に当社ウェブサイトの運営等を委託する場合<br>
						2. お客様とのお取引、商談等を行う場合<br>
						3. お客様からのお問合せまたはご依頼等に対応する場合<br>
						個人情報の開示、提供について<br>
						当社は、個人情報を適切に管理し、下記のいずれかに該当する場合を除き、第三者に開示または提供することはありません。<br>
						<br>
						1. あらかじめお客様の同意をいただいている場合<br>
						2. 業務委託先などに対し、当社が委託した業務以外での個人情報の利用がないことを契約している場合<br>
						3. 法令等に基づき要請された場合または公的機関（裁判所、警察等）から開示を求められた場合<br>
						4. 当社および当社ウェブサイトの権利もしくは財産を保護・防御する場合<br>
						5. 人命、個人の財産等の保護のために必要と判断される場合であって、お客様の同意を頂くことが困難な場合
						</div>
					</div>

					<div class="p-privacy-box">
						<p class="p-privacy-box-title fwm">Privacy Policy</p>
						<div class="p-privacy-box-content">
						IWATEC recognizes that the proper management of personal information provided by customers on this website is a basic business activity and social responsibility, and is committed to protecting the privacy of our customers.<br>
						We will act appropriately according to the following regarding the handling of your personal information.<br>
						Collection of Personal Information<br>
						When you visit the IWATEC website, providing personal information such as address, name, email address, etc. is not required. However in the event that we need to contact you, such information may be requested.<br>
						In addition, our web server automatically records the IP address, domain name, browser, OS, number of accesses, etc. of the computer accessed by the customer.<br>
						This information is not personally identifiable and is only used to collect access statistics for all of our customers.<br>
						When requesting personal information to be provided for purposes other than the above, we will clearly explain the purpose and scope of the use and limit it to the minimum amount personal information required.<br>
						Use of Personal Information<br>
						We use your personal information for the following purposes.<br>
						1. When consigning the operation of our website to a subcontractor<br>
						2. When conducting business or negotiations with customers<br>
						3. When responding to customer inquiries or requests<br>
						Disclosure and provision of personal information<br>
						We will manage personal information appropriately and will not disclose or provide it to any third party except in the following cases.<br>
						1. When a customer's consent has been obtained in advance<br>
						2. In regards to subcontractors, your personal information will not be used for anything other than the business contracted with us.<br>
						3. When requested by law or when requested by a public agency (court, police, etc.).<br>
						4. To protect or defend the rights or property of our company and our website.<br>
						5. When it is deemed necessary for the protection of human life, personal property, etc., and it is <br>difficult to obtain customer consent.
						</div>
					</div>
				</div>

				<p class="p-privacy-txt">
					<input type="checkbox" name="agree_2[0]" id="agree_2" value="同意する" class="validate[required]">
					<label for="agree_2">プライバシーポリシーをご確認いただき、同意の上でお問い合わせください。<br>
					I have read and agree to the privacy policy.</label>
				</p>

				<div class="p-btn">
					<p class="p-submit">
						<button type="submit" name="ftcheck">入力内容を確認する<br>Verify Entry</button>
					</p>
					<input type="hidden" value="内容確認" name="ftcheck">
					<?php
					foreach($ob_input->data as $name => $val){
						if(is_array($val["value"])){
							foreach($val["value"] as $num => $val2){echo "<input type='hidden' name='_FTDATA[".$name."][value][".$num."]' value='".$val2."'>\n";}
						}else{
							echo "<input type='hidden' name='_FTDATA[".$name."][value]' value='".$val["value"]."'>\n";
						}
					}
					echo "
					<input type='hidden' name='_FTMOVE' value='true'>\n
					<input type='hidden' name='_FTTICKET' value='".$ob_input->getTicket()."'>\n
					";
					?>
				</div>

			</form><!--#contactform-->
		</div>

	</div><!--l-content-->


<?php get_template_part('/include/form/form_footer');?>
</body>
</html>