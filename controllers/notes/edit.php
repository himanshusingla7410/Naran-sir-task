<?php

use core\Database;
use core\Validator;

require('core/Database.php');
require('core/Validator.php');
$config = require('config.php');
$heading = 'Edit Note';

$db =  new Database($config['database']);

authorize($_SESSION['id']);


$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->FindOrAbort();




require('views/notes/edit.view.php');