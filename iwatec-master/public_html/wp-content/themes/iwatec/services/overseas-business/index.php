<?php
$mv_text = [
	'h1'=>'海外事業展開',
];

set_query_var('mv_text', $mv_text);
get_template_part('include/mv');
?>

<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

<div class="l-content">
	<?php /*
	<div class="m-box">
		<h2 class="m-titleH2_2">発電プラント用電気システムの<br>エンジニアリングと海外製品調達</h2>
		<p class="m-txt m-sectionMedium">日本本社とインド支社(コルカタ)には、電気・機械・計装エンジニアが常駐しています。高い技術力を備え、グローバルな視点で、お客様のニーズに合った電気機器の選定、エンジニアリング、メーカーとの価格交渉から納品に至るまで自社で行います。</p>

		<!-- MAP BEIGN -->
		<div class="p-map m-sectionMedium">
			<video id="map" loop autoplay muted playsinline>
				<source src="<?php echo ASSETS_PATH; ?>/video/services/overseas-business/vid_map.mp4" type="video/mp4">
			</video>
		</div>
		<!-- MAP END -->


		<!-- HANDLE BEGIN -->
		<div class="p-handle m-sectionMedium">
			<p class="p-handle-title">〈主な取り扱い品目〉</p>
			<ul class="p-handle-list">
				<li>・UPS<br>
				・非常用ディーゼル発電機</li>
				<li>・制御盤／配電盤<br>
				・通信設備</li>
				<li>・燃料電池<br>
				・水素製造装置</li>
				<li>・太陽電池モジュール<br>
				・Battery & Battery Charger</li>
			</ul>
		</div>
		<!-- HANDLE END -->

		<div class="m-sectionMega">
			<h2 class="m-titleH2_2">エンジニアリング・海外製品調達<br>サービスの流れ</h2>
			<!-- STEP BEGIN -->
			<div class="p-step">
				<ul class="p-step-list">
					<li>
						<div class="p-step-list-inner">
							<div class="p-step-list-head">STEP <span>01</span></div>
							<div class="p-step-list-content">
								<p class="p-step-list-txt">お客様の仕様書確認</p>
							</div>
						</div>
					</li>
					<li>
						<div class="p-step-list-inner">
							<div class="p-step-list-head">STEP <span>02</span></div>
							<div class="p-step-list-content">
								<p class="p-step-list-txt">見積仕様書作成<br>
									メーカー調査<br>
								機器選定</p>
							</div>
						</div>
					</li>
					<li>
						<div class="p-step-list-inner">
							<div class="p-step-list-head">STEP <span>03</span></div>
							<div class="p-step-list-content">
								<p class="p-step-list-txt">お見積り</p>
							</div>
						</div>
					</li>
					<li>
						<div class="p-step-list-inner">
							<div class="p-step-list-head">STEP <span>04</span></div>
							<div class="p-step-list-content">
								<p class="p-step-list-txt">ご契約</p>
							</div>
						</div>
					</li>
					<li>
						<div class="p-step-list-inner">
							<div class="p-step-list-head">STEP <span>05</span></div>
							<div class="p-step-list-content">
								<p class="p-step-list-txt">メーカー図面、図書の入手<br>
								工程管理</p>
							</div>
						</div>
					</li>
					<li>
						<div class="p-step-list-inner">
							<div class="p-step-list-head">STEP <span>06</span></div>
							<div class="p-step-list-content">
								<p class="p-step-list-txt">出荷前立会検査</p>
							</div>
						</div>
						<div class="p-step-desc-comment p-step-desc m-txt animate-default">
							エンジニアが完成品の<br>
							性能・外観を確認します。
						</div>
					</li>
					<li>
						<div class="p-step-list-inner">
							<div class="p-step-list-head">STEP <span>07</span></div>
							<div class="p-step-list-content">
								<p class="p-step-list-txt">機器納品</p>
							</div>
						</div>
						<div class="p-step-desc-comment p-step-desc m-txt animate-default">
							納品後、機器調整専門の<br>
							技術員派遣も承ります。
						</div>
					</li>
				</ul>

				<p class="p-step-desc-top p-step-desc"><img src="<?php echo ASSETS_PATH; ?>/images/services/overseas-business/img_engineer.png" alt="エンジニアリング・海外製品調達"></p>
			</div>
			<!-- STEP END -->
		</div>

		<div class="m-sectionMega">
			<h2 class="m-titleH2_2">翻訳サービス</h2>
			<p class="m-txt m-sectionSMedium">英語ネイティブと外国人エンジニアの2段階チェックによる正確かつ品質の高い翻訳をご提供します。ビザ申請など、各種手続きに必要な書類の和訳も1枚から承ります。</p>

			<!-- SERVICES BEGIN -->
			<div class="p-service m-sectionMedium">
				<p class="p-service-img"><img src="<?php echo ASSETS_PATH; ?>/images/services/overseas-business/img_service.png" alt="翻訳サービス"></p>
				<div class="p-service-content">
					<div class="p-service-content-item">
						<p class="p-service-title">和文英訳例</p>
						<p class="m-txt">・技術仕様書　・設計図面　<br class="nopc">・提案書　・引合/見積仕様書　<br class="nopc">・取扱説明書<br>
						・各種マニュアル等</p>
					</div>
					<div class="p-service-content-item">
						<p class="p-service-title">英文和訳例</p>
						<p class="m-txt">・ビザ申請用書類等（履歴/経歴書・卒業/在学証明書・雇用証明書・結婚証明書・出産証明書等）</p>
					</div>
				</div>
			</div>
			<!-- SERVICES END -->
		</div>

		<div class="m-sectionMega">
			<h2 class="m-titleH2_2">翻訳サービスの流れ</h2>
			<!-- STEP BEGIN -->
			<div class="p-step">
				<ul class="p-step-list">
					<li>
						<div class="p-step-list-inner">
							<div class="p-step-list-head">STEP <span>01</span></div>
							<div class="p-step-list-content">
								<p class="p-step-list-txt">文章／画像データ確認</p>
							</div>
						</div>
					</li>
					<li>
						<div class="p-step-list-inner">
							<div class="p-step-list-head">STEP <span>02</span></div>
							<div class="p-step-list-content">
								<p class="p-step-list-txt">お見積りと納期のご案内</p>
							</div>
						</div>
					</li>
					<li>
						<div class="p-step-list-inner">
							<div class="p-step-list-head">STEP <span>03</span></div>
							<div class="p-step-list-content">
								<p class="p-step-list-txt">ご契約</p>
							</div>
						</div>
					</li>
					<li>
						<div class="p-step-list-inner">
							<div class="p-step-list-head">STEP <span>04</span></div>
							<div class="p-step-list-content">
								<p class="p-step-list-txt">翻訳</p>
							</div>
						</div>
						<div class="p-step-desc-comment p-step-desc m-txt animate-default">
							英語ネイティブ、外国人<br class="nopc">エンジニアが<br class="nosp">翻訳を行い、<br class="nopc">各種専門分野の担当者が<br>校正を行います。
						</div>
					</li>
					<li>
						<div class="p-step-list-inner">
							<div class="p-step-list-head">STEP <span>05</span></div>
							<div class="p-step-list-content">
								<p class="p-step-list-txt">納品</p>
							</div>
						</div>
						<div class="p-step-desc-comment p-step-desc m-txt animate-default">
							ご指定の翻訳文書形式で<br>
							納品いたします。
						</div>
					</li>
				</ul>

				<p class="p-step-desc-top p-step-desc"><img src="<?php echo ASSETS_PATH; ?>/images/services/overseas-business/img_translate.png" alt="エンジニアリング・海外製品調達"></p>
			</div>
			<!-- STEP END -->
		</div>
	</div>

	<!-- SERVICE CONSULT BEGIN -->
	<div class="m-serviceConsult-cover">
		<div class="m-serviceConsult">
			<div class="m-serviceConsult-content">
				<p class="m-serviceConsult-sub">海外事業展開についての<br class="nopc">お問い合わせはこちら</p>
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