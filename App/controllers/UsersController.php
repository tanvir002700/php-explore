<?php

namespace App\Controllers;
use App\Core\App;

class UsersController extends ApplicationController
{
    function sign_up() {
        $this->view('sign_up');
    }

    function register() {
        var_dump($_REQUEST['first_name']);
        try {
            App::get('database')
                ->insert(
                    'users',
                    [
                        'first_name' => $_REQUEST['first_name'],
                        'last_name' => $_REQUEST['last_name'],
                        'password' => $_REQUEST['password'],
                        'email' => $_REQUEST['email']
                    ]
                );
        } catch (\Exception $e) {
            $_SESSION['flash'] = "can't register user";
            header("Location: /sign_up");
        }
        $users = App::get('database')->selectAll('users');
        var_dump($users);
    }
}