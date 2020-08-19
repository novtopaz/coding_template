<?php
$php_charset = 'utf-8';
header('content-type: text/html; charset='.$php_charset);
header("Expires: Thu, 01 Dec 1994 16:00:00 GMT");
header("Last-Modified: ". gmdate("D, d M Y H:i:s"). " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');

$form_type = 'entry';
?>
<!DOCTYPE html>
<html lang="ja">
<head>

<?php require_once('include/ftinput.php'); //form 入力ページ ?>
<?php
	$title = 'エントリーフォーム｜採用情報';
	$description = 'エントリーフォーム入力';
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

	<p class="p-txt mt40 spmt30">弊社の採用活動にご関心をお寄せ頂き、誠にありがとうございます。<br>
	採用に関するエントリーは下記項目を入力していただき、「内容確認」ボタンを押してください。<br>
	追ってこちらから、連絡させていただきます。<br>
	<small>※正社員は定年（60歳）年齢を上限とした募集となります</small></p>

	<ul class="p-step">
		<li class="p-step01"><span>01</span>フォームへのご入力</li>
		<li class="p-step02"><span>02</span>入力内容確認</li>
		<li><span>03</span>送信完了</li>
	</ul>

	<form action="./" name="contactform" method="post" enctype="multipart/form-data" id="contactform">
		<h2 class="p-mh">基本情報</h2>
		<table class="p-table mb75 spmb80">
			<tr>
				<th>応募区分<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<label for="full"><input type="radio" name="type" value="正社員" id="full" class="validate[required]">正社員</label>
					<label for="part"><input type="radio" name="type" value="パート・アルバイト" id="part" class="validate[required]">パート・アルバイト</label>
					<?php
						if($ob_input->isValidateErrorScreen()){
							if($ob_input->isAllValidateResult("type")===false){
								if($ob_input->isValidateResult("type","must")===false){
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
				<th>フリガナ<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<input type="text" name="name_kana" placeholder="例）ヤマダ タロウ" class="validate[required]" value="<?php $ob_input->text("name_kana"); ?>">
					<?php
						if($ob_input->isValidateErrorScreen()){
							if($ob_input->isAllValidateResult("name_kana")===false){
								if($ob_input->isValidateResult("name_kana","must")===false){
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
				<th>年齢<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<input type="number" name="age" placeholder="年齢" class="validate[required]" value="<?php $ob_input->text("age"); ?>">
					<?php
						if($ob_input->isValidateErrorScreen()){
							if($ob_input->isAllValidateResult("age")===false){
								if($ob_input->isValidateResult("age","must")===false){
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
				<th>携帯番号<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<input type="tel" name="tel" placeholder="例）0999999999" class="validate[required, custom[phone]] is-character-change-01" value="<?php $ob_input->text("tel"); ?>">
					<?php 
						if($ob_input->isValidateErrorScreen()){
							if($ob_input->isAllValidateResult("tel")===false){
								if($ob_input->isValidateResult("tel","must")===false){
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
				<th>メールアドレス<small>（確認用）</small><span class="p-icn-required">必須</span></th>
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
				<th>希望職種<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<select name="job_type" class="validate[required]">
						<option value="">希望職種を選択してください</option>
						<?php
							$args = array(
								'post_type' => 'jobs',
								'posts_per_page' => -1,
								'post_status' => 'publish',
							);
						?>
						<?php $wp_query = new WP_Query( $args ); ?>
						<?php if( $wp_query->have_posts() ) : ?>
						<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
							<option value="<?php the_title(); ?>"><?php the_title(); ?></option>
						<?php endwhile; ?>
						<?php endif; ?>
						<?php wp_reset_query(); ?>
					</select>
					<?php
						if($ob_input->isValidateErrorScreen()){
							if($ob_input->isAllValidateResult("job_type")===false){
								if($ob_input->isValidateResult("job_type","must")===false){
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
				<th>希望勤務地<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<select name="place" class="validate[required]">
						<option value="">希望勤務地を選択してください</option>
						<option value="東京">東京</option>
						<option value="愛知">愛知</option>
						<option value="大阪">大阪</option>
						<option value="福岡">福岡</option>
						<option value="希望無し">希望無し</option>
					</select>
					<?php
						if($ob_input->isValidateErrorScreen()){
							if($ob_input->isAllValidateResult("place")===false){
								if($ob_input->isValidateResult("place","must")===false){
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
				<th>資格<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<select name="qualification" class="validate[required]">
						<option value="">所持資格を選択してください</option>
						<option value="司法書士">司法書士</option>
						<option value="行政書士">行政書士</option>
						<option value="土地家屋調査士">土地家屋調査士</option>
						<option value="測量士">測量士</option>
						<option value="測量士補">測量士補</option>
						<option value="無し">無し</option>
					</select>
					<?php
						if($ob_input->isValidateErrorScreen()){
							if($ob_input->isAllValidateResult("qualification")===false){
								if($ob_input->isValidateResult("qualification","must")===false){
									echo "<p class='m-cr-red'>※必須項目です。</p>";
								}else{
									echo "<p class='m-cr-red'>※入力内容が正しくありません。</p>";
								}
							}
						}
					?>
				</div></td>
			</tr>
		</table>

		<h2 class="p-mh">最終学歴</h2>
		<table class="p-table mb75 spmb80">
			<tr>
				<th>最終学歴<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<select name="academic" class="validate[required]">
						<option value="">最終学歴を選択してください</option>
						<option value="大学院卒">大学院卒</option>
						<option value="大学卒">大学卒</option>
						<option value="短大卒">短大卒</option>
						<option value="専門専修学校卒">専門専修学校卒</option>
						<option value="高校卒">高校卒</option>
						<option value="その他">その他</option>
					</select>
					<?php
						if($ob_input->isValidateErrorScreen()){
							if($ob_input->isAllValidateResult("academic")===false){
								if($ob_input->isValidateResult("academic","must")===false){
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
				<th>学校名<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<input type="text" name="school_name" placeholder="学校名" class="validate[required]" value="<?php $ob_input->text("school_name"); ?>">
					<?php
						if($ob_input->isValidateErrorScreen()){
							if($ob_input->isAllValidateResult("school_name")===false){
								if($ob_input->isValidateResult("school_name","must")===false){
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
				<th>学部名<span class="p-icn-option">任意</span></th>
				<td><div class="">
					<input type="text" name="faculty" placeholder="学部名" value="<?php $ob_input->text("faculty"); ?>">
					<?php
						if($ob_input->isValidateErrorScreen()){
							if($ob_input->isAllValidateResult("faculty")===false){
								if($ob_input->isValidateResult("faculty","must")===false){
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
				<th>卒業年度<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<select name="graduate" class="validate[required]">
						<option value="">卒業年度を選択してください</option>
						<?php for ($i=date('Y')-50; $i <= date('Y')+4; $i++):?>
						<option value="<?php echo $i ?>年"><?php echo $i ?>年</option>
						<?php endfor;?>
					</select>
					<?php
						if($ob_input->isValidateErrorScreen()){
							if($ob_input->isAllValidateResult("graduate")===false){
								if($ob_input->isValidateResult("graduate","must")===false){
									echo "<p class='m-cr-red'>※必須項目です。</p>";
								}else{
									echo "<p class='m-cr-red'>※入力内容が正しくありません。</p>";
								}
							}
						}
					?>
				</div></td>
			</tr>
		</table>

		<h2 class="p-mh">職務経歴</h2>
		<table class="p-table">
			<tr>
				<th>会社名<small>（直近1社目）</small><span class="p-icn-option">任意</span></th>
				<td><div>
					<input type="text" name="company" placeholder="会社名" value="<?php $ob_input->text("company"); ?>">
				</div></td>
			</tr>
			<tr>
				<th>雇用形態<small>（直近1社目）</small><span class="p-icn-option">任意</span></th>
				<td><div>
					<input type="text" name="employment_status" placeholder="例）正社員" value="<?php $ob_input->text("employment_status"); ?>">
				</div></td>
			</tr>
			<tr>
				<th>在籍期間<small>（直近1社目）</small><span class="p-icn-option">任意</span></th>
				<td><div>
					<input type="text" name="period" placeholder="例）2010年◯月～2016年◯月" value="<?php $ob_input->text("period"); ?>">
				</div></td>
			</tr>
			<tr>
				<th>職務内容<small>（直近1社目）</small><span class="p-icn-option">任意</span></th>
				<td><div>
					<input type="text" name="job_description" placeholder="職務内容" value="<?php $ob_input->text("job_description"); ?>">
				</div></td>
			</tr>
		</table>
		<div class="is-jobcareer-box">
			<table class="p-table mt10 spmt20">
				<tr>
					<th>会社名<small>（直近2社目）</small><span class="p-icn-option">任意</span></th>
					<td><div>
						<input type="text" name="company_2" placeholder="会社名" value="<?php $ob_input->text("company_2"); ?>">
					</div></td>
				</tr>
				<tr>
					<th>雇用形態<small>（直近2社目）</small><span class="p-icn-option">任意</span></th>
					<td><div>
						<input type="text" name="employment_status_2" placeholder="例）正社員" value="<?php $ob_input->text("employment_status_2"); ?>">
					</div></td>
				</tr>
				<tr>
					<th>在籍期間<small>（直近2社目）</small><span class="p-icn-option">任意</span></th>
					<td><div>
						<input type="text" name="period_2" placeholder="例）2010年◯月～2016年◯月" value="<?php $ob_input->text("period_2"); ?>">
					</div></td>
				</tr>
				<tr>
					<th>職務内容<small>（直近2社目）</small><span class="p-icn-option">任意</span></th>
					<td><div>
						<input type="text" name="job_description_2" placeholder="職務内容" value="<?php $ob_input->text("job_description_2"); ?>">
					</div></td>
				</tr>
			</table>
		</div>
		<div class="is-jobcareer-box">
			<table class="p-table mt10 spmt20">
				<tr>
					<th>会社名<small>（直近3社目）</small><span class="p-icn-option">任意</span></th>
					<td><div>
						<input type="text" name="company_3" placeholder="会社名" value="<?php $ob_input->text("company_3"); ?>">
					</div></td>
				</tr>
				<tr>
					<th>雇用形態<small>（直近3社目）</small><span class="p-icn-option">任意</span></th>
					<td><div>
						<input type="text" name="employment_status_3" placeholder="例）正社員" value="<?php $ob_input->text("employment_status_3"); ?>">
					</div></td>
				</tr>
				<tr>
					<th>在籍期間<small>（直近3社目）</small><span class="p-icn-option">任意</span></th>
					<td><div>
						<input type="text" name="period_3" placeholder="例）2010年◯月～2016年◯月" value="<?php $ob_input->text("period_3"); ?>">
					</div></td>
				</tr>
				<tr>
					<th>職務内容<small>（直近3社目）</small><span class="p-icn-option">任意</span></th>
					<td><div>
						<input type="text" name="job_description_3" placeholder="職務内容" value="<?php $ob_input->text("job_description_3"); ?>">
					</div></td>
				</tr>
			</table>
		</div>
		<p class="p-jobcareer-btn">職務経歴を追加する</p>

		<table class="p-table mt10 spmt20">
			<tr>
				<th>その他<small>（質問・PRなど）</small><span class="p-icn-option">任意</span></th>
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