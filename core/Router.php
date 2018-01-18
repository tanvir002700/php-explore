<?php

namespace App\Core;

class Router{

    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file) {
        $router = new static;
        require $file;
        return $router;
    }

    public function get($pattern, $controller) {
        $this->routes['GET'][$pattern] = $controller;
    }

    public function post($pattern, $controller) {
        $this->routes['POST'][$pattern] = $controller;
    }

    public function direct($uri, $requestType) {
        if(array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }
        throw new Exception('No route defined for this URI.');
    }

    protected function callAction($controller, $action) {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;
        if(! method_exists($controller, @$action)) {
            throw new Exception('Controller method not responding.');
        }
        return $controller->$action();
    }
}