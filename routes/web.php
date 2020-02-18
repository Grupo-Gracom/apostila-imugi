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
// Route::get('/apostila2/intro2/index', 'Apostila1Controller@apostila2Intro')->name('apostila2Intro');

//UNIDADE 1
Route::get('/apostila1/unidade1/vocabulary', 'Apostila1Controller@unidade1Vocabulary')->name('apostila1/unidade1/vocabulary');
Route::get('/apostila1/unidade1/conversation', 'Apostila1Controller@unidade1Conversation')->name('apostila1/unidade1/conversation');
Route::get('/apostila1/unidade1/grammar', 'Apostila1Controller@unidade1Grammar')->name('apostila1/unidade1/grammar');
Route::get('/apostila1/unidade1/listening', 'Apostila1Controller@unidade1Listening')->name('apostila1/unidade1/listening');
Route::get('/apostila1/unidade1/pronunciation', 'Apostila1Controller@unidade1Pronunciation')->name('apostila1/unidade1/pronunciation');
Route::get('/apostila1/unidade1/understanding', 'Apostila1Controller@unidade1Understanding')->name('apostila1/unidade1/understanding');

//UNIDADE 2
Route::get('/apostila1/unidade2/vocabulary', 'Apostila1Controller@unidade2Vocabulary')->name('apostila1/unidade2/vocabulary');
Route::get('/apostila1/unidade2/grammar', 'Apostila1Controller@unidade2Grammar')->name('apostila1/unidade2/grammar');
Route::get('/apostila1/unidade2/listening', 'Apostila1Controller@unidade2Listening')->name('apostila1/unidade2/listening');
Route::get('/apostila1/unidade2/understanding', 'Apostila1Controller@unidade2Understanding')->name('apostila1/unidade2/understanding');

//UNIDADE 3
Route::get('/apostila1/unidade3/vocabulary', 'Apostila1Controller@unidade3Vocabulary')->name('apostila1/unidade3/vocabulary');
Route::get('/apostila1/unidade3/conversation', 'Apostila1Controller@unidade3Conversation')->name('apostila1/unidade3/conversation');
Route::get('/apostila1/unidade3/grammar', 'Apostila1Controller@unidade3Grammar')->name('apostila1/unidade3/grammar');
Route::get('/apostila1/unidade3/pronunciation', 'Apostila1Controller@unidade3Pronunciation')->name('apostila1/unidade3/pronunciation');
Route::get('/apostila1/unidade3/listening', 'Apostila1Controller@unidade3Listening')->name('apostila1/unidade3/listening');
Route::get('/apostila1/unidade3/understanding', 'Apostila1Controller@unidade3Understanding')->name('apostila1/unidade3/understanding');

//UNIDADE 4
Route::get('/apostila1/unidade4/vocabulary', 'Apostila1Controller@unidade4Vocabulary')->name('apostila1/unidade4/vocabulary');
Route::get('/apostila1/unidade4/conversation', 'Apostila1Controller@unidade4Conversation')->name('apostila1/unidade4/conversation');
Route::get('/apostila1/unidade4/grammar', 'Apostila1Controller@unidade4Grammar')->name('apostila1/unidade4/grammar');
Route::get('/apostila1/unidade4/pronunciation', 'Apostila1Controller@unidade4Pronunciation')->name('apostila1/unidade4/pronunciation');
Route::get('/apostila1/unidade4/listening', 'Apostila1Controller@unidade4Listening')->name('apostila1/unidade4/listening');
Route::get('/apostila1/unidade4/understanding', 'Apostila1Controller@unidade4Understanding')->name('apostila1/unidade4/understanding');

//UNIDADE 5
Route::get('/apostila1/unidade5/vocabulary', 'Apostila1Controller@unidade5Vocabulary')->name('apostila1/unidade5/vocabulary');
Route::get('/apostila1/unidade5/conversation', 'Apostila1Controller@unidade5Conversation')->name('apostila1/unidade5/conversation');
Route::get('/apostila1/unidade5/grammar', 'Apostila1Controller@unidade5Grammar')->name('apostila1/unidade5/grammar');
Route::get('/apostila1/unidade5/pronunciation', 'Apostila1Controller@unidade5Pronunciation')->name('apostila1/unidade5/pronunciation');
Route::get('/apostila1/unidade5/listening', 'Apostila1Controller@unidade5Listening')->name('apostila1/unidade5/listening');
Route::get('/apostila1/unidade5/understanding', 'Apostila1Controller@unidade5Understanding')->name('apostila1/unidade5/understanding');

//UNIDADE 6
Route::get('/apostila1/unidade6/vocabulary', 'Apostila1Controller@unidade6Vocabulary')->name('apostila1/unidade6/vocabulary');
Route::get('/apostila1/unidade6/conversation', 'Apostila1Controller@unidade6Conversation')->name('apostila1/unidade6/conversation');
Route::get('/apostila1/unidade6/grammar', 'Apostila1Controller@unidade6Grammar')->name('apostila1/unidade6/grammar');
Route::get('/apostila1/unidade6/pronunciation', 'Apostila1Controller@unidade6Pronunciation')->name('apostila1/unidade6/pronunciation');
Route::get('/apostila1/unidade6/listening', 'Apostila1Controller@unidade6Listening')->name('apostila1/unidade6/listening');
Route::get('/apostila1/unidade6/understanding', 'Apostila1Controller@unidade6Understanding')->name('apostila1/unidade6/understanding');

//UNIDADE 7
Route::get('/apostila1/unidade7/vocabulary', 'Apostila1Controller@unidade7Vocabulary')->name('apostila1/unidade7/vocabulary');
Route::get('/apostila1/unidade7/conversation', 'Apostila1Controller@unidade7Conversation')->name('apostila1/unidade7/conversation');
Route::get('/apostila1/unidade7/grammar', 'Apostila1Controller@unidade7Grammar')->name('apostila1/unidade7/grammar');
Route::get('/apostila1/unidade7/pronunciation', 'Apostila1Controller@unidade7Pronunciation')->name('apostila1/unidade7/pronunciation');
Route::get('/apostila1/unidade7/listening', 'Apostila1Controller@unidade7Listening')->name('apostila1/unidade7/listening');
Route::get('/apostila1/unidade7/understanding', 'Apostila1Controller@unidade7Understanding')->name('apostila1/unidade7/understanding');

//UNIDADE 8
Route::get('/apostila1/unidade8/vocabulary', 'Apostila1Controller@unidade8Vocabulary')->name('apostila1/unidade8/vocabulary');
Route::get('/apostila1/unidade8/conversation', 'Apostila1Controller@unidade8Conversation')->name('apostila1/unidade8/conversation');
Route::get('/apostila1/unidade8/grammar', 'Apostila1Controller@unidade8Grammar')->name('apostila1/unidade8/grammar');
Route::get('/apostila1/unidade8/pronunciation', 'Apostila1Controller@unidade8Pronunciation')->name('apostila1/unidade8/pronunciation');
Route::get('/apostila1/unidade8/listening', 'Apostila1Controller@unidade8Listening')->name('apostila1/unidade8/listening');
Route::get('/apostila1/unidade8/understanding', 'Apostila1Controller@unidade8Understanding')->name('apostila1/unidade8/understanding');

//UNIDADE 9
Route::get('/apostila1/unidade9/vocabulary', 'Apostila1Controller@unidade9Vocabulary')->name('apostila1/unidade9/vocabulary');
Route::get('/apostila1/unidade9/conversation', 'Apostila1Controller@unidade9Conversation')->name('apostila1/unidade9/conversation');
Route::get('/apostila1/unidade9/grammar', 'Apostila1Controller@unidade9Grammar')->name('apostila1/unidade9/grammar');
Route::get('/apostila1/unidade9/pronunciation', 'Apostila1Controller@unidade9Pronunciation')->name('apostila1/unidade9/pronunciation');
Route::get('/apostila1/unidade9/listening', 'Apostila1Controller@unidade9Listening')->name('apostila1/unidade9/listening');
Route::get('/apostila1/unidade9/understanding', 'Apostila1Controller@unidade9Understanding')->name('apostila1/unidade9/understanding');

//UNIDADE 10
Route::get('/apostila1/unidade10/vocabulary', 'Apostila1Controller@unidade10Vocabulary')->name('apostila1/unidade10/vocabulary');
Route::get('/apostila1/unidade10/conversation', 'Apostila1Controller@unidade10Conversation')->name('apostila1/unidade10/conversation');
Route::get('/apostila1/unidade10/grammar', 'Apostila1Controller@unidade10Grammar')->name('apostila1/unidade10/grammar');
Route::get('/apostila1/unidade10/pronunciation', 'Apostila1Controller@unidade10Pronunciation')->name('apostila1/unidade10/pronunciation');
Route::get('/apostila1/unidade10/listening', 'Apostila1Controller@unidade10Listening')->name('apostila1/unidade10/listening');
Route::get('/apostila1/unidade10/understanding', 'Apostila1Controller@unidade10Understanding')->name('apostila1/unidade10/understanding');

//UNIDADE 11
Route::get('/apostila1/unidade11/vocabulary', 'Apostila1Controller@unidade11Vocabulary')->name('apostila1/unidade11/vocabulary');
Route::get('/apostila1/unidade11/conversation', 'Apostila1Controller@unidade11Conversation')->name('apostila1/unidade11/conversation');
Route::get('/apostila1/unidade11/grammar', 'Apostila1Controller@unidade11Grammar')->name('apostila1/unidade11/grammar');
Route::get('/apostila1/unidade11/pronunciation', 'Apostila1Controller@unidade11Pronunciation')->name('apostila1/unidade11/pronunciation');
Route::get('/apostila1/unidade11/listening', 'Apostila1Controller@unidade11Listening')->name('apostila1/unidade11/listening');
Route::get('/apostila1/unidade11/understanding', 'Apostila1Controller@unidade11Understanding')->name('apostila1/unidade11/understanding');

//UNIDADE 12
Route::get('/apostila1/unidade12/vocabulary', 'Apostila1Controller@unidade12Vocabulary')->name('apostila1/unidade12/vocabulary');
Route::get('/apostila1/unidade12/conversation', 'Apostila1Controller@unidade12Conversation')->name('apostila1/unidade12/conversation');
Route::get('/apostila1/unidade12/grammar', 'Apostila1Controller@unidade12Grammar')->name('apostila1/unidade12/grammar');
Route::get('/apostila1/unidade12/pronunciation', 'Apostila1Controller@unidade12Pronunciation')->name('apostila1/unidade12/pronunciation');
Route::get('/apostila1/unidade12/listening', 'Apostila1Controller@unidade12Listening')->name('apostila1/unidade12/listening');
Route::get('/apostila1/unidade12/understanding', 'Apostila1Controller@unidade12Understanding')->name('apostila1/unidade12/understanding');

//UNIDADE 13
Route::get('/apostila1/unidade13/vocabulary', 'Apostila1Controller@unidade13Vocabulary')->name('apostila1/unidade13/vocabulary');
Route::get('/apostila1/unidade13/conversation', 'Apostila1Controller@unidade13Conversation')->name('apostila1/unidade13/conversation');
Route::get('/apostila1/unidade13/grammar', 'Apostila1Controller@unidade13Grammar')->name('apostila1/unidade13/grammar');
Route::get('/apostila1/unidade13/pronunciation', 'Apostila1Controller@unidade13Pronunciation')->name('apostila1/unidade13/pronunciation');
Route::get('/apostila1/unidade13/listening', 'Apostila1Controller@unidade13Listening')->name('apostila1/unidade13/listening');
Route::get('/apostila1/unidade13/understanding', 'Apostila1Controller@unidade13Understanding')->name('apostila1/unidade13/understanding');

//UNIDADE 14
Route::get('/apostila1/unidade14/vocabulary', 'Apostila1Controller@unidade14Vocabulary')->name('apostila1/unidade14/vocabulary');
Route::get('/apostila1/unidade14/conversation', 'Apostila1Controller@unidade14Conversation')->name('apostila1/unidade14/conversation');
Route::get('/apostila1/unidade14/grammar', 'Apostila1Controller@unidade14Grammar')->name('apostila1/unidade14/grammar');
Route::get('/apostila1/unidade14/pronunciation', 'Apostila1Controller@unidade14Pronunciation')->name('apostila1/unidade14/pronunciation');
Route::get('/apostila1/unidade14/listening', 'Apostila1Controller@unidade14Listening')->name('apostila1/unidade14/listening');
Route::get('/apostila1/unidade14/understanding', 'Apostila1Controller@unidade14Understanding')->name('apostila1/unidade14/understanding');

//UNIDADE 15
Route::get('/apostila1/unidade15/vocabulary', 'Apostila1Controller@unidade15Vocabulary')->name('apostila1/unidade15/vocabulary');
Route::get('/apostila1/unidade15/conversation', 'Apostila1Controller@unidade15Conversation')->name('apostila1/unidade15/conversation');
Route::get('/apostila1/unidade15/grammar', 'Apostila1Controller@unidade15Grammar')->name('apostila1/unidade15/grammar');
Route::get('/apostila1/unidade15/pronunciation', 'Apostila1Controller@unidade15Pronunciation')->name('apostila1/unidade15/pronunciation');
Route::get('/apostila1/unidade15/listening', 'Apostila1Controller@unidade15Listening')->name('apostila1/unidade15/listening');
Route::get('/apostila1/unidade15/understanding', 'Apostila1Controller@unidade15Understanding')->name('apostila1/unidade15/understanding');

//UNIDADE 16
Route::get('/apostila1/unidade16/vocabulary', 'Apostila1Controller@unidade16Vocabulary')->name('apostila1/unidade16/vocabulary');
Route::get('/apostila1/unidade16/conversation', 'Apostila1Controller@unidade16Conversation')->name('apostila1/unidade16/conversation');
Route::get('/apostila1/unidade16/grammar', 'Apostila1Controller@unidade16Grammar')->name('apostila1/unidade16/grammar');
Route::get('/apostila1/unidade16/pronunciation', 'Apostila1Controller@unidade16Pronunciation')->name('apostila1/unidade16/pronunciation');
Route::get('/apostila1/unidade16/listening', 'Apostila1Controller@unidade16Listening')->name('apostila1/unidade16/listening');
Route::get('/apostila1/unidade16/understanding', 'Apostila1Controller@unidade16Understanding')->name('apostila1/unidade16/understanding');

//UNIDADE 17
Route::get('/apostila1/unidade17/vocabulary', 'Apostila1Controller@unidade17Vocabulary')->name('apostila1/unidade17/vocabulary');
Route::get('/apostila1/unidade17/conversation', 'Apostila1Controller@unidade17Conversation')->name('apostila1/unidade17/conversation');
Route::get('/apostila1/unidade17/grammar', 'Apostila1Controller@unidade17Grammar')->name('apostila1/unidade17/grammar');
Route::get('/apostila1/unidade17/pronunciation', 'Apostila1Controller@unidade17Pronunciation')->name('apostila1/unidade17/pronunciation');
Route::get('/apostila1/unidade17/listening', 'Apostila1Controller@unidade17Listening')->name('apostila1/unidade17/listening');
Route::get('/apostila1/unidade17/understanding', 'Apostila1Controller@unidade17Understanding')->name('apostila1/unidade17/understanding');

//UNIDADE 18
Route::get('/apostila1/unidade18/vocabulary', 'Apostila1Controller@unidade18Vocabulary')->name('apostila1/unidade18/vocabulary');
Route::get('/apostila1/unidade18/conversation', 'Apostila1Controller@unidade18Conversation')->name('apostila1/unidade18/conversation');
Route::get('/apostila1/unidade18/grammar', 'Apostila1Controller@unidade18Grammar')->name('apostila1/unidade18/grammar');
Route::get('/apostila1/unidade18/pronunciation', 'Apostila1Controller@unidade18Pronunciation')->name('apostila1/unidade18/pronunciation');
Route::get('/apostila1/unidade18/listening', 'Apostila1Controller@unidade18Listening')->name('apostila1/unidade18/listening');
Route::get('/apostila1/unidade18/understanding', 'Apostila1Controller@unidade18Understanding')->name('apostila1/unidade18/understanding');

//UNIDADE 19
Route::get('/apostila1/unidade19/vocabulary', 'Apostila1Controller@unidade19Vocabulary')->name('apostila1/unidade19/vocabulary');
Route::get('/apostila1/unidade19/conversation', 'Apostila1Controller@unidade19Conversation')->name('apostila1/unidade19/conversation');
Route::get('/apostila1/unidade19/grammar', 'Apostila1Controller@unidade19Grammar')->name('apostila1/unidade19/grammar');
Route::get('/apostila1/unidade19/pronunciation', 'Apostila1Controller@unidade19Pronunciation')->name('apostila1/unidade19/pronunciation');
Route::get('/apostila1/unidade19/listening', 'Apostila1Controller@unidade19Listening')->name('apostila1/unidade19/listening');
Route::get('/apostila1/unidade19/understanding', 'Apostila1Controller@unidade19Understanding')->name('apostila1/unidade19/understanding');

//UNIDADE 20
Route::get('/apostila1/unidade20/vocabulary', 'Apostila1Controller@unidade20Vocabulary')->name('apostila1/unidade20/vocabulary');
Route::get('/apostila1/unidade20/conversation', 'Apostila1Controller@unidade20Conversation')->name('apostila1/unidade20/conversation');
Route::get('/apostila1/unidade20/grammar', 'Apostila1Controller@unidade20Grammar')->name('apostila1/unidade20/grammar');
Route::get('/apostila1/unidade20/pronunciation', 'Apostila1Controller@unidade20Pronunciation')->name('apostila1/unidade20/pronunciation');
Route::get('/apostila1/unidade20/listening', 'Apostila1Controller@unidade20Listening')->name('apostila1/unidade20/listening');
Route::get('/apostila1/unidade20/understanding', 'Apostila1Controller@unidade20Understanding')->name('apostila1/unidade20/understanding');

//UNIDADE 21
Route::get('/apostila1/unidade21/vocabulary', 'Apostila1Controller@unidade21Vocabulary')->name('apostila1/unidade21/vocabulary');
Route::get('/apostila1/unidade21/conversation', 'Apostila1Controller@unidade21Conversation')->name('apostila1/unidade21/conversation');
Route::get('/apostila1/unidade21/grammar', 'Apostila1Controller@unidade21Grammar')->name('apostila1/unidade21/grammar');
Route::get('/apostila1/unidade21/pronunciation', 'Apostila1Controller@unidade21Pronunciation')->name('apostila1/unidade21/pronunciation');
Route::get('/apostila1/unidade21/listening', 'Apostila1Controller@unidade21Listening')->name('apostila1/unidade21/listening');
Route::get('/apostila1/unidade21/understanding', 'Apostila1Controller@unidade21Understanding')->name('apostila1/unidade21/understanding');

//UNIDADE 22
Route::get('/apostila1/unidade22/vocabulary', 'Apostila1Controller@unidade22Vocabulary')->name('apostila1/unidade22/vocabulary');
Route::get('/apostila1/unidade22/conversation', 'Apostila1Controller@unidade22Conversation')->name('apostila1/unidade22/conversation');
Route::get('/apostila1/unidade22/grammar', 'Apostila1Controller@unidade22Grammar')->name('apostila1/unidade22/grammar');
Route::get('/apostila1/unidade22/pronunciation', 'Apostila1Controller@unidade22Pronunciation')->name('apostila1/unidade22/pronunciation');
Route::get('/apostila1/unidade22/listening', 'Apostila1Controller@unidade22Listening')->name('apostila1/unidade22/listening');
Route::get('/apostila1/unidade22/understanding', 'Apostila1Controller@unidade22Understanding')->name('apostila1/unidade22/understanding');

//UNIDADE 23
Route::get('/apostila1/unidade23/vocabulary', 'Apostila1Controller@unidade23Vocabulary')->name('apostila1/unidade23/vocabulary');
Route::get('/apostila1/unidade23/conversation', 'Apostila1Controller@unidade23Conversation')->name('apostila1/unidade23/conversation');
Route::get('/apostila1/unidade23/grammar', 'Apostila1Controller@unidade23Grammar')->name('apostila1/unidade23/grammar');
Route::get('/apostila1/unidade23/pronunciation', 'Apostila1Controller@unidade23Pronunciation')->name('apostila1/unidade23/pronunciation');
Route::get('/apostila1/unidade23/listening', 'Apostila1Controller@unidade23Listening')->name('apostila1/unidade23/listening');
Route::get('/apostila1/unidade23/understanding', 'Apostila1Controller@unidade23Understanding')->name('apostila1/unidade23/understanding');

//UNIDADE 24
Route::get('/apostila1/unidade24/vocabulary', 'Apostila1Controller@unidade24Vocabulary')->name('apostila1/unidade24/vocabulary');
Route::get('/apostila1/unidade24/conversation', 'Apostila1Controller@unidade24Conversation')->name('apostila1/unidade24/conversation');
Route::get('/apostila1/unidade24/grammar', 'Apostila1Controller@unidade24Grammar')->name('apostila1/unidade24/grammar');
Route::get('/apostila1/unidade24/pronunciation', 'Apostila1Controller@unidade24Pronunciation')->name('apostila1/unidade24/pronunciation');
Route::get('/apostila1/unidade24/listening', 'Apostila1Controller@unidade24Listening')->name('apostila1/unidade24/listening');
Route::get('/apostila1/unidade24/understanding', 'Apostila1Controller@unidade24Understanding')->name('apostila1/unidade24/understanding');

//UNIDADE 25
Route::get('/apostila1/unidade25/vocabulary', 'Apostila1Controller@unidade25Vocabulary')->name('apostila1/unidade25/vocabulary');
Route::get('/apostila1/unidade25/conversation', 'Apostila1Controller@unidade25Conversation')->name('apostila1/unidade25/conversation');
Route::get('/apostila1/unidade25/grammar', 'Apostila1Controller@unidade25Grammar')->name('apostila1/unidade25/grammar');
Route::get('/apostila1/unidade25/pronunciation', 'Apostila1Controller@unidade25Pronunciation')->name('apostila1/unidade25/pronunciation');
Route::get('/apostila1/unidade25/listening', 'Apostila1Controller@unidade25Listening')->name('apostila1/unidade25/listening');
Route::get('/apostila1/unidade25/understanding', 'Apostila1Controller@unidade25Understanding')->name('apostila1/unidade25/understanding');

//UNIDADE 25
Route::get('/apostila1/unidade26/vocabulary', 'Apostila1Controller@unidade26Vocabulary')->name('apostila1/unidade26/vocabulary');
Route::get('/apostila1/unidade26/conversation', 'Apostila1Controller@unidade26Conversation')->name('apostila1/unidade26/conversation');
Route::get('/apostila1/unidade26/grammar', 'Apostila1Controller@unidade26Grammar')->name('apostila1/unidade26/grammar');
Route::get('/apostila1/unidade26/pronunciation', 'Apostila1Controller@unidade26Pronunciation')->name('apostila1/unidade26/pronunciation');
Route::get('/apostila1/unidade26/listening', 'Apostila1Controller@unidade26Listening')->name('apostila1/unidade26/listening');
Route::get('/apostila1/unidade26/understanding', 'Apostila1Controller@unidade26Understanding')->name('apostila1/unidade26/understanding');

//UNIDADE 27
Route::get('/apostila1/unidade27/vocabulary', 'Apostila1Controller@unidade27Vocabulary')->name('apostila1/unidade27/vocabulary');
Route::get('/apostila1/unidade27/conversation', 'Apostila1Controller@unidade27Conversation')->name('apostila1/unidade27/conversation');
Route::get('/apostila1/unidade27/grammar', 'Apostila1Controller@unidade27Grammar')->name('apostila1/unidade27/grammar');
Route::get('/apostila1/unidade27/pronunciation', 'Apostila1Controller@unidade27Pronunciation')->name('apostila1/unidade27/pronunciation');
Route::get('/apostila1/unidade27/listening', 'Apostila1Controller@unidade27Listening')->name('apostila1/unidade27/listening');
Route::get('/apostila1/unidade27/understanding', 'Apostila1Controller@unidade27Understanding')->name('apostila1/unidade27/understanding');

//UNIDADE 28
Route::get('/apostila1/unidade28/vocabulary', 'Apostila1Controller@unidade28Vocabulary')->name('apostila1/unidade28/vocabulary');
Route::get('/apostila1/unidade28/conversation', 'Apostila1Controller@unidade28Conversation')->name('apostila1/unidade28/conversation');
Route::get('/apostila1/unidade28/grammar', 'Apostila1Controller@unidade28Grammar')->name('apostila1/unidade28/grammar');
Route::get('/apostila1/unidade28/pronunciation', 'Apostila1Controller@unidade28Pronunciation')->name('apostila1/unidade28/pronunciation');
Route::get('/apostila1/unidade28/listening', 'Apostila1Controller@unidade28Listening')->name('apostila1/unidade28/listening');
Route::get('/apostila1/unidade28/understanding', 'Apostila1Controller@unidade28Understanding')->name('apostila1/unidade28/understanding');

//UNIDADE 29
Route::get('/apostila1/unidade29/vocabulary', 'Apostila1Controller@unidade29Vocabulary')->name('apostila1/unidade29/vocabulary');
Route::get('/apostila1/unidade29/conversation', 'Apostila1Controller@unidade29Conversation')->name('apostila1/unidade29/conversation');
Route::get('/apostila1/unidade29/grammar', 'Apostila1Controller@unidade29Grammar')->name('apostila1/unidade29/grammar');
Route::get('/apostila1/unidade29/pronunciation', 'Apostila1Controller@unidade29Pronunciation')->name('apostila1/unidade29/pronunciation');
Route::get('/apostila1/unidade29/listening', 'Apostila1Controller@unidade29Listening')->name('apostila1/unidade29/listening');
Route::get('/apostila1/unidade29/understanding', 'Apostila1Controller@unidade29Understanding')->name('apostila1/unidade29/understanding');

//UNIDADE 30
Route::get('/apostila1/unidade30/vocabulary', 'Apostila1Controller@unidade30Vocabulary')->name('apostila1/unidade30/vocabulary');
Route::get('/apostila1/unidade30/conversation', 'Apostila1Controller@unidade30Conversation')->name('apostila1/unidade30/conversation');
Route::get('/apostila1/unidade30/grammar', 'Apostila1Controller@unidade30Grammar')->name('apostila1/unidade30/grammar');
Route::get('/apostila1/unidade30/pronunciation', 'Apostila1Controller@unidade30Pronunciation')->name('apostila1/unidade30/pronunciation');
Route::get('/apostila1/unidade30/listening', 'Apostila1Controller@unidade30Listening')->name('apostila1/unidade30/listening');
Route::get('/apostila1/unidade30/understanding', 'Apostila1Controller@unidade30Understanding')->name('apostila1/unidade30/understanding');

//UNIDADE 31
Route::get('/apostila1/unidade31/vocabulary', 'Apostila1Controller@unidade31Vocabulary')->name('apostila1/unidade31/vocabulary');
Route::get('/apostila1/unidade31/conversation', 'Apostila1Controller@unidade31Conversation')->name('apostila1/unidade31/conversation');
Route::get('/apostila1/unidade31/grammar', 'Apostila1Controller@unidade31Grammar')->name('apostila1/unidade31/grammar');
Route::get('/apostila1/unidade31/pronunciation', 'Apostila1Controller@unidade31Pronunciation')->name('apostila1/unidade31/pronunciation');
Route::get('/apostila1/unidade31/listening', 'Apostila1Controller@unidade31Listening')->name('apostila1/unidade31/listening');
Route::get('/apostila1/unidade31/understanding', 'Apostila1Controller@unidade31Understanding')->name('apostila1/unidade31/understanding');

//UNIDADE 32
Route::get('/apostila1/unidade32/vocabulary', 'Apostila1Controller@unidade32Vocabulary')->name('apostila1/unidade32/vocabulary');
Route::get('/apostila1/unidade32/conversation', 'Apostila1Controller@unidade32Conversation')->name('apostila1/unidade32/conversation');
Route::get('/apostila1/unidade32/grammar', 'Apostila1Controller@unidade32Grammar')->name('apostila1/unidade32/grammar');
Route::get('/apostila1/unidade32/pronunciation', 'Apostila1Controller@unidade32Pronunciation')->name('apostila1/unidade32/pronunciation');
Route::get('/apostila1/unidade32/listening', 'Apostila1Controller@unidade32Listening')->name('apostila1/unidade32/listening');
Route::get('/apostila1/unidade32/understanding', 'Apostila1Controller@unidade32Understanding')->name('apostila1/unidade32/understanding');

/* ROTAS PARA AS VIEWS */
//APOSTILA 02
//UNIDADE 1
Route::get('/apostila2/unidade1/vocabulary', 'Apostila2Controller@unidade1Vocabulary')->name('apostila2/unidade1/vocabulary');
Route::get('/apostila2/unidade1/conversation', 'Apostila2Controller@unidade1Conversation')->name('apostila2/unidade1/conversation');
Route::get('/apostila2/unidade1/grammar', 'Apostila2Controller@unidade1Grammar')->name('apostila2/unidade1/grammar');
Route::get('/apostila2/unidade1/pronunciation', 'Apostila2Controller@unidade1Pronunciation')->name('apostila2/unidade1/pronunciation');
Route::get('/apostila2/unidade1/listening', 'Apostila2Controller@unidade1Listening')->name('apostila2/unidade1/listening');
Route::get('/apostila2/unidade1/understanding', 'Apostila2Controller@unidade1Understanding')->name('apostila2/unidade1/understanding');


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






