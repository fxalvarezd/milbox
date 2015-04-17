<?php
	include('../config.php');
	$title = 'Project FX - Account';
	$page = 'account';

	include $path['ser'] . '/modules/mod-head/mod-head.html';
?>
	<body>
		<?php include $path['ser'] . '/modules/mod-header/mod-header.html'; ?>

		<?php include $path['ser'] . '/modules/mod-account/mod-account.html'; ?>

		<?php include $path['ser'] . '/modules/mod-footer/mod-footer.html'; ?>
	</body>
</html>