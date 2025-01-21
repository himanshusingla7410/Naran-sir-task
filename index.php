<?php
require('core/functions.php');
use core\Router;

require('core/Router.php');
require('core/bootstrap.php');
session_start();


$router = new Router();
require('routes.php');


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->routeToController($uri,$method);


