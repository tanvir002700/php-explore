<?php

$database = require 'Initializer.php';


$tasks = $database->selectAll('tasks');

var_dump($tasks);
