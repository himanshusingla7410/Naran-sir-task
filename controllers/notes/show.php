<?php

use core\Database;

require('core/Database.php');
$config = require('config.php');
$heading = 'My Note';

$connection =  new Database($config['database']);


$note = $connection->query('select * from notes where id = :id', ['id' => $_GET['id']])->FindOrAbort();





require('views/notes/show.view.php');
