<?php
/**
 * Minimalistic framework.
 * @author Alexey Vaskovsky
 * @see http://vaskovsky.ru/mvc-ajax/
 */
$controller = @$_GET["controller"];
$action = @$_GET["action"];
if($controller && $action) {
	$controller .= "Controller";
	require_once "$controller.php";
	$x = new $controller();
	$x->{"action" . $action}();
} else {
	die("Framework usage error");
}
