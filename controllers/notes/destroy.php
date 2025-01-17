<?php

use core\Database;

require('core/Database.php');
$config = require('config.php');

$db =  new Database($config['database']);


$db->query('select * from notes where id = :id', ['id' => $_POST['id']])->FindOrAbort();

authorize($_SESSION['id']);

$db->query('delete from notes where id = :id',['id'=> $_POST['id']]);

header('location: /notes');
exit();


require('views/notes/show.view.php');

