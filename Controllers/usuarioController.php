<?php
require_once 'Models/usuario.php';
class usuarioController
{
	function index()
	{
		require_once 'Views/UsuarioViews/index.php';
	}

	function registro()
	{
		require_once 'Views/UsuarioViews/registro.php';
	}

	function save()
	{
		if (isset($_POST)) {
			$user = new Usuario();
			$user->setNombre(isset($_POST['name']) ? $_POST['name'] : false);
			$user->setApellido(isset($_POST['fullname']) ? $_POST['fullname'] : false);
			$user->setEmail(isset($_POST['email']) ? $_POST['email'] : false);
			$user->setPassword(isset($_POST['password']) ? $_POST['password'] : false);
			$_SESSION['register'] = $user->save() ? true : false;
		}
		header('Location:' . root . 'usuario/registro');
	}

	function login()
	{
		if ($_POST) {
			$user = new usuario();
			$identity = $user->login($_POST['email'], $_POST['password']);

			if ($identity != null && is_object($identity)) {
				$_SESSION['identity'] = $identity;
				$_SESSION['admin'] = $identity->rol == 'admin' ? true : false;
			}
		}
		header(("location:" . root));
	}

	function logout()
	{
		session_unset();
		session_destroy();
		header(("location:" . root));
	}
}
