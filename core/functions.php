<?php


function dd($value){

    echo "<pre>";
        var_dump($value);
    echo "</pre>";
    die();
};


function abort($code = 404){

    require ("views/{$code}.php");
    die();
};

function authorize($currentUserID) : bool{


    if ( $_SESSION['id'] != $currentUserID){
        abort(403);
    }
    
    return true;
}