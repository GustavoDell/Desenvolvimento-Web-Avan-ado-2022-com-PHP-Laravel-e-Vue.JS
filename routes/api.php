<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*
|
|ja o arquivo api.php serve para registrar as rotas de uma API, 
|nao suportando portanto os recursos de COOKIES E SECAO, 
|uma vez que as APIS possuem o proposito de responder dados 
|as requisicoes que sao feitas, ou seja um recurso ideal para 
|se trabalhar com as tecnologias WEB e Mobile mais modernas onde o front-end e separado do backend
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
