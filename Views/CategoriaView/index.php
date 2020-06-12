<h1>Gestionar las categorias</h1>
<a href="<?= root ?>categoria/crear" class="button-small button">Crear Categoria</a>

<table border=1>
	<tr>
		<th>Nombre:</th>
		<th>ID:</th>
	</tr>
	<?php while ($cat = $link->fetch_object()) : ?>
		<tr>
			<td><?= $cat->nombre; ?></td>
			<td><?= $cat->id; ?></td>
		</tr>
	<?php endwhile; ?>
</table>