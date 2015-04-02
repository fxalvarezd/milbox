<?php
	include('../config.php');
	$title = 'Project FX';
	$page = 'home';

	include $path['ser'] . '/modules/mod-head/mod-head.html';
?>

	<body>

		<?php include $path['ser'] . '/modules/mod-header/mod-header.html'; ?>

		<?php include $path['ser'] . '/modules/mod-cuad/mod-cuad.html'; ?>

		<?php include $path['ser'] . '/modules/mod-footer/mod-footer.html'; ?>

		<script src="../js/vendor/jquery.js"></script>
		<script src="../js/foundation.min.js"></script>
		<script src="<?php echo $path['web']; ?>/utility/js_loader.php?page=<?php echo $page ?>"></script>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>