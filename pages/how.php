<?php
	include('../config.php');
	$title = 'Project FX - How It Works';
	$page = 'how';

	include $path['ser'] . '/modules/mod-head/mod-head.html';
?>
	<body>
		<?php include $path['ser'] . '/modules/mod-header/mod-header.html'; ?>

		<div class="row">
			<div class="small-12 columns">
				<?php include $path['ser'] . '/modules/mod-how-works/mod-how-works.html'; ?>
			</div>
		</div>

		<?php include $path['ser'] . '/modules/mod-footer/mod-footer.html'; ?>

	</body>
</html>