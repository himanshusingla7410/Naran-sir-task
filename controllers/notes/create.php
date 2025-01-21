<?php

use core\Database;
use core\Validator;
use core\App;

require('core/Validator.php');

$db = App::resolver(Database::class);

$heading = 'Create Note';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $error = [];


    if (! Validator::validate($_POST['note'], 2, 20)) {
        $error['body'] = "The body should not be more than 100 characters.";

    } else {
        if (empty($error)) {

            $note = $db->query('insert into notes (id , note ,user_id) values (:id, :note , :user_id)', [
                'id' => 4,
                'note' => $_POST['note'],
                'user_id' => $_SESSION['id']
            ]);
    
        }
    }

    
}


require('views/notes/create.view.php');