<?php

class PagesController extends ApplicationController {
    function index()
    {
        $tasks = App::get('database')->selectAll('tasks');
        var_dump($tasks);
        return $this->view('index');
    }

    function about() {
        return $this->view('about', ['company' => 'testing']);
    }

    function contact() {
        $this->view('contact');
    }
}