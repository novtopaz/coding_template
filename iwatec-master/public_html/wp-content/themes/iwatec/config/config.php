<?php
$assets_path = get_template_directory_uri() . '/assets';
define('ASSETS_PATH', $assets_path);

function getPicture($name, $extension, $path, $alt){
	echo 
	'<picture>
		<source media="(min-width:768px)" srcset="'.ASSETS_PATH.'/images/'.$path.'/'.$name.'_pc.'.$extension.'">
		<source media="(max-width:767px)" srcset="'.ASSETS_PATH.'/images/'.$path.'/'.$name.'_sp.'.$extension.'">
		<img class="imgswitch" src="'.ASSETS_PATH.'/images/'.$path.'/'.$name.'_pc.'.$extension.'" alt="'.$alt.'">
	</picture>';
}





