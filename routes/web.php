<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/login', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'api/v1'], function () use ($router){
    $router->group(['prefix' => 'auth'], function () use ($router) {
        $router->post('/login', 'AuthController@login');
        $router->post('/register', 'AuthController@register');
        $router->post('/logout', ['middleware'=>'auth', 'uses'=>'AuthController@logout']);
    });

    $router->group(['middleware'=>'auth'], function () use ($router){
        $router->get('/providers', 'ProviderController@index');

        $router->post('/transactions', 'TransactionController@store');
        $router->get('/transactions', 'TransactionController@index');
    });
});


// $router->post('/login', [AuthController::class, 'login']);

// $router->group(['prefix' => 'api/v1'], function() use ($router){
//     $router->group(['prefix' => 'auth'], function() use ($router){
//         $router->post('/login', [AuthController::class,'login']);
//     });
// });

// Route::prefix('auth')->group(function(){
//     dd('test');
//     Route::post('login', [AuthController::class, 'login']);
// });
