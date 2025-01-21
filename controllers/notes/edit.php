<?php

use core\Database;
use core\App;
use core\Validator;

require('core/Validator.php');

$db = App::resolver(Database::class);
$heading = 'Edit Note';

authorize($_SESSION['id']);


$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->FindOrAbort();




require('views/notes/edit.view.php');