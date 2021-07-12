<?php

/** @var \Laravel\Lumen\Routing\Router $router */
$router = $this->app['router'];

// Cards
$router->get('/cards', 'CardController@index');
$router->get('/cards/{id:[0-9]+}', 'CardController@get');
$router->post('/cards', 'CardController@create');
$router->put('/cards', 'CardController@update');
$router->delete('/cards', 'CardController@delete');
