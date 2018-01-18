<?php

namespace App\Controllers;
use App\Core\App;

class PagesController extends ApplicationController {
    function index()
    {
        $tasks = App::get('database')->selectAll('tasks');
        var_dump($tasks);
        return $this->view('index');
    }

    function about() {
        $this->layout = 'application2';
        return $this->view('about', ['company' => 'testing company']);
    }

    function contact() {
        $this->view('contact');
    }
}