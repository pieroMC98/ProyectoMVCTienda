<h1>Administrar productos</h1>
<?php if (isset($_SESSION['newProduct'])) : ?>
	<?php if ($_SESSION['newProduct'] == true) : ?>
		<h2>Producto añadido!</h2>
	<?php else : ?>
		<h2>Fallo en añadir producto</h2>
	<?php endif; ?>
	<?php Utils::deleteSession('newProduct'); ?>
<?php endif; ?>

<a href="<?= root ?>producto/crear" class="button-small">Crear Producto</a>
<table class="categoria">
	<tr>
		<th>Nombre:</th>
		<th>ID:</th>
		<th>Precio:</th>
		<th>Stock:</th>
	</tr>
	<?php while (($cat = $link->fetch_object()) == true) : ?>
		<tr>
			<td><?= $cat->nombre; ?></td>
			<td><?= $cat->id; ?></td>
			<td><?= $cat->stock; ?></td>
			<td><?= $cat->fecha; ?></td>
		</tr>
	<?php endwhile; ?>
</table>