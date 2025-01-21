<?php

use core\Database;
use core\App;

$heading = 'My Note';

$db = App::resolver(Database::class);



$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->FindOrAbort();





require('views/notes/show.view.php');
