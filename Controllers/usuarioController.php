<?php
require_once 'Models/usuario.php';
class usuarioController
{
	function index()
	{
		echo '<h1>Prueba de content</h1>';
	}
	function registro()
	{
		require_once 'Views/UsuarioViews/registro.php';
	}

	function save()
	{
		if (isset($_POST)) {
			$user = new Usuario();
			$user->setNombre($_POST['name']);
			$user->setApellido($_POST['fullname']);
			$user->setEmail($_POST['email']);
			$user->setPassword($_POST['pass']);
			/*$user->setImagen($_POST['imagen']);
			$user->setRol($_POST['rol']); */
			if ($user->save()) echo 'Success';
			else 'Not';
		} else {
			echo 'no recibo';
		}
	}
}
