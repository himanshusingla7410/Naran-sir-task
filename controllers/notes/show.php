<?php

use core\Database;

require('core/Database.php');
$config = require('config.php');
$heading = 'My Note';

$connection =  new Database($config['database']);

// $currentUserid = 1;


// if ($_SERVER['REQUEST_METHOD'] === 'POST'){

//     $note = $connection->query('select * from notes where id = :id', ['id' => $_POST['id']])->FindOrAbort();
    
//     if($note['user_id'] != $currentUserid){
//         abort(403);
//     }

//     $connection->query('delete from notes where id = :id',['id'=> $_POST['id']]);

//     header('location: /notes');
//     exit();

// } else{

    $note = $connection->query('select * from notes where id = :id', ['id' => $_GET['id']])->FindOrAbort();


// }



require('views/notes/show.view.php');

