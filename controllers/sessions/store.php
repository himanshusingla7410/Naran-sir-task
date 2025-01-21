<?php

use core\Database;
use core\Validator;
use core\App;

require('core/Validator.php');
$db = App::resolver(Database::class);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (! Validator::email($_POST['email'])) {
        $error['email'] = 'Please enter a valid email.';
    }

    if (! Validator::validate($_POST['password'], 3, 10)) {
        $error['password'] = 'Please enter valid password.';
    }

    if (empty($error)) {
        $user = $db->query('select * from users where email = :email and password = :password', [
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ])->find();
        //dd($user);

        if($user){
            $_SESSION['id'] = $user['id'];
            $_SESSION['email']= $_POST['email'];
            
            header('location: /');
            exit();
            
        } else{
            $error=[];
            $error['email'] = 'Invalid credentials.';
            
        }

        
    }
}


require('views/sessions/create.view.php');
