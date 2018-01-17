<?php

class PagesController {
    function index()
    {
        $tasks = App::get('database')->selectAll('tasks');
        var_dump($tasks);
        return view('index');
    }

    function about() {
        return view('about', ['company' => 'testing']);
    }

    function contact() {
        view('contact');
    }
}