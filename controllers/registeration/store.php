<?php


use core\Database;
use core\Validator;

require('core/Database.php');
require('core/Validator.php');
$config = require('config.php');
$heading = 'Edit Note';

$db =  new Database($config['database']);

if ($_SERVER['REQUEST_METHOD']== 'POST'){

    if (! Validator::email($_POST['email'])){
        $error['email']= 'Please enter a valid email.';

    }

    if (! Validator::validate($_POST['password'],3,10)){
        $error['password']= 'Please enter valid password.';
    }

    if (empty($error)){

        $user = $db->query('select * from users where email = :email',[
            'email' => $_POST['email']
        ])->find();

        if ( $user) {
            header('location: /login');
            exit();
        }else {
            $db->query('insert into users (id, email, password) values (:id, :email,:password)',[
                'id'=> 7,
                'email'=> $_POST['email'],
                'password'=> $_POST['password'],
                ])->get();
            
            $user = $db->query('select id from users where email = :email',[
                'email'=> $_POST['email']
            ])->get();
            
            $_SESSION['id']= $user['id'];
            $_SESSION['email']= $_POST['email'];
            header('location: /');
            exit();
        }
        

    }

}


require('views/registeration/create.view.php');