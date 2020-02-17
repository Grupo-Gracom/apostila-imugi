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

/* ROTAS PARA AS VIEWS */

Route::get('/home', 'HomeController@index')->name('home');

//UNIDADE 1
Route::get('/unidade1/vocabulary', 'HomeController@unidade1Vocabulary')->name('unidade1/vocabulary');
Route::get('/unidade1/conversation', 'HomeController@unidade1Conversation')->name('unidade1/conversation');
Route::get('/unidade1/grammar', 'HomeController@unidade1Grammar')->name('unidade1/grammar');
Route::get('/unidade1/listening', 'HomeController@unidade1Listening')->name('unidade1/listening');
Route::get('/unidade1/pronunciation', 'HomeController@unidade1Pronunciation')->name('unidade1/pronunciation');
Route::get('/unidade1/understanding', 'HomeController@unidade1Understanding')->name('unidade1/understanding');

//UNIDADE 2
Route::get('/unidade2/vocabulary', 'HomeController@unidade2Vocabulary')->name('unidade2/vocabulary');
Route::get('/unidade2/grammar', 'HomeController@unidade2Grammar')->name('unidade2/grammar');
Route::get('/unidade2/listening', 'HomeController@unidade2Listening')->name('unidade2/listening');
Route::get('/unidade2/understanding', 'HomeController@unidade2Understanding')->name('unidade2/understanding');

//UNIDADE 3
Route::get('/unidade3/vocabulary', 'HomeController@unidade3Vocabulary')->name('unidade3/vocabulary');
Route::get('/unidade3/conversation', 'HomeController@unidade3Conversation')->name('unidade3/conversation');
Route::get('/unidade3/grammar', 'HomeController@unidade3Grammar')->name('unidade3/grammar');
Route::get('/unidade3/pronunciation', 'HomeController@unidade3Pronunciation')->name('unidade3/pronunciation');
Route::get('/unidade3/listening', 'HomeController@unidade3Listening')->name('unidade3/listening');
Route::get('/unidade3/understanding', 'HomeController@unidade3Understanding')->name('unidade3/understanding');

//UNIDADE 4
Route::get('/unidade4/vocabulary', 'HomeController@unidade4Vocabulary')->name('unidade4/vocabulary');
Route::get('/unidade4/conversation', 'HomeController@unidade4Conversation')->name('unidade4/conversation');
Route::get('/unidade4/grammar', 'HomeController@unidade4Grammar')->name('unidade4/grammar');
Route::get('/unidade4/pronunciation', 'HomeController@unidade4Pronunciation')->name('unidade4/pronunciation');
Route::get('/unidade4/listening', 'HomeController@unidade4Listening')->name('unidade4/listening');
Route::get('/unidade4/understanding', 'HomeController@unidade4Understanding')->name('unidade4/understanding');

//UNIDADE 5
Route::get('/unidade5/vocabulary', 'HomeController@unidade5Vocabulary')->name('unidade5/vocabulary');
Route::get('/unidade5/conversation', 'HomeController@unidade5Conversation')->name('unidade5/conversation');
Route::get('/unidade5/grammar', 'HomeController@unidade5Grammar')->name('unidade5/grammar');
Route::get('/unidade5/pronunciation', 'HomeController@unidade5Pronunciation')->name('unidade5/pronunciation');
Route::get('/unidade5/listening', 'HomeController@unidade5Listening')->name('unidade5/listening');
Route::get('/unidade5/understanding', 'HomeController@unidade5Understanding')->name('unidade5/understanding');

//UNIDADE 6
Route::get('/unidade6/vocabulary', 'HomeController@unidade6Vocabulary')->name('unidade6/vocabulary');
Route::get('/unidade6/conversation', 'HomeController@unidade6Conversation')->name('unidade6/conversation');
Route::get('/unidade6/grammar', 'HomeController@unidade6Grammar')->name('unidade6/grammar');
Route::get('/unidade6/pronunciation', 'HomeController@unidade6Pronunciation')->name('unidade6/pronunciation');
Route::get('/unidade6/listening', 'HomeController@unidade6Listening')->name('unidade6/listening');
Route::get('/unidade6/understanding', 'HomeController@unidade6Understanding')->name('unidade6/understanding');

//UNIDADE 7
Route::get('/unidade7/vocabulary', 'HomeController@unidade7Vocabulary')->name('unidade7/vocabulary');
Route::get('/unidade7/conversation', 'HomeController@unidade7Conversation')->name('unidade7/conversation');
Route::get('/unidade7/grammar', 'HomeController@unidade7Grammar')->name('unidade7/grammar');
Route::get('/unidade7/pronunciation', 'HomeController@unidade7Pronunciation')->name('unidade7/pronunciation');
Route::get('/unidade7/listening', 'HomeController@unidade7Listening')->name('unidade7/listening');
Route::get('/unidade7/understanding', 'HomeController@unidade7Understanding')->name('unidade7/understanding');

//UNIDADE 8
Route::get('/unidade8/vocabulary', 'HomeController@unidade8Vocabulary')->name('unidade8/vocabulary');
Route::get('/unidade8/conversation', 'HomeController@unidade8Conversation')->name('unidade8/conversation');
Route::get('/unidade8/grammar', 'HomeController@unidade8Grammar')->name('unidade8/grammar');
Route::get('/unidade8/pronunciation', 'HomeController@unidade8Pronunciation')->name('unidade8/pronunciation');
Route::get('/unidade8/listening', 'HomeController@unidade8Listening')->name('unidade8/listening');
Route::get('/unidade8/understanding', 'HomeController@unidade8Understanding')->name('unidade8/understanding');

//UNIDADE 9
Route::get('/unidade9/vocabulary', 'HomeController@unidade9Vocabulary')->name('unidade9/vocabulary');
Route::get('/unidade9/conversation', 'HomeController@unidade9Conversation')->name('unidade9/conversation');
Route::get('/unidade9/grammar', 'HomeController@unidade9Grammar')->name('unidade9/grammar');
Route::get('/unidade9/pronunciation', 'HomeController@unidade9Pronunciation')->name('unidade9/pronunciation');
Route::get('/unidade9/listening', 'HomeController@unidade9Listening')->name('unidade9/listening');
Route::get('/unidade9/understanding', 'HomeController@unidade9Understanding')->name('unidade9/understanding');

//UNIDADE 10
Route::get('/unidade10/vocabulary', 'HomeController@unidade10Vocabulary')->name('unidade10/vocabulary');
Route::get('/unidade10/conversation', 'HomeController@unidade10Conversation')->name('unidade10/conversation');
Route::get('/unidade10/grammar', 'HomeController@unidade10Grammar')->name('unidade10/grammar');
Route::get('/unidade10/pronunciation', 'HomeController@unidade10Pronunciation')->name('unidade10/pronunciation');
Route::get('/unidade10/listening', 'HomeController@unidade10Listening')->name('unidade10/listening');
Route::get('/unidade10/understanding', 'HomeController@unidade10Understanding')->name('unidade10/understanding');

//UNIDADE 11
Route::get('/unidade11/vocabulary', 'HomeController@unidade11Vocabulary')->name('unidade11/vocabulary');
Route::get('/unidade11/conversation', 'HomeController@unidade11Conversation')->name('unidade11/conversation');
Route::get('/unidade11/grammar', 'HomeController@unidade11Grammar')->name('unidade11/grammar');
Route::get('/unidade11/pronunciation', 'HomeController@unidade11Pronunciation')->name('unidade11/pronunciation');
Route::get('/unidade11/listening', 'HomeController@unidade11Listening')->name('unidade11/listening');
Route::get('/unidade11/understanding', 'HomeController@unidade11Understanding')->name('unidade11/understanding');

//UNIDADE 12
Route::get('/unidade12/vocabulary', 'HomeController@unidade12Vocabulary')->name('unidade12/vocabulary');
Route::get('/unidade12/conversation', 'HomeController@unidade12Conversation')->name('unidade12/conversation');
Route::get('/unidade12/grammar', 'HomeController@unidade12Grammar')->name('unidade12/grammar');
Route::get('/unidade12/pronunciation', 'HomeController@unidade12Pronunciation')->name('unidade12/pronunciation');
Route::get('/unidade12/listening', 'HomeController@unidade12Listening')->name('unidade12/listening');
Route::get('/unidade12/understanding', 'HomeController@unidade12Understanding')->name('unidade12/understanding');

//UNIDADE 13
Route::get('/unidade13/vocabulary', 'HomeController@unidade13Vocabulary')->name('unidade13/vocabulary');
Route::get('/unidade13/conversation', 'HomeController@unidade13Conversation')->name('unidade13/conversation');
Route::get('/unidade13/grammar', 'HomeController@unidade13Grammar')->name('unidade13/grammar');
Route::get('/unidade13/pronunciation', 'HomeController@unidade13Pronunciation')->name('unidade13/pronunciation');
Route::get('/unidade13/listening', 'HomeController@unidade13Listening')->name('unidade13/listening');
Route::get('/unidade13/understanding', 'HomeController@unidade13Understanding')->name('unidade13/understanding');

//UNIDADE 14
Route::get('/unidade14/vocabulary', 'HomeController@unidade14Vocabulary')->name('unidade14/vocabulary');
Route::get('/unidade14/conversation', 'HomeController@unidade14Conversation')->name('unidade14/conversation');
Route::get('/unidade14/grammar', 'HomeController@unidade14Grammar')->name('unidade14/grammar');
Route::get('/unidade14/pronunciation', 'HomeController@unidade14Pronunciation')->name('unidade14/pronunciation');
Route::get('/unidade14/listening', 'HomeController@unidade14Listening')->name('unidade14/listening');
Route::get('/unidade14/understanding', 'HomeController@unidade14Understanding')->name('unidade14/understanding');

//UNIDADE 15
Route::get('/unidade15/vocabulary', 'HomeController@unidade15Vocabulary')->name('unidade15/vocabulary');
Route::get('/unidade15/conversation', 'HomeController@unidade15Conversation')->name('unidade15/conversation');
Route::get('/unidade15/grammar', 'HomeController@unidade15Grammar')->name('unidade15/grammar');
Route::get('/unidade15/pronunciation', 'HomeController@unidade15Pronunciation')->name('unidade15/pronunciation');
Route::get('/unidade15/listening', 'HomeController@unidade15Listening')->name('unidade15/listening');
Route::get('/unidade15/understanding', 'HomeController@unidade15Understanding')->name('unidade15/understanding');

//UNIDADE 16
Route::get('/unidade16/vocabulary', 'HomeController@unidade16Vocabulary')->name('unidade16/vocabulary');
Route::get('/unidade16/conversation', 'HomeController@unidade16Conversation')->name('unidade16/conversation');
Route::get('/unidade16/grammar', 'HomeController@unidade16Grammar')->name('unidade16/grammar');
Route::get('/unidade16/pronunciation', 'HomeController@unidade16Pronunciation')->name('unidade16/pronunciation');
Route::get('/unidade16/listening', 'HomeController@unidade16Listening')->name('unidade16/listening');
Route::get('/unidade16/understanding', 'HomeController@unidade16Understanding')->name('unidade16/understanding');

//UNIDADE 17
Route::get('/unidade17/vocabulary', 'HomeController@unidade17Vocabulary')->name('unidade17/vocabulary');
Route::get('/unidade17/conversation', 'HomeController@unidade17Conversation')->name('unidade17/conversation');
Route::get('/unidade17/grammar', 'HomeController@unidade17Grammar')->name('unidade17/grammar');
Route::get('/unidade17/pronunciation', 'HomeController@unidade17Pronunciation')->name('unidade17/pronunciation');
Route::get('/unidade17/listening', 'HomeController@unidade17Listening')->name('unidade17/listening');
Route::get('/unidade17/understanding', 'HomeController@unidade17Understanding')->name('unidade17/understanding');

//UNIDADE 18
Route::get('/unidade18/vocabulary', 'HomeController@unidade18Vocabulary')->name('unidade18/vocabulary');
Route::get('/unidade18/conversation', 'HomeController@unidade18Conversation')->name('unidade18/conversation');
Route::get('/unidade18/grammar', 'HomeController@unidade18Grammar')->name('unidade18/grammar');
Route::get('/unidade18/pronunciation', 'HomeController@unidade18Pronunciation')->name('unidade18/pronunciation');
Route::get('/unidade18/listening', 'HomeController@unidade18Listening')->name('unidade18/listening');
Route::get('/unidade18/understanding', 'HomeController@unidade18Understanding')->name('unidade18/understanding');

//UNIDADE 19
Route::get('/unidade19/vocabulary', 'HomeController@unidade19Vocabulary')->name('unidade19/vocabulary');
Route::get('/unidade19/conversation', 'HomeController@unidade19Conversation')->name('unidade19/conversation');
Route::get('/unidade19/grammar', 'HomeController@unidade19Grammar')->name('unidade19/grammar');
Route::get('/unidade19/pronunciation', 'HomeController@unidade19Pronunciation')->name('unidade19/pronunciation');
Route::get('/unidade19/listening', 'HomeController@unidade19Listening')->name('unidade19/listening');
Route::get('/unidade19/understanding', 'HomeController@unidade19Understanding')->name('unidade19/understanding');

//UNIDADE 20
Route::get('/unidade20/vocabulary', 'HomeController@unidade20Vocabulary')->name('unidade20/vocabulary');
Route::get('/unidade20/conversation', 'HomeController@unidade20Conversation')->name('unidade20/conversation');
Route::get('/unidade20/grammar', 'HomeController@unidade20Grammar')->name('unidade20/grammar');
Route::get('/unidade20/pronunciation', 'HomeController@unidade20Pronunciation')->name('unidade20/pronunciation');
Route::get('/unidade20/listening', 'HomeController@unidade20Listening')->name('unidade20/listening');
Route::get('/unidade20/understanding', 'HomeController@unidade20Understanding')->name('unidade20/understanding');

//UNIDADE 21
Route::get('/unidade21/vocabulary', 'HomeController@unidade21Vocabulary')->name('unidade21/vocabulary');
Route::get('/unidade21/conversation', 'HomeController@unidade21Conversation')->name('unidade21/conversation');
Route::get('/unidade21/grammar', 'HomeController@unidade21Grammar')->name('unidade21/grammar');
Route::get('/unidade21/pronunciation', 'HomeController@unidade21Pronunciation')->name('unidade21/pronunciation');
Route::get('/unidade21/listening', 'HomeController@unidade21Listening')->name('unidade21/listening');
Route::get('/unidade21/understanding', 'HomeController@unidade21Understanding')->name('unidade21/understanding');

//UNIDADE 22
Route::get('/unidade22/vocabulary', 'HomeController@unidade22Vocabulary')->name('unidade22/vocabulary');
Route::get('/unidade22/conversation', 'HomeController@unidade22Conversation')->name('unidade22/conversation');
Route::get('/unidade22/grammar', 'HomeController@unidade22Grammar')->name('unidade22/grammar');
Route::get('/unidade22/pronunciation', 'HomeController@unidade22Pronunciation')->name('unidade22/pronunciation');
Route::get('/unidade22/listening', 'HomeController@unidade22Listening')->name('unidade22/listening');
Route::get('/unidade22/understanding', 'HomeController@unidade22Understanding')->name('unidade22/understanding');

//UNIDADE 23
Route::get('/unidade23/vocabulary', 'HomeController@unidade23Vocabulary')->name('unidade23/vocabulary');
Route::get('/unidade23/conversation', 'HomeController@unidade23Conversation')->name('unidade23/conversation');
Route::get('/unidade23/grammar', 'HomeController@unidade23Grammar')->name('unidade23/grammar');
Route::get('/unidade23/pronunciation', 'HomeController@unidade23Pronunciation')->name('unidade23/pronunciation');
Route::get('/unidade23/listening', 'HomeController@unidade23Listening')->name('unidade23/listening');
Route::get('/unidade23/understanding', 'HomeController@unidade23Understanding')->name('unidade23/understanding');

//UNIDADE 24
Route::get('/unidade24/vocabulary', 'HomeController@unidade24Vocabulary')->name('unidade24/vocabulary');
Route::get('/unidade24/conversation', 'HomeController@unidade24Conversation')->name('unidade24/conversation');
Route::get('/unidade24/grammar', 'HomeController@unidade24Grammar')->name('unidade24/grammar');
Route::get('/unidade24/pronunciation', 'HomeController@unidade24Pronunciation')->name('unidade24/pronunciation');
Route::get('/unidade24/listening', 'HomeController@unidade24Listening')->name('unidade24/listening');
Route::get('/unidade24/understanding', 'HomeController@unidade24Understanding')->name('unidade24/understanding');

//UNIDADE 27
Route::get('/unidade27/vocabulary', 'HomeController@unidade27Vocabulary')->name('unidade27/vocabulary');
Route::get('/unidade27/conversation', 'HomeController@unidade27Conversation')->name('unidade27/conversation');
Route::get('/unidade27/grammar', 'HomeController@unidade27Grammar')->name('unidade27/grammar');
Route::get('/unidade27/pronunciation', 'HomeController@unidade27Pronunciation')->name('unidade27/pronunciation');
Route::get('/unidade27/listening', 'HomeController@unidade27Listening')->name('unidade27/listening');
Route::get('/unidade27/understanding', 'HomeController@unidade27Understanding')->name('unidade27/understanding');

//UNIDADE 28
Route::get('/unidade28/vocabulary', 'HomeController@unidade28Vocabulary')->name('unidade28/vocabulary');
Route::get('/unidade28/conversation', 'HomeController@unidade28Conversation')->name('unidade28/conversation');
Route::get('/unidade28/grammar', 'HomeController@unidade28Grammar')->name('unidade28/grammar');
Route::get('/unidade28/pronunciation', 'HomeController@unidade28Pronunciation')->name('unidade28/pronunciation');
Route::get('/unidade28/listening', 'HomeController@unidade28Listening')->name('unidade28/listening');
Route::get('/unidade28/understanding', 'HomeController@unidade28Understanding')->name('unidade28/understanding');

//UNIDADE 29
Route::get('/unidade29/vocabulary', 'HomeController@unidade29Vocabulary')->name('unidade29/vocabulary');
Route::get('/unidade29/conversation', 'HomeController@unidade29Conversation')->name('unidade29/conversation');
Route::get('/unidade29/grammar', 'HomeController@unidade29Grammar')->name('unidade29/grammar');
Route::get('/unidade29/pronunciation', 'HomeController@unidade29Pronunciation')->name('unidade29/pronunciation');
Route::get('/unidade29/listening', 'HomeController@unidade29Listening')->name('unidade29/listening');
Route::get('/unidade29/understanding', 'HomeController@unidade29Understanding')->name('unidade29/understanding');

//UNIDADE 30
Route::get('/unidade30/vocabulary', 'HomeController@unidade30Vocabulary')->name('unidade30/vocabulary');
Route::get('/unidade30/conversation', 'HomeController@unidade30Conversation')->name('unidade30/conversation');
Route::get('/unidade30/grammar', 'HomeController@unidade30Grammar')->name('unidade30/grammar');
Route::get('/unidade30/pronunciation', 'HomeController@unidade30Pronunciation')->name('unidade30/pronunciation');
Route::get('/unidade30/listening', 'HomeController@unidade30Listening')->name('unidade30/listening');
Route::get('/unidade30/understanding', 'HomeController@unidade30Understanding')->name('unidade30/understanding');

/* ROTAS PARA O CRUD */
//UNIDADE 1
Route::post('/unidade1/grammar/respostas', 'RespostaController@store');
Route::get('/unidade1/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade1/listening/respostas', 'RespostaController@store');
Route::get('/unidade1/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade1/understanding/respostas', 'RespostaController@store');
Route::get('/unidade1/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 2
Route::post('/unidade2/grammar/respostas', 'RespostaController@store');
Route::get('/unidade2/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade2/listening/respostas', 'RespostaController@store');
Route::get('/unidade2/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade2/understanding/respostas', 'RespostaController@store');
Route::get('/unidade2/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 3
Route::post('/unidade3/grammar/respostas', 'RespostaController@store');
Route::get('/unidade3/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade3/listening/respostas', 'RespostaController@store');
Route::get('/unidade3/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade3/understanding/respostas', 'RespostaController@store');
Route::get('/unidade3/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 4
Route::post('/unidade4/grammar/respostas', 'RespostaController@store');
Route::get('/unidade4/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade4/listening/respostas', 'RespostaController@store');
Route::get('/unidade4/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade4/understanding/respostas', 'RespostaController@store');
Route::get('/unidade4/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 5
Route::post('/unidade5/grammar/respostas', 'RespostaController@store');
Route::get('/unidade5/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade5/listening/respostas', 'RespostaController@store');
Route::get('/unidade5/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade5/understanding/respostas', 'RespostaController@store');
Route::get('/unidade5/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 6
Route::post('/unidade6/grammar/respostas', 'RespostaController@store');
Route::get('/unidade6/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade6/listening/respostas', 'RespostaController@store');
Route::get('/unidade6/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade6/understanding/respostas', 'RespostaController@store');
Route::get('/unidade6/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 7
Route::post('/unidade7/grammar/respostas', 'RespostaController@store');
Route::get('/unidade7/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade7/listening/respostas', 'RespostaController@store');
Route::get('/unidade7/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade7/understanding/respostas', 'RespostaController@store');
Route::get('/unidade7/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 8
Route::post('/unidade8/grammar/respostas', 'RespostaController@store');
Route::get('/unidade8/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade8/listening/respostas', 'RespostaController@store');
Route::get('/unidade8/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade8/understanding/respostas', 'RespostaController@store');
Route::get('/unidade8/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 9
Route::post('/unidade9/grammar/respostas', 'RespostaController@store');
Route::get('/unidade9/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade9/listening/respostas', 'RespostaController@store');
Route::get('/unidade9/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade9/understanding/respostas', 'RespostaController@store');
Route::get('/unidade9/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 10
Route::post('/unidade10/grammar/respostas', 'RespostaController@store');
Route::get('/unidade10/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade10/listening/respostas', 'RespostaController@store');
Route::get('/unidade10/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade10/understanding/respostas', 'RespostaController@store');
Route::get('/unidade10/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 11
Route::post('/unidade11/grammar/respostas', 'RespostaController@store');
Route::get('/unidade11/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade11/listening/respostas', 'RespostaController@store');
Route::get('/unidade11/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade11/understanding/respostas', 'RespostaController@store');
Route::get('/unidade11/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 12
Route::post('/unidade12/grammar/respostas', 'RespostaController@store');
Route::get('/unidade12/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade12/listening/respostas', 'RespostaController@store');
Route::get('/unidade12/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade12/understanding/respostas', 'RespostaController@store');
Route::get('/unidade12/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 13
Route::post('/unidade13/grammar/respostas', 'RespostaController@store');
Route::get('/unidade13/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade13/listening/respostas', 'RespostaController@store');
Route::get('/unidade13/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade13/understanding/respostas', 'RespostaController@store');
Route::get('/unidade13/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 14
Route::post('/unidade14/grammar/respostas', 'RespostaController@store');
Route::get('/unidade14/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade14/listening/respostas', 'RespostaController@store');
Route::get('/unidade14/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade14/understanding/respostas', 'RespostaController@store');
Route::get('/unidade14/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 15
Route::post('/unidade15/grammar/respostas', 'RespostaController@store');
Route::get('/unidade15/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade15/listening/respostas', 'RespostaController@store');
Route::get('/unidade15/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade15/understanding/respostas', 'RespostaController@store');
Route::get('/unidade15/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 16
Route::post('/unidade16/grammar/respostas', 'RespostaController@store');
Route::get('/unidade16/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade16/listening/respostas', 'RespostaController@store');
Route::get('/unidade16/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade16/understanding/respostas', 'RespostaController@store');
Route::get('/unidade16/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 17
Route::post('/unidade17/grammar/respostas', 'RespostaController@store');
Route::get('/unidade17/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade17/listening/respostas', 'RespostaController@store');
Route::get('/unidade17/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade17/understanding/respostas', 'RespostaController@store');
Route::get('/unidade17/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 18
Route::post('/unidade18/grammar/respostas', 'RespostaController@store');
Route::get('/unidade18/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade18/listening/respostas', 'RespostaController@store');
Route::get('/unidade18/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade18/understanding/respostas', 'RespostaController@store');
Route::get('/unidade18/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 19
Route::post('/unidade19/grammar/respostas', 'RespostaController@store');
Route::get('/unidade19/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade19/listening/respostas', 'RespostaController@store');
Route::get('/unidade19/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade19/understanding/respostas', 'RespostaController@store');
Route::get('/unidade19/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 20
Route::post('/unidade20/grammar/respostas', 'RespostaController@store');
Route::get('/unidade20/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade20/listening/respostas', 'RespostaController@store');
Route::get('/unidade20/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade20/understanding/respostas', 'RespostaController@store');
Route::get('/unidade20/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 21
Route::post('/unidade21/grammar/respostas', 'RespostaController@store');
Route::get('/unidade21/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade21/listening/respostas', 'RespostaController@store');
Route::get('/unidade21/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade21/understanding/respostas', 'RespostaController@store');
Route::get('/unidade21/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 22
Route::post('/unidade22/grammar/respostas', 'RespostaController@store');
Route::get('/unidade22/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade22/listening/respostas', 'RespostaController@store');
Route::get('/unidade22/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade22/understanding/respostas', 'RespostaController@store');
Route::get('/unidade22/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 23
Route::post('/unidade23/grammar/respostas', 'RespostaController@store');
Route::get('/unidade23/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade23/listening/respostas', 'RespostaController@store');
Route::get('/unidade23/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade23/understanding/respostas', 'RespostaController@store');
Route::get('/unidade23/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 24
Route::post('/unidade24/grammar/respostas', 'RespostaController@store');
Route::get('/unidade24/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade24/listening/respostas', 'RespostaController@store');
Route::get('/unidade24/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade24/understanding/respostas', 'RespostaController@store');
Route::get('/unidade24/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 27
Route::post('/unidade27/grammar/respostas', 'RespostaController@store');
Route::get('/unidade27/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade27/listening/respostas', 'RespostaController@store');
Route::get('/unidade27/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade27/understanding/respostas', 'RespostaController@store');
Route::get('/unidade27/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 28
Route::post('/unidade28/grammar/respostas', 'RespostaController@store');
Route::get('/unidade28/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade28/listening/respostas', 'RespostaController@store');
Route::get('/unidade28/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade28/understanding/respostas', 'RespostaController@store');
Route::get('/unidade28/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 29
Route::post('/unidade29/grammar/respostas', 'RespostaController@store');
Route::get('/unidade29/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade29/listening/respostas', 'RespostaController@store');
Route::get('/unidade29/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade29/understanding/respostas', 'RespostaController@store');
Route::get('/unidade29/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 30
Route::post('/unidade30/grammar/respostas', 'RespostaController@store');
Route::get('/unidade30/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade30/listening/respostas', 'RespostaController@store');
Route::get('/unidade30/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/unidade30/understanding/respostas', 'RespostaController@store');
Route::get('/unidade30/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

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






