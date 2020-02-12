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

Route::get('/unidade1/vocabulary', 'HomeController@unidade1Vocabulary')->name('unidade1/vocabulary');
Route::get('/unidade1/grammar', 'HomeController@unidade1Grammar')->name('unidade1/grammar');
Route::get('/unidade1/listening', 'HomeController@unidade1Listening')->name('unidade1/listening');
Route::get('/unidade1/understanding', 'HomeController@unidade1Understanding')->name('unidade1/understanding');

Route::get('/unidade2/vocabulary', 'HomeController@unidade2Vocabulary')->name('unidade2/vocabulary');
Route::get('/unidade2/grammar', 'HomeController@unidade2Grammar')->name('unidade2/grammar');
Route::get('/unidade2/listening', 'HomeController@unidade2Listening')->name('unidade2/listening');
Route::get('/unidade2/understanding', 'HomeController@unidade2Understanding')->name('unidade2/understanding');

Route::get('/unidade3/vocabulary', 'HomeController@unidade3Vocabulary')->name('unidade3/vocabulary');
Route::get('/unidade3/conversation', 'HomeController@unidade3Conversation')->name('unidade3/conversation');
Route::get('/unidade3/grammar', 'HomeController@unidade3Grammar')->name('unidade3/grammar');
Route::get('/unidade3/pronunciation', 'HomeController@unidade3Pronunciation')->name('unidade3/pronunciation');
Route::get('/unidade3/listening', 'HomeController@unidade3Listening')->name('unidade3/listening');
Route::get('/unidade3/understanding', 'HomeController@unidade3Understanding')->name('unidade3/understanding');

Route::get('/unidade4/vocabulary', 'HomeController@unidade4Vocabulary')->name('unidade4/vocabulary');
Route::get('/unidade4/conversation', 'HomeController@unidade4Conversation')->name('unidade4/conversation');
Route::get('/unidade4/grammar', 'HomeController@unidade4Grammar')->name('unidade4/grammar');
Route::get('/unidade4/pronunciation', 'HomeController@unidade4Pronunciation')->name('unidade4/pronunciation');
Route::get('/unidade4/listening', 'HomeController@unidade4Listening')->name('unidade4/listening');
Route::get('/unidade4/understanding', 'HomeController@unidade4Understanding')->name('unidade4/understanding');

Route::get('/unidade5/vocabulary', 'HomeController@unidade5Vocabulary')->name('unidade5/vocabulary');
Route::get('/unidade5/conversation', 'HomeController@unidade5Conversation')->name('unidade5/conversation');
Route::get('/unidade5/grammar', 'HomeController@unidade5Grammar')->name('unidade5/grammar');
Route::get('/unidade5/pronunciation', 'HomeController@unidade5Pronunciation')->name('unidade5/pronunciation');
Route::get('/unidade5/listening', 'HomeController@unidade5Listening')->name('unidade5/listening');
Route::get('/unidade5/understanding', 'HomeController@unidade5Understanding')->name('unidade5/understanding');
// Route::get('/marketing', 'CategoriaController@marketing')->name('marketing');
// Route::get('/treinamentos', 'CategoriaController@treinamentos')->name('treinamentos');
// Route::get('/modelos-de-solicitacoes', 'CategoriaController@solicitacoes')->name('modelos-de-solicitacoes');
// Route::get('/manuais-e-regulamentos', 'CategoriaController@franquias')->name('manuais-e-regulamentos');
// Route::get('marketing/arquivos/{id}/',  ['as'=>'conteudo/{id}', 'uses'=> 'CategoriaController@conteudo']);


Route::post('/unidade1/grammar/respostas', 'RespostaController@store');
Route::get('/unidade1/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade1/listening/respostas', 'RespostaController@store');
Route::get('/unidade1/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade1/understanding/respostas', 'RespostaController@store');
Route::get('/unidade1/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

Route::post('/unidade2/grammar/respostas', 'RespostaController@store');
Route::get('/unidade2/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade2/listening/respostas', 'RespostaController@store');
Route::get('/unidade2/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade2/understanding/respostas', 'RespostaController@store');
Route::get('/unidade2/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');


Route::post('/unidade3/grammar/respostas', 'RespostaController@store');
Route::get('/unidade3/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade3/listening/respostas', 'RespostaController@store');
Route::get('/unidade3/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade3/understanding/respostas', 'RespostaController@store');
Route::get('/unidade3/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

Route::post('/unidade4/grammar/respostas', 'RespostaController@store');
Route::get('/unidade4/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade4/listening/respostas', 'RespostaController@store');
Route::get('/unidade4/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade4/understanding/respostas', 'RespostaController@store');
Route::get('/unidade4/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

Route::post('/unidade5/grammar/respostas', 'RespostaController@store');
Route::get('/unidade5/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade5/listening/respostas', 'RespostaController@store');
Route::get('/unidade5/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade5/understanding/respostas', 'RespostaController@store');
Route::get('/unidade5/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');


//Route::get('/admin', ['as'=>'admin','uses'=>'AdminController@index']);
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






