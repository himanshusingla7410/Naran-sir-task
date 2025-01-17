<?php



$router->get('/','controllers/home.php' );
$router->get('/notes','controllers/notes/index.php' );
$router->get('/note/create','controllers/notes/create.php' );
$router->post('/note/create','controllers/notes/create.php' );
$router->get('/note','controllers/notes/show.php' );
$router->delete('/note','controllers/notes/destroy.php' );
$router->get('/note/edit','controllers/notes/edit.php' );

$router->patch('/note/edit','controllers/notes/update.php' );

$router->get('/register','controllers/registeration/create.php' );
$router->post('/register','controllers/registeration/store.php' );

$router->get('/login','controllers/sessions/create.php' );
$router->post('/login','controllers/sessions/store.php' );
$router->get('/logout','controllers/sessions/destroy.php' );





















// $routes = [

//     '/notes' => 'controllers/notes/index.php', 
//     '/note' => 'controllers/notes/show.php', 
//     '/note/edit' => 'controllers/notes/edit.php', 
//     '/note/create' => 'controllers/notes/create.php', 
//     '/register' => 'controllers/registeration/create.php', 
//     '/logout' => 'controllers/sessions/destroy.php', 
//     '/login' => 'controllers/sessions/create.php', 

// ];

// if (array_key_exists($uri, $routes)){
//     require($routes[$uri]);
// } else {
//     abort();
// }
