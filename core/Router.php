<?php

namespace core;

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

        $this->routes[]=[
            'middleware'=> $value
        ];
    }


    public function routeToController($uri, $method){

        foreach( $this->routes as $route){ 

            if ($route['uri'] == $uri && $route['method'] == strtoupper($method)){
                return require($route['controller']);
            }       
        }
    }


    public function abort($code=404){

        http_response_code();

        return require ("views/{$code}.php");
    }


}