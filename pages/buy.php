<?php
	include('../config.php');
	$title = 'Project FX - Buy Tickets';
	$page = 'buy';

	include $path['ser'] . '/modules/mod-head/mod-head.html';
?>
	<body>
		<?php include $path['ser'] . '/modules/mod-header/mod-header.html'; ?>

		<?php include $path['ser'] . '/modules/mod-buy/mod-buy.html'; ?>

		<?php include $path['ser'] . '/modules/mod-footer/mod-footer.html'; ?>
	</body>
</html>