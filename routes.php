<?php
$controllers = array(
    'pages' => ['home', 'error'],
    'works' => ['index', 'create', 'show', 'store', 'update', 'destroy', 'api_list'],
);

if (!isset($controller) || !isset($action) || !array_key_exists($controller, $controllers)
    || !in_array($action, $controllers[$controller])) {
    $controller = 'pages';
    $action = 'error';
}

include_once('controllers/' . ucwords($controller . 'Controller.php'));
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $klass;
$controller->$action();
