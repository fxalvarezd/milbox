<?php
// First of all send css header
header("Content-type: text/css");

$file = __DIR__.'/../resources/'.$_GET['page'].'.php';

// Prevent a notice
$css_content = '';

if(file_exists($file)) {
	$assets = include $file;
	// Loop the css Array
	foreach ($assets['css'] as $css_file) {

		// Load the content of the css file 
		$css_content .= file_get_contents($css_file);
	}
}

// remove comments
$css_content = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css_content);
// remove tabs, spaces, newlines, etc.
$css_content = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css_content);

// print the css content
echo $css_content;
?>