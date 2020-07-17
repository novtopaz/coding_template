<?php
$mv_text = [
	'h1'=>'注意事項',
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
		<div class="l-sidenav nosp">
			<div class="l-sidenav-item">
				<p class="l-sidenav-title"><a href="#terms" class="l-linkMega is-pagelink">利用条件</a></p>
				<ul class="l-sidenav-list m-txt">
					<li><a href="#disclaimer" class="l-link l-link-underline is-pagelink">免責について</a></li>
					<li><a href="#copyright" class="l-link l-link-underline is-pagelink">著作権について</a></li>
					<li><a href="#linksite" class="l-link l-link-underline is-pagelink">リンクサイトについて</a></li>
					<li><a href="#link" class="l-link l-link-underline is-pagelink"><span>イワテックホームページへの</span><br>リンクについて</a></li>
					<li><a href="#cookie" class="l-link l-link-underline is-pagelink">Cookie(クッキー)について</a></li>
					<li><a href="#contact" class="l-link l-link-underline is-pagelink">お問合せメール</a></li>
					<li><a href="#law" class="l-link l-link-underline is-pagelink">準拠法について</a></li>
				</ul>
			</div>

			<div class="l-sidenav-item">
				<p class="l-sidenav-title"><a href="#privacy" class="l-linkMega is-pagelink">プライバシーポリシー</a></p>
				<ul class="l-sidenav-list m-txt">
					<li><a href="#collect" class="l-link l-link-underline is-pagelink">個人情報の収集について</a></li>
					<li><a href="#use" class="l-link l-link-underline is-pagelink">個人情報の利用について</a></li>
					<li><a href="#offer" class="l-link l-link-underline is-pagelink">個人情報の開示、提供について</a></li>
				</ul>
			</div>
		</div>
		<div id="sidenav-content" class="l-sidenav-content">
			<div class="l-sidenav-box">
				<p class="m-txt">株式会社イワテック(以下、「当社」)ウェブサイトのご利用にあたっては、以下の利用条件をよくお読み頂き、これらの利用条件に同意を得てから当社ウェブサイトをご利用頂くようお願い申し上げます。<br>なお、当社ウェブサイトをご利用頂く場合は、全ての利用条件にご同意頂いたものとさせて頂きますので、ご了承願います。<br>また、ご同意頂けない場合は、大変申し訳ございませんが、ご利用をお控え下さい。<br>なお当社は、当社ウェブサイトの利用条件を、必要に応じて予告なしに変更することがありますので、ご利用の際には最新の内容をご確認いただきますようお願い申し上げます。</p>
				<div class="p-content-item">
					<h2 id="terms" class="p-title l-anchorMega">利用条件</h2>
					<h3 id="disclaimer" class="p-sub l-anchor">免責について</h3>
					<p class="m-txt">当社ウェブサイトの掲載情報についてはその正確性を保つために万全を尽くすよう努力しておりますが、情報のすべてに関して保証をするものではなく、当社ウェブサイトのご利用に際して生じた直接・間接の損失、損害に対し、当社はいかなる責任も負いません。<br>
					また、当社ウェブサイトのご利用により生じたソフトウェア、ハードウェアの事故、不具合についても一切責任を負いません。</p>
			
					<h3 id="copyright" class="p-sub l-anchor">著作権について</h3>
					<p class="m-txt">当社ウェブサイトに掲載されている画像、文章、音声、ロゴマーク等すべての情報（以下、「コンテンツ」）の著作権は、株式会社イワテックに帰属しています。<br>
					ただし、当社以外の著作者が存在する場合は、その著作権は、各著作者に帰属しています。<br>
					私的利用やその他著作権法で認められる範囲を超えて、コンテンツの一部又は全部をそのまま或いは改変して、他のウェブサイトや印刷媒体に無断で複製・転載・公衆送信・頒布・販売することは一切禁止します。<br>
					当社の許諾を得てコンテンツを利用等する場合、当社指定の著作権表示（Copyright © Since 2011-  Iwatec All Rights Reserved.）を行ってください。当社の事前の了承なく、著作権表示を変更、削除することはできません。<br>
					また、ロゴの使用は認めておりませんので、ご了承ください。</p>
			
					<h3 id="linksite" class="p-sub l-anchor">リンクサイトについて</h3>
					<p class="m-txt">当社ウェブサイトから、または当社ウェブサイトへリンクを張っている第三者のウェブサイトは、それぞれの責任において運営・管理されているものであり、当社はそのウェブサイトの内容、およびこれらの利用によって発生した損害については、一切の責任を負いません。</p>
			
					<h3 id="link" class="p-sub l-anchor">イワテックホームページへのリンクについて</h3>
					<p class="m-txt">当社ウェブサイトは、下記のリンク設定条件に従っていただければ、営利・非営利・インターネット・イントラネットを問わず、リンク （雑誌・書籍の出版物等への当社ウェブサイトURLの掲載も含みます）することができます。尚、リンクの際には、次の内容を「お問い合わせフォーム」にてご一報いただくようお願いいたします。</p>
					<ul class="m-sectionSmall">
						<li class="m-indent2">●　ご依頼元：会社名/ご住所/電話番号/所属/ご担当者氏名/メールアドレス。</li>
						<li class="m-indent2">●　リンク元のウェブサイト・アドレス。</li>
					</ul>
					<p class="m-txt m-sectionSmall">＜リンク設定条件＞</p>
					<ol class="m-sectionSmall">
						<li class="m-indent">1. リンク先のウェブサイト・アドレスは当社ウェブサイトのトップページ（https://www.iwatec.co.jp/）へお願いします。トップページ以外のページについては、当社の都合によりURLを変更する場合がございます。 リンク内容の保証はできませんので、予めご了承ください。</li>
						<li class="m-indent">2. リンク先の表記名は「株式会社イワテック」（テキスト表記）でお願いします。</li>
						<li class="m-indent">3. 以下に該当する内容を含むウェブサイトからのリンクは、固くお断りいたします。
							<ul class="m-sectionSmall pl20">
								<li class="m-indent2">●　当社または他社(者)・他団体を誹謗中傷したり、信用失墜を意図する内容を含んだウェブサイト</li>
								<li class="m-indent2">●　アダルトコンテンツを含んだウェブサイト</li>
								<li class="m-indent2">●　公序良俗に反する内容を含んだウェブサイト</li>
								<li class="m-indent2">●　違法・または違法な可能性を有するコンテンツや、違法・または違法な可能性を有する活動に関するウェブサイト</li>
								<li class="m-indent2">●　リンク元やリンク元のウェブサイト、またはリンク元が提供するサービスまたは製品を当社が認知・保証・支持または推奨していると暗示させる行為、またはその恐れのあるウェブサイト</li>
								<li class="m-indent2">●　フレーム内で当社ウェブサイトが表示されるなど、当社コンテンツであることが不明確となり、第三者に誤解を与える可能性があるウェブサイト</li>
							</ul>
						</li>
						<li class="m-indent m-sectionSmall">4. 当社ウェブサイトに掲載している記事内容の無断流用は認めておりません。当社の許可を得て掲載される場合は、出典元として以下の記述を併記してください。</li>
					</ol>
					<p class="m-txt m-sectionSmall">＜出典元＞ </p>
					<p class="m-txt">データ提供元：株式会社イワテック<br>
					掲載元URL： https://www.iwatec.co.jp<br>
					転載日： 201*.**.**
					</p>
			
					<h3 id="cookie" class="p-sub l-anchor">Cookie(クッキー)について</h3>
					<p class="m-txt">当社ウェブサイトにはCookieを使用しています。<br>
					Cookieを使用することによって集約されるお客様に関する情報（年齢層、性別など）には、お客様のプライバシーを侵害するような情報は含まれておりません。この情報は、お客様によりよいサービスを提供するための参考資料としてのみ利用させていただきます。<br>
					Cookieの受取りを拒否されるお客様はご使用のブラウザの環境設定を変更することにより、Cookieの機能を無効にすることができます。</p>
			
					<h3 id="contact" class="p-sub l-anchor">お問合せメール</h3>
					<p class="m-txt">当社ウェブサイトに関するお問い合わせは、「<a href="../contact/" target="_blank">お問い合わせフォーム</a>」からご連絡ください。<br>
					ご連絡頂いたメールには誠意をもって対処いたしますが、全てにはお返事を差し上げられない場合があります。<br>
					予めご了承頂けます様お願い申し上げます。
					</p>
			
					<h3 id="law" class="p-sub l-anchor">準拠法について</h3>
					<p class="m-txt">当社ウェブサイトのご利用ならびに本利用条件の解釈及び適用に関しては、他に別段の定めがない限り、日本国法に準拠するものとします。</p>
				</div>

				<div class="p-content-item">
					<h2 id="privacy" class="p-title l-anchorMega">プライバシーポリシー</h2>
					<p class="m-txt m-sectionSmall">当社は、当社ウェブサイト上でお客様からご提供された個人情報を適切に管理することは事業活動の基本であるとともに社会的責務であると認識しており、プライバシーの保護に努めております。<br>
					お客様の個人情報の取り扱いについて下記に従って適切に行動いたします。</p>		
					
					<h3 id="collect" class="p-sub l-anchor">個人情報の収集について</h3>
					<p>お客様が当社ウェブサイトを閲覧する場合、通常、住所、氏名、電子メールアドレス等の個人情報をご提供いただく必要はありませんが、当社はお客様個人を特定できる情報 (個人情報)や、お客様にご連絡を差し上げるための情報が必要な場合に、情報の提供をお願いすることがあります。<br>
					また、当社のウェブサーバーは、お客様がアクセスされたパソコンのIPアドレス、ドメイン名、ブラウザ、OS、アクセス回数等を自動的に記録します。<br>
					これらの情報は個人を特定できるものではなく、お客様全体のアクセス状況の統計を集めるために利用します。<br>
					上記以外の用途で個人情報の提供をお願いする場合は、その利用目的及び利用範囲を明確にご説明し、必要最小限の個人情報に限らせて頂きます。</p>
							
					<h3 id="use" class="p-sub l-anchor">個人情報の利用について</h3>
					<p>当社では、お客様の個人情報を以下の利用目的の範囲で利用します。</p>
					<ol class="m-sectionSmall">
						<li class="m-indent">1. 業務委託先に当社ウェブサイトの運営等を委託する場合</li>
						<li class="m-indent">2. お客様とのお取引、商談等を行う場合</li>
						<li class="m-indent">3. お客様からのお問合せまたはご依頼等に対応する場合</li>
					</ol>
								
					<h3 id="offer" class="p-sub l-anchor">個人情報の開示、提供について</h3>
					<p>当社は、個人情報を適切に管理し、下記のいずれかに該当する場合を除き、第三者に開示または提供することはありません。</p>
					<ol class="m-sectionSmall">
						<li class="m-indent">1. あらかじめお客様の同意をいただいている場合</li>
						<li class="m-indent">2. 業務委託先などに対し、当社が委託した業務以外での個人情報の利用がないことを契約している場合</li>
						<li class="m-indent">3. 法令等に基づき要請された場合または公的機関（裁判所、警察等）から開示を求められた場合</li>
						<li class="m-indent">4. 当社および当社ウェブサイトの権利もしくは財産を保護・防御する場合</li>
						<li class="m-indent">5. 人命、個人の財産等の保護のために必要と判断される場合であって、お客様の同意を頂くことが困難な場合</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>
*/ ?>