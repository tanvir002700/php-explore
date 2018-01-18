<?php

namespace App\Controllers;

class ApplicationController
{

    protected $layout = 'application';

    protected function view($name, $data=[]) {
        extract($data);
        $context = str_replace('Controllers','views', get_called_class());
        $view_path = str_replace('Controller', '', $context);
        $view_path = str_replace('\\', '/', $view_path);
        $layout_path = "App/views/Layouts/{$this->layout}.view.php";
        $child = "{$view_path}/{$name}.view.php";
        return require $layout_path;
    }
}