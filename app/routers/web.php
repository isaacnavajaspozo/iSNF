<?php
# cargo los controladores
require_once('./app/routers/.autoload');

# Definir rutas
Http::get('/', ['controller' => 'LandingPage', 'method' => 'index']);


# Ejemplo
Http::get('/example', ['controller' => 'LandingPage', 'method' => 'index']);
//Http::get('/user/:id', ['controller' => 'ExampleController', 'method' => 'getUser']);
//Http::post('/post', ['controller' => 'ExampleController', 'method' => 'store']);
