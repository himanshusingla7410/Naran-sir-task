<?php

namespace core;

class Container{

    protected static $bindings=[];

    public static function binds($key, $value){

        static::$bindings[$key] = $value;

    }

    public static function resolve($key){

        if ( ! array_key_exists($key, static::$bindings)){
            throw new \Exception("No binding found for {$key}");
        }

        return call_user_func(static::$bindings[$key]);

    }

}