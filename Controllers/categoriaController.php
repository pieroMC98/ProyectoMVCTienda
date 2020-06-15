<?php
require_once 'Models/categoria.php';
class categoriaController
{
	function index()
	{
		Utils::isAdmin();
		require_once 'Views/CategoriaView/index.php';
	}

	function crear()
	{
		Utils::isAdmin();
		require_once 'Views/CategoriaView/crear.php';
	}

	function save()
	{
		Utils::isAdmin();
		if (isset($_POST['nameProduct']) && isset($_POST)) {
			$C = new categoria();
			$C->setNombre($_POST['nameProduct']);
			$C->save();
		}
		header('Location:' . root . 'categoria/index');
	}
}
