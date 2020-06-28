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
		<th>Action</th>
	</tr>
	<?php while (($prod = $link->fetch_object()) == true) : ?>
		<tr>
			<td><?= $prod->nombre; ?></td>
			<td><?= $prod->id; ?></td>
			<td><?= $prod->stock; ?></td>
			<td><?= $prod->fecha; ?></td>
			<td>
				<a href="<?= root ?>producto/delete&id=<?= $prod->id ?>" class="button-small">Eliminar</a>
				<a href="<?= root ?>producto/edit&id=<?= $prod->id ?>" class="button-small">Editar</a>
			</td>
		</tr>
	<?php endwhile; ?>
</table>