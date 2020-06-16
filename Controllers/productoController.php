<?php
class productoController
{
	public function index(){
		require_once 'Views/ProductoView/destacados.php';
	}
	function management(){
		require_once 'Views/ProductoView/management.php';
	}
}
