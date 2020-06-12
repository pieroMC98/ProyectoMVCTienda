<?php
require_once 'Models/categoria.php';
class categoriaController
{
	function index()
	{
		$categoria = new categoria();
		$link = $categoria->getAll();
		require_once 'Views/CategoriaView/index.php';
	}
}
