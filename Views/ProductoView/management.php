<h1>Administrar productos</h1>

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