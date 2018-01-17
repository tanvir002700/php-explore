<?php

class ApplicationController
{
    public function view($name, $data=[]) {
        extract($data);
        $context = explode('C', get_called_class())[0];
        return require "views/{$context}/{$name}.view.php";
    }
}