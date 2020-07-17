<?php
$mv_text = [
	'h1'=>'採用情報',
];

set_query_var('mv_text', $mv_text);
get_template_part('include/mv');
?>

<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

<?php if(have_posts()): while(have_posts()): the_post() ?>
	<?php the_content(); ?>
<?php endwhile; endif ?>

<?php /*
<div class="l-content">
	<div class="m-box">
		<p class="m-round m-titleH3 m-sectionLarge tac"><span>イワテックが目指していること</span></p>

		<p class="m-txt m-sectionMega tac">イワテックは、快適な生活を守りながら、私たちの暮らしがいつまでも<br>
			地球と調和することを願い、自然や社会とやさしく共存共栄し、<br>
		生き物や自然を守るための知恵を高めていきたいと考えています。</p>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">はたらく人のデータ</h2>

			<ul class="p-listPeople animate-default-orderCover m-sectionMedium">
				<li class="animate-default-order">
					<p class="p-listPeople-txt">男女比</p>
					<p><img src="<?php echo ASSETS_PATH; ?>/images/recruit/ing_gender.png" alt="男性78% 女性22%"></p>
				</li>
				<li class="animate-default-order">
					<p class="p-listPeople-txt">年代</p>
					<p><img src="<?php echo ASSETS_PATH; ?>/images/recruit/ing_age.png" alt="20代14% 30代31% 40代33% 50代33% 60代14%"></p>
				</li>
			</ul>
		</div>

		<h3 class="p-title">■ 有資格一覧</h3>
		<p class="m-txt">第一種電気工事士、第二種電気工事士、第二種電気主任技術者、第三種電気主任技術者、エネルギー管理士、TOEIC800点以上、実用英語技能検定準1級、日商簿記2級</p>
		<p class="p-txtMini">※2019年9月時点。インド支社除く。</p>

		<div class="m-sectionMega">
			<h2 class="m-titleH2">募集要項</h2>

			<table class="p-table m-txt">
				<tr>
					<th>募集職種</th>
					<td>
						<div class="p-table-half">
							<div class="p-table-half-item">
								<p class="p-table-title">技術系</p>
								<p class="mt5">再生可能エネルギーに関する<br>
								・開発及び設計技術者<br>
								・電気技術者<br>
								・プラント技術者<br>
								・機械技術者<br>
								・計装技術者</p>
							</div>
							<div class="p-table-half-item">
								<p class="p-table-title">事務系</p>
								<p class="mt5">・営業<br>
								・営業事務<br>
								・経理<br>
								・人事総務<br>
								・広報<br>
								・貿易事務<br>
								・翻訳</p>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<th>福利厚生</th>
					<td>
						<p class="p-table-head"><span class="p-table-title">休日</span>土・日・祝・年末年始・お盆</p>
						<p class="p-table-head"><span class="p-table-title">手当</span>皆勤手当、 家族手当、資格手当など</p>
						<p class="p-table-head"><span class="p-table-title">教育</span>社内英会話クラス、社内外セミナー</p>
						<p class="p-table-head"><span class="p-table-title">その他</span>団体優待券（映画、美術、入湯など）、マッサージチケット、<br class="nopc">サッカー観戦チケット</p>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="p-contact-cover">
		<div class="p-contact">
			<h2 class="p-contact-title">採用お問い合わせ</h2>
			<p class="p-contact-txt">現在募集をかけている求人に応募したい方</p>
			<p><a class="is-imghover" href="<?php echo home_url('/contact/') ?>" target="_blank">
				<?php getPicture('btn_contact', 'png', 'recruit', 'お問い合わせはこちら') ?>
			</a></p>
		</div>
	</div>
</div>
*/ ?>