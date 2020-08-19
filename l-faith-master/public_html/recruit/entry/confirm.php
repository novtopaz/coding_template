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

<?php require_once('include/ftconfirm.php'); //form 確認ページ ?>
<?php
	$title = '確認｜エントリーフォーム｜採用情報';
	$description = 'エントリーフォーム確認';
	require_once($_SERVER['DOCUMENT_ROOT'].'/contact/include/common_head.php'); //共通head ?>
</head>

<?php require_once( get_template_directory() . '/include/contact_header.php' ); // フォーム用ヘッダー ?>

	<ul class="p-step">
		<li class="p-step03"><span>01</span>フォームへのご入力</li>
		<li class="p-step01"><span>02</span>入力内容確認</li>
		<li><span>03</span>送信完了</li>
	</ul>

	<form action="confirm.php" name="contactform" method="post" enctype="multipart/form-data" id="contactform">
		<h2 class="p-mh">基本情報</h2>
		<table class="p-table mb75 spmb80">
			<tr>
				<th>応募区分<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<?php echo $ob_confirm->data["type"]["value"]; ?>
				</div></td>
			</tr>
			<tr>
				<th>お名前<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<?php echo $ob_confirm->data["name"]["value"]; ?>
				</div></td>
			</tr>
			<tr>
				<th>フリガナ<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<?php echo $ob_confirm->data["name_kana"]["value"]; ?>
				</div></td>
			</tr>
			<tr>
				<th>年齢<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<?php echo $ob_confirm->data["age"]["value"]; ?>
				</div></td>
			</tr>
			<tr>
				<th>携帯番号<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
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
				<th>メールアドレス<small>（確認用）</small><span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<?php echo $ob_confirm->data["mail_con"]["value"]; ?>
				</div></td>
			</tr>
			<tr>
				<th>希望職種<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<?php echo $ob_confirm->data["job_type"]["value"]; ?>
				</div></td>
			</tr>
			<tr>
				<th>希望勤務地<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<?php echo $ob_confirm->data["place"]["value"]; ?>
				</div></td>
			</tr>
			<tr>
				<th>資格<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<?php echo $ob_confirm->data["qualification"]["value"]; ?>
				</div></td>
			</tr>
		</table>

		<h2 class="p-mh">最終学歴</h2>
		<table class="p-table mb75 spmb80">
			<tr>
				<th>最終学歴<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<?php echo $ob_confirm->data["academic"]["value"]; ?>
				</div></td>
			</tr>
			<tr>
				<th>学校名<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<?php echo $ob_confirm->data["school_name"]["value"]; ?>
				</div></td>
			</tr>
			<?php if( $ob_confirm->data["faculty"]["value"] ): ?>
			<tr>
				<th>学部名<span class="p-icn-option">任意</span></th>
				<td><div class="">
					<?php echo $ob_confirm->data["faculty"]["value"]; ?>
				</div></td>
			</tr>
			<?php endif; ?>
			<tr>
				<th>卒業年度<span class="p-icn-required">必須</span></th>
				<td><div class="is-must-box">
					<?php echo $ob_confirm->data["graduate"]["value"]; ?>
				</div></td>
			</tr>
		</table>

		<?php if( $ob_confirm->data["company"]["value"] || $ob_confirm->data["employment_status"]["value"] || $ob_confirm->data["period"]["value"] || $ob_confirm->data["job_description"]["value"] || $ob_confirm->data["company_2"]["value"] || $ob_confirm->data["employment_status_2"]["value"] || $ob_confirm->data["period_2"]["value"] || $ob_confirm->data["job_description_2"]["value"] || $ob_confirm->data["company_3"]["value"] || $ob_confirm->data["employment_status_3"]["value"] || $ob_confirm->data["period_3"]["value"] || $ob_confirm->data["job_description_3"]["value"] || $ob_confirm->data["body"]["value"] ): ?>
		<h2 class="p-mh">職務経歴</h2>
		<?php endif; ?>

		<?php if( $ob_confirm->data["company"]["value"] || $ob_confirm->data["employment_status"]["value"] || $ob_confirm->data["period"]["value"] || $ob_confirm->data["job_description"]["value"] ): ?>
		<table class="p-table">
			<?php if( $ob_confirm->data["company"]["value"] ): ?>
			<tr>
				<th>会社名<small>（直近1社目）</small><span class="p-icn-option">任意</span></th>
				<td><div>
					<?php echo $ob_confirm->data["company"]["value"]; ?>
				</div></td>
			</tr>
			<?php endif; ?>
			<?php if( $ob_confirm->data["employment_status"]["value"] ): ?>
			<tr>
				<th>雇用形態<small>（直近1社目）</small><span class="p-icn-option">任意</span></th>
				<td><div>
					<?php echo $ob_confirm->data["employment_status"]["value"]; ?>
				</div></td>
			</tr>
			<?php endif; ?>
			<?php if( $ob_confirm->data["period"]["value"] ): ?>
			<tr>
				<th>在籍期間<small>（直近1社目）</small><span class="p-icn-option">任意</span></th>
				<td><div>
					<?php echo $ob_confirm->data["period"]["value"]; ?>
				</div></td>
			</tr>
			<?php endif; ?>
			<?php if( $ob_confirm->data["job_description"]["value"] ): ?>
			<tr>
				<th>職務内容<small>（直近1社目）</small><span class="p-icn-option">任意</span></th>
				<td><div>
					<?php echo $ob_confirm->data["job_description"]["value"]; ?>
				</div></td>
			</tr>
			<?php endif; ?>
		</table>
		<?php endif; ?>

		<?php if( $ob_confirm->data["company_2"]["value"] || $ob_confirm->data["employment_status_2"]["value"] || $ob_confirm->data["period_2"]["value"] || $ob_confirm->data["job_description_2"]["value"] ): ?>
		<table class="p-table mt10 spmt20">
			<?php if( $ob_confirm->data["company_2"]["value"] ): ?>
			<tr>
				<th>会社名<small>（直近2社目）</small><span class="p-icn-option">任意</span></th>
				<td><div>
					<?php echo $ob_confirm->data["company_2"]["value"]; ?>
				</div></td>
			</tr>
			<?php endif; ?>
			<?php if( $ob_confirm->data["employment_status_2"]["value"] ): ?>
			<tr>
				<th>雇用形態<small>（直近2社目）</small><span class="p-icn-option">任意</span></th>
				<td><div>
					<?php echo $ob_confirm->data["employment_status_2"]["value"]; ?>
				</div></td>
			</tr>
			<?php endif; ?>
			<?php if( $ob_confirm->data["period_2"]["value"] ): ?>
			<tr>
				<th>在籍期間<small>（直近2社目）</small><span class="p-icn-option">任意</span></th>
				<td><div>
					<?php echo $ob_confirm->data["period_2"]["value"]; ?>
				</div></td>
			</tr>
			<?php endif; ?>
			<?php if( $ob_confirm->data["job_description_2"]["value"] ): ?>
			<tr>
				<th>職務内容<small>（直近2社目）</small><span class="p-icn-option">任意</span></th>
				<td><div>
					<?php echo $ob_confirm->data["job_description_2"]["value"]; ?>
				</div></td>
			</tr>
			<?php endif; ?>
		</table>
		<?php endif; ?>

		<?php if( $ob_confirm->data["company_3"]["value"] || $ob_confirm->data["employment_status_3"]["value"] || $ob_confirm->data["period_3"]["value"] || $ob_confirm->data["job_description_3"]["value"] ): ?>
		<table class="p-table mt10 spmt20">
			<?php if( $ob_confirm->data["company_3"]["value"] ): ?>
			<tr>
				<th>会社名<small>（直近3社目）</small><span class="p-icn-option">任意</span></th>
				<td><div>
					<?php echo $ob_confirm->data["company_3"]["value"]; ?>
				</div></td>
			</tr>
			<?php endif; ?>
			<?php if( $ob_confirm->data["employment_status_3"]["value"] ): ?>
			<tr>
				<th>雇用形態<small>（直近3社目）</small><span class="p-icn-option">任意</span></th>
				<td><div>
					<?php echo $ob_confirm->data["employment_status_3"]["value"]; ?>
				</div></td>
			</tr>
			<?php endif; ?>
			<?php if( $ob_confirm->data["period_3"]["value"] ): ?>
			<tr>
				<th>在籍期間<small>（直近3社目）</small><span class="p-icn-option">任意</span></th>
				<td><div>
					<?php echo $ob_confirm->data["period_3"]["value"]; ?>
				</div></td>
			</tr>
			<?php endif; ?>
			<?php if( $ob_confirm->data["job_description_3"]["value"] ): ?>
			<tr>
				<th>職務内容<small>（直近3社目）</small><span class="p-icn-option">任意</span></th>
				<td><div>
					<?php echo $ob_confirm->data["job_description_3"]["value"]; ?>
				</div></td>
			</tr>
			<?php endif; ?>
		</table>
		<?php endif; ?>

		<?php if( $ob_confirm->data["body"]["value"] ): ?>
		<table class="p-table mt10 spmt20">
			<tr>
				<th>その他<small>（質問・PRなど）</small><span class="p-icn-option">任意</span></th>
				<td><div>
					<?php echo $ob_confirm->data["body"]["value"]; ?>
				</div></td>
			</tr>
		</table>
		<?php endif; ?>

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