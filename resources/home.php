<?php
include('../config.php');

$cssArray = array(
	$path['web'].'/modules/mod-header/mod-header.css',
	$path['web'].'/modules/mod-footer/mod-footer.css',
	$path['web'].'/modules/mod-purchase/mod-purchase.css',
	$path['web'].'/modules/mod-current-round/mod-current-round.css',
	$path['web'].'/modules/mod-last-round/mod-last-round.css',
	$path['web'].'/modules/mod-previous-rounds/mod-previous-rounds.css'
);

$jsArray = array(

);

return array('css' => $cssArray, 'js' => $jsArray);