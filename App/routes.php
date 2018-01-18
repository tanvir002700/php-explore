<?php

$router->get('', 'PagesController@index');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('sign_up', 'UsersController@sign_up');
$router->post('register', 'UsersController@register');