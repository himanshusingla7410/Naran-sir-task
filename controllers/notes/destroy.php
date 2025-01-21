<?php

use core\Database;
use core\App;

$db = App::resolver(Database::class);



$db->query('select * from notes where id = :id', ['id' => $_POST['id']])->FindOrAbort();

authorize($_SESSION['id']);

$db->query('delete from notes where id = :id',['id'=> $_POST['id']]);

header('location: /notes');
exit();


require('views/notes/show.view.php');

