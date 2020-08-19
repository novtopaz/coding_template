<div class="m-mv">
	<p class="m-mv-img">
		<picture>
			<source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/about/mv_pc.png">
			<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/about/mv_sp.png">
			<img class="imgswitch" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/mv_pc.png" alt="PLAN 最適プラン診断">
		</picture>
	</p>
	<div class="m-mv-content">
		<div class="m-mv-title-cover">
			<span class="m-mv-sub">PLAN</span>
			<h1 class="m-mv-title tac">最適プラン診断</h1>
		</div>
	</div>
</div>
<!-- .l-topicPath -->
<?php get_template_part( '/include/breadcrumb' ); // パンくず ?>
<!-- /.l-topicPath -->

<div class="l-content">
	<section class="sec-service-catch"><div class="area-contents">
		<h3 class="tit-catch ff-mincho">最適プラン診断</h3>
		<p class="txt">「何から始めれば？」「誰に頼めばいいの？」といった、相続の「？」は<br>リーガル・フェイス グループにお任せください。<br>いくつかの質問にお答えいただき、お客さまにとって最適なサービス・プランを導き出します。</p>
		<div class="sec-diagnosis">
		<script type="text/javascript">
		function gopage(){
			for(var i=0; i<document.forms[0].question.length; i++){
				if(document.forms[0].question[i].checked == true){
					url = document.forms[0].question[i].value;
					location.href = url;
				}
			}
		}
		</script>
			<form>
			<div class="sec-diagnosis-in">
				<h4 class="ff-mincho"><span class="ff-crimson">Q1</span>すでに相続が開始していますか？</h4>
				<p class="ff-mincho">YESかNOかを選択してください。</p>
				<div class="ff-crimson">
					<input type="radio" name="question" value="<?php echo esc_url( home_url( '/' ) ); ?>about/diagnosis/question1/#a-question" id="radio01" checked="checked"><label for="radio01" class="radio radio-yes">YES</label>
					<input type="radio" name="question" value="<?php echo esc_url( home_url( '/' ) ); ?>about/diagnosis/answer1/#a-question" id="radio02"><label for="radio02" class="radio radio-no">NO</label>
				</div>
			</div>
			<div class="area-btn">
				<div class="btn-next"><input type="button" value="次の質問へ" class="btn btn-bg-red btn-size-240" onclick="gopage()"></div>
			</div>
			</form>
		</div>
	</div></section><!-- / .sec-service-catch -->
	
</div>

