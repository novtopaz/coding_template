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

<?php require_once('include/ftconfirm.php'); //form 確認ページ ?>
<?php
	$title = '確認｜お問い合わせ';
	$description = 'お問い合わせ確認';
	require_once(get_template_directory() .'/include/form/form_common_head.php'); //共通head ?>
</head>

<body id="pagetop">

	<?php get_template_part('/include/form/form_header');?>

	<?php
	$mv_text = [
		'h1'=>'お問い合わせ',
		'sub'=>'CONTRACT',
	];

	set_query_var('mv_text', $mv_text);
	get_template_part('include/mv');
	?>
	</div>

	<div class="l-content">

		<ul class="p-step-type01">
			<li class="p-step03">
				<span>01</span>フォームへの<br class="nopc">ご入力<br>
				Form Entry
			</li>
			<li class="p-step01">
				<span>02</span>入力内容確認<br>
				Entry Verification
			</li>
			<li>
				<span>03</span>送信完了<br>
				Submit
			</li>
		</ul>

		<p class="p-lead tac fwm">お問い合わせ内容をご確認下さい。<br>この内容でよろしければ、<br class="nopc">ページ下部の送信ボタンを押して下さい。</p>
		<p class="p-sub tac mt15">Please check your entered information.<br>
			If there are no problems, <br class="nopc">press the submit button at the bottom of the page.</p>


		<div class="contactform-cover">
			<h2 class="p-title">お問い合わせ内容　<span>Content of inquiry</span></h2>
			<form action="confirm.php" name="contactform" method="post" enctype="multipart/form-data" id="contactform" class="contactform">

				<table class="p-table">
					<tr>
						<th>お問い合わせ区分<span class="p-icn-required">＊</span><br class="nosp">
							<em class="fwn">Inquiry category</em></th>
						<td><div class="is-must-box">
							<?php echo $ob_confirm->data["inquiry_category"]["value"]; ?>
						</div></td>
					</tr>
					<tr>
						<th>事業区分<span class="p-icn-required">＊</span><br class="nosp">
							<em class="fwn">Business category</em></th>
						<td><div class="is-must-box">
							<?php echo $ob_confirm->data["business_category"]["value"]; ?>
						</div></td>
					</tr>
					<tr>
						<th>お問い合わせ内容<br class="nosp">
							<em class="fwn">Description of inquiry</em></th>
						<td><div class="is-must-box">
							<?php echo $ob_confirm->data["body"]["value"]; ?>
						</div></td>
					</tr>
				</table>

				<h2 class="p-title">お客様情報　<span>Customer Information</span></h2>

				<table class="p-table">
					<tr>
						<th>個人／法人<span class="p-icn-required">＊</span><br class="nosp">
							<em class="fwn">Personal／Corporation</em></th>
						<td><div class="is-must-box">
							<?php echo $ob_confirm->data["customer"]["value"]; ?>
						</div></td>
					</tr>
					<tr>
						<th>氏名<span class="p-icn-required">＊</span><br class="nosp">
							<em class="fwn">Full name</em></th>
						<td><div class="is-must-box">
							<?php echo htmlspecialchars( $ob_confirm->data["name"]["value"] ); ?>
						</div></td>
					</tr>
					<tr>
						<th>フリガナ<span class="p-icn-required">＊</span></th>
						<td><div class="is-must-box">
							<?php echo htmlspecialchars( $ob_confirm->data["name_kana"]["value"] ); ?>
						</div></td>
					</tr>
					<?php 
						$company = $ob_confirm->data["company"]["value"];
					if($company) :?>
					<tr>
						<th>会社名<span class="p-icn-required">＊</span><br class="nosp">
							<em class="fwn">Company name</em></th>
						<td><div class="is-must-box">
							<?php echo $company; ?>
						</div></td>
					</tr>
					<?php endif; ?>
					<?php 
						$department = $ob_confirm->data["department"]["value"];
					if($department) :?>
					<tr>
						<th>部署名／役職名<br class="nosp">
							<em class="fwn">Department name／Title</em></th>
						<td><div class="is-must-box">
							<?php echo $ob_confirm->data["department"]["value"]; ?>
						</div></td>
					</tr>
					<?php endif; ?>
					<tr>
						<th>メールアドレス<span class="p-icn-required">＊</span><br class="nosp">
							<em class="fwn">E-mail address</em></th>
						<td><div class="is-must-box">
							<?php echo $ob_confirm->data["mail"]["value"]; ?>
						</div></td>
					</tr>
					<tr>
						<th>電話番号<span class="p-icn-required">＊</span><br class="nosp">
							<em class="fwn">Phone number</em></th>
						<td><div class="is-must-box">
							<?php echo $ob_confirm->data["tel"]["value"]; ?>
						</div></td>
					</tr>
				</table>

				<div class="p-btn">
					<p class="p-submit">
						<button type="submit" name="ftsend">この内容で送信<br>
						Submit</button>
					</p>
					<p class="p-back">
						<button type="submit" name="ftback">戻る<br>
						Back</button>
					</p>
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
				</div>

			</form><!--#contactform-->
		</div>

	</div><!--l-content-->

	</form>
<?php get_template_part('/include/form/form_footer');?>
</body>
</html>