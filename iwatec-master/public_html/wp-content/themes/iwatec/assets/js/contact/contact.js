/* サンプル：チェックしたら入力ボックス入力可能
---------------------------------------------------------------------------- */
var check_box_arr = ['#check07', '#check07_2'];
function check_disabled(arg){
	for( var i = 0; i < arg.length; i++ ){
		if( $(arg[i]).prop('checked') ){
			$(arg[i]+':checked').parent().siblings('.p-check-input').prop('disabled', false);
		} else {
			$(arg[i]).parent().siblings('.p-check-input').prop('disabled', true);
		}
	}
}

$(window).load(function(){
	check_disabled(check_box_arr);
});
$(document).on('change', 'input[type="checkbox"]', function(){
	check_disabled(check_box_arr);
});


/* 高さ統一
---------------------------------------------------------------------------- */
$('.is-matchHeight').matchHeight();


/* バリデート
---------------------------------------------------------------------------- */
jQuery("#contactform").validationEngine('attach', {
	promptPosition:"topLeft",
	showArrow: false,
	showArrowOnRadioAndCheckbox: false,
});


/* フリガナ変換
---------------------------------------------------------------------------- */
$.fn.autoKana('#name', '#name_kana', {katakana:true});
$.fn.autoKana('#first_name', '#first_name_kana', {katakana:true});
$.fn.autoKana('#last_name', '#last_name_kana', {katakana:true});


/* 全角英数字を半角英数字へ
---------------------------------------------------------------------------- */
$(".is-character-change-01").blur(function() {
	charactersChange($(this));
});
charactersChange = function(ele) {
	var val = ele.val();
	var han = val.replace(/[Ａ-Ｚａ-ｚ０-９]/g, function(s) {
		return String.fromCharCode(s.charCodeAt(0) - 0xFEE0)
	});

	if (val.match(/[Ａ-Ｚａ-ｚ０-９]/g)) {
		$(ele).val(han);
	}
}


/* 半角文字を全角文字へ
---------------------------------------------------------------------------- */
$(".is-character-change-02").change(function() {
	var str = $(this).val();
	str = str.replace(/[A-Za-z0-9-!"#$%&'()=<>,.?_\[\]{}@^~\\]/g, function(s) {
		return String.fromCharCode(s.charCodeAt(0) + 65248);
	});
	$(this).val(str);
}).change();


/* 文字変換（カナ、ハイフン）
---------------------------------------------------------------------------- */
;
(function($) {
	$.fn.tgConvertString = function(options) {

		init(); // 文字配列呼び出し

		$(".is-character-change-02").each(function() {
			$(this).change(function() {
				var str = $(this).val();
				str = hanKata2zenKata(str);
				$(this).val(str);
			});
		})

	}
})(jQuery);

// 半角カタカナ→全角カタカナ
function hanKata2zenKata(str) {
	for (i = 0; i <= 90; i++) {
		while (str.indexOf(hanKata[i]) >= 0) {
			str = str.replace(hanKata[i], zenKata[i]);
		}
	}
	return str;
}

// 対象記号→全角マイナス
function converthyphen(str) {
	for (i = 0; i <= 40; i++) {
		while (str.indexOf(hyphen[i]) >= 0) {
			str = str.replace(hyphen[i], zenhyphen[i]);
		}
	}
	return str;
}

// 文字配列作成
function init() {
	hanKata = new Array(
		"ｶﾞ", "ｷﾞ", "ｸﾞ", "ｹﾞ", "ｺﾞ", "ｻﾞ", "ｼﾞ", "ｽﾞ", "ｾﾞ", "ｿﾞ",
		"ﾀﾞ", "ﾁﾞ", "ﾂﾞ", "ﾃﾞ", "ﾄﾞ", "ﾊﾞ", "ﾊﾟ", "ﾋﾞ", "ﾋﾟ", "ﾌﾞ",
		"ﾌﾟ", "ﾍﾞ", "ﾍﾟ", "ﾎﾞ", "ﾎﾟ", "ｳﾞ", "ｧ", "ｱ", "ｨ", "ｲ",
		"ｩ", "ｳ", "ｪ", "ｴ", "ｫ", "ｵ", "ｶ", "ｷ", "ｸ", "ｹ",
		"ｺ", "ｻ", "ｼ", "ｽ", "ｾ", "ｿ", "ﾀ", "ﾁ", "ｯ", "ﾂ",
		"ﾃ", "ﾄ", "ﾅ", "ﾆ", "ﾇ", "ﾈ", "ﾉ", "ﾊ", "ﾋ", "ﾌ",
		"ﾍ", "ﾎ", "ﾏ", "ﾐ", "ﾑ", "ﾒ", "ﾓ", "ｬ", "ﾔ", "ｭ",
		"ﾕ", "ｮ", "ﾖ", "ﾗ", "ﾘ", "ﾙ", "ﾚ", "ﾛ", "ﾜ", "ｳｨ",
		"ｳｪ", "ｦ", "ﾝ", "ｰ", "｡", "｢", "｣", "､", "･", "ﾞ",
		"ﾟ"
	);

	zenKata = new Array(
		"ガ", "ギ", "グ", "ゲ", "ゴ", "ザ", "ジ", "ズ", "ゼ", "ゾ",
		"ダ", "ヂ", "ヅ", "デ", "ド", "バ", "パ", "ビ", "ピ", "ブ",
		"プ", "ベ", "ペ", "ボ", "ポ", "ヴ", "ァ", "ア", "ィ", "イ",
		"ゥ", "ウ", "ェ", "エ", "ォ", "オ", "カ", "キ", "ク", "ケ",
		"コ", "サ", "シ", "ス", "セ", "ソ", "タ", "チ", "ッ", "ツ",
		"テ", "ト", "ナ", "ニ", "ヌ", "ネ", "ノ", "ハ", "ヒ", "フ",
		"ヘ", "ホ", "マ", "ミ", "ム", "メ", "モ", "ャ", "ヤ", "ュ",
		"ユ", "ョ", "ヨ", "ラ", "リ", "ル", "レ", "ロ", "ワ", "ヰ",
		"ヱ", "ヲ", "ン", "ー", "。", "「", "」", "、", "・", "゛",
		"゜"
	);

	hyphen = new Array(
		"ー", "ｰ", "‐", "-", "―"
	);

	zenhyphen = new Array(
		"－", "－", "－", "－"
	);
}

jQuery(function() {
	$(this).tgConvertString();
});


/* 入力時、入力後の背景色変更
---------------------------------------------------------------------------- */
var $elm = $('.is-must-box input[type="text"],.is-must-box input[type="email"],.is-must-box select,.is-must-box textarea');
$elm.on('blur change', function() {
	if (this.value == "") {
		$(this).css("background-color", "#fcffd1");
	} else {
		$(this).css("background-color", "#fff");
	}
});


// ローマ字入力処理
var nameInput = $('#name');
var nameKanaInput = $('#name_kana');
var regex = new RegExp(/^[A-Za-z\s]+$/);

nameInput.keyup(function(event) {
	var nameInputVal = nameInput.val();
	if(nameInputVal == '' || regex.test(nameInputVal)){
		nameKanaInput.val(nameInputVal);
	}
});


// 個人／法人分岐
var customerBtn = $(".customer-type");
var corporationItem = $('.corporation-item');

customerBtn.click(function() {
	var customerType = $(this).attr('customer-type');
	if(customerType == 'personal'){
		corporationItem.hide();
	}
	else{
		corporationItem.show();
	}
})