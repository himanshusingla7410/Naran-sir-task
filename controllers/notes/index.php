<?php

use core\Database;
use core\App;

// require('core/Database.php');
// $config = require('config.php');

// $db =  new Database($config['database']);

$db=App::resolver(Database::class);
$heading = 'My Notes';

$notes = $db->query('select * from notes where user_id = :user_id',[
    'user_id' => $_SESSION['id']
])->get();


require('views/notes/index.view.php');

