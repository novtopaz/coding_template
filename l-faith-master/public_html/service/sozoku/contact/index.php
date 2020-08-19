<?php
$php_charset = 'utf-8';
header('content-type: text/html; charset='.$php_charset);
header("Expires: Thu, 01 Dec 1994 16:00:00 GMT");
header("Last-Modified: ". gmdate("D, d M Y H:i:s"). " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

define('WP_USE_THEMES', true);

require_once($_SERVER['DOCUMENT_ROOT'] . '/service/sozoku/wp-load.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-33481511-1"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-33481511-1');
</script>

<?php require_once('include/ftinput.php'); //form 入力ページ ?>

<!-- meta 開始 -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">

<title>お問い合わせ｜相続手続き・生前対策のトータルサポートなら司法書士法人リーガル・フェイス</title>
<meta name="description" content="お問い合わせページです。相続手続きや生前対策のご相談は司法書士法人リーガル・フェイスへおまかせください。専門家が50名以上在籍しており国内最大級。新宿、名古屋、大阪、福岡でご相談でき、新宿駅からは徒歩3分でアクセス可能です。複雑な相続も丁寧にサポート致します。">
<meta name="keywords" content="">
<link rel="canonical" href="https://www.l-faith.com/service/sozoku/contact/">

<!-- meta 終了 -->

<!-- favicon 開始 -->
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/apple-touch-icon-180x180.jpg" sizes="180x180">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/android-chrome-192x192.jpg" sizes="192x192" type="image/png">

<!-- ページ共通のCSSファイル 開始 -->
<link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:400,500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/common/base.css?v=1" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/contact/contact.css?v=1" media="all">

<!-- ページ共通のJSファイル 開始 -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/jquery-1.12.4.js?v=1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/jquery.matchHeight-min.js?v=1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common/common.js?v=1"></script>
<!-- ページ共通のJSファイル 終了 -->


<!-- ページ固有のJSファイル開始-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/contact/ajaxzip3.js?v=1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/contact/jquery.validationEngine.js?v=1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/contact/jquery.validationEngine-ja.js?v=1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/contact/contact.js?v=1"></script>
<!-- ページ固有のJSファイル終了-->

</head>
<body id="pagetop">
<?php get_template_part( '/include/simple_header' ); // シンプルヘッダー ?>
<div class="m-mv">
	<p class="m-mv-img">
		<picture>
			<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/contact/mv_pc.png">
			<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/contact/mv_sp.png">
			<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/mv_pc.png" alt="お問い合わせ メインビジュアル">
		</picture>
	</p>
	<div class="m-mv-content">
		<div class="m-mv-title-cover">
			<span class="m-mv-sub">CONTACT</span>
			<h1 class="m-mv-title tac">お問い合わせ</h1>
		</div>
	</div>
</div>

<div class="l-content">
	<p class="m-txt">具体的なご相談をされたい方からサービスや費用についてもっと詳しく話を聞いてみたい方、資料請求のみご希望の方までこちらのお問い合せフォームからお気軽にお問い合せください。またお急ぎのお客様にはお電話でも対応しております。</p>

	<p class="p-tel">
		<a href="tel:0120-800-370">
			<picture class="is-tel">
				<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/contact/img_tel_pc.png">
				<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/contact/img_tel_sp.png">
				<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/img_tel_pc.png" alt="お問い合わせ メインビジュアル">
			</picture>
		</a>
	</p>

	<ul class="p-listStatus clearfix">
		<li class="is-current is-matchHeightSP"><span>01</span><br class="nopc"><em>フォームへの<br class="nopc">ご入力</em></li>
		<li class="is-matchHeightSP"><span>02</span><br class="nopc">入力内容確認</li>
		<li class="is-matchHeightSP"><span>03</span><br class="nopc">送信完了</li>
	</ul>

	<form action="./" name="contactform" method="post" enctype="multipart/form-data" id="contactform">
		<div class="p-table-cover">
			<table class="p-table">
				<tr>
					<th><p class="p-required">氏名</p></th>
					<td>
						<ul class="p-table-listName clearfix">
							<li>
								<span>姓</span>
								<div class="is-must-box">
									<input type="text" name="first_name" placeholder="例）山田" class="validate[required]" value="<?php $ob_input->text("first_name"); ?>">
								</div>
								<?php
									if($ob_input->isValidateErrorScreen()){
										if($ob_input->isAllValidateResult("first_name")===false){
											if($ob_input->isValidateResult("first_name","must")===false){
												echo "<p class='is-validError'>※必須項目です。</p>";
											}else{
												echo "<p class='is-validError'>※入力内容が正しくありません。</p>";
											}
										}
									}
								?>
							</li>
							<li>
								<span>名</span>
								<div class="is-must-box"><input type="text" name="last_name" placeholder="例）太郎" class="validate[required]" value="<?php $ob_input->text("last_name"); ?>"></div>
								<?php
									if($ob_input->isValidateErrorScreen()){
										if($ob_input->isAllValidateResult("last_name")===false){
											if($ob_input->isValidateResult("last_name","must")===false){
												echo "<p class='is-validError'>※必須項目です。</p>";
											}else{
												echo "<p class='is-validError'>※入力内容が正しくありません。</p>";
											}
										}
									}
								?>
							</li>
						</ul>
					</td>
				</tr>
				<tr>
					<th><p class="p-optional">住所</p></th>
					<td>
						<input type="text" name="address" placeholder="例）東京都新宿区西新宿一丁目6番1号" value="<?php $ob_input->text("address"); ?>">
					</td>
				</tr>
				<tr>
					<th><p class="p-optional">電話番号</p></th>
					<td>
						<input type="text" name="tel" placeholder="例）0999999999" class="validate[custom[phone]] is-character-change-01" value="<?php $ob_input->text("tel"); ?>">
					</td>
				</tr>
				<tr>
					<th><p class="p-required">メールアドレス</p></th>
					<td>
						<div class="is-must-box"><input type="text" name="mail" id="mail" placeholder="例）legal_faith＠co.jp" class="validate[required, custom[email]] is-character-change-01" value="<?php $ob_input->text("mail"); ?>"></div>
							<?php
								if($ob_input->isValidateErrorScreen()){
									if($ob_input->isAllValidateResult("mail")===false){
										if($ob_input->isValidateResult("mail","must")===false){
											echo "<p class='is-validError'>※必須項目です。</p>";
										}else{
											echo "<p class='is-validError'>※入力内容が正しくありません。</p>";
										}
									}
								}
							?>
					</td>
				</tr>
				<tr>
					<th><p class="p-required">メールアドレス<span>(確認用)</span></p></th>
					<td>
						<div class="is-must-box"><input type="text" name="mail_confirm" placeholder="例）legal_faith＠co.jp" class="validate[required, custom[email]] equals[mail] is-character-change-01" value="<?php $ob_input->text("mail_confirm"); ?>"></div>
							<?php
								if($ob_input->isValidateErrorScreen()){
									if($ob_input->isAllValidateResult("mail_confirm")===false){
										if($ob_input->isValidateResult("mail_confirm","must")===false){
											echo "<p class='is-validError'>※必須項目です。</p>";
										}else{
											echo "<p class='is-validError'>※入力内容が正しくありません。</p>";
										}
									}
								}
							?>
					</td>
				</tr>
				<tr>
					<th><p class="p-required">お問い合わせ項目<br>
						<span>※複数選択可</span></p></th>
					<td>
						<?php echo('<input type="hidden" name="type" value="" />');?>
						<ul class="p-table-listVertical">
							<li>
								<label class="clearfix"><input name="type[]" class="validate[required]" type="checkbox" value="サービスについてのご相談"><span>サービスについてのご相談</span></label>
							</li>

							<li>
								<label class="clearfix"><input name="type[]" class="validate[required]" type="checkbox" value="サービス内容や費用についてのお問い合わせ"><span>サービス内容や費用についてのお問い合わせ</span></label>
							</li>
							<li>
								<label class="clearfix"><input name="type[]" class="validate[required]" type="checkbox" value="資料請求"><span>資料請求</span></label>
							</li>
							<li><label class="clearfix"><input name="type[]" class="validate[required]" type="checkbox" value="その他お問い合わせ"><span>その他お問い合わせ</span></label></li>
							<?php 
								if($ob_input->isValidateErrorScreen()){
									if($ob_input->isAllValidateResult("type")===false){
										if($ob_input->isValidateResult("type","must")===false){
											echo "<p class='is-validError'>※必須項目です。</p>";
										}else{
											echo "<p class='is-validError'>※入力内容が正しくありません。</p>";
										}
									}
								}
							?>
						</ul>
					</td>
				</tr>
				<tr>
					<th><p class="p-required">お問い合わせ内容</p></th>
					<td>
						<?php echo('<input type="hidden" name="category" value="" />');?>
						<ul class="p-table-listSide">
							<li>
								<label class="clearfix"><input name="category[]" class="validate[required]" type="checkbox" value="相続手続"><span>相続手続</span></label>
							</li>
							<li>
								<label class="clearfix"><input name="category[]" class="validate[required]" type="checkbox" value="生前対策"><span>生前対策</span></label>
							</li>
							<li><label class="clearfix"><input name="category[]" class="validate[required]" type="checkbox" value="その他"><span>その他</span></label></li>
							<?php 
								if($ob_input->isValidateErrorScreen()){
									if($ob_input->isAllValidateResult("category")===false){
										if($ob_input->isValidateResult("category","must")===false){
											echo "<p class='is-validError'>※必須項目です。</p>";
										}else{
											echo "<p class='is-validError'>※入力内容が正しくありません。</p>";
										}
									}
								}
							?>
						</ul>
						<textarea name="body" rows="7" placeholder="お問い合わせの詳細をご入力ください。"><?php $ob_input->text("body"); ?></textarea>
					</td>
				</tr>
			</table>
		</div>

		<p class="p-privacy">
			<label class="clearfix">
				<input name="agree[0]" class="validate[required]" type="checkbox" value="同意する"><span><a href="/privacy/" target="_blank">プライバシーポリシー</a>をご確認いただき、同意の上でお問い合わせください。</span>
			</label>

		</p>

		<p class="p-nextBtn">
			<input class="imghover" type="submit" value="入力内容を確認する" name="ftcheck">
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
		</p>
	</form>

</div>


<?php get_template_part( '/include/simple_footer' ); // シンプルフッター ?>
<?php wp_footer(); ?>
</body>
</html>