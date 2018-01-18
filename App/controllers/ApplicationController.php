<?php

namespace App\Controllers;

class ApplicationController
{
    public function view($name, $data=[]) {
        extract($data);
        $context = str_replace('Controllers','views', get_called_class());
        $view_path = str_replace('Controller', '', $context);
        $view_path = str_replace('\\', '/', $view_path);
        return require "{$view_path}/{$name}.view.php";
    }
}