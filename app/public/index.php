<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once '../helpers.php';

use Framework\Router;
use Framework\Session;

Session::Start();

$router = new Router();

$routes = require basePath('routes.php');


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$router->Route($uri);






