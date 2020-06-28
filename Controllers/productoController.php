<?php
require_once 'Models/producto.php';
class productoController
{
	public function index()
	{
		require_once 'Views/ProductoView/destacados.php';
	}

	function management()
	{
		Utils::isAdmin();
		$productos = new producto();
		$link = $productos->getAll();
		require_once 'Views/ProductoView/management.php';
	}
	function crear()
	{
		Utils::isAdmin();
		require_once 'Views/ProductoView/crear.php';
	}

	function save()
	{
		if (isset($_POST)) {
			$producto = new producto();
			if (($_POST['nombre'] && $_POST['brief'] && $_POST['price'] && $_POST['categoria'])) {
				$producto->setNombre($_POST['nombre']);
				$producto->setBrief($_POST['brief']);
				$producto->setPrice($_POST['price']);
				$producto->setCID($_POST['categoria']);
				$producto->setStock($_POST['stock']);

				if ($_FILES['imagen']) {
					$file = $_FILES['imagen'];
					$file_name = $file['name'];
					$mimetype = $file['type'];
					$ruta = realpath(dirname('./'));
					$imagePath = $ruta . '/uploads/image';

					if ($mimetype == 'image/png' || $mimetype == 'image/jpg' || $mimetype == 'image/jpeg' || $mimetype == 'image/gif') {
						if (!is_dir($imagePath)) mkdir($imagePath, 0644, true);
						move_uploaded_file($_FILES['imagen']['tmp_name'], 'uploads/image/' . $file_name);
						$producto->setImg($file_name);
					}
				}
				$_SESSION['newProduct'] = $producto->save() == true ? true : false;
			}
			header('Location:' . root . 'producto/management');
		}
	}

	function delete()
	{
		Utils::isAdmin();
		if ($_GET['id']) {
			$p = new producto();
			$p->setId($_GET['id']);
			$_SESSION['delete_product'] = $p->delete();
		}
		header('Location:' . root . 'producto/management');
	}

	function edit()
	{
		Utils::isAdmin();
		if (isset($_GET['id'])) {
			$edit = true;
			$product = new producto();
			$product->setId($_GET['id']);
			$product = $product->getOne();
			require_once 'Views/ProductoView/crear.php';
		}
	}

	function update()
	{
		if ($_POST) {
			var_dump($_POST);
			$update = new producto();
			$update->setId($_GET['id']);
			$update->update();
		}
		//	header('Location:' . root . 'producto/management');
	}
}
