<?php

$database = require 'core/Initializer.php';


$router = new Router();

require 'routes.php';

//die(var_dump($_SERVER));

$uri = trim($_SERVER['REQUEST_URI'], '/');

require $router::load('routes.php')
    -> direct($uri);