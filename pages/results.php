<?php
	include('../config.php');
	$title = 'Project FX - Results';
	$page = 'results';

	include $path['ser'] . '/modules/mod-head/mod-head.html';
?>
	<body>
		<?php include $path['ser'] . '/modules/mod-header/mod-header.html'; ?>

		<div class="row">
			<div class="small-12 columns">
				<?php include $path['ser'] . '/modules/mod-results/mod-results.html'; ?>
			</div>
		</div>

		<?php include $path['ser'] . '/modules/mod-footer/mod-footer.html'; ?>

	</body>
</html>