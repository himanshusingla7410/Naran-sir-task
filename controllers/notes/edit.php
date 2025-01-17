<?php

use core\Database;
use core\Validator;

require('core/Database.php');
require('core/Validator.php');
$config = require('config.php');
$heading = 'Edit Note';

$db =  new Database($config['database']);
//$currentUserid=1;

authorize($_SESSION['id']);


// if ($_SERVER['REQUEST_METHOD'] == 'POST'){

//     if(! Validator::validate($_POST['note'],2,20)){
//         $error['body'] = "The body should not be more than 100 characters.";
//     }

//     $db->query('update notes set note=:note where id = :id' ,[
//         'id' => $_POST['id'],
//         'note'=> $_POST['note'],
//     ]);

//     header('location: /notes');
//     exit();

// }


$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->FindOrAbort();




require('views/notes/edit.view.php');