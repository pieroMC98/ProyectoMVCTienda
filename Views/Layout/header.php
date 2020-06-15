<!--header-->
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- <link rel="stylesheet" href="../assets/styles.css" /> -->
	<link rel="stylesheet" href="<?= root ?>assets/styles.css" />

	<title>Proyecto tienda</title>
</head>

<body>
	<div class="container">
		<!-- cabecera -->
		<header id="header">
			<div id="logo">
				<img src="<?= root ?>assets/camiseta.png" alt="logo" />
				<a href="index.php">Tienda de Camisetas</a>
			</div>
		</header>
		<!-- menu -->
		<?php $categoria = Utils::showCategorias() ?>
		<nav id="menu">
			<ul>
				<li><a href="">Inicio</a></li>
				<?php while ($cat = $categoria->fetch_object()) : ?>
					<li><a href=""><?= $cat->nombre ?></a></li>
				<?php endwhile ?>
			</ul>
		</nav>
		<div class="content">
			<!--!header-->