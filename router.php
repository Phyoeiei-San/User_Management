<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controller/LoginController.php',
    '/index' => 'controller/UserController.php',
    '/addUser'  => 'controller/addUserController.php', 
    '/addRole'  => 'controller/addRoleController.php',
    '/edit'     => 'controller/editController.php',
    '/changePassword'     => 'controller/changePassController.php',
    '/seed'     => 'controller/seedController.php',
     '/login'     => 'controller/LoginController.php',
      '/logout'     => 'controller/LogoutController.php'
    
    

];

// $routes->get('/','controller/UserController.php');
// $routes->get('/addUser','controller/addUserController.php');
// $routes->get('/addRole','controller/addRoleController.php');
// $routes->get( '/edit','controller/editController.php');
// $routes->get( '/changePassword','controller/changePassController.php');
// $routes->get( '/seed','controller/seedController.php');




function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    }else{
        abort();
    }
}

function abort($code = 404){
    http_response_code($code);
    require "view/{$code}.php";
    die();
}
routeToController($uri, $routes);