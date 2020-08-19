<?php get_header(); ?>

<div class="p-pagebody">

	<div class="p-fv">
		<div class="p-mv">
			<p class="p-mv-inner">
			<picture>
				<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_mv_pc.png">
				<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_mv_sp.png">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_mv_pc.png" alt="不動産登記・遺産承継なら Legal・Faith 信頼に応える専門家グループのワンストップサービス" class="switch is-mv-amine">
			</picture>
			</p>

			<p class="p-mv-bnr"><a href="/service/sozoku/" target="_blank" class="imghover"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/bnr_mv_service.png" alt="相続手続きサービスサイト"></a></p>
		</div>

		<?php
		$args = array(
			'post_type' => 'info',
			'posts_per_page' => 1,
			'orderby' => 'date',
			'order' => 'DESC',
		); ?>
		<?php $wp_query = new WP_Query( $args ); ?>
		<?php if( $wp_query->have_posts() ) : ?>
		<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
		<div class="p-news-wrap">
			<h2 class="p-news-mh"><span>INFO</span></h2>
			<div class="p-news-box-right">
				<p class="p-news-box"><a href="<?php the_permalink(); ?>"><span><?php echo get_the_date('Y/m/d'); ?></span><?php the_title(); ?></a></p>
				<p class="p-news-btn"><a href="/info/" class="imghover">お知らせ一覧</a></p>
			</div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div><!--p-fv-->

	<div class="p-service-wrap">
		<div class="p-service-inner clearfix">
			<div class="p-service-inner-2">
				<h2 class="p-service-mh">迅速かつ正確な<br>リーガルサービスで<br>お客様に安心を提供</h2>
				<p class="p-service-txt">リーガル・フェイスグループは、司法書士、行政書士、土地家屋調査士、測量士といった各分野の専門家が集結し、豊富な実務経験をもとにお客様のニーズに応じたサービスを提供します。</p>
			</div>
		</div>
	</div><!--p-service-wrap-->
	<div class="p-service-lineup-wrap">
		<div class="p-service-inner clearfix">
			<div class="p-service-lineup">
				<h3 class="p-service-lineup-mh">サービスラインナップ</h3>
				<div class="p-service-lineup-list clearfix">
					<div class="p-service-lineup-list-item">
						<p class="p-service-lineup-list-item-icn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_lineup_01.png" alt="不動産登記"></p>
						<h4 class="p-service-lineup-list-item-mh">不動産登記</h4>
						<p class="p-service-lineup-list-item-txt">売買に伴う所有権移転登記や抵当権設定登記を中心に、迅速かつ正確な登記申請で安全な不動産取引をサポートします。</p>
					</div>
					<div class="p-service-lineup-list-item">
						<p class="p-service-lineup-list-item-icn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_lineup_02.png" alt="商業・法人登記"></p>
						<h4 class="p-service-lineup-list-item-mh">商業・法人登記</h4>
						<p class="p-service-lineup-list-item-txt">株式会社をはじめとする各種法人の設立や役員変更、組織再編など登記手続きのサービスを提供します。</p>
					</div>
					<div class="p-service-lineup-list-item p-service-lineup-list-item-last">
						<p class="p-service-lineup-list-item-icn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_lineup_03.png" alt="相続手続き"></p>
						<h4 class="p-service-lineup-list-item-mh">相続手続き</h4>
						<p class="p-service-lineup-list-item-txt">不動産、預貯金など相続財産の名義変更や遺言書の作成など、ご家族の想いを引き継ぐサービスを提供します。</p>
					</div>
					<div class="p-service-lineup-list-item">
						<p class="p-service-lineup-list-item-icn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_lineup_04.png" alt="書類代理作成"></p>
						<h4 class="p-service-lineup-list-item-mh">書類代理作成</h4>
						<p class="p-service-lineup-list-item-txt">遺産分割協議書、贈与契約書、売買契約書などの書類作成サービスを提供します。</p>
					</div>
					<div class="p-service-lineup-list-item p-service-lineup-list-item-last">
						<p class="p-service-lineup-list-item-icn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_lineup_05.png" alt="調査・測量"></p>
						<h4 class="p-service-lineup-list-item-mh">調査・測量</h4>
						<p class="p-service-lineup-list-item-txt">土地や建物など不動産に関する調査や測量、また図面の作成など登記手続きのサービスを提供します。</p>
					</div>
				</div>
			</div>
		</div>
	</div><!--p-service-lineup-wrap-->

	<div class="p-group-wrap">
		<h2 class="p-mh01"><span>グループのご紹介</span></h2>
		<p class="p-mh01-sub">Legal Faith GROUP</p>

		<div class="p-group-content01">
			<div class="p-group-content-inner">
				<div class="p-group-content-box is-group-anime">
					<div class="p-group-content-box-inner">
						<h3 class="p-group-mh"><span>司</span>法書士法人リーガル・フェイス</h3>
						<p class="p-group-txt">新宿・横浜・名古屋・大阪・福岡の5つの拠点で不動産登記業務を中心に、商業・法人登記や相続登記などのサービスを提供します。</p>
						<ul class="p-group-list clearfix">
							<li>不動産登記業務</li>
							<li>相続関連業務</li>
							<li>商業・法人登記業務</li>
						</ul>
						<p class="m-more-btn"><a href="/service/#anc01"><span>詳細はこちら</span></a></p>
						<p class="m-more-btn"><a href="/service/sozoku/" target="_blank"><span>相続手続きサービスサイト</span></a></p>
					</div>
				</div>
			</div>
		</div><!--p-group-content01-->
		<div class="p-group-content02">
			<div class="p-group-content-inner">
				<div class="p-group-content-box is-group-anime">
					<div class="p-group-content-box-inner">
						<h3 class="p-group-mh"><span>土</span>地家屋調査士法人<br>
						リーガル・フェイス</h3>
						<p class="p-group-txt">東京・名古屋・大阪の3つの拠点で不動産に関する調査や、測量図面の作成など、登記手続きサービスを提供します。</p>
						<ul class="p-group-list clearfix">
							<li>不動産登記業務</li>
							<li>測量業務</li>
						</ul>
						&nbsp;<p class="m-more-btn"><a href="/service/#anc02"><span>詳細はこちら</span></a></p>
					</div>
				</div>
			</div>
		</div><!--p-group-content02-->
		<div class="p-group-content03">
			<div class="p-group-content-inner">
				<div class="p-group-content-box is-group-anime">
					<div class="p-group-content-box-inner">
						<h3 class="p-group-mh"><span>行</span>政書士法人リーガル・フェイス</h3>
						<p class="p-group-txt">相続関係説明図や遺産分割協議書など相続関係書類の作成や各種許認可申請などのサービスを提供します。</p>
						<ul class="p-group-list clearfix">
							<li>相続関連業務</li>
							<li>許認可申請業務</li>
						</ul>
						<p class="m-more-btn"><a href="/service/#anc03"><span>詳細はこちら</span></a></p>
					</div>
				</div>
			</div>
		</div><!--p-group-content03-->
		<div class="p-group-content04">
			<div class="p-group-content-inner">
				<div class="p-group-content-box is-group-anime">
					<div class="p-group-content-box-inner">
						<h3 class="p-group-mh"><span>株</span>式会社リーガル・フェイス</h3>
						<p class="p-group-txt">グループ各法人のバックオフィスの業務委託や経営・人事戦略の策定を通してグループ価値の最大化に貢献します。<br>
						また不動産関連のサービスも提供しています。</p>
						<ul class="p-group-list clearfix">
							<li>グループ全体の経営・人事・システム戦略業務</li>
							<li>グループ会社のバックオフィスの業務委託業務</li>
							<li>不動産調査業務</li>
						</ul>
						&nbsp;<p class="m-more-btn"><a href="/service/#anc04"><span>詳細はこちら</span></a></p>
					</div>
				</div>
			</div>
		</div><!--p-group-content04-->

		<div class="p-contact-box">
			<h3 class="p-contact-mh">CONTACT</h3>
			<p class="p-contact-txt">各グループへのご相談・お問い合わせはこちらから</p>
			<ul class="p-contact-cv clearfix">
				<li class="p-contact-cv-tel is-matchHeight">
					<span class="p-contact-cv-mh">お電話でのお問い合わせ</span>
					<a href="tel:0359091990"><p class="is-tel">
						<span class="p-contact-cv-tel-num">03-5909-1990</span>
						<span class="p-contact-cv-tel-txt">営業時間：09:00～18:00</span>
					</p></a>
				</li>
				<li class="p-contact-cv-mail is-matchHeight">
					<span class="p-contact-cv-mh">メールでのお問い合わせ</span>
					<a href="/contact/" target="_blank" class="p-contact-cv-mail-btn">お問合せはこちら</a>
				</li>
			</ul>
		</div><!--p-contact-box-->
	</div><!--p-group-wrap-->

	<div class="p-office-wrap">
		<div class="p-office-content">
			<h2 class="p-mh01"><span>グループ情報</span></h2>
			<p class="p-mh01-sub">OFFICE INFO</p>

			<div class="p-office-summary-box clearfix">
				<h3 class="p-office-mh">グループ概要</h3>
				<p class="p-office-summary-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_office_summary.jpg" alt="事務所"></p>
				<p class="p-office-summary-txt">売買による不動産登記や相続に伴う遺産承継に強みを持つ司法書士法人を中心に土地家屋調査士法人、行政書士法人、株式会社で連携し、ワンストップのリーガルサービスを提供します。</p>
				<p class="m-more-btn"><a href="/office/summary/"><span>詳細はこちら</span></a></p>
			</div>
			<div class="p-office-summary-box clearfix">
				<h3 class="p-office-mh">アクセス</h3>
				<p class="p-office-summary-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_access.png" alt="アクセス"></p>
				<div class="p-office-summary-txt">
					<p>〒163-1504 東京都新宿区西新宿一丁目6番1号<br>
					新宿エルタワー4F<br>
					tel： 03-5909-1990<br>
					fax：03-3347-5321</p>
					<p class="p-access-station-mh">最寄り駅</p>
					<ul class="p-access-station">
						<li>JR新宿駅　西口　徒歩５分</li>
						<li>東京メトロ　西新宿駅　　徒歩７分</li>
						<li>都営地下鉄　都庁前駅　　徒歩９分</li>
					</ul>
					<p class="m-more-btn"><a href="/office/access/"><span>各法人詳細はこちら</span></a></p>
				</div>
			</div>
		</div>
	</div><!--p-office-wrap-->

	<div class="p-recruit-wrap">
		<h2 class="p-mh01"><span>採用情報</span></h2>
		<p class="p-mh01-sub">RECRUIT</p>

		<div class="p-recruit-box-bg">
			<ul class="p-recruit-list clearfix">
				<li><a href="/recruit/about/" class="imghover">
					<p class="p-recruit-list-mh"><span>リーガル・フェイスを知る</span></p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_recruit01.jpg" alt="リーガル・フェイスを知る">
				</a></li>
				<li><a href="/recruit/work/" class="imghover">
					<p class="p-recruit-list-mh"><span>仕事を知る</span></p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_recruit02.jpg" alt="仕事を知る">
				</a></li>
				<li><a href="/recruit/jobs/" class="imghover">
					<p class="p-recruit-list-mh"><span>募集要項</span></p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_recruit03.jpg" alt="募集要項">
				</a></li>
			</ul>
		</div><!--p-recruit-box-bg-->

		<div class="p-recruit-box-bg">
			<div class="p-staff-box clearfix">
				<p class="p-staff-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_staff.jpg" alt="スタッフ紹介"></p>
				<div class="p-staff-content">
					<h3 class="p-staff-mh">スタッフ紹介</h3>
					<p class="p-staff-txt">若手からベテランまでリーガル・フェイスグループで<br class="nosp">働くメンバーを紹介します。<br>
					メンバーを通じてリーガル・フェイスグループの<br class="nosp">魅力をお届けします。</p>
					<p class="m-more-btn"><a href="/recruit/staff/"><span>詳細はこちら</span></a></p>
				</div>
			</div>
		</div><!--p-recruit-box-bg-->

		<div class="p-blog-wrap">
			<a href="/blog/" class="p-blog-box imghover clearfix">
				<p class="p-blog-img">
					<picture>
						<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_blog_pc.jpg">
						<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_blog_sp.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_blog_pc.jpg" alt="スタッフブログ" class="switch">
					</picture>
				</p>
				<div class="p-blog-content">
					<p class="p-blog-mh-sub">STAFF BLOG</p>
					<h3 class="p-blog-mh">スタッフブログ</h3>
				</div>
			</a>
		</div><!--p-blog-wrap-->

		<p class="m-entry-btn"><a href="/recruit/entry/" target="_blank" class="m-cvbtn-hover">エントリーはこちら</a></p>
	</div><!--p-recruit-wrap-->

</div><!--p-pagebody-->

<?php get_footer(); ?>