/* viewport切り替え（タブレット）
---------------------------------------------------------------------------- */
var tb_view = 'width=device-width, initial-scale=0.5';

if(navigator.userAgent.indexOf('iPad') > 0 || (navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') == -1) || navigator.userAgent.indexOf('A1_07') > 0 || navigator.userAgent.indexOf('SC-01C') > 0){
	document.querySelector('meta[name="viewport"]').setAttribute('content', tb_view);
}