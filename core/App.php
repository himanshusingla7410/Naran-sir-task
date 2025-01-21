<?php

namespace core;

class App{

    protected static $container;

    public static function setContainer($container) {
        
        static::$container = $container;

    }

    public static function resolver($key){

        return static::$container->resolve($key);

    }

}