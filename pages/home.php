<?php
	include('../config.php');
	$title = 'Project FX';
	$page = 'home';

	include $path['ser'] . '/modules/mod-head/mod-head.html';
?>

	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<?php include $path['ser'] . '/modules/mod-header/mod-header.html'; ?>
				</div>
			</div>

			<?php include $path['ser'] . '/modules/mod-cuad/mod-cuad.html'; ?>

			<?php include $path['ser'] . '/modules/mod-footer/mod-footer.html'; ?>
		</div>
	</body>
</html>