<?php get_header(); ?>
<!-- MV BEGIN -->
<div class="p-mv">
	<ul class="p-mv-imgList">
		<li>
			<picture>
				<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv01_pc.png">
				<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv01_sp.png">
				<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv01_pc.png" alt="メインビジュアル 01">
			</picture>
		</li>
		<li>
			<picture>
				<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv02_pc.png">
				<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv02_sp.png">
				<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv02_pc.png" alt="メインビジュアル 02">
			</picture>
		</li>
		<li>
			<picture>
				<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv03_pc.png">
				<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv03_sp.png">
				<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv03_pc.png" alt="メインビジュアル 03">
			</picture>
		</li>
	</ul>
	<div class="p-mv-content">
		<div class="p-mv-title-cover">
			<h1 class="p-mv-title">大切なひと<span>の</span>相続、<br>
				わたしたち<span>に</span>お任せください</h1>
		</div>
		<p class="p-mv-txt">不動産・預貯金・株式など相続手続きを<br class="nosp">すべて代行します。</p>
		<p class="p-mv-content-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_advertise.png" alt="初回相談無料 土日対応可 アクセス便利新宿駅直結 司法書士50名以上在籍"></p>
	</div>
</div>
<!-- MV END -->

<!-- NEWS BEGIN -->
<div class="p-news clearfix">
	<?php
		$args = array(
			'post_type' => 'info',
			'posts_per_page' => 1,
		);
		$wp_query = new WP_Query( $args );
	?>
	<?php if($wp_query->have_posts() ) : ?>
	<?php while ($wp_query->have_posts() ) :$wp_query->the_post(); ?>
	<div class="p-news-title-cover">
		<p class="p-news-title">NEWS<span>お知らせ</span></p>
	</div>
	<div class="p-news-link-cover">
		<p class="p-news-link btn imghover"><a href="<?php echo home_url('/info/');?>"><span>ニュース一覧</span></a></p>
	</div>
	<div class="p-news-content clearfix">
		<div class="p-news-date-cover">
			<p class="p-news-date"><?php the_time('Y/m/d'); ?></p>
		</div>
		<div class="p-news-detail-cover">
			<p class="p-news-detail"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
		</div>
	</div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	<?php endif; ?>
</div>
<!-- NEWS END -->

<!-- CONTACT BEGIN -->
<div class="p-contact">
	<div class="p-contact-inner clearfix">
		<ul class="p-contact-pr">
			<li>初回相談無料</li>
			<li>土日対応可</li>
		</ul>
		<div class="p-contact-telBox flR-pc clearfix">
			<p class="p-contact-telBox-tel flL-pc">
				<a href="tel:0120-800-370">
					<picture class="is-tel">
						<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_contact_tel_pc.png">
						<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_contact_tel_sp.png">
						<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_contact_tel_pc.png" alt="0120-800-370 営業時間　09:00～18:00（土日祝要予約）">
					</picture>
				</a>
			</p>
			<p class="p-contact-telBox-btn btn btn-red flR-pc"><a class="imghover" href="<?php echo home_url('/contact/') ?>" ><span>メールでのお問い合わせ・<br>
			資料請求はこちら</span></a></p>
		</div>
		<p class="p-contact-intro flL-pc">
			<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_contact_cv.png" alt="今なら資料請求された方全員にあんしん相続ガイドブックプレゼント!!">
		</p>
	</div>
</div>
<!-- CONTACT END -->

<!-- RECOMMEND BEGIN -->
<div class="p-box">
	<div class="l-content">
		<p class="p-titleH2-sub">SERVICE</p>
		<h2 class="p-titleH2">こんな方にオススメ<br>
			リーガル・フェイスの<br class="nopc">相続手続おまかせプラン</h2>	
		<p class="m-txt">「相続手続きのすべてを専門家に任せたい」、「遺産の種類が多岐にわたる」、「相続人が多くて遺産分割や書類のやり取りが大変」などの相続手続きのお悩みはリーガル・フェイスにご相談ください。</p>
	</div>
</div>
<!-- RECOMMEND END -->

<!-- SERVICE BEGIN -->
<div class="p-service">
	<div class="l-content">
		<!-- SERVICE SECTION BEGIN -->
		<div class="p-service-section">
			<div class="p-titleH3-cover">
				<p class="p-titleH3-sub"><em>Service</em><span>01</span></p>
				<h3 class="p-titleH3">相続手続おまかせプラン</h3>
			</div>

			<ul class="p-service-listPlan moveItem-defaultList">
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_service_item01.png" alt="多くの事業所でしなければならない手続きが…"></li>
				<li>
					<picture>
						<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_service_item02_pc.png">
						<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_service_item02_sp.png">
						<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_service_item02_pc.png" alt="矢印">
					</picture>
				</li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_service_item03.png" alt="リーガル・フェイスだけに！"></li>
			</ul>

			<p class="m-txt">相続手続おまかせプランとは、司法書士が煩雑な相続手続を全て一括でお引き受けするサービスです。相続人調査(戸籍収集)や遺産分割協議書の作成、預貯金の解約や不動産の名義変更など、あらゆる相続手続きをまとめて代行いたします。また相続税申告が必要な場合は、税理士と連携してワンストップでのお手続きをさせていただきます。</p>

			<div class="p-service-btn-cover clearfix">
				<p class="p-service-btn btn btn-ghost"><a href="<?php echo home_url('/about/omakase/');?>"><span>詳細はこちら</span></a></p>
			</div>

			<div class="p-titleH4-cover clearfix">
				<h4 class="p-titleH4 flL-pc">個別のお手続きについて</h4>
				<p class="p-titleH4-sub flR-pc">その他個別のお手続きに関してもご対応可能です。</p>
			</div>

			<ul class="p-service-listProcess clearfix">
				<li>
					<a class="imghover is-matchHeightSP" href="<?php echo home_url('/about/#inherit01');?>">
						<p class="p-service-listProcess-txt">不動産の名義変更</p>
					</a>
				</li>
				<li>
					<a class="imghover is-matchHeightSP" href="<?php echo home_url('/about/#inherit02');?>">
						<p class="p-service-listProcess-txt"><span>預貯金等の解約・<br class="nopc">払戻手続き<br>
					株式等の名義変更</span></p>
				</a>
				</li>
				<li>
					<a class="imghover" href="<?php echo home_url('/about/#inherit03');?>">
						<p class="p-service-listProcess-txt">相続放棄</p>
					</a>
				</li>
				<li>
					<a class="imghover" href="<?php echo home_url('/about/#inherit04');?>">
						<p class="p-service-listProcess-txt">遺産分割</p>
					</a>
				</li>
				<li>
					<a class="imghover" href="<?php echo home_url('/about/#inherit05');?>">
						<p class="p-service-listProcess-txt">戸籍の収集</p>
					</a>
				</li>
				<li>
					<a class="imghover" href="<?php echo home_url('/about/#inherit06');?>">
						<p class="p-service-listProcess-txt">不動産売却</p>
					</a>
				</li>
			</ul>
		</div>
		<!-- SERVICE SECTION END -->

		<!-- SERVICE SECTION BEGIN -->
		<div class="p-service-section">
			<div class="p-titleH3-cover">
				<p class="p-titleH3-sub"><em>Service</em><span>02</span></p>
				<h3 class="p-titleH3">生前対策サポートプラン</h3>
			</div>

			<div class="p-service-section-2col clearfix">
				<div class="p-service-section-2col-left flL-pc">
					<p class="m-txt">生前対策サポートプランとは、将来生ずる相続や、老後の生活に対する不安を解消し、お客様の目的を達成するための最適な生前手続き(遺言、生前贈与、任意後見、民事信託など)をサポートさせていただくサービスです。</p>
					
					<div class="p-service-btn-cover clearfix">
						<p class="p-service-btn btn btn-ghost"><a href="<?php echo home_url('/about/support/');?>"><span>詳細はこちら</span></a></p>
					</div>
				</div>
				<div class="p-service-section-2col-right flR-pc">
					<p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_service_support.png" alt="生前対策サポートプラン"></p>
				</div>
			</div>

			<div class="p-titleH4-cover clearfix">
				<h4 class="p-titleH4 flL-pc">個別のお手続きについて</h4>
				<p class="p-titleH4-sub flR-pc">その他個別のお手続きに関してもご対応可能です。</p>
			</div>

			<ul class="p-service-listProcess clearfix">
				<li>
					<a class="imghover is-matchHeightSP" href="<?php echo home_url('/about/#before01');?>">
						<p class="p-service-listProcess-txt">遺言書の作成</p>
					</a>
				</li>
				<li>
					<a class="imghover is-matchHeightSP" href="<?php echo home_url('/about/#before02');?>">
						<p class="p-service-listProcess-txt">任意後見</p>
					</a>
				</li>
				<li>
					<a class="imghover" href="<?php echo home_url('/about/#before03');?>">
						<p class="p-service-listProcess-txt">民事信託<br>
					<span>（家族信託）</span></p>
				</a>
				</li>
			</ul>
		</div>
		<!-- SERVICE SECTION END -->
	</div>
</div>
<!-- SERVICE END -->

<!-- BANNER BEGIN -->
<div class="p-banner">
	<div class="l-content">
		<a class="imghover" href="<?php echo home_url('/about/diagnosis/');?>">
			<picture>
				<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_banner_pc.png">
				<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_banner_sp.png">
				<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_banner_pc.png" alt="最適プラン診断">
			</picture>
		</a>
	</div>
</div>
<!-- BANNER END -->

<!-- REASON BEGIN -->
<div class="p-reason">
	<div class="l-content">
		<p class="p-titleH2-sub">REASON</p>
		<h2 class="p-titleH2">リーガル・フェイスが<br class="nopc">選ばれる理由</h2>
		<ul class="p-reason-list clearfix">
			<li class="p-reason-list-item is-matchHeightPC">
				<div class="tac">
					<p class="p-reason-list-item-order">選ばれる理由<span>01</span></p>
				</div>
				<div class="p-reason-list-item-title-cover">
					<p class="p-reason-list-item-title is-matchHeightPC2">初回のご相談が無料！</p>
				</div>
				<p class="p-reason-list-item-img tac is-matchHeightPC3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_reason_item01.png" alt="初回のご相談が無料！"></p>
				<p class="m-txt">初めての方でも安心してご相談いただけます。</p>
			</li>
			<li class="p-reason-list-item is-matchHeightPC">
				<div class="tac">
					<p class="p-reason-list-item-order">選ばれる理由<span>02</span></p>
				</div>
				<div class="p-reason-list-item-title-cover">
					<p class="p-reason-list-item-title is-matchHeightPC2">安心の料金体系！</p>
				</div>
				<p class="p-reason-list-item-img tac is-matchHeightPC3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_reason_item02.png" alt="安心の料金体系！"></p>
				<p class="m-txt">ご面談時に料金体系を詳しくご説明するので、安心してサービスをご利用いただけます。</p>
			</li>
			<li class="p-reason-list-item is-matchHeightPC">
				<div class="tac">
					<p class="p-reason-list-item-order">選ばれる理由<span>03</span></p>
				</div>
				<div class="p-reason-list-item-title-cover">
					<p class="p-reason-list-item-title is-matchHeightPC2">土日対応</p>
				</div>
				<p class="p-reason-list-item-img tac is-matchHeightPC3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_reason_item03.png" alt="土日対応"></p>
				<p class="m-txt">平日に限らず、土日、祝日もお客様のご都合に合わせて対応します。</p>
			</li>
			<li class="p-reason-list-item is-matchHeightPC">
				<div class="tac">
					<p class="p-reason-list-item-order">選ばれる理由<span>04</span></p>
				</div>
				<div class="p-reason-list-item-title-cover">
					<p class="p-reason-list-item-title is-matchHeightPC2">司法書士<br>
					50名以上在籍！</p>
				</div>
				<p class="p-reason-list-item-img tac is-matchHeightPC3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_reason_item04.png" alt="司法書士の人数が50名以上在籍！"></p>
				<p class="m-txt">全国トップクラスの在籍人数で、迅速に対応します。</p>
			</li>
			<li class="p-reason-list-item is-matchHeightPC">
				<div class="tac">
					<p class="p-reason-list-item-order">選ばれる理由<span>05</span></p>
				</div>
				<div class="p-reason-list-item-title-cover">
					<p class="p-reason-list-item-title is-matchHeightPC2">安心の歴史と実績！</p>
				</div>
				<p class="p-reason-list-item-img tac is-matchHeightPC3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_reason_item05.png" alt="安心の歴史と実績！"></p>
				<p class="m-txt">事務所開設20年以上の積み重ねた実績で、安心のサービスを提供致します。</p>
			</li>
			<li class="p-reason-list-item is-matchHeightPC">
				<div class="tac">
					<p class="p-reason-list-item-order">選ばれる理由<span>06</span></p>
				</div>
				<div class="p-reason-list-item-title-cover">
					<p class="p-reason-list-item-title is-matchHeightPC2">新宿、名古屋、大阪、福岡などの主要都市で展開！</p>
				</div>
				<p class="p-reason-list-item-img tac is-matchHeightPC3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_reason_item06.png" alt="新宿、名古屋、大阪、福岡などの主要都市で展開！"></p>
				<p class="m-txt">各地に駅チカの事務所を構えているので、お客様の最寄りの事務所スタッフが迅速に対応します。</p>
			</li>
		</ul>
	</div>
</div>
<!-- REASON END -->

<!-- QA BEGIN -->
<div class="p-qa">
	<div class="l-content">
		<ul class="p-qa-list clearfix moveItem-defaultList">
			<li class="p-qa-list-item">
				<a href="<?php echo home_url('/case/');?>">
					<p class="p-qa-list-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_qa_item_01.png" alt="相談事例"></p>
					<p class="p-qa-list-item-title">相談事例</p>
					<p class="m-txt">実際にご相談いただいた事例を挙げて、どのように解決したかをご紹介します。</p>
					<div class="p-qa-btn-cover clearfix">
						<p class="p-qa-btn btn"><span>詳細はこちら</span></p>
					</div>
				</a>
			</li>
			<li class="p-qa-list-item">
				<a href="<?php echo home_url('/qa/');?>">
					<p class="p-qa-list-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_qa_item_02.png" alt="相続Q＆A"></p>
					<p class="p-qa-list-item-title">相続Q＆A</p>
					<p class="m-txt">相続に関するよくある疑問にお答えします。</p>
					<div class="p-qa-btn-cover clearfix">
						<p class="p-qa-btn btn"><span>詳細はこちら</span></p>
					</div>
				</a>
			</li>
			<li class="p-qa-list-item">
				<a href="<?php echo home_url('/voice/');?>">
					<p class="p-qa-list-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_qa_item_03.png" alt="お客様の声"></p>
					<p class="p-qa-list-item-title">お客様の声</p>
					<p class="m-txt">リーガル・フェイスにて各サービスをお受けいただいたお客様の声をご紹介します。</p>
					<div class="p-qa-btn-cover clearfix">
						<p class="p-qa-btn btn"><span>詳細はこちら</span></p>
					</div>
				</a>
			</li>
			<li class="p-qa-list-item">
				<a href="<?php echo home_url('/staff/');?>">
					<p class="p-qa-list-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_qa_item_04.png" alt="スタッフ紹介"></p>
					<p class="p-qa-list-item-title">スタッフ紹介</p>
					<p class="m-txt">リーガル・フェイスで働く優秀なスタッフをご紹介します。</p>
					<div class="p-qa-btn-cover clearfix">
						<p class="p-qa-btn btn"><span>詳細はこちら</span></p>
					</div>
				</a>
			</li>
		</ul>
	</div>
</div>
<!-- QA END -->

<!-- COLUMN BEGIN -->
<div class="p-column">
	<div class="l-content">
		<div class="p-column-inner">
			<h3 class="p-titleH3_2">リーガル・フェイスの<br class="nopc">士業コラム</h3>

			<?php
				$args = array(
					'post_type' => 'column',
					'posts_per_page' => 3,
				);
				$wp_query = new WP_Query( $args );
			?>

			<?php if($wp_query->have_posts() ) : ?>
			<ul class="p-column-list clearfix">
				<?php while ($wp_query->have_posts() ) :$wp_query->the_post(); ?>
				<li class="p-column-list-item">
					<?php
						$published_date = strtotime(get_the_date("Ymd"));
						$time = time();
						$datediff = $time - $published_date;

						$datediff = round($datediff / (60 * 60 * 24));

						if($datediff <= 31){
							$is_new = 'is-new';
						} else{
							$is_new = '';
						}

					?>
					<a class="imghover <?php echo $is_new; ?>" href="<?php the_permalink(); ?>">
						<p class="p-column-list-item-img">
							<?php $thumbnail = get_the_post_thumbnail(); ?>
							<?php if(!empty($thumbnail)) : ?>
								<?php the_post_thumbnail( 'full', array( 'alt' => get_the_title() ) );  ?>
							<?php else: ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/img_default.png" alt="No Image">
							<?php endif; ?>
						</p>
						<div class="p-column-list-item-tag-cover">
							<span class="p-column-list-item-date"><?php the_time('Y/m/d'); ?></span>
							<?php
								$terms = get_the_terms( get_the_ID(), 'column_tax' );
							?>
							<?php foreach( $terms as $term ): ?>
								<span class="m-tag fNotoR"><?php echo $term->name; ?></span>
							<?php endforeach; ?>
						</div>
						<p class="p-column-list-item-txt m-txt"><?php echo wp_trim_words( get_the_title(), 30, '...' );?></p>
					</a>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
				<p class="m-txt">記事がありません。</p>
			<?php endif; ?>

			<p class="p-column-list-link"><a href="<?php echo home_url('/column/') ?>"><span>一覧はこちら</span></a></p>
		</div>
	</div>
</div>
<!-- COLUMN END -->

<!-- SEMINAR BEGIN -->
<?php
	$today = date('Ymd');
	$args = array(
		'post_type' => 'seminar',
		'posts_per_page' => 1,
		'meta_key' => 'seminar_status',
		'meta_query'=> array(
			// SORT ARRAY
			array(
				'relation' => 'AND',
	            'status' => array(
	              'key' => 'seminar_status',
	              'compare' => '>',
	            ),
				'seminar_start' => array(
	              'key' => 'seminar_date_start',
	              'compare' => '>=',
	              'type' => 'date'
	            ),
			),
			// FUTURE POST ARRAY
			array(
				'relation' => 'OR',
	            array(
	              'key' => 'seminar_date_end',
	              'compare' => '>=',
	              'value' => $today,
	              'type' => 'date'
	            ),
	            array(
	              'key' => 'seminar_date_start',
	              'compare' => '>=',
	              'value' => $today,
	              'type' => 'date'
	            )
			),
        ),
		'orderby' => array(
		    'status' => 'ASC',
		    'seminar_start' => 'ASC',
		),
	);
	$wp_query = new WP_Query( $args );
?>
<?php if($wp_query->have_posts() ) : ?>
<div class="p-seminar">
	<div class="l-content">
		<div class="p-titleH3_2-cover"><h3 class="p-titleH3_2">開催セミナー情報</h3></div>
	</div>
	<ul class="m-seminar-list">
		<?php while ($wp_query->have_posts() ) :$wp_query->the_post(); ?>
		<li class="m-seminar-list-item">
			<a class="imghover clearfix" href="<?php the_permalink(); ?>">
				<?php 
					$seminar_status = get_field('seminar_status');
					$seminar_class = 'm-seminar-list-item-img-';
					if($seminar_status == 'accepting'){
						$seminar_class = $seminar_class.'accept';
					} elseif($seminar_status == 'reception_end'){
						$seminar_class = $seminar_class.'end';
					}
				?>
				<p class="m-seminar-list-item-img <?php echo $seminar_class; ?>">
					<?php $thumbnail = get_the_post_thumbnail(); ?>
					<?php if(!empty($thumbnail)) : ?>
						<?php the_post_thumbnail( 'full', array( 'alt' => get_the_title() ) );  ?>
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/img_default.png" alt="No Image">
					<?php endif; ?>
				</p>
				<div class="m-seminar-list-item-content">
					<p class="m-seminar-list-item-title"><?php the_title(); ?></p>

					<div class="m-seminar-list-item-table-cover">
						<table class="m-seminar-list-item-table">
							<tr>
								<th>開催日</th>
								<?php
									$week = array("日", "月", "火", "水", "木", "金", "土");

									$date_start = get_field('seminar_date_start');
									$date_startObj = new DateTime($date_start);
									$date_start_week = $week[(int)date_format($date_startObj,'w')];

									$date_end = get_field('seminar_date_end');

									$date_start = strtotime($date_start);
									$date_end = strtotime($date_end);

									$date_diff = round(($date_end - $date_start)/ (60 * 60 * 24));

								?>
								<td class="fNotoR">
									<?php echo $date_startObj->format('Y年m月d日').'('.$date_start_week.')'; ?><?php
										if(!empty($date_end && $date_end!=$date_start)){
											$date_mid = $date_startObj;
											// IF NEXT DATE HAS MONTH LARGER THAN PREVIOUS -> SHOW THE MONTH ONCE
											$month_start = (int)$date_mid->format('m');
											for($i = 0; $i < $date_diff; $i++){
												$date_mid = $date_mid->modify('+1 day');

												$month_current = (int)$date_mid->format('m');
												if($month_current != $month_start){
													$month_mid = $date_mid->format('m月');
													$month_start = $month_current;
												} else{
													$month_mid = '';
												}

												$date_mid_week = $week[(int)date_format($date_mid,'w')];
												echo '、'.$month_mid.$date_mid->format('d日').'('.$date_mid_week.')'; 
											}
										}
									?>
								</td>
							</tr>
							<tr>
								<th>時間</th>
								<td class="fNotoR">
									<?php if( have_rows('seminar_time') ): ?>
									<?php while ( have_rows('seminar_time') ) : the_row(); ?>
									<div class="m-seminar-list-item-time-cover">
										<span class="m-seminar-list-item-timeTitle"><?php the_sub_field('seminar_time_item'); ?></span>
										<span class="m-seminar-list-item-timeContent"><?php the_sub_field('seminar_time_detail'); ?></span>
									</div>
									<?php endwhile; ?>
									<?php endif; ?>
								</td>
							</tr>
							<tr>
								<th>会場</th>
								<td class="fNotoR"><?php the_field('seminar_place'); ?></td>
							</tr>
						</table>
					</div>
				</div>
			</a>
		</li>
		<?php endwhile; ?>
	</ul>
</div>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
<!-- SEMINAR END -->

<!-- ACCESS BEGIN -->
<div class="p-access">
	<div class="l-content">
		<div class="p-titleH3_2-cover"><h3 class="p-titleH3_2">交通アクセス</h3></div>
		<ul class="p-access-list clearfix">
			<li class="p-access-list-item clearfix">
				<p class="p-access-list-item-img">
					<a href="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_access_head.png" data-fancybox data-caption="">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_access_head.png" alt="本店">
					</a>
				</p>
				<div class="p-access-list-item-content">
					<p class="p-access-list-item-title">本店</p>
					<p class="p-access-list-item-txt">〒163-1504<br>
						東京都新宿区西新宿一丁目<br>
					6番1号新宿エルタワー4F</p>
					<p class="p-access-list-item-txt p-access-list-item-link"><a href="https://goo.gl/maps/Vpz449vB3NB2" target="_blank">Google Maps ></a></p>
					<p class="p-access-list-item-txt"><span>tel</span>03-5909-7560<br>
					<span>fax</span>03-3347-5321</p>
				</div>
			</li>
			<li class="p-access-list-item clearfix">
				<p class="p-access-list-item-img">
					<a href="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_access_yokohama.png" data-fancybox data-caption="">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_access_yokohama.png" alt="横浜支店">
					</a>
				</p>
				<div class="p-access-list-item-content">
					<p class="p-access-list-item-title">横浜支店</p>
					<p class="p-access-list-item-txt">〒220-0004<br>
					神奈川県横浜市西区北幸一丁目11番15号<br>
					横浜STビル12F</p>
					<p class="p-access-list-item-txt p-access-list-item-link"><a href="https://goo.gl/maps/k8k3aq91HsRV1iob7" target="_blank">Google Maps ></a></p>
					<p class="p-access-list-item-txt"><span>tel</span>045-628-9191<br>
					<span>fax</span>045-628-9183</p>
				</div>
			</li>


			<li class="p-access-list-item clearfix">
				<p class="p-access-list-item-img">
					<a href="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_access_nagoya.png" data-fancybox data-caption="">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_access_nagoya.png" alt="名古屋支店">
					</a>
				</p>
				<div class="p-access-list-item-content">
					<p class="p-access-list-item-title">名古屋支店</p>
					<p class="p-access-list-item-txt">〒460-0002<br>
						愛知県名古屋市中区丸の内<br>
					三丁目17番6号　ナカトウ丸の内ビル6F</p>
					<p class="p-access-list-item-txt p-access-list-item-link"><a href="https://www.google.com/maps/search/%E5%90%8D%E5%8F%A4%E5%B1%8B%E5%B8%82%E4%B8%AD%E5%8C%BA%E4%B8%B8%E3%81%AE%E5%86%85+%E4%B8%81%E7%9B%AE17%E7%95%AA6%E5%8F%B7+%E3%83%8A%E3%82%AB%E3%83%88%E3%82%A6%E4%B8%B8%E3%81%AE%E5%86%85%E3%83%93%E3%83%AB6F/@35.1753358,136.9034561,17z/data=!3m1!4b1" target="_blank">Google Maps ></a></p>
					<p class="p-access-list-item-txt"><span>tel</span>052-231-3766<br>
					<span>fax</span>052-231-3799</p>
				</div>
			</li>
			<li class="p-access-list-item clearfix">
				<p class="p-access-list-item-img">
					<a href="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_access_osaka.png" data-fancybox data-caption="">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_access_osaka.png" alt="大阪支店">
					</a>
				</p>
				<div class="p-access-list-item-content">
					<p class="p-access-list-item-title">大阪支店</p>
					<p class="p-access-list-item-txt">〒540-0012<br>
					大阪府大阪市中央区谷町二丁目3番4号<br>
					サンシャイン大手前ビル5F</p>
					<p class="p-access-list-item-txt p-access-list-item-link"><a href="https://goo.gl/maps/D7MN3gH5Wd27aTX79" target="_blank">Google Maps ></a></p>
					<p class="p-access-list-item-txt"><span>tel</span>06-6966-0266<br>
					<span>fax</span>06-6966-0267</p>
				</div>
			</li>
			<li class="p-access-list-item clearfix">
				<p class="p-access-list-item-img">
					<a href="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_access_fukuoka.png" data-fancybox data-caption="">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_access_fukuoka.png" alt="福岡支店">
					</a>
				</p>
				<div class="p-access-list-item-content">
					<p class="p-access-list-item-title">福岡支店</p>
					<p class="p-access-list-item-txt">〒810-0041<br>
						福岡県福岡市中央区大名二丁目<br>
					8番17号　伊藤久ビル7F-B </p>
					<p class="p-access-list-item-txt p-access-list-item-link"><a href="https://goo.gl/maps/Z4XYDFdCv5x" target="_blank">Google Maps ></a></p>
					<p class="p-access-list-item-txt"><span>tel</span>092-713-7270<br>
					<span>fax</span>092-713-7271</p>
				</div>
			</li>


		</ul>

	</div>
</div>
<!-- ACCESS END -->


<?php get_footer(); ?>