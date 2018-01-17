<?php

class PagesController {
    function index()
    {
        $tasks = App::get('database')->selectAll('tasks');
        var_dump($tasks);
        require 'views/index.view.php';
    }

    function about() {
        require 'views/about.view.php';
    }

    function contact() {
        require 'views/contact.view.php';
    }
}