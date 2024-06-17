<?php
session_start();
//load file Connection.php
include "../application/Connection.php";

?>
<?php
	if (isset($_GET['controller'])) {
		$controller = $_GET['controller'];
		if (isset($_GET['action'])) {
			$action = $_GET['action'];
		} else {
			$action = 'index';
		}
	} else {
		$controller = 'products';
		$action = 'index';
	}
	require_once('routes.php');
	$route = new routes();
	$route->checkRoute($controller, $action);
	?>
