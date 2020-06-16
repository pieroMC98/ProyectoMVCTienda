<h1>Crear producto</h1>
<form action="<?= root ?>producto/save" method="post">

	<label for="nombre">Nombre:</label>
	<input type="text" id="nombre" name="nombre">

	<label for="brief">Descripcion:</label>
	<textarea id="brief" name="brief" cols="30" rows="10"></textarea>

	<label for="stock">Stock:</label>
	<input type="number" id="stock" name="stock">

	<label for="categoria">Categoria:</label>
	<?php $categoria = Utils::showCategorias() ?>
	<select name="categoria" id="categoria">
		<?php while ($i = $categoria->fetch_object()) : ?>
			<option value="<?= $i->id ?>">
				<?= $i->nombre ?>
			</option>
		<?php endwhile ?>
	</select>
	<label for="img">Imagen:</label>
	<input type="file" name="img" id="img">
	<input type="submit" value="Crear">
</form>