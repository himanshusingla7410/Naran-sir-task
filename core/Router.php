<?php

namespace core;
use core\middleware\Auth;
use core\middleware\Guest;
use core\middleware\Middleware;

require('core/middleware/Middleware.php');
require('core/middleware/Auth.php');
require('core/middleware/Guest.php');

class Router{

    protected $routes=[];

    public function add($uri ,$controller,$method){

        $this->routes[]=[
            'uri' => $uri,
            'controller' =>$controller,
            'method' => $method,
            'middleware'=> null
        ];

        return $this;
    }


    public function get($uri, $controller){

        return $this->add($uri,$controller,'GET');

        
    }

    public function post($uri, $controller){
        return $this->add($uri,$controller,'POST');

    }

    public function delete($uri, $controller){
        return $this->add($uri,$controller,'DELETE');

    }

    public function patch($uri, $controller){
        return $this->add($uri,$controller,'PATCH');

    }

    public function only($value){

        $this->routes[array_key_last($this->routes)]['middleware'] = $value;

        return $this;
       
    }


    public function routeToController($uri, $method){

        foreach( $this->routes as $route){ 

            if ($route['uri'] == $uri && $route['method'] == strtoupper($method)){

                if ($route['middleware']){
                    Middleware::handle($route['middleware']);
                }

                return require($route['controller']);
            }       
        }
    }


    public function abort($code=404){

        http_response_code($code);

        return require ("views/{$code}.php");
    }


}