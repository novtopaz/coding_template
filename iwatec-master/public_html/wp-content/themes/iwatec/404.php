<?php
global $is_eng;
get_header();
?>

<div class="l-content pt80 sppt50 clearfix">

	<?php if($is_eng) :?>
	<div class="m-box">
		<h1 class="m-titleH2">Page not found.</h1>

		<p class="m-txt tac sptal m-sectionSmall">The URL you requested might be deleted or written incorrectly.<br>
		Please check the URL, and try again or go back to home.</p>

		<p class="m-btn m-sectionMedium tac"><a href="<?php echo home_url('/en/'); ?>"><span>Back to Home</span></a></p>
	</div>
	<?php else:?>
	<div class="m-box">
		<h1 class="m-titleH2">お探しのページは<br class="nopc">見つかりませんでした。</h1>

		<p class="m-txt tac sptal m-sectionSmall">アクセスしようとしたページは、削除されたか、<br class="nosp">入力したURLが間違っている可能性があるため、 表示することができません。<br>
		<br>
		お手数ですが、ＵＲＬをご確認の上、<br>
		再度お試しいただくか、以下のページへお進みください。</p>

		<p class="m-btn m-sectionMedium tac"><a href="<?php echo home_url(); ?>"><span>トップへ戻る</span></a></p>
	</div>
	<?php endif; ?>
</div>

<?php get_footer(); ?>