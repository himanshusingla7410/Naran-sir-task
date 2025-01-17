<?php

namespace core;


use core\middleware\Auth;
use core\middleware\Guest;
use core\middleware\Middleware;


class Router{

    protected $routes =[];

    public function add($uri, $controller,  $method){

        $this->routes[]=[
            'uri'=> $uri,
            'controller'=> $controller,
            'method'=> $method,
            'middleware' => null
        ];

        return $this;

    }

    public function get($uri, $controller){

       return $this->add($uri, $controller, 'GET');

    }

    public function post($uri, $controller){

       return $this->add($uri, $controller, 'POST');

    }

    public function delete($uri, $controller){

       return $this->add($uri, $controller, 'DELETE');

    }


    public function patch($uri, $controller){

       return $this->add($uri, $controller, 'PATCH');

    }

    public function put($uri, $controller){

       return $this->add($uri, $controller, 'PUT');

    }

    public function only($key){

        $this->routes[array_key_last($this->routes)]['middleware'] = $key;

        return $this;

    }

   

    public function route($uri, $method){

        foreach( $this-> routes as $route){

            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)){
                
                if ($route['middleware']){

                    Middleware::resolve($route['middleware']);

                }          
            
            return require base_path('http/controller/' . $route['controller']);
            }
        }

        $this->abort();

    }

    public function previousUrl(){

        return $_SERVER['HTTP_REFERER'];

    }


    protected function abort($code=404){
        http_response_code($code);

        require base_path("view/{$code}.php");

        die();
    }


}



    





// $routes = require base_path('routes.php');

// $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
 
// if (array_key_exists($uri,$routes)){
//     require base_path($routes[$uri]);
 
// } else{
//     http_response_code(404);
//     echo 'Sorry page not found!';
    
// };
 

?>