<?php

use core\Container;
use core\Database;
use core\App;

require('core\Database.php');
require('core\Container.php');
require('core\App.php');


$container = new Container;

$container->binds('core\Database', function(){

    $config = require('config.php');

    return new Database($config['database']);
});



App::setContainer($container);