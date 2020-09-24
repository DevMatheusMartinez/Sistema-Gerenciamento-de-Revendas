<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', 'Auth\\LoginJwtController@login');
Route::get('/logout', 'Auth\\LoginJwtController@logout');
Route::get('/refresh', 'Auth\\LoginJwtController@refresh');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['jwt.auth']], function()
{
    Route::resource('/clientes', 'ClientController');
    Route::post('/veiculos', 'VeiculoController@store');
});

Route::post('/usuarios', 'UserController@store');






