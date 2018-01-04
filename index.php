<?php

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=php_learn', 'root', 'root');
    } catch (PDOException $e) {
        var_dump($e);
    }
