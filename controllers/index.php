<?php

$tasks = $app['database']->selectAll('tasks');

var_dump($tasks);

require 'views/index.view.php';