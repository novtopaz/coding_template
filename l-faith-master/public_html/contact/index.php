<?php
$php_charset = 'utf-8';
header('content-type: text/html; charset='.$php_charset);
header("Expires: Thu, 01 Dec 1994 16:00:00 GMT");
header("Last-Modified: ". gmdate("D, d M Y H:i:s"). " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');

$form_type = 'contact';
?>
<!DOCTYPE html>
<html lang="ja">
<head>

<?php require_once('include/ftinput.php'); //form 入力ページ ?>
<?php
	$title = 'お問い合わせ';
	$description = 'お問い合わせ入力';
	require_once($_SERVER['DOCUMENT_ROOT'].'/contact/include/common_head.php'); //共通head ?>

<!-- ページ共通のJSファイル 開始 -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/jquery-1.12.4.js?v=1"></script>
<!-- ページ共通のJSファイル 終了 -->

<!-- ページ固有のJSファイル開始-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/ajaxzip3.js?v=1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/jquery.validationEngine.js?v=1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/jquery.validationEngine-ja.js?v=1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/contact/contact.js?v=1"></script>
<!-- ページ固有のJSファイル終了-->
</head>

<?php require_once( get_template_directory() . '/include/contact_header.php' ); // フォーム用ヘッダー ?>

	<p class="p-txt mt40 spmt30">こちらではリーガル・フェイスグループのサービス、セミナー、採用に関するお問い合わせを承っています。<br>
	下記のフォームに必要項目をご記入頂き、「確認」ボタンを押して下さい。</p>
	<p class="p-txt mt15 spmt25">なお、お問い合わせへの回答は、ご指定のメールアドレス宛への迅速な回答を心がけておりますが、お問い合わせ内容によりましては回答までにお時間をいただく場合や、 回答できない場合もございますので、あらかじめご了承願います。</p>

	<ul class="p-step">
		<li class="p-step01"><span>01</span>フォームへのご入力</li>
		<li class="p-step02"><span>02</span>入力内容確認</li>
		<li><span>03</span>送信完了</li>
	</ul>

	<form action="./" name="contactform" method="post" enctype="multipart/form-data" id="contactform">
		<table class="p-table">
			<tr>
				<th>お名前<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<input type="text" name="name" placeholder="例）山田 太郎" class="validate[required]" value="<?php $ob_input->text("name"); ?>">
					<?php
						if($ob_input->isValidateErrorScreen()){
							if($ob_input->isAllValidateResult("name")===false){
								if($ob_input->isValidateResult("name","must")===false){
									echo "<p class='m-cr-red'>※必須項目です。</p>";
								}else{
									echo "<p class='m-cr-red'>※入力内容が正しくありません。</p>";
								}
							}
						}
					?>
				</div></td>
			</tr>
			<tr>
				<th>電話番号<span class="p-icn-option">任意</span></th>
				<td><div class="">
					<input type="text" name="tel" placeholder="例）0999999999" class="validate[custom[phone]] is-character-change-01" value="<?php $ob_input->text("tel"); ?>">
				</div></td>
			</tr>
			<tr>
				<th>メールアドレス<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<input type="email" name="mail" id="mail" placeholder="例）legal_faith＠co.jp" class="validate[required, custom[email]] is-character-change-01" value="<?php $ob_input->text("mail"); ?>">
					<?php
						if($ob_input->isValidateErrorScreen()){
							if($ob_input->isAllValidateResult("mail")===false){
								if($ob_input->isValidateResult("mail","must")===false){
									echo "<p class='m-cr-red'>※必須項目です。</p>";
								}else{
									echo "<p class='m-cr-red'>※入力内容が正しくありません。</p>";
								}
							}
						}
					?>
				</div></td>
			</tr>
			<tr>
				<th>メールアドレス<small>(確認用)</small><span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<input type="email" name="mail_con" placeholder="例）legal_faith＠co.jp" class="validate[required, custom[email]] equals[mail] is-character-change-01" value="<?php $ob_input->text("mail_con"); ?>">
					<?php
						if($ob_input->isValidateErrorScreen()){
							if($ob_input->isAllValidateResult("mail_con")===false){
								if($ob_input->isValidateResult("mail_con","must")===false){
									echo "<p class='m-cr-red'>※必須項目です。</p>";
								}else{
									echo "<p class='m-cr-red'>※入力内容が正しくありません。</p>";
								}
							}
						}
					?>
				</div></td>
			</tr>
			<tr>
				<th>お問い合わせカテゴリー<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<select name="category">
						<option value="">カテゴリーを選択してください</option>
						<option value="サービスに関するお問い合わせ">サービスに関するお問い合わせ</option>
						<option value="セミナーに関するお問い合わせ">セミナーに関するお問い合わせ</option>
						<option value="採用に関するお問い合わせ">採用に関するお問い合わせ</option>
						<option value="その他">その他</option>
					</select>
					<?php
						if($ob_input->isValidateErrorScreen()){
							if($ob_input->isAllValidateResult("category")===false){
								if($ob_input->isValidateResult("category","must")===false){
									echo "<p class='m-cr-red'>※必須項目です。</p>";
								}else{
									echo "<p class='m-cr-red'>※入力内容が正しくありません。</p>";
								}
							}
						}
					?>
				</div></td>
			</tr>
			<tr>
				<th>お問い合わせ内容<span class="p-icn-required">必須</span></th>
				<td><div>
					<textarea name="body"><?php $ob_input->text("body"); ?></textarea>
				</div></td>
			</tr>
		</table>

		<p class="p-privacy-txt"><input type="checkbox" name="agree[0]" id="agree" value="同意する" class="validate[required]">
		<label for="agree"><a href="/privacy/" target="_blank">プライバシーポリシー</a>をご確認いただき、同意の上でお問い合わせください。</label></p>

		<p class="p-btn">
			<input type="submit" value="入力内容を確認する" name="ftcheck">
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

	</form><!--ftform-->

<?php get_template_part( '/include/contact_footer' ); // フォーム用フッター ?>