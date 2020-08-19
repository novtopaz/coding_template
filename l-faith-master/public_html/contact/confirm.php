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

<?php require_once('include/ftconfirm.php'); //form 確認ページ ?>
<?php
	$title = '確認｜お問い合わせ';
	$description = 'お問い合わせ確認';
	require_once($_SERVER['DOCUMENT_ROOT'].'/contact/include/common_head.php'); //共通head ?>
</head>

<?php require_once( get_template_directory() . '/include/contact_header.php' ); // フォーム用ヘッダー ?>

	<ul class="p-step">
		<li class="p-step03"><span>01</span>フォームへのご入力</li>
		<li class="p-step01"><span>02</span>入力内容確認</li>
		<li><span>03</span>送信完了</li>
	</ul>

	<form action="confirm.php" name="contactform" method="post" enctype="multipart/form-data" id="contactform">
		<table class="p-table">
			<tr>
				<th>お名前<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<?php echo $ob_confirm->data["name"]["value"]; ?>
				</div></td>
			</tr>
			<tr>
				<th>電話番号<span class="p-icn-option">任意</span></th>
				<td><div class="">
					<?php echo $ob_confirm->data["tel"]["value"]; ?>
				</div></td>
			</tr>
			<tr>
				<th>メールアドレス<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<?php echo $ob_confirm->data["mail"]["value"]; ?>
				</div></td>
			</tr>
			<tr>
				<th>メールアドレス<small>(確認用)</small><span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<?php echo $ob_confirm->data["mail_con"]["value"]; ?>
				</div></td>
			</tr>
			<tr>
				<th>お問い合わせカテゴリー<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<?php echo $ob_confirm->data["category"]["value"]; ?>
				</div></td>
			</tr>
			<tr>
				<th>お問い合わせ内容<span class="p-icn-required">必須</span></th>
				<td><div>
					<?php echo $ob_confirm->data["body"]["value"]; ?>
				</div></td>
			</tr>
		</table>

		<p class="p-btn clearfix">
			<input type="submit" name="ftsend" value="この内容で送信する">
			<input type="submit" name="ftback" value="戻る">
			<?php
				foreach($ob_confirm->data as $name => $val){
					if(is_array($val["value"])){
						foreach($val["value"] as $num => $val2){
							echo "<input type='hidden' name='_FTDATA[".$name."][value][".$num."]' value='".$val2."'>\n";
						}
					}else{
						echo "<input type='hidden' name='_FTDATA[".$name."][value]' value='".$val["value"]."'>\n";
					}
				}
				echo "<input type='hidden' name='_FTTICKET' value='".$ob_confirm->getTicket()."'>\n";
			?>
		</p>

	</form>

<?php get_template_part( '/include/contact_footer' ); // フォーム用フッター ?>