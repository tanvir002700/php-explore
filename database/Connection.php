<?php

class Connection {
    public static function make() {
        try {
            return new PDO('mysql:host=localhost;dbname=php_learn', 'root', 'root');
        } catch (PDOException $e) {
            die($e);
        }
    }
}
