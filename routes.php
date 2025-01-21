<?php



$router->get('/','controllers/home.php' );
$router->get('/notes','controllers/notes/index.php' )->only('auth');
$router->get('/note/create','controllers/notes/create.php' )->only('auth');
$router->post('/note/create','controllers/notes/create.php' );
$router->get('/note','controllers/notes/show.php' )->only('auth');
$router->delete('/note','controllers/notes/destroy.php' );
$router->get('/note/edit','controllers/notes/edit.php' )->only('auth');

$router->patch('/note/edit','controllers/notes/update.php' );

$router->get('/register','controllers/registeration/create.php' )->only('guest');
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
