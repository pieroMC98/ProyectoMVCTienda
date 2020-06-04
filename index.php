<?php
// require_once 'Controllers/UsuarioController.php';
// require_once 'Controllers/NotaController.php';
require 'autoload.php';
require_once '../vendor/autoload.php';
// $fphp = FirePHP::DUMP;
require_once 'config/params.php';
require_once 'config/db.php';
require_once 'Views/Layout/header.php';
require_once 'Views/Layout/aside.php';
function showError()
{
	$error = new errorController();
	$error->index();
}

$deb = Database::connect();
if (isset($_GET['controller'])) {
	$controller_name = $_GET['controller'] . 'Controller';
} elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
	$controller_name = controller_default;
} else die('No hay parametros');

if (class_exists($controller_name)) {
	$controlador = new $controller_name();
	if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
		$action = $_GET['action'];
		$controlador->$action();

	} elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
		$default = action_default;
		$controlador = $default();
	} else echo 'Metodo no existe';
} else echo 'La clase no existe';

require_once 'Views/Layout/footer.php';
