<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|
|Rotas tradicionais, que trabalham no velho estilo web, 
|processando paginas no lado do Back-end e servindoas 
|essas paginas em repostas as requisicoes, premitindo a utilizacao de recursos como COOKIES E SECAO
|
*/

/*
Route::get('/', function () {
    return 'Olá, seja bem vindo ao curso!';
});
*/

Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');

/* verbo http

get
post
put
delete
options

*/