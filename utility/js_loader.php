<?php
// First of all send js header
header("Content-type: application/javascript");

$file = __DIR__.'/../resources/'.$_GET['page'].'.php';

// Prevent a notice
$js_content = '';

if(file_exists($file)) {
	$assets = include $file;
	// Loop the js Array
	foreach ($assets['js'] as $js_file) {

		// Load the content of the js file 
		$js_content .= file_get_contents($js_file);
	}
}

// remove comments
$js_content = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $js_content);
// remove tabs, spaces, newlines, etc.
$js_content = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $js_content);

// print the js content
echo $js_content;
?>