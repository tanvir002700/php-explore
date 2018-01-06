<?php

$database = require 'core/Initializer.php';


$router = new Router();

require 'routes.php';

require $router->direct('about');