<?php
$url = root . 'producto/';
$object = isset($product) && is_object($product);

if (isset($edit) && $edit == true && isset($product) && is_object($product)) :
	$url .= 'update&id=' . $product->id;
?>
	<h1>Editar producto</h1>
<?php else :
	$url .= 'save';
?>
	<h1>Crear producto</h1>
<?php endif ?>

<form action="<?= $url ?>" method="post" enctype="multipart/form-data">
	<label for="nombre">Nombre:</label>
	<input type="text" id="nombre" name="nombre" value="<?= $object ? $product->nombre : '' ?>">

	<label for="brief">Descripcion:</label>
	<textarea id="brief" name="brief" cols="30" rows="10" value="<?= $object ? $product->brief : '' ?>"></textarea>

	<label for="stock">Stock:</label>
	<input type="number" id="stock" name="stock" value="<?= $object ? $product->stock : '' ?>">

	<label for="price">Precio:</label>
	<input type="number" id="price" name="price" value="<?= $object ? $product->price : '' ?>">

	<label for="imagen">Imagen:</label>
	<?php
	if ($object && !empty($product->imagen)) : ?>
		<img class=thumbs src="<?= root ?>uploads/image/<?= $product->imagen ?>" />
	<?php endif ?>
	<input type="file" name="imagen" id="imagen">

	<label for="categoria">Categoria:</label>
	<?php $categoria = Utils::showCategorias() ?>
	<select name="categoria" id="categoria">
		<?php while ($i = $categoria->fetch_object()) : ?>
			<option value="<?= $i->id ?>" <?= $object && $i->id == $product->categoria_id ? 'select' : '' ?>>
				<?= $i->nombre ?>
			</option>
		<?php endwhile ?>
	</select>
	<input type="submit" value="<?= $object ? 'Editar' : 'Crear' ?>">
</form>