<?php

use core\Database;

require('core/Database.php');
$config = require('config.php');
$heading = 'My Notes';

$connection =  new Database($config['database']);

$notes = $connection->query('select * from notes where user_id = :user_id',[
    'user_id' => $_SESSION['id']
])->get();


require('views/notes/index.view.php');

