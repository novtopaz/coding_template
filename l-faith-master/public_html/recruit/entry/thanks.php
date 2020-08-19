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

<?php require_once('include/ftthanks.php'); //form 完了ページ ?>
<?php
	$title = '完了｜エントリーフォーム｜採用情報';
	$description = 'エントリーフォーム完了';
	require_once($_SERVER['DOCUMENT_ROOT'].'/contact/include/common_head.php'); //共通head ?>
</head>

<?php require_once( get_template_directory() . '/include/contact_header.php' ); // フォーム用ヘッダー ?>

	<ul class="p-step">
		<li class="p-step02"><span>01</span>フォームへのご入力</li>
		<li class="p-step03"><span>02</span>入力内容確認</li>
		<li class="p-step04"><span>03</span>送信完了</li>
	</ul>

	<div class="p-thanks-box">
		<p class="p-thanks-txt">エントリーありがとうございました。<br>
		選考結果は追ってご連絡いたします。</p>

		<div class="tac">
			<p class="m-more-btn"><a href="/"><span>TOPページへ戻る</span></a></p>
		</div>
	</div>

<?php get_template_part( '/include/contact_footer' ); // フォーム用フッター ?>