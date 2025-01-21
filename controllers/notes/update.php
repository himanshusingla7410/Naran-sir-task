<?php

use core\Database;
use core\Validator;
use core\App;

require('core/Validator.php');
$heading = 'Edit Note';

$db = App::resolver(Database::class);


$note = $db->query('select * from notes where id = :id', ['id' => $_POST['id']])->FindOrAbort();


if(! Validator::validate($_POST['note'],2,20)){
    $error['body'] = "The body should not be more than 100 characters.";
}

authorize($_SESSION['id']);


$db->query('update notes set note=:note where id = :id' ,[
    'id' => $_POST['id'],
    'note'=> $_POST['note'],
]);

header('location: /notes');
exit();








require('views/notes/edit.view.php');