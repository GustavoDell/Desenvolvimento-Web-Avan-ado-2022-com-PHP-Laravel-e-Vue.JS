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
//metodo name renomea as rotas para ser utilizado dentro do codigo
Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/login', function(){ return 'Login';})->name('site.login');

// Metodo prefix() para agrupar rotas
Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){ return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', function(){ return 'Fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');
});

//Redirecionamento de rotas
Route::get('/rota1', function() {
    echo 'Rota 1';
})->name('site.rota1');

Route::get('/rota2', function() {
   return redirect()->route('site.rota1');
})->name('site.rota2');

//Route::redirect('/rota2', 'rota1');

//O metodo de fallback possibilta com que tratamos o erro de quando user acessa uma rota que não está disponivel.
Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial';
});

//Recebendo parametro por meio da URL
//Inserindo o caractere ? o parameto fica opcional
//rota de teste
/*Route::get(
    '/contato/{nome}/{categoria_id}', 
    function(
        string $nome = 'Desconhecido', 
        int $categoria_id = 1 // 1 - 'Informação'
    ) {
        echo "Estamos aqui: $nome - $categoria_id";
    }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
*/
/* verbo http

get
post
put
delete
options

*/