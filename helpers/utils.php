<?php
class Utils
{
	static function deleteSession($name)
	{
		if (isset($name)) {
			echo 'set';
			$_SESSION[$name] = null;
			unset($_SESSION[$name]);
		}
		return $name;
	}
	static function isAdmin()
	{
		if (!isset($_SESSION['admin']))
			header('Location:' . root);
		else return true;
	}
	static function showCategorias()
	{
		require_once 'Models/categoria.php';
		$categoria = new categoria();
		//var_dump($categoria->getAll());
		return $categoria->getAll();
	}
}
