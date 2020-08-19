<div class="l-pagebody">
	<div class="l-content">

		<div class="l-h1-wrap">
			<h1 class="l-h1"><?php the_title(); ?></h1>
			<p class="l-h1-sub">ABOUT</p>
		</div><!--l-h1-wrap-->

		<div class="l-main-contents">
			<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

			<!--ページ内リンク-->
			<ul class="p-page-link clearfix">
				<li><a href="#p-policy" class="imghover">経営理念</a></li>
				<li><a href="#p-goal" class="imghover">目標</a></li>
				<li><a href="#p-action" class="imghover">行動指針</a></li>
				<li><a href="#p-statue" class="imghover">求める人物像</a></li>
				<li><a href="#career" class="imghover">教育・キャリアパス</a></li>
				<li><a href="#environment" class="imghover">働く環境</a></li>
			</ul>

			<!--理念-->
			<div id="p-policy">
				<h2 class="m-mh01">経営理念</h2>
				<p class="p-policy-text"><span class="m-cr-red">法(Legal)と秩序を守り安全を確約</span>し、安心のブランドを確立することで、<span class="m-cr-red">社会の信頼(Faith)</span>を獲得します。</p>
			</div><!--/#p-policy-->

			<!--目標-->
			<div id="p-goal">
				<h2 class="m-mh01">目標</h2>
				<p class="p-policy-text">お客様にとって<span class="m-cr-red">オンリーワン</span>の信頼のブランドとして認められる企業グループを目指します。<br>一人ひとりが<span class="m-cr-red">誇りと生き甲斐をもって活躍</span>できる企業グループを目指します。</p>
			</div><!--/#p-goal-->

			<!--行動指針-->
			<div id="p-action">
				<h2 class="m-mh01">行動指針</h2>
				<div class="clearfix p-action-box">
					<p class="p-action-num">01</p>
					<p class="p-action-text">お客様のニーズを的確にとらえ<span class="m-cr-red">柔軟な対応</span>ができるようにします。</p>
				</div><!--/.clearfix-->

				<div class="clearfix p-action-box">
					<p class="p-action-num">02</p>
					<p class="p-action-text">仕事に対し<span class="m-cr-red">誠実かつ謙虚</span>に向き合います。</p>
				</div><!--/.clearfix-->

				<div class="clearfix p-action-box">
					<p class="p-action-num">03</p>
					<p class="p-action-text">ミスを生じさせない<span class="m-cr-red">ノウハウを構築</span>します。</p>
				</div>

				<div class="clearfix p-action-box">
					<p class="p-action-num">04</p>
					<p class="p-action-text">個々の持てる力を合わせ、<span class="m-cr-red">チームとして</span>最高の<span class="m-cr-red">パーフォーマンスを発揮</span>できるようにします。</p>
				</div>
			</div><!--/#p-action-->

			<!--求める人物像-->
			<div id="p-statue">
				<h2 class="m-mh01">求める人物像</h2>
				<div class="clearfix p-statue-box">
					<div class="p-statue-left">
						<h3 class="p-statue-title">Inside of person</h3>
						<ul class="p-statue-list is-matchHeight">
							<li><span class="m-cr-red">誠実</span>な人</li>
							<li><span class="m-cr-red">誇り</span>がある人</li>
							<li><span class="m-cr-red">感謝</span>がある人</li>
							<li><span class="m-cr-red">当事者意識</span>がある人</li>
						</ul>
					</div><!--/.p-statue-left-->

					<div class="p-statue-right">
						<h3 class="p-statue-title">Attitude to work</h3>
						<ul class="p-statue-list is-matchHeight">
							<li><span class="m-cr-red">お客様のこと</span>を考えられる人</li>
							<li><span class="m-cr-red">学び続け</span>られる人</li>
							<li><span class="m-cr-red">より正確</span>に、<span class="m-cr-red">より早く</span>業務ができる人</li>
						</ul>
					</div><!--/.p-statue-right-->
				</div><!--/.clearfix-->
			</div><!--/#p-statue-->

			<!--教育-->
			<div class="p-study" id="career">
				<h2 class="m-mh01">教育・キャリアパス</h2>
				<p class="p-study-text">未経験の方でも徐々にステップアップ出来るよう、社内外で研修やOJTも充実。<br>キャリアをお持ちの方は、マネジメント研修・専門スキル研修等、次の目標に応じて支援が出来る教育体系を目指し、研修や案件を整えています。</p>
				<div class="p-study-pic">
					<picture>
						<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/about/img_study_pc.png">
						<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/about/img_study_sp.png">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/about/img_study_pc.png" alt="キャリアパスについてのグラフ" class="switch is-mv-amine">
					</picture>
				</div><!--/.p-study-pic-->

				<h3 class="p-system-title">教育制度</h3>
				<ul class="p-system-pctab clearfix">
					<li class="is-active">新人</li>
					<li>若手</li>
					<li>中堅<span class="p-tab-small">(主任)</span></li>
					<li>中堅<span class="p-tab-small">(課長代理)</span></li>
					<li>課長</li>
					<li>部長</li>
				</ul>

				<div>
					<!--タブメニュー:新人-->
					<div class="p-system-content-wrap is-show">
						<h3 class="p-system-sptab">新人</h3>
						<div class="p-system-content">
							<h4 class="p-system-content-mh">ゴール</h4>
							<ul class="p-system-content-txt">
								<li>基本的な仕事の流れやルールを理解し業務を遂行できる</li>
							</ul>

							<h4 class="p-system-content-mh">選択</h4>
							<ul class="p-system-content-txt">
								<li>中途入社向け入社時研修</li>
								<li>ビジネスマナー研修1&lt;良好な人間関係を築く5要素&gt;</li>
								<li>ビジネスマナー研修2&lt;ビジネスを円滑に進めるための形式&gt;</li>
								<li>仕事経験を成長につなげるコツ</li>
								<li>報連相研修1&lt;仕事の受け方編&gt;</li>
								<li>報連相研修2&lt;報告・相談&gt;</li>
								<li>ポジティブリスニング</li>
								<li>チームビルディング研修　など</li>
							</ul>

							<h4 class="p-system-content-mh">専門</h4>
							<ul class="p-system-content-txt">
								<li>入社時研修　ⅠⅡ</li>
								<li>リーガルセミナー（社内研修）</li>
							</ul>
						</div><!--/.p-system-content-->
					</div><!--p-system-content-wrap-->

					<!--タブメニュー:若手-->
					<div class="p-system-content-wrap">
						<h3 class="p-system-sptab">若手</h3>
						<div class="p-system-content">
							<h4 class="p-system-content-mh">ゴール</h4>
							<ul class="p-system-content-txt">
								<li>与えられた仕事を正確かつスピーディーに行える</li>
							</ul>

							<h4 class="p-system-content-mh">選択</h4>
							<ul class="p-system-content-txt">
								<li>【基礎】ロジカル・シンキング</li>
								<li>【実践】ロジカル・シンキング</li>
								<li>報連相研修1&lt;仕事の受け方編&gt;</li>
								<li>報連相研修2&lt;報告・相談&gt;</li>
								<li>ポジティブリスニング</li>
								<li>チームビルディング研修</li>
								<li>周囲への影響を考えるセルフリーダーシップ</li>
								<li>タイムマネジメント</li>
							</ul>

							<h4 class="p-system-content-mh">専門</h4>
							<ul class="p-system-content-txt">
								<li>リーガルセミナー（社内研修）</li>
							</ul>
						</div><!--/.p-system-content-->
					</div><!--p-system-content-wrap-->

					<!--タブメニュー:中堅（主任）-->
					<div class="p-system-content-wrap">
						<h3 class="p-system-sptab">中堅<span class="p-tab-small">(主任)</span></h3>
						<div class="p-system-content">
							<h4 class="p-system-content-mh">ゴール</h4>
							<ul class="p-system-content-txt">
								<li>後輩、同僚のフォローができ、個人の成果を出せる</li>
							</ul>

							<h4 class="p-system-content-mh">選択</h4>
							<ul class="p-system-content-txt">
								<li>【基礎】ロジカル・シンキング</li>
								<li>【実践】ロジカル・シンキング</li>
								<li>タイムマネジメント</li>
								<li>体系的に学ぶOJTの進め方</li>
								<li>仕事の進捗管理入門</li>
								<li>傾聴力の基本</li>
								<li>質問力の基本</li>
								<li>相手に理解・納得してもらうための伝え方　など</li>
							</ul>

							<h4 class="p-system-content-mh">専門</h4>
							<ul class="p-system-content-txt">
								<li>リーガルセミナー（社内研修）</li>
							</ul>
						</div><!--/.p-system-content-->
					</div><!--p-system-content-wrap-->

					<!--タブメニュー:中堅（課長代理）-->
					<div class="p-system-content-wrap">
						<h3 class="p-system-sptab">中堅<span class="p-tab-small">(課長代理)</span></h3>
						<div class="p-system-content">
							<h4 class="p-system-content-mh">ゴール</h4>
							<ul class="p-system-content-txt">
								<li>後輩の指導ができ、管理職の補佐ができる</li>
							</ul>

							<h4 class="p-system-content-mh">選択</h4>
							<ul class="p-system-content-txt">
								<li>【基礎】ロジカル・シンキング</li>
								<li>【実践】ロジカル・シンキング</li>
								<li>仕事の進捗管理入門</li>
								<li>相手に理解・納得してもらうための伝え方</li>
								<li>次期管理職養成研修＜全体概要編＞</li>
								<li>チームビルディング研修</li>
								<li>ファシリテーション入門　など</li>
							</ul>

							<h4 class="p-system-content-mh">専門</h4>
							<ul class="p-system-content-txt">
								<li>リーガルセミナー（社内研修）</li>
							</ul>
						</div><!--/.p-system-content-->
					</div><!--p-system-content-wrap-->

					<!--タブメニュー:課長-->
					<div class="p-system-content-wrap">
						<h3 class="p-system-sptab">課長</h3>
						<div class="p-system-content">
							<h4 class="p-system-content-mh">ゴール</h4>
							<ul class="p-system-content-txt">
								<li>組織をマネジメントしチームの成果をだせる</li>
							</ul>

							<h4 class="p-system-content-mh">選択</h4>
							<ul class="p-system-content-txt">
								<li>プレゼンテーション入門＜シナリオ作成編＞</li>
								<li>プレゼンテーション入門＜デリバリー力向上編＞</li>
								<li>ストーリーで学ぶ ビジネスリーダー研修＜全体編＞</li>
								<li>ストーリーで学ぶ ビジネスリーダー研修＜ビジョン設定・仕事の構想編＞</li>
								<li>目標の立て方のコツ</li>
								<li>アクションプランの立て方</li>
								<li>ファシリテーション入門　など</li>
							</ul>

							<h4 class="p-system-content-mh">専門</h4>
							<ul class="p-system-content-txt">
								<li>リーガルセミナー（社内研修）</li>
							</ul>
						</div><!--/.p-system-content-->
					</div><!--p-system-content-wrap-->

					<!--タブメニュー:部長-->
					<div class="p-system-content-wrap">
						<h3 class="p-system-sptab">部長</h3>
						<div class="p-system-content">
							<h4 class="p-system-content-mh">ゴール</h4>
							<ul class="p-system-content-txt">
								<li>全社目線で部門をマネジメントし成果を出せる</li>
							</ul>

							<h4 class="p-system-content-mh">選択</h4>
							<ul class="p-system-content-txt">
								<li>経営戦略概論</li>
								<li>組織・人事概論</li>
								<li>標準化の進め方の基本</li>
								<li>論理的思考のブラッシュアップ研修　など</li>
							</ul>

							<h4 class="p-system-content-mh">専門</h4>
							<ul class="p-system-content-txt">
								<li>リーガルセミナー（社内研修）</li>
							</ul>
						</div><!--/.p-system-content-->
					</div><!--p-system-content-wrap-->
				</div>

			</div><!--/#p-study-->

			<div id="environment">
				<h2 class="m-mh01">働く環境</h2>
				<p class="p-environment-image-main">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/about/img_environment_01.jpg" alt="エントランス">
					<span class="p-environment-image-main-caption">エントランス</span>
				</p>
				<div class="p-environment-image-thum">
					<div class="p-environment-image-item">
						<div class="p-environment-image-item-inner">
							<p class="p-environment-image-item-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/about/img_environment_01.jpg" alt="エントランス"></p>
							<p class="p-environment-image-item-txt">エントランス</p>
						</div>
					</div>
					<div class="p-environment-image-item">
						<div class="p-environment-image-item-inner">
							<p class="p-environment-image-item-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/about/img_environment_02.jpg" alt="ミーティングスペース"></p>
							<p class="p-environment-image-item-txt">ミーティングスペース</p>
						</div>
					</div>
					<div class="p-environment-image-item">
						<div class="p-environment-image-item-inner">
							<p class="p-environment-image-item-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/about/img_environment_03.jpg" alt="会議室"></p>
							<p class="p-environment-image-item-txt">会議室</p>
						</div>
					</div>
					<div class="p-environment-image-item">
						<div class="p-environment-image-item-inner">
							<p class="p-environment-image-item-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/about/img_environment_04.jpg" alt="オフィス"></p>
							<p class="p-environment-image-item-txt">オフィス</p>
						</div>
					</div>
					<div class="p-environment-image-item">
						<div class="p-environment-image-item-inner">
							<p class="p-environment-image-item-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/about/img_environment_05.jpg" alt="休憩スペース"></p>
							<p class="p-environment-image-item-txt">休憩スペース</p>
						</div>
					</div>
				</div>
			</div>

			<?php get_template_part( '/include/cv_entry' ); // エントリーボックス ?>
		</div><!--l-main-contents-->
	</div><!--l-content-->
</div><!-- l-pagebody -->