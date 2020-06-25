<h1>Crear producto</h1>
<form action="<?= root ?>producto/save" method="post" enctype="multipart/form-data">

	<label for="nombre">Nombre:</label>
	<input type="text" id="nombre" name="nombre">

	<label for="brief">Descripcion:</label>
	<textarea id="brief" name="brief" cols="30" rows="10"></textarea>

	<label for="stock">Stock:</label>
	<input type="number" id="stock" name="stock">

	<label for="price">Precio:</label>
	<input type="number" id="price" name="price">

	<label for="imagen">Imagen:</label>
	<input type="file" name="imagen" id="imagen">
	
	<label for="categoria">Categoria:</label>
	<?php $categoria = Utils::showCategorias() ?>
	<select name="categoria" id="categoria">
		<?php while ($i = $categoria->fetch_object()) : ?>
			<option value="<?= $i->id ?>">
				<?= $i->nombre ?>
			</option>
		<?php endwhile ?>
	</select>
	<input type="submit" value="Crear">
</form>