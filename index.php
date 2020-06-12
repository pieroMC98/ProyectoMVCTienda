<?php
// require_once 'Controllers/UsuarioController.php';
// require_once 'Controllers/NotaController.php';
session_start();
require_once 'helpers/utils.php';
require 'autoload.php';
require_once '../vendor/autoload.php';
// $fphp = FirePHP::DUMP;
require_once 'config/params.php';
require_once 'config/db.php';
require_once 'Views/Layout/header.php';
require_once 'Views/Layout/aside.php';

$controller_name = controller_default;
$action_name = action_default;

function showError()
{
	$error = new errorController();
	$error->index();
}

$deb = Database::connect();
if (isset($_GET['controller'])) {
	$controller_name = $_GET['controller'] . 'Controller';
	if (isset($_GET['action']))
		$action_name = $_GET['action'] == '' ? action_default : $_GET['action'];
}

if (class_exists($controller_name)) {
	$main = new $controller_name();
}

if (method_exists($controller_name, $action_name)) {
	$main->$action_name();
}


/* //Recoge 
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
		$controlador->$default();
		// echo '<h1>El defecto</h1>';
	} else echo 'Metodo no existe>>' . $_GET['action'];
} else echo 'La clase no existe';
 */
require_once 'Views/Layout/footer.php';
