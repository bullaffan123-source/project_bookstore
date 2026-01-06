<?php
require_once "../config/config.php";
require_once "../core/Database.php";
require_once "../core/Controller.php";

$url = $_GET['url'] ?? 'auth/login';
$url = explode('/', $url);

$controllerName = ucfirst($url[0]) . "Controller";
$method = $url[1] ?? 'index';

require_once "../app/controllers/$controllerName.php";
$controller = new $controllerName();
$controller->$method();
