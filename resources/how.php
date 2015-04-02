<?php
include('../config.php');

$cssArray = array(
	$path['web'].'/modules/mod-header/mod-header.css',
	$path['web'].'/modules/mod-footer/mod-footer.css',
	$path['web'].'/modules/mod-how-works/mod-how-works.css'
);

$jsArray = array(

);

return array('css' => $cssArray, 'js' => $jsArray);