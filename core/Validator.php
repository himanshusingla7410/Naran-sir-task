<?php

namespace core;

class Validator{

    public $error = [];

    public static function validate( string $values, int $min=1, int $max=100){

        $values = trim($values);

        return strlen($values) >= $min && strlen($values)<= $max;

    }

    public static function email( string $value){

        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }


}