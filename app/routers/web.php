<?php

//Definir controladores
require_once('./app/controllers/landingPageController.php');
//require_once('./app/controllers/exampleController.php');
//require_once('./app/controllers/errorController.php');

//Definir rutas
Http::get('/', ['controller' => 'LandingPage', 'method' => 'index']);


//Ejemplo
Http::get('/example', ['controller' => 'LandingPage', 'method' => 'index']);
//Http::get('/user/:id', ['controller' => 'ExampleController', 'method' => 'getUser']);
//Http::post('/post', ['controller' => 'ExampleController', 'method' => 'store']);

