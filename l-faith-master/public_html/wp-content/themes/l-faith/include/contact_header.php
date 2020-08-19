<body id="pagetop">

<header class="l-header clearfix">
	<p class="l-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/img_logo.png" alt="Legal faith"></p>
</header>
<div class="l-pagebody">
	<div class="l-content">

		<?php
		switch ($form_type) {
			case 'contact':
				$h1 = 'お問い合わせ';
				$h1_sub = 'CONTACT';
				break;
			case 'entry':
				$h1 = 'エントリーフォーム';
				$h1_sub = 'ENTRY FORM';
				break;
			default:
		}
		?>
		<div class="l-h1-wrap">
			<h1 class="l-h1"><?php echo $h1; ?></h1>
			<p class="l-h1-sub"><?php echo $h1_sub; ?></p>
		</div><!--l-h1-wrap-->

		<div class="l-main-contents">