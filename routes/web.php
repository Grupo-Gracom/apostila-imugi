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
Route::get('/apostila1/intro1/intro', 'HomeController@apostila1Intro')->name('apostila1/intro1/intro');
Route::get('/apostila2/intro2/index', 'HomeController@apostila2Intro')->name('apostila2/intro2/intro');

//UNIDADE 1
Route::get('/apostila1/unidade1/vocabulary', 'HomeController@unidade1Vocabulary')->name('apostila1/unidade1/vocabulary');
Route::get('/apostila1/unidade1/conversation', 'HomeController@unidade1Conversation')->name('apostila1/unidade1/conversation');
Route::get('/apostila1/unidade1/grammar', 'HomeController@unidade1Grammar')->name('apostila1/unidade1/grammar');
Route::get('/apostila1/unidade1/listening', 'HomeController@unidade1Listening')->name('apostila1/unidade1/listening');
Route::get('/apostila1/unidade1/pronunciation', 'HomeController@unidade1Pronunciation')->name('apostila1/unidade1/pronunciation');
Route::get('/apostila1/unidade1/understanding', 'HomeController@unidade1Understanding')->name('apostila1/unidade1/understanding');

//UNIDADE 2
Route::get('/apostila1/unidade2/vocabulary', 'HomeController@unidade2Vocabulary')->name('apostila1/unidade2/vocabulary');
Route::get('/apostila1/unidade2/grammar', 'HomeController@unidade2Grammar')->name('apostila1/unidade2/grammar');
Route::get('/apostila1/unidade2/listening', 'HomeController@unidade2Listening')->name('apostila1/unidade2/listening');
Route::get('/apostila1/unidade2/understanding', 'HomeController@unidade2Understanding')->name('apostila1/unidade2/understanding');

//UNIDADE 3
Route::get('/apostila1/unidade3/vocabulary', 'HomeController@unidade3Vocabulary')->name('apostila1/unidade3/vocabulary');
Route::get('/apostila1/unidade3/conversation', 'HomeController@unidade3Conversation')->name('apostila1/unidade3/conversation');
Route::get('/apostila1/unidade3/grammar', 'HomeController@unidade3Grammar')->name('apostila1/unidade3/grammar');
Route::get('/apostila1/unidade3/pronunciation', 'HomeController@unidade3Pronunciation')->name('apostila1/unidade3/pronunciation');
Route::get('/apostila1/unidade3/listening', 'HomeController@unidade3Listening')->name('apostila1/unidade3/listening');
Route::get('/apostila1/unidade3/understanding', 'HomeController@unidade3Understanding')->name('apostila1/unidade3/understanding');

//UNIDADE 4
Route::get('/apostila1/unidade4/vocabulary', 'HomeController@unidade4Vocabulary')->name('apostila1/unidade4/vocabulary');
Route::get('/apostila1/unidade4/conversation', 'HomeController@unidade4Conversation')->name('apostila1/unidade4/conversation');
Route::get('/apostila1/unidade4/grammar', 'HomeController@unidade4Grammar')->name('apostila1/unidade4/grammar');
Route::get('/apostila1/unidade4/pronunciation', 'HomeController@unidade4Pronunciation')->name('apostila1/unidade4/pronunciation');
Route::get('/apostila1/unidade4/listening', 'HomeController@unidade4Listening')->name('apostila1/unidade4/listening');
Route::get('/apostila1/unidade4/understanding', 'HomeController@unidade4Understanding')->name('apostila1/unidade4/understanding');

//UNIDADE 5
Route::get('/apostila1/unidade5/vocabulary', 'HomeController@unidade5Vocabulary')->name('apostila1/unidade5/vocabulary');
Route::get('/apostila1/unidade5/conversation', 'HomeController@unidade5Conversation')->name('apostila1/unidade5/conversation');
Route::get('/apostila1/unidade5/grammar', 'HomeController@unidade5Grammar')->name('apostila1/unidade5/grammar');
Route::get('/apostila1/unidade5/pronunciation', 'HomeController@unidade5Pronunciation')->name('apostila1/unidade5/pronunciation');
Route::get('/apostila1/unidade5/listening', 'HomeController@unidade5Listening')->name('apostila1/unidade5/listening');
Route::get('/apostila1/unidade5/understanding', 'HomeController@unidade5Understanding')->name('apostila1/unidade5/understanding');

//UNIDADE 6
Route::get('/apostila1/unidade6/vocabulary', 'HomeController@unidade6Vocabulary')->name('apostila1/unidade6/vocabulary');
Route::get('/apostila1/unidade6/conversation', 'HomeController@unidade6Conversation')->name('apostila1/unidade6/conversation');
Route::get('/apostila1/unidade6/grammar', 'HomeController@unidade6Grammar')->name('apostila1/unidade6/grammar');
Route::get('/apostila1/unidade6/pronunciation', 'HomeController@unidade6Pronunciation')->name('apostila1/unidade6/pronunciation');
Route::get('/apostila1/unidade6/listening', 'HomeController@unidade6Listening')->name('apostila1/unidade6/listening');
Route::get('/apostila1/unidade6/understanding', 'HomeController@unidade6Understanding')->name('apostila1/unidade6/understanding');

//UNIDADE 7
Route::get('/apostila1/unidade7/vocabulary', 'HomeController@unidade7Vocabulary')->name('apostila1/unidade7/vocabulary');
Route::get('/apostila1/unidade7/conversation', 'HomeController@unidade7Conversation')->name('apostila1/unidade7/conversation');
Route::get('/apostila1/unidade7/grammar', 'HomeController@unidade7Grammar')->name('apostila1/unidade7/grammar');
Route::get('/apostila1/unidade7/pronunciation', 'HomeController@unidade7Pronunciation')->name('apostila1/unidade7/pronunciation');
Route::get('/apostila1/unidade7/listening', 'HomeController@unidade7Listening')->name('apostila1/unidade7/listening');
Route::get('/apostila1/unidade7/understanding', 'HomeController@unidade7Understanding')->name('apostila1/unidade7/understanding');

//UNIDADE 8
Route::get('/apostila1/unidade8/vocabulary', 'HomeController@unidade8Vocabulary')->name('apostila1/unidade8/vocabulary');
Route::get('/apostila1/unidade8/conversation', 'HomeController@unidade8Conversation')->name('apostila1/unidade8/conversation');
Route::get('/apostila1/unidade8/grammar', 'HomeController@unidade8Grammar')->name('apostila1/unidade8/grammar');
Route::get('/apostila1/unidade8/pronunciation', 'HomeController@unidade8Pronunciation')->name('apostila1/unidade8/pronunciation');
Route::get('/apostila1/unidade8/listening', 'HomeController@unidade8Listening')->name('apostila1/unidade8/listening');
Route::get('/apostila1/unidade8/understanding', 'HomeController@unidade8Understanding')->name('apostila1/unidade8/understanding');

//UNIDADE 9
Route::get('/apostila1/unidade9/vocabulary', 'HomeController@unidade9Vocabulary')->name('apostila1/unidade9/vocabulary');
Route::get('/apostila1/unidade9/conversation', 'HomeController@unidade9Conversation')->name('apostila1/unidade9/conversation');
Route::get('/apostila1/unidade9/grammar', 'HomeController@unidade9Grammar')->name('apostila1/unidade9/grammar');
Route::get('/apostila1/unidade9/pronunciation', 'HomeController@unidade9Pronunciation')->name('apostila1/unidade9/pronunciation');
Route::get('/apostila1/unidade9/listening', 'HomeController@unidade9Listening')->name('apostila1/unidade9/listening');
Route::get('/apostila1/unidade9/understanding', 'HomeController@unidade9Understanding')->name('apostila1/unidade9/understanding');

//UNIDADE 10
Route::get('/apostila1/unidade10/vocabulary', 'HomeController@unidade10Vocabulary')->name('apostila1/unidade10/vocabulary');
Route::get('/apostila1/unidade10/conversation', 'HomeController@unidade10Conversation')->name('apostila1/unidade10/conversation');
Route::get('/apostila1/unidade10/grammar', 'HomeController@unidade10Grammar')->name('apostila1/unidade10/grammar');
Route::get('/apostila1/unidade10/pronunciation', 'HomeController@unidade10Pronunciation')->name('apostila1/unidade10/pronunciation');
Route::get('/apostila1/unidade10/listening', 'HomeController@unidade10Listening')->name('apostila1/unidade10/listening');
Route::get('/apostila1/unidade10/understanding', 'HomeController@unidade10Understanding')->name('apostila1/unidade10/understanding');

//UNIDADE 11
Route::get('/apostila1/unidade11/vocabulary', 'HomeController@unidade11Vocabulary')->name('apostila1/unidade11/vocabulary');
Route::get('/apostila1/unidade11/conversation', 'HomeController@unidade11Conversation')->name('apostila1/unidade11/conversation');
Route::get('/apostila1/unidade11/grammar', 'HomeController@unidade11Grammar')->name('apostila1/unidade11/grammar');
Route::get('/apostila1/unidade11/pronunciation', 'HomeController@unidade11Pronunciation')->name('apostila1/unidade11/pronunciation');
Route::get('/apostila1/unidade11/listening', 'HomeController@unidade11Listening')->name('apostila1/unidade11/listening');
Route::get('/apostila1/unidade11/understanding', 'HomeController@unidade11Understanding')->name('apostila1/unidade11/understanding');

//UNIDADE 12
Route::get('/apostila1/unidade12/vocabulary', 'HomeController@unidade12Vocabulary')->name('apostila1/unidade12/vocabulary');
Route::get('/apostila1/unidade12/conversation', 'HomeController@unidade12Conversation')->name('apostila1/unidade12/conversation');
Route::get('/apostila1/unidade12/grammar', 'HomeController@unidade12Grammar')->name('apostila1/unidade12/grammar');
Route::get('/apostila1/unidade12/pronunciation', 'HomeController@unidade12Pronunciation')->name('apostila1/unidade12/pronunciation');
Route::get('/apostila1/unidade12/listening', 'HomeController@unidade12Listening')->name('apostila1/unidade12/listening');
Route::get('/apostila1/unidade12/understanding', 'HomeController@unidade12Understanding')->name('apostila1/unidade12/understanding');

//UNIDADE 13
Route::get('/apostila1/unidade13/vocabulary', 'HomeController@unidade13Vocabulary')->name('apostila1/unidade13/vocabulary');
Route::get('/apostila1/unidade13/conversation', 'HomeController@unidade13Conversation')->name('apostila1/unidade13/conversation');
Route::get('/apostila1/unidade13/grammar', 'HomeController@unidade13Grammar')->name('apostila1/unidade13/grammar');
Route::get('/apostila1/unidade13/pronunciation', 'HomeController@unidade13Pronunciation')->name('apostila1/unidade13/pronunciation');
Route::get('/apostila1/unidade13/listening', 'HomeController@unidade13Listening')->name('apostila1/unidade13/listening');
Route::get('/apostila1/unidade13/understanding', 'HomeController@unidade13Understanding')->name('apostila1/unidade13/understanding');

//UNIDADE 14
Route::get('/apostila1/unidade14/vocabulary', 'HomeController@unidade14Vocabulary')->name('apostila1/unidade14/vocabulary');
Route::get('/apostila1/unidade14/conversation', 'HomeController@unidade14Conversation')->name('apostila1/unidade14/conversation');
Route::get('/apostila1/unidade14/grammar', 'HomeController@unidade14Grammar')->name('apostila1/unidade14/grammar');
Route::get('/apostila1/unidade14/pronunciation', 'HomeController@unidade14Pronunciation')->name('apostila1/unidade14/pronunciation');
Route::get('/apostila1/unidade14/listening', 'HomeController@unidade14Listening')->name('apostila1/unidade14/listening');
Route::get('/apostila1/unidade14/understanding', 'HomeController@unidade14Understanding')->name('apostila1/unidade14/understanding');

//UNIDADE 15
Route::get('/apostila1/unidade15/vocabulary', 'HomeController@unidade15Vocabulary')->name('apostila1/unidade15/vocabulary');
Route::get('/apostila1/unidade15/conversation', 'HomeController@unidade15Conversation')->name('apostila1/unidade15/conversation');
Route::get('/apostila1/unidade15/grammar', 'HomeController@unidade15Grammar')->name('apostila1/unidade15/grammar');
Route::get('/apostila1/unidade15/pronunciation', 'HomeController@unidade15Pronunciation')->name('apostila1/unidade15/pronunciation');
Route::get('/apostila1/unidade15/listening', 'HomeController@unidade15Listening')->name('apostila1/unidade15/listening');
Route::get('/apostila1/unidade15/understanding', 'HomeController@unidade15Understanding')->name('apostila1/unidade15/understanding');

//UNIDADE 16
Route::get('/apostila1/unidade16/vocabulary', 'HomeController@unidade16Vocabulary')->name('apostila1/unidade16/vocabulary');
Route::get('/apostila1/unidade16/conversation', 'HomeController@unidade16Conversation')->name('apostila1/unidade16/conversation');
Route::get('/apostila1/unidade16/grammar', 'HomeController@unidade16Grammar')->name('apostila1/unidade16/grammar');
Route::get('/apostila1/unidade16/pronunciation', 'HomeController@unidade16Pronunciation')->name('apostila1/unidade16/pronunciation');
Route::get('/apostila1/unidade16/listening', 'HomeController@unidade16Listening')->name('apostila1/unidade16/listening');
Route::get('/apostila1/unidade16/understanding', 'HomeController@unidade16Understanding')->name('apostila1/unidade16/understanding');

//UNIDADE 17
Route::get('/apostila1/unidade17/vocabulary', 'HomeController@unidade17Vocabulary')->name('apostila1/unidade17/vocabulary');
Route::get('/apostila1/unidade17/conversation', 'HomeController@unidade17Conversation')->name('apostila1/unidade17/conversation');
Route::get('/apostila1/unidade17/grammar', 'HomeController@unidade17Grammar')->name('apostila1/unidade17/grammar');
Route::get('/apostila1/unidade17/pronunciation', 'HomeController@unidade17Pronunciation')->name('apostila1/unidade17/pronunciation');
Route::get('/apostila1/unidade17/listening', 'HomeController@unidade17Listening')->name('apostila1/unidade17/listening');
Route::get('/apostila1/unidade17/understanding', 'HomeController@unidade17Understanding')->name('apostila1/unidade17/understanding');

//UNIDADE 18
Route::get('/apostila1/unidade18/vocabulary', 'HomeController@unidade18Vocabulary')->name('apostila1/unidade18/vocabulary');
Route::get('/apostila1/unidade18/conversation', 'HomeController@unidade18Conversation')->name('apostila1/unidade18/conversation');
Route::get('/apostila1/unidade18/grammar', 'HomeController@unidade18Grammar')->name('apostila1/unidade18/grammar');
Route::get('/apostila1/unidade18/pronunciation', 'HomeController@unidade18Pronunciation')->name('apostila1/unidade18/pronunciation');
Route::get('/apostila1/unidade18/listening', 'HomeController@unidade18Listening')->name('apostila1/unidade18/listening');
Route::get('/apostila1/unidade18/understanding', 'HomeController@unidade18Understanding')->name('apostila1/unidade18/understanding');

//UNIDADE 19
Route::get('/apostila1/unidade19/vocabulary', 'HomeController@unidade19Vocabulary')->name('apostila1/unidade19/vocabulary');
Route::get('/apostila1/unidade19/conversation', 'HomeController@unidade19Conversation')->name('apostila1/unidade19/conversation');
Route::get('/apostila1/unidade19/grammar', 'HomeController@unidade19Grammar')->name('apostila1/unidade19/grammar');
Route::get('/apostila1/unidade19/pronunciation', 'HomeController@unidade19Pronunciation')->name('apostila1/unidade19/pronunciation');
Route::get('/apostila1/unidade19/listening', 'HomeController@unidade19Listening')->name('apostila1/unidade19/listening');
Route::get('/apostila1/unidade19/understanding', 'HomeController@unidade19Understanding')->name('apostila1/unidade19/understanding');

//UNIDADE 20
Route::get('/apostila1/unidade20/vocabulary', 'HomeController@unidade20Vocabulary')->name('apostila1/unidade20/vocabulary');
Route::get('/apostila1/unidade20/conversation', 'HomeController@unidade20Conversation')->name('apostila1/unidade20/conversation');
Route::get('/apostila1/unidade20/grammar', 'HomeController@unidade20Grammar')->name('apostila1/unidade20/grammar');
Route::get('/apostila1/unidade20/pronunciation', 'HomeController@unidade20Pronunciation')->name('apostila1/unidade20/pronunciation');
Route::get('/apostila1/unidade20/listening', 'HomeController@unidade20Listening')->name('apostila1/unidade20/listening');
Route::get('/apostila1/unidade20/understanding', 'HomeController@unidade20Understanding')->name('apostila1/unidade20/understanding');

//UNIDADE 21
Route::get('/apostila1/unidade21/vocabulary', 'HomeController@unidade21Vocabulary')->name('apostila1/unidade21/vocabulary');
Route::get('/apostila1/unidade21/conversation', 'HomeController@unidade21Conversation')->name('apostila1/unidade21/conversation');
Route::get('/apostila1/unidade21/grammar', 'HomeController@unidade21Grammar')->name('apostila1/unidade21/grammar');
Route::get('/apostila1/unidade21/pronunciation', 'HomeController@unidade21Pronunciation')->name('apostila1/unidade21/pronunciation');
Route::get('/apostila1/unidade21/listening', 'HomeController@unidade21Listening')->name('apostila1/unidade21/listening');
Route::get('/apostila1/unidade21/understanding', 'HomeController@unidade21Understanding')->name('apostila1/unidade21/understanding');

//UNIDADE 22
Route::get('/apostila1/unidade22/vocabulary', 'HomeController@unidade22Vocabulary')->name('apostila1/unidade22/vocabulary');
Route::get('/apostila1/unidade22/conversation', 'HomeController@unidade22Conversation')->name('apostila1/unidade22/conversation');
Route::get('/apostila1/unidade22/grammar', 'HomeController@unidade22Grammar')->name('apostila1/unidade22/grammar');
Route::get('/apostila1/unidade22/pronunciation', 'HomeController@unidade22Pronunciation')->name('apostila1/unidade22/pronunciation');
Route::get('/apostila1/unidade22/listening', 'HomeController@unidade22Listening')->name('apostila1/unidade22/listening');
Route::get('/apostila1/unidade22/understanding', 'HomeController@unidade22Understanding')->name('apostila1/unidade22/understanding');

//UNIDADE 23
Route::get('/apostila1/unidade23/vocabulary', 'HomeController@unidade23Vocabulary')->name('apostila1/unidade23/vocabulary');
Route::get('/apostila1/unidade23/conversation', 'HomeController@unidade23Conversation')->name('apostila1/unidade23/conversation');
Route::get('/apostila1/unidade23/grammar', 'HomeController@unidade23Grammar')->name('apostila1/unidade23/grammar');
Route::get('/apostila1/unidade23/pronunciation', 'HomeController@unidade23Pronunciation')->name('apostila1/unidade23/pronunciation');
Route::get('/apostila1/unidade23/listening', 'HomeController@unidade23Listening')->name('apostila1/unidade23/listening');
Route::get('/apostila1/unidade23/understanding', 'HomeController@unidade23Understanding')->name('apostila1/unidade23/understanding');

//UNIDADE 24
Route::get('/apostila1/unidade24/vocabulary', 'HomeController@unidade24Vocabulary')->name('apostila1/unidade24/vocabulary');
Route::get('/apostila1/unidade24/conversation', 'HomeController@unidade24Conversation')->name('apostila1/unidade24/conversation');
Route::get('/apostila1/unidade24/grammar', 'HomeController@unidade24Grammar')->name('apostila1/unidade24/grammar');
Route::get('/apostila1/unidade24/pronunciation', 'HomeController@unidade24Pronunciation')->name('apostila1/unidade24/pronunciation');
Route::get('/apostila1/unidade24/listening', 'HomeController@unidade24Listening')->name('apostila1/unidade24/listening');
Route::get('/apostila1/unidade24/understanding', 'HomeController@unidade24Understanding')->name('apostila1/unidade24/understanding');

//UNIDADE 25
Route::get('/apostila1/unidade25/vocabulary', 'HomeController@unidade25Vocabulary')->name('apostila1/unidade25/vocabulary');
Route::get('/apostila1/unidade25/conversation', 'HomeController@unidade25Conversation')->name('apostila1/unidade25/conversation');
Route::get('/apostila1/unidade25/grammar', 'HomeController@unidade25Grammar')->name('apostila1/unidade25/grammar');
Route::get('/apostila1/unidade25/pronunciation', 'HomeController@unidade25Pronunciation')->name('apostila1/unidade25/pronunciation');
Route::get('/apostila1/unidade25/listening', 'HomeController@unidade25Listening')->name('apostila1/unidade25/listening');
Route::get('/apostila1/unidade25/understanding', 'HomeController@unidade25Understanding')->name('apostila1/unidade25/understanding');

//UNIDADE 25
Route::get('/apostila1/unidade26/vocabulary', 'HomeController@unidade26Vocabulary')->name('apostila1/unidade26/vocabulary');
Route::get('/apostila1/unidade26/conversation', 'HomeController@unidade26Conversation')->name('apostila1/unidade26/conversation');
Route::get('/apostila1/unidade26/grammar', 'HomeController@unidade26Grammar')->name('apostila1/unidade26/grammar');
Route::get('/apostila1/unidade26/pronunciation', 'HomeController@unidade26Pronunciation')->name('apostila1/unidade26/pronunciation');
Route::get('/apostila1/unidade26/listening', 'HomeController@unidade26Listening')->name('apostila1/unidade26/listening');
Route::get('/apostila1/unidade26/understanding', 'HomeController@unidade26Understanding')->name('apostila1/unidade26/understanding');

//UNIDADE 27
Route::get('/apostila1/unidade27/vocabulary', 'HomeController@unidade27Vocabulary')->name('apostila1/unidade27/vocabulary');
Route::get('/apostila1/unidade27/conversation', 'HomeController@unidade27Conversation')->name('apostila1/unidade27/conversation');
Route::get('/apostila1/unidade27/grammar', 'HomeController@unidade27Grammar')->name('apostila1/unidade27/grammar');
Route::get('/apostila1/unidade27/pronunciation', 'HomeController@unidade27Pronunciation')->name('apostila1/unidade27/pronunciation');
Route::get('/apostila1/unidade27/listening', 'HomeController@unidade27Listening')->name('apostila1/unidade27/listening');
Route::get('/apostila1/unidade27/understanding', 'HomeController@unidade27Understanding')->name('apostila1/unidade27/understanding');

//UNIDADE 28
Route::get('/apostila1/unidade28/vocabulary', 'HomeController@unidade28Vocabulary')->name('apostila1/unidade28/vocabulary');
Route::get('/apostila1/unidade28/conversation', 'HomeController@unidade28Conversation')->name('apostila1/unidade28/conversation');
Route::get('/apostila1/unidade28/grammar', 'HomeController@unidade28Grammar')->name('apostila1/unidade28/grammar');
Route::get('/apostila1/unidade28/pronunciation', 'HomeController@unidade28Pronunciation')->name('apostila1/unidade28/pronunciation');
Route::get('/apostila1/unidade28/listening', 'HomeController@unidade28Listening')->name('apostila1/unidade28/listening');
Route::get('/apostila1/unidade28/understanding', 'HomeController@unidade28Understanding')->name('apostila1/unidade28/understanding');

//UNIDADE 29
Route::get('/apostila1/unidade29/vocabulary', 'HomeController@unidade29Vocabulary')->name('apostila1/unidade29/vocabulary');
Route::get('/apostila1/unidade29/conversation', 'HomeController@unidade29Conversation')->name('apostila1/unidade29/conversation');
Route::get('/apostila1/unidade29/grammar', 'HomeController@unidade29Grammar')->name('apostila1/unidade29/grammar');
Route::get('/apostila1/unidade29/pronunciation', 'HomeController@unidade29Pronunciation')->name('apostila1/unidade29/pronunciation');
Route::get('/apostila1/unidade29/listening', 'HomeController@unidade29Listening')->name('apostila1/unidade29/listening');
Route::get('/apostila1/unidade29/understanding', 'HomeController@unidade29Understanding')->name('apostila1/unidade29/understanding');

//UNIDADE 30
Route::get('/apostila1/unidade30/vocabulary', 'HomeController@unidade30Vocabulary')->name('apostila1/unidade30/vocabulary');
Route::get('/apostila1/unidade30/conversation', 'HomeController@unidade30Conversation')->name('apostila1/unidade30/conversation');
Route::get('/apostila1/unidade30/grammar', 'HomeController@unidade30Grammar')->name('apostila1/unidade30/grammar');
Route::get('/apostila1/unidade30/pronunciation', 'HomeController@unidade30Pronunciation')->name('apostila1/unidade30/pronunciation');
Route::get('/apostila1/unidade30/listening', 'HomeController@unidade30Listening')->name('apostila1/unidade30/listening');
Route::get('/apostila1/unidade30/understanding', 'HomeController@unidade30Understanding')->name('apostila1/unidade30/understanding');

//UNIDADE 31
Route::get('/apostila1/unidade31/vocabulary', 'HomeController@unidade31Vocabulary')->name('apostila1/unidade31/vocabulary');
Route::get('/apostila1/unidade31/conversation', 'HomeController@unidade31Conversation')->name('apostila1/unidade31/conversation');
Route::get('/apostila1/unidade31/grammar', 'HomeController@unidade31Grammar')->name('apostila1/unidade31/grammar');
Route::get('/apostila1/unidade31/pronunciation', 'HomeController@unidade31Pronunciation')->name('apostila1/unidade31/pronunciation');
Route::get('/apostila1/unidade31/listening', 'HomeController@unidade31Listening')->name('apostila1/unidade31/listening');
Route::get('/apostila1/unidade31/understanding', 'HomeController@unidade31Understanding')->name('apostila1/unidade31/understanding');

//UNIDADE 32
Route::get('/apostila1/unidade32/vocabulary', 'HomeController@unidade32Vocabulary')->name('apostila1/unidade32/vocabulary');
Route::get('/apostila1/unidade32/conversation', 'HomeController@unidade32Conversation')->name('apostila1/unidade32/conversation');
Route::get('/apostila1/unidade32/grammar', 'HomeController@unidade32Grammar')->name('apostila1/unidade32/grammar');
Route::get('/apostila1/unidade32/pronunciation', 'HomeController@unidade32Pronunciation')->name('apostila1/unidade32/pronunciation');
Route::get('/apostila1/unidade32/listening', 'HomeController@unidade32Listening')->name('apostila1/unidade32/listening');
Route::get('/apostila1/unidade32/understanding', 'HomeController@unidade32Understanding')->name('apostila1/unidade32/understanding');

/* ROTAS PARA O CRUD */
//UNIDADE 1
Route::post('/apostila1/unidade1/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade1/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade1/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade1/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade1/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade1/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 2
Route::post('/apostila1/unidade2/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade2/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade2/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade2/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade2/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade2/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 3
Route::post('/apostila1/unidade3/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade3/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade3/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade3/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade3/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade3/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 4
Route::post('/apostila1/unidade4/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade4/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade4/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade4/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade4/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade4/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 5
Route::post('/apostila1/unidade5/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade5/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade5/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade5/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade5/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade5/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 6
Route::post('/apostila1/unidade6/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade6/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade6/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade6/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade6/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade6/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 7
Route::post('/apostila1/unidade7/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade7/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade7/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade7/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade7/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade7/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 8
Route::post('/apostila1/unidade8/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade8/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade8/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade8/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade8/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade8/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 9
Route::post('/apostila1/unidade9/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade9/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade9/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade9/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade9/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade9/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 10
Route::post('/apostila1/unidade10/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade10/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade10/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade10/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade10/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade10/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 11
Route::post('/apostila1/unidade11/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade11/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade11/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade11/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade11/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade11/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 12
Route::post('/apostila1/unidade12/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade12/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade12/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade12/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade12/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade12/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 13
Route::post('/apostila1/unidade13/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade13/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade13/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade13/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade13/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade13/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 14
Route::post('/apostila1/unidade14/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade14/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade14/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade14/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade14/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade14/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 15
Route::post('/apostila1/unidade15/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade15/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade15/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade15/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade15/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade15/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 16
Route::post('/apostila1/unidade16/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade16/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade16/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade16/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade16/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade16/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 17
Route::post('/apostila1/unidade17/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade17/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade17/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade17/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade17/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade17/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 18
Route::post('/apostila1/unidade18/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade18/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade18/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade18/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade18/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade18/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 19
Route::post('/apostila1/unidade19/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade19/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade19/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade19/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade19/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade19/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 20
Route::post('/apostila1/unidade20/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade20/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade20/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade20/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade20/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade20/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 21
Route::post('/apostila1/unidade21/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade21/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade21/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade21/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade21/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade21/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 22
Route::post('/apostila1/unidade22/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade22/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade22/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade22/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade22/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade22/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 23
Route::post('/apostila1/unidade23/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade23/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade23/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade23/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade23/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade23/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 24
Route::post('/apostila1/unidade24/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade24/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade24/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade24/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade24/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade24/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 25
Route::post('/apostila1/unidade25/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade25/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade25/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade25/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade25/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade25/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 26
Route::post('/apostila1/unidade26/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade26/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade26/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade26/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade26/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade26/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 27
Route::post('/apostila1/unidade27/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade27/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade27/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade27/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade27/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade27/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 28
Route::post('/apostila1/unidade28/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade28/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade28/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade28/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade28/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade28/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 29
Route::post('/apostila1/unidade29/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade29/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade29/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade29/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade29/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade29/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 30
Route::post('/apostila1/unidade30/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade30/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade30/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade30/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade30/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade30/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 31
Route::post('/apostila1/unidade31/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade31/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade31/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade31/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade31/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade31/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 32
Route::post('/apostila1/unidade32/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade32/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade32/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade32/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade32/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade32/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

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






