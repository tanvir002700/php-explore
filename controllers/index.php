<?php

$tasks = $database->selectAll('tasks');

var_dump($tasks);

require 'views/index.view.php';