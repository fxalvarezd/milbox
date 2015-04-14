<?php
	include('../config.php');
	$title = 'Project FX - Results';
	$page = 'results';

	include $path['ser'] . '/modules/mod-head/mod-head.html';
?>
	<body>
		<?php include $path['ser'] . '/modules/mod-header/mod-header.html'; ?>

		<?php include $path['ser'] . '/modules/mod-results/mod-results.html'; ?>

		<?php include $path['ser'] . '/modules/mod-footer/mod-footer.html'; ?>
	</body>
</html>