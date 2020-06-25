<?php
class Utils
{
	static function top_var_dump($name)
	{
		foreach ($name as $i => $key) {
			echo "[{$i}] => " . $key . '</br>';
			foreach ($key as $j => $k)
				echo "[{$j}] => " . $k . '</br>';
		}
	}
	static function deleteSession($name)
	{
		if (isset($_SESSION['$name'])) {
			$_SESSION[$name] = null;
			unset($_SESSION[$name]);
		}
		return $name;
	}

	static function isAdmin()
	{
		$c = Database::connect();
		if (isset($_SESSION['identity'])) {
			$sql = "select * from usuarios where nombre = '{$_SESSION['identity']->nombre}'";
			if ($c->query($sql)->fetch_object()->rol == 'admin') $_SESSION['admin'] = true;

			if (!isset($_SESSION['admin']))
				header('Location:' . root);
		} else return true;
	}

	static function showCategorias()
	{
		require_once 'Models/categoria.php';
		$categoria = new categoria();
		return $categoria->getAll();
	}
}
