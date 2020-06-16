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
	function save(){
		if(isset($_POST)){
			
		}
	}
}
