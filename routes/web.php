<?php


$router->get('/', function () {
    return app()->version();
});

// Generate random string
// $router->get('appKey', function () {
//     return str_random('32');
// });

$router->post('/book','BookController@create');
$router->get('/book','BookController@index');
$router->get('/book/{id}','BookController@show');
$router->put('/book/{id}','BookController@update');
$router->delete('/book/{id}','BookController@destroy');
