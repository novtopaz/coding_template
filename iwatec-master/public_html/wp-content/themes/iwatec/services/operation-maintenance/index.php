<?php
$mv_text = [
	'h1'=>'O＆M事業',
];

set_query_var('mv_text', $mv_text);
get_template_part('include/mv');
?>

<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

<div class="l-content">
	<?php /*
	<div class="m-box">
		<p class="m-round m-titleH3 m-sectionLarge tac"><span>設備のメンテナンスから<br class="nopc">診断・評価まで<br class="nosp">
		システムに合った<br class="nopc">最適なサービスをご提供します。</span></p>

		<div class="m-sectionMega">
			<h2 class="m-titleH2"><span>1</span>運用・維持メンテナンス</h2>
			<div class="m-sectionMedium">
				<h3 class="m-titleH3 tac">太陽光発電システムは<br class="nopc">メンテナンスフリーではありません。<br>
				メンテナンスをすることで<br class="nopc">最大限の力を発揮します。</h3>

				<div class="p-2col">
					<div class="p-2col-content">
						<p class="m-txtLarge fwb sptac">なぜメンテナンスが必要なのか</p>
						<p class="m-txt mt20">太陽光発電システムの不具合の原因は、自然災害、経年劣化、故障やいたずらなど様々です。<br>
							モジュールの割れは目視で、系統側の事故、地絡・短絡などであれば、モニターからの警報でそれぞれ確認することができます。<br>
							<br>
							しかし、モジュール内部など、目に見えない箇所での不具合は、発電量が低下していてもなかなか気付くことができず、そのまま症状が進んだ結果、売電量の低下や他機器へ悪影響を及ぼすこともあります。<br>
							<br>
						定期的にメンテナンスを行うことで、こういったトラブルを早期発見し、設備を維持していくことで、売電事業の安定化に繋がります。</p>
					</div>
					<div class="p-2col-img ">
						<ul class="p-2col-img-list animate-default-orderCover">
							<li class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_inverter.png" alt="パワーコンディショナーの停止"></li>
							<li class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_solar.png" alt="太陽光パネルの損傷・腐食"></li>
							<li class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_side.png" alt="系統側の事故"></li>
							<li class="animate-default-order"><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_circut.png" alt="直流側または交流側の地絡・短絡"></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="m-sectionMega">
				<h3 class="m-titleH3 tac">メンテナンスによって発見できる不具合事例</h3>
				<ul class="p-listCenter p-listCenter-3col m-sectionMedium">
					<li>
						<p><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_typhoon.jpg" alt="台風・落雷・積雪によるパネル破損"></p>
						<p class="p-listCenter-txt">台風・落雷・積雪による<br>
						パネル破損</p>
					</li>
					<li>
						<p><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_bird.jpg" alt="鳥糞によるパネルの汚れ"></p>
						<p class="p-listCenter-txt">鳥糞によるパネルの汚れ</p>
					</li>
					<li>
						<p><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_looseness.jpg" alt="固定不良や緩みによるパネル外れや破損"></p>
						<p class="p-listCenter-txt">固定不良や緩みによる<br>
						パネル外れや破損</p>
					</li>
					<li>
						<p><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_animal.jpg" alt="小動物の侵入による短絡・焼損"></p>
						<p class="p-listCenter-txt">小動物の侵入による<br>
						短絡・焼損</p>
					</li>
					<li>
						<p><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_burnout.jpg" alt="ケーブルの損傷・焼損"></p>
						<p class="p-listCenter-txt">ケーブルの損傷・焼損</p>
					</li>
					<li>
						<p><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_fault.jpg" alt="パネル内部の不具合"></p>
						<p class="p-listCenter-txt">パネル内部の不具合</p>
					</li>
				</ul>

				<p class="m-txt2 m-sectionMedium tac">定期的にメンテナンスを行うことにより、<br class="nopc">これらのトラブルを減らすことができます。</p>
			</div>

			<div class="m-sectionMega">
				<div class="p-titleH4-cover">
					<h4 class="p-titleH4"><span>年次点検・スポット点検</span>専用計測器による発電設備の点検</h4>
				</div>

				<ul class="p-listCenter p-listCenter-3col">
					<li>
						<p><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_characteristics.jpg" alt="I-V特性の計測"></p>
						<p class="p-listCenter-txt">I-V特性の計測</p>
					</li>
					<li>
						<p><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_string.jpg" alt="ストリング抵抗値測定"></p>
						<p class="p-listCenter-txt">ストリング抵抗値測定</p>
					</li>
					<li>
						<p><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_insulation.jpg" alt="絶縁抵抗値測定"></p>
						<p class="p-listCenter-txt">絶縁抵抗値測定</p>
					</li>
				</ul>

				<div class="m-sectionMega">
					<h5 class="p-titleH5"><span>月次点検</span>目視を中心とした発電所全体の点検</h5>

					<ul class="p-listCenter p-listCenter-3col m-sectionSmall">
						<li>
							<p><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_cell.jpg" alt="太陽電池モジュールの目視点検"></p>
							<p class="p-listCenter-txt">太陽電池モジュールの<br>
							目視点検</p>
						</li>
						<li>
							<p><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_check.jpg" alt="パワコン内部の目視点検およびエラー確認"></p>
							<p class="p-listCenter-txt">パワコン内部の目視点検<br>
							およびエラー確認</p>
						</li>
						<li>
							<p><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_panel.jpg" alt="各種盤の目視点検"></p>
							<p class="p-listCenter-txt">各種盤の目視点検</p>
						</li>
						<li>
							<p><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_high.jpg" alt="高圧機器の目視点検"></p>
							<p class="p-listCenter-txt">高圧機器の目視点検</p>
						</li>
						<li class="mr0">
							<p><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_record.jpg" alt="計器指示値の記録"></p>
							<p class="p-listCenter-txt">計器指示値の記録</p>
						</li>
					</ul>
				</div>
			</div>

			<div class="m-sectionMega">
				<div class="p-titleH4-cover">
					<h4 class="p-titleH4"><span>精密点検</span>精密点検にて不具合箇所の原因究明</h4>
				</div>
				<ul class="p-listCenter p-listCenter-2col">
					<li>
						<p><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_thermo.jpg" alt="サーモカメラでの検査"></p>
						<p class="p-listCenter-txt">サーモカメラでの検査</p>
					</li>
					<li>
						<p><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_el.jpg" alt="EL発光試験"></p>
						<p class="p-listCenter-txt">EL発光試験</p>
					</li>
				</ul>

				<div class="p-box m-sectionMedium">
					<div class="p-box-vid">
						<video poster="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_video.png" controls controlsList="nodownload">
						    <source src="<?php echo ASSETS_PATH; ?>/video/services/operation-maintenance/vid_drone.mp4" type="video/mp4">
						</video>
					</div>
					<div class="p-box-2col">
						<div class="p-box-2col-content">
							<p class="m-txtLarge fwb">ドローンによるモジュール撮影</p>
							<p class="m-txt mt10">サーモカメラ搭載のドローンによる、上空からの目視点検により、広範囲を短時間で確認することができ、不良の疑いがあるモジュールを一瞬にして検出できます。</p>
							<p class="m-txt m-indent">※ドローンによる点検は必要な場合のみ実施。</p>
						</div>
						<p class="p-box-2col-img"><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_drone.jpg" alt="ドローンによるモジュール撮影"></p>
					</div>
				</div>
			</div>
		</div>

		<div class="m-sectionMega">
			<h2 class="m-titleH2"><span>2</span>設備診断・評価サービス</h2>
			<div class="m-sectionMedium">
				<p class="m-txt">発電所の発電システム及び設備、機器全体の構成の妥当性を診断し、真の品質レベル・価値を客観的、技術的に評価します。<br>
				その結果から設備の健全性及び性能を高める改善策を具体的にご提案します。</p>
			</div>

			<ul class="p-listCheck">
				<li class="clearfix">
					<div class="p-listCheck-content">
						<span class="p-listCheck-sub">Check.1</span>
						<p class="p-listCheck-title">太陽電池モジュール検査</p>
						<p class="m-txt">設置された太陽電池モジュールを取り外すことなく、メンテナンス用特殊試験機器を用いて工場出荷時と同様の試験を実施します。</p>
					</div>
					<p class="p-listCheck-img"><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_module.png" alt="太陽電池モジュール検査"></p>
				</li>
				<li class="clearfix">
					<div class="p-listCheck-content">
						<span class="p-listCheck-sub">Check.2</span>
						<p class="p-listCheck-title">発電所全体の検査</p>
						<p class="m-txt">発電所全体の設備を検査、測定します。</p>
					</div>
					<p class="p-listCheck-img"><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_plant.png" alt="発電所全体の検査"></p>
				</li>
				<li class="clearfix">
					<div class="p-listCheck-content">
						<span class="p-listCheck-sub">Check.3</span>
						<p class="p-listCheck-title">設備全体の総合評価</p>
						<p class="m-txt">上記検査結果をもとに、一般に実施されていない８つに分類した大項目にて、発電システムの総合評価を行います。</p>

						<table class="p-listCheck-table">
							<tr>
								<th>事業性</th>
								<td>事業性<span>（システム評価）</span></td>
							</tr>
							<tr>
								<th>継続性</th>
								<td>売電事業継続性<span>（収支の健全性）</span></td>
							</tr>
							<tr>
								<th>生産性</th>
								<td>生産性<span>（発電効率、コストパフォーマンス）</span></td>
							</tr>
							<tr>
								<th>品質・信頼性</th>
								<td>品質・安全性・信頼性<span>（トレーサビリティ）</span></td>
							</tr>
							<tr>
								<th>保守容易性</th>
								<td>保守・維持管理容易性<span>（メンテナンスアビリティ）</span></td>
							</tr>
							<tr>
								<th>周囲条件</th>
								<td>周囲環境条件<span>（発電設備に対する）</span></td>
							</tr>
							<tr>
								<th>耐環境性</th>
								<td>耐環境性、耐埃性<span>（発電設備の持つ耐久性）</span></td>
							</tr>
							<tr>
								<th>設備意匠</th>
								<td>景観の調和、意匠、見栄え、PR性</td>
							</tr>
						</table>
					</div>
					<p class="p-listCheck-img p-listCheck-img-spec"><img src="<?php echo ASSETS_PATH; ?>/images/services/operation-maintenance/img_facility.png" alt="設備全体の総合評価"></p>
				</li>
			</ul>
		</div>
	</div>

	<!-- SERVICE CONSULT BEGIN -->
	<div class="m-serviceConsult-cover">
		<div class="m-serviceConsult">
			<div class="m-serviceConsult-content">
				<p class="m-serviceConsult-title">O＆Mについてのご相談</p>

				<div class="m-serviceConsult-inner">
					<div class="m-serviceConsult-left">
						<div class="m-serviceConsult-box m-serviceConsult-box-leftTop">
							<p class="m-serviceConsult-box-txt">去年より発電量が<br class="nosp">下がっている</p>
						</div>
						<div class="m-serviceConsult-box m-serviceConsult-box-leftTop">
							<p class="m-serviceConsult-box-txt">メンテナンス費用は<br class="nosp">いくらくらいかかるの？</p>
						</div>
						<div class="m-serviceConsult-box m-serviceConsult-box-leftBottom">
							<p class="m-serviceConsult-box-txt">出力制御の対応が面倒だ</p>
						</div>
					</div>
					<div class="m-serviceConsult-center tac">
						<p><img src="<?php echo ASSETS_PATH; ?>/images/common/img_consult_man.png" alt="地熱発電についてのご相談"></p>
						<p class="m-serviceConsult-center-deco"><img src="<?php echo ASSETS_PATH; ?>/images/common/img_consult_man_head.png" alt="頭"></p>
					</div>
					<div class="m-serviceConsult-right">
						<div class="m-serviceConsult-box m-serviceConsult-box-rightTop">
							<p class="m-serviceConsult-box-txt">発電所が遠方のため<br class="nosp">なかなか点検に行けない</p>
						</div>
						<div class="m-serviceConsult-box m-serviceConsult-box-rightBottom">
							<p class="m-serviceConsult-box-txt">パワーコンディショナーが<br class="nosp">時々停止するけど原因が<br>
							分からない</p>
						</div>
					</div>
				</div>

				<p class="m-serviceConsult-sub">事業の詳細、ご質問やお困りごとなど、<br class="nopc">下記より承っております。</p>
			</div>
			<?php get_template_part('include/contact_info') ?>
		</div>
	</div>
	<!-- SERVICE CONSULT END -->
	*/ ?>

	<?php if(have_posts()): while(have_posts()): the_post() ?>
		<?php the_content(); ?>
	<?php endwhile; endif ?>

	<?php get_template_part('include/service_link') ?>
</div>