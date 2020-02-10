<?php

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

Route::get('/', function () {
    return view('auth/login');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/unidade1', 'HomeController@unidade1')->name('unidade1');
Route::get('/unidade1/vocabulary', 'HomeController@unidade1Vocabulary')->name('unidade1/vocabulary');
Route::get('/unidade1/grammar', 'HomeController@unidade1Grammar')->name('unidade1/grammar');
Route::get('/unidade1/listening', 'HomeController@unidade1Listening')->name('unidade1/listening');
Route::get('/unidade1/understanding', 'HomeController@unidade1Understanding')->name('unidade1/understanding');
// Route::get('/marketing', 'CategoriaController@marketing')->name('marketing');
// Route::get('/treinamentos', 'CategoriaController@treinamentos')->name('treinamentos');
// Route::get('/modelos-de-solicitacoes', 'CategoriaController@solicitacoes')->name('modelos-de-solicitacoes');
// Route::get('/manuais-e-regulamentos', 'CategoriaController@franquias')->name('manuais-e-regulamentos');
// Route::get('marketing/arquivos/{id}/',  ['as'=>'conteudo/{id}', 'uses'=> 'CategoriaController@conteudo']);

Route::get('/admin', ['as'=>'admin','uses'=>'AdminController@index']);
Route::post('/unidade1/grammar/respostas', 'RespostaController@store');
Route::get('/unidade1/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade1/listening/respostas', 'RespostaController@store');
Route::get('/unidade1/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade1/understanding/respostas', 'RespostaController@store');
Route::get('/unidade1/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');
// Route::resource('topicos', 'TopicoController');
// Route::resource('conteudos', 'ConteudoController');
// Route::resource('pdf', 'PdfController');
// Route::resource('usuarios', 'UserController');
// Route::resource('noticias', 'NoticiaController');

// Route::post('conteudoImagem', 'ConteudoController@subirImagem')->name('conteudoImagem');
// Route::post('conteudoAvaliacao', 'ConteudoController@foiUtil')->name('conteudoAvaliacao');
// Route::post('noticiaImagem', 'NoticiaController@subirImagem')->name('noticiaImagem');
// Route::get('noticia/{noticia_id}', 'NoticiaController@lerNoticia')->name('lerNoticia');


// Route::prefix('categorias')->name('categorias.')->group(function(){
//     Route::get('/', 'CategoriaController@index')->name('index');
//     Route::get('/{categoria_id}', 'CategoriaController@show')->name('show');
//     Route::post('/store', 'CategoriaController@store')->name('store');
//     Route::get('/destroy{categoria_id}', 'CategoriaController@destroy')->name('destroy');
// });






