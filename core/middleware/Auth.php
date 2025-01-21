<?php

namespace core\middleware;

class Auth{

    public function handle(){
        if(! isset($_SESSION['id'])){
            header('location: /');
            exit();
        }
        
    }

}