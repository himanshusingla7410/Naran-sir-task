<?php

namespace core\middleware;


class Middleware{

    public static $MAP=[
        'auth' => Auth::class,
        'guest' => Guest::class
    ];

    public static function handle($key){
        if (! array_key_exists($key,static::$MAP)){
            throw new \Exception("No middleware found for {$key}.");
        }

        return  (new static::$MAP[$key])->handle();
    }


}