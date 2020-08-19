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

<?php require_once('include/ftconfirm.php'); //確認ページ ?>

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
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/jquery.easing.1.4.1.js?v=1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/jquery.matchHeight-min.js?v=1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common/common.js?v=1"></script>
<!-- ページ共通のJSファイル 終了 -->

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

	<ul class="p-listStatus clearfix">
		<li class="p-listStatus-grey is-matchHeightSP"><span>01</span><br class="nopc"><em>フォームへの<br class="nopc">ご入力</em></li>
		<li class="is-current is-matchHeightSP"><span>02</span><br class="nopc">入力内容確認</li>
		<li class="is-matchHeightSP"><span>03</span><br class="nopc">送信完了</li>
	</ul>

	<form action="confirm.php" name="contactform" method="post" enctype="multipart/form-data" id="contactform">
		<div class="p-table-cover">
			<table class="p-table">
				<tr>
					<th><p>氏名</p></th>
					<td><?php echo $ob_confirm->data["first_name"]["value"].' '.$ob_confirm->data["last_name"]["value"]; ?></td>
				</tr>
				<tr>
					<th><p>住所</p></th>
					<td><?php echo $ob_confirm->data["address"]["value"]; ?></td>
				</tr>
				<tr>
					<th><p>電話番号</p></th>
					<td><?php echo $ob_confirm->data["tel"]["value"]; ?></td>
				</tr>
				<tr>
					<th><p>メールアドレス</p></th>
					<td><?php echo $ob_confirm->data["mail"]["value"]; ?></td>
				</tr>
				<tr>
					<th><p>メールアドレス<span>(確認用)</span></p></th>
					<td><?php echo $ob_confirm->data["mail_confirm"]["value"]; ?></td>
				</tr>
				<tr>
					<th><p>お問い合わせ項目<br>
						<span>※複数選択可</span></p></th>
					<td>
						<?php
							if (!empty($ob_confirm->data["type"]["value"])) {
								foreach($ob_confirm->data["type"]["value"] as $key => $val){
									if(isset($val))echo $val."<br>";
								}
							}
						?>
					</td>
				</tr>
				<tr>
					<th><p>お問い合わせ内容</p></th>
					<td>
						<?php
							if (!empty($ob_confirm->data["category"]["value"])) {
								foreach($ob_confirm->data["category"]["value"] as $key => $val){
									if(isset($val))echo $val."<br>";
								}
							}
						?>
						<br>
					<?php echo $ob_confirm->data["body"]["value"]; ?></td>
				</tr>
			</table>
		</div>

		<div class="p-btn-cover">
			<p class="p-nextBtn btn btn-red"><input type="submit" name="ftsend" value="この内容で送信する"></p>
			<p class="p-backBtn btn imghover"><input type="submit" name="ftback" value="戻る"></p>

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
	</form>

</div>


<?php get_template_part( '/include/simple_footer' ); // シンプルフッター ?>
<?php wp_footer(); ?>
</body>
</html>