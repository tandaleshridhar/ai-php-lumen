<?php

/*
|--------------------------------------------------------------------------
| routerlication Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an routerlication.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->router->version();
});


$router->group(['prefix'=>'lumenapi/v1'], function() use($router){
    $router->post(
        'auth/login',[
            'uses' => 'AuthController@authenticate'
        ]
        );

    $router->get('users', function() {
        $users = \App\User::all();
        return response()->json($users);
    });    
    $router->get('/customer', 'CustomerController@index');
    $router->post('/customer', 'CustomerController@create');
    $router->get('/customer/{id}', 'CustomerController@show');
    $router->put('/customer/{id}', 'CustomerController@update');
    $router->delete('/customer/{id}', 'CustomerController@destroy');
    $router->get('/semen', 'SemenController@index');
    $router->post('/semen', 'SemenController@create');
    $router->get('/semen/{id}', 'SemenController@show');
    $router->put('/semen/{id}', 'SemenController@update');
    $router->delete('/semen/{id}', 'SemenController@destroy');
    $router->get('/semenbuyer', 'SemenBuyerController@index');
    $router->post('/semenbuyer', 'SemenBuyerController@create');
    $router->get('/animaltype', 'AnimalTypeController@index');
    $router->post('/animaltype', 'AnimalTypeController@create');
    $router->get('/animal', 'AnimalController@index');
    $router->post('/animal', 'AnimalController@create');
    $router->get('/district', 'DistrictController@index');
    $router->post('/district', 'DistrictController@create');
    $router->get('/taluka', 'TalukaController@index');
    $router->post('/taluka', 'TalukaController@create');
    $router->get('/village', 'VillageController@index');
    $router->post('/village', 'VillageController@create');
    $router->post('/img', 'ImageController@store');
    $router->post('/record', 'RecordingController@store');
    $router->get('/visit', 'VisitController@index');
    $router->post('/visit', 'VisitController@store');
    $router->get('/visit/{id}', 'VisitController@show1');
    $router->post('/visitsearch', 'VisitController@getVisitByCustomer');
    $router->put('/visit/{id}', 'VisitController@update');
    $router->delete('/visit/{id}', 'VisitController@destroy');    
});






