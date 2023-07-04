<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Services\Auth\Controllers\AuthController;
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


$router->group(['prefix' => 'auth'], function () use ($router) {
    $$router->post('/login', 'App\Services\Auth\Controllers\AuthController@login');
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
