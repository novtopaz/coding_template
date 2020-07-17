<?php
$mv_text = [
	'h1'=>'会社案内',
];

set_query_var('mv_text', $mv_text);
get_template_part('include/mv');
?>

<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>

<?php if(have_posts()): while(have_posts()): the_post() ?>
	<?php the_content(); ?>
<?php endwhile; endif ?>

<?php /*
<div class="l-content clearfix">
	<div class="l-container clearfix">
		<div class="l-sidenav">
			<ul class="p-sidenav-list">
				<li>
					<p class="l-sidenav-title"><a href="#philosophy" class="l-link l-link-underline is-pagelink">経営理念</a></p>
				</li>
				<li>
					<p class="l-sidenav-title"><a href="#message" class="l-link l-link-underline is-pagelink">代表挨拶</a></p>
				</li>
				<li>
					<p class="l-sidenav-title"><a href="#profile" class="l-link l-link-underline is-pagelink">会社概要</a></p>
				</li>
				<li>
					<p class="l-sidenav-title"><a href="#history" class="l-link l-link-underline is-pagelink">沿革</a></p>
				</li>
				<li>
					<p class="l-sidenav-title"><a href="#csr" class="l-link l-link-underline is-pagelink">CSR活動</a></p>
				</li>
			</ul>
		</div>
		<div id="sidenav-content" class="l-sidenav-content">
			<div class="l-sidenav-box">
				<h2 id="philosophy" class="m-titleH2 l-anchor">経営理念</h2>
				<h3 class="m-titleH3 m-sectionSmall tac">イワテックは、<br class="nopc">5つの基本理念に基づき、<br>
				同じベクトルで、社員一人ひとりが<br class="nopc">社会へ貢献してまいります</h3>

				<p class="m-sectionMedium tac">
					<?php getPicture('img_philosophy', 'jpg', 'about', '信頼 技術 環境 貢献 品質') ?>
				</p>

				<!-- MESSAGE BEGIN -->
				<div class="m-sectionUltra">
					<h2 id="message" class="m-titleH2 l-anchor">代表挨拶</h2>
					<div class="p-message m-sectionSmall">
						<h3 class="p-message-txt m-titleH3">次世代に<br class="nopc">継承するエネルギー、<br>
						再生可能エネルギーが<br class="nopc">その答えです。</h3>
						<?php getPicture('img_message', 'jpg', 'about', '代表挨拶') ?>

					</div>
					<div class="m-sectionMedium">
						<p class="m-txt">我々が住む、この美しい地球の悲鳴が聞こえてきています。<br>
							温暖化現象による異常気象、北極・南極での氷の融け出しによる海面上昇など、<br>
							挙げれば切りがありません。<br>
							<br>
							人間社会の化石燃料への依存過多、経済優先による無秩序な乱開発、今、我々人間は問われています。<br><br>
							私たちの子供、孫、そしてその先の世代に残すべきエネルギー。<br>
							その答えは、『再生可能エネルギー』です。<br>
							<br>
							決して遅くはありません。<br>
							私たちイワテックは、正面から真剣に向かい合い、そのソリューションを形にしていきます。<br>
							<br>
							次世代に向かう『イワテック』と、一緒に手を取り合いませんか。
						</p>

						<p class="p-message-sign tar m-sectionMedium">代表取締役・最高経営責任者</p>
						<p class="tar mt10">
							<img src="<?php echo ASSETS_PATH; ?>/images/about/ing_sign.png" alt="岩元考一郎">
						</p>
					</div>
				</div>
				<!-- MESSAGE END -->

				<!-- PROFILE BEGIN -->
				<div class="m-sectionUltra">
					<h2 id="profile" class="m-titleH2 l-anchor">会社概要</h2>
					<table class="p-profile-table m-txt2 m-sectionMedium">
						<tr>
							<th>商号</th>
							<td>株式会社イワテック</td>
						</tr>
						<tr>
							<th>本社</th>
							<td>
								<p>〒850-0045<br>
									長崎県長崎市宝町7番5号 <br class="nopc">第２イワテックビル<br>
								TEL: 095-843-6448 <span class="nosp">/</span> <br class="nopc">FAX: 095-843-6447</p>
								<p class="m-btn m-sectionSmall"><a href="https://goo.gl/maps/zfv4MxAYQUkcu7CVA" target="_blank"><span>MAPはこちら</span></a></p>
							</td>
						</tr>
						<tr>
							<th>設立</th>
							<td>平成元年(1989年) 4月</td>
						</tr>
						<tr>
							<th>資本金</th>
							<td>2,000万円</td>
						</tr>
						<tr>
							<th>取締役員</th>
							<td>代表取締役・最高経営責任者 <br class="nopc">岩元 孝一郎<br>
								取締役 岩元 亜子<br>
							取締役 岩元 正信</td>
						</tr>
						<tr>
							<th>建設業許可</th>
							<td>長崎県知事許可(特-26)第12915号</td>
						</tr>
						<tr>
							<th>営業所</th>
							<td>
								<p class="fwm">久留米営業所</p>
								<p class="mt5">〒839-0809<br>
									福岡県久留米市東合川3丁目2-17 <br class="nopc">平成インタービル102号室<br>
								TEL/FAX:0942-27-6437</p>
								<p class="m-btn m-sectionSmall"><a href="https://goo.gl/maps/i7SQachfPD5S7wBr9" target="_blank"><span>MAPはこちら</span></a></p>

								<p class="fwm m-sectionSmall">インド支社</p>
								<p class="mt5">CD-135,Salt Lake City Sector I Kolkata－700 064,India</p>
								<p class="m-indent3">TEL：+91-33-2321-6732 <span class="nosp">/</span> 6733</p>
								<p>FAX：+91-33-2321-6731</p>
								<p>E-mail：info@iwateccorp.com</p>
								<p class="m-btn m-sectionSmall"><a href="https://goo.gl/maps/FCXKNBNG27eXtWum6" target="_blank"><span>MAPはこちら</span></a></p>

							</td>
						</tr>
						<tr>
							<th>主要取引先</th>
							<td>
								<div class="half">
									<div class="half-item">
										<p class="fwm">国内<br>
										</p>
										<p class="mt5">三菱日立パワーシステムズ株式会社<br>株式会社MHPSコントロールシステムズ<br>
										三菱重工業株式会社<br>
										三菱電機株式会社<br>
										三菱電機エンジニアリング株式会社</p>
									</div>
									<div class="half-item">
										<p class="fwm">海外<br>
										</p>
										<p class="mt5">ABB (スイス)<br>
										Siemens (ドイツ)<br>
										Alstom (フランス)<br>
										Beckwith Electric (アメリカ)<br>
										Cummins (アメリカ，シンガポール)<br>
										GUTOR (スイス)<br>
										TEW (イギリス)<br>
										DANIMEX (デンマーク)<br>
										WILKEN (ケニア)<br>
										RAYLEIGH (イギリス)<br>
										RTK (イギリス)<br>
										CEWE (スウェーデン)<br>
										CROMPTON (イギリス)</p>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th>主要金融機関</th>
							<td>株式会社親和銀行<br>
							株式会社福岡銀行<br>
							株式会社商工組合中央金庫<br>
							株式会社日本政策金融公庫</td>
						</tr>
					</table>
				</div>
				<!-- PROFILE END -->

				<!-- HISTORY BEGIN -->
				<div class="m-sectionUltra">
					<h2 id="history" class="m-titleH2 l-anchor">沿革</h2>

					<div class="p-history m-sectionMedium">
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">1989</p>
								<p class="p-history-year-sub">平成元年</p>
							</div>
							<div class="p-history-content m-txt2 fwm">
								有限会社岩元設計事務所を設立<br>
								海外部を組織し、各種電気品の海外調達体制を強化
							</div>
						</div>
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">1995</p>
								<p class="p-history-year-sub">平成7年</p>
							</div>
							<div class="p-history-content m-txt2 fwm">
								イワテックビル 本社移転<br>
								株式会社化し、社名を現在の『株式会社イワテック』へ変更
							</div>
						</div>
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">2003</p>
								<p class="p-history-year-sub">平成15年</p>
							</div>
							<div class="p-history-content m-txt2 fwm">
								会社設立十五周年
							</div>
						</div>
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">2005</p>
								<p class="p-history-year-sub">平成17年</p>
							</div>
							<div class="p-history-content m-txt2 fwm">
								コルカタにインド支社を設立 <br>
								「インディアエンジニアリングセンター」
							</div>
						</div>
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">2008</p>
								<p class="p-history-year-sub">平成20年</p>
							</div>
							<div class="p-history-content m-txt2 fwm">
								会社設立二十周年 <br>
								太陽光発電事業に参入
							</div>
						</div>
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">2012</p>
								<p class="p-history-year-sub">平成24年</p>
							</div>
							<div class="p-history-content m-txt2 fwm">
								ISO9001認証取得
							</div>
						</div>
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">2013</p>
								<p class="p-history-year-sub">平成25年</p>
							</div>
							<div class="p-history-content m-txt2 fwm">
								久留米営業所開設<br>
								O＆M事業に参入
							</div>
						</div>
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">2014</p>
								<p class="p-history-year-sub">平成26年</p>
							</div>
							<div class="p-history-content m-txt2 fwm">
								イワテック第一・第二ソーラー発電所運転開始
							</div>
						</div>
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">2015</p>
								<p class="p-history-year-sub">平成27年</p>
							</div>
							<div class="p-history-content m-txt2 fwm">
								イワテック第三・第四・第五ソーラー発電所運転開始 <br>
								水素・燃料電池事業に参入 <br>
								地熱・バイオマス・小水力を加えた、再生可能エネルギー事業に本格参入
							</div>
						</div>
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">2016</p>
								<p class="p-history-year-sub">平成28年</p>
							</div>
							<div class="p-history-content m-txt2 fwm">
								第2イワテックビル 本社移転
							</div>
						</div>
						<div class="p-history-item">
							<div class="p-history-year">
								<p class="p-history-year-title">2018</p>
								<p class="p-history-year-sub">平成30年</p>
							</div>
							<div class="p-history-content m-txt2 fwm">
								会社設立三十周年<br>
								イワテック第一温泉発電所運転開始
							</div>
						</div>
					</div>
				</div>
				<!-- HISTORY END -->

				<!-- CSR BEGIN -->
				<div class="m-sectionUltra">
					<h2 id="csr" class="m-titleH2 l-anchor">CSR活動</h2>

					<ul class="p-csr m-sectionMedium">
						<li>
							<p><img src="<?php echo ASSETS_PATH; ?>/images/about/ing_cleaning.png" alt="社外清掃"></p>
							<p class="p-csr-txt">社外清掃</p>
						</li>
						<li>
							<p><img src="<?php echo ASSETS_PATH; ?>/images/about/ing_inhouse.png" alt="自社発電所近隣自治会活動"></p>
							<p class="p-csr-txt">自社発電所近隣自治会活動</p>
						</li>
						<li>
							<p><img src="<?php echo ASSETS_PATH; ?>/images/about/ing_sponsor.png" alt="地域イベントへの協賛"></p>
							<p class="p-csr-txt">地域イベントへの協賛</p>
						</li>
						<li>
							<p><a class="is-imghover" href="https://www.v-varen.com/" target="_blank"><img src="<?php echo ASSETS_PATH; ?>/images/about/ing_sport.png" alt="地域スポーツ振興事業"></a></p>
							<p class="p-csr-txt">地域スポーツ振興事業</p>
						</li>
						<li>
							<p><img src="<?php echo ASSETS_PATH; ?>/images/about/ing_donate.png" alt="熊本地震被災地への社用車寄付"></p>
							<p class="p-csr-txt">熊本地震被災地への社用車寄付</p>
						</li>
					</ul>
				</div>
				<!-- CSR END -->
			</div>
		</div>
	</div>
	<div class="clearfix">
		<div class="l-sidenav-content">
			<?php get_template_part('include/contact') ?>
		</div>
	</div>
</div>
*/ ?>