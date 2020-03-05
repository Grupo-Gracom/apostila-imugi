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
Route::get('/apostila2/intro2/intro', 'HomeController@apostila2Intro')->name('apostila2/intro2/intro');

//UNIDADE 1
Route::get('/apostila1/unidade1/vocabulary', 'Apostila1Controller@unidade1Vocabulary')->name('apostila1/unidade1/vocabulary');
Route::get('/apostila1/unidade1/conversation', 'Apostila1Controller@unidade1Conversation')->name('apostila1/unidade1/conversation');
Route::get('/apostila1/unidade1/grammar', 'Apostila1Controller@unidade1Grammar')->name('apostila1/unidade1/grammar');
Route::get('/apostila1/unidade1/listening', 'Apostila1Controller@unidade1Listening')->name('apostila1/unidade1/listening');
Route::get('/apostila1/unidade1/pronunciation', 'Apostila1Controller@unidade1Pronunciation')->name('apostila1/unidade1/pronunciation');
Route::get('/apostila1/unidade1/understanding', 'Apostila1Controller@unidade1Understanding')->name('apostila1/unidade1/understanding');

//UNIDADE 2
Route::get('/apostila1/unidade2/vocabulary', 'Apostila1Controller@unidade2Vocabulary')->name('apostila1/unidade2/vocabulary');
Route::get('/apostila1/unidade2/conversation', 'Apostila1Controller@unidade2Conversation')->name('apostila1/unidade2/conversation');
Route::get('/apostila1/unidade2/grammar', 'Apostila1Controller@unidade2Grammar')->name('apostila1/unidade2/grammar');
Route::get('/apostila1/unidade2/pronunciation', 'Apostila1Controller@unidade2Pronunciation')->name('apostila1/unidade2/pronunciation');
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

//UNIDADE 2
Route::get('/apostila2/unidade2/vocabulary', 'Apostila2Controller@unidade2Vocabulary')->name('apostila2/unidade2/vocabulary');
Route::get('/apostila2/unidade2/conversation', 'Apostila2Controller@unidade2Conversation')->name('apostila2/unidade2/conversation');
Route::get('/apostila2/unidade2/grammar', 'Apostila2Controller@unidade2Grammar')->name('apostila2/unidade2/grammar');
Route::get('/apostila2/unidade2/pronunciation', 'Apostila2Controller@unidade2Pronunciation')->name('apostila2/unidade2/pronunciation');
Route::get('/apostila2/unidade2/listening', 'Apostila2Controller@unidade2Listening')->name('apostila2/unidade2/listening');
Route::get('/apostila2/unidade2/understanding', 'Apostila2Controller@unidade2Understanding')->name('apostila2/unidade2/understanding');

//UNIDADE 3
Route::get('/apostila2/unidade3/vocabulary', 'Apostila2Controller@unidade3Vocabulary')->name('apostila2/unidade3/vocabulary');
Route::get('/apostila2/unidade3/conversation', 'Apostila2Controller@unidade3Conversation')->name('apostila2/unidade3/conversation');
Route::get('/apostila2/unidade3/grammar', 'Apostila2Controller@unidade3Grammar')->name('apostila2/unidade3/grammar');
Route::get('/apostila2/unidade3/pronunciation', 'Apostila2Controller@unidade3Pronunciation')->name('apostila2/unidade3/pronunciation');
Route::get('/apostila2/unidade3/listening', 'Apostila2Controller@unidade3Listening')->name('apostila2/unidade3/listening');
Route::get('/apostila2/unidade3/understanding', 'Apostila2Controller@unidade3Understanding')->name('apostila2/unidade3/understanding');

//UNIDADE 4
Route::get('/apostila2/unidade4/vocabulary', 'Apostila2Controller@unidade4Vocabulary')->name('apostila2/unidade4/vocabulary');
Route::get('/apostila2/unidade4/conversation', 'Apostila2Controller@unidade4Conversation')->name('apostila2/unidade4/conversation');
Route::get('/apostila2/unidade4/grammar', 'Apostila2Controller@unidade4Grammar')->name('apostila2/unidade4/grammar');
Route::get('/apostila2/unidade4/pronunciation', 'Apostila2Controller@unidade4Pronunciation')->name('apostila2/unidade4/pronunciation');
Route::get('/apostila2/unidade4/listening', 'Apostila2Controller@unidade4Listening')->name('apostila2/unidade4/listening');
Route::get('/apostila2/unidade4/understanding', 'Apostila2Controller@unidade4Understanding')->name('apostila2/unidade4/understanding');

//UNIDADE 5
Route::get('/apostila2/unidade5/vocabulary', 'Apostila2Controller@unidade5Vocabulary')->name('apostila2/unidade5/vocabulary');
Route::get('/apostila2/unidade5/conversation', 'Apostila2Controller@unidade5Conversation')->name('apostila2/unidade5/conversation');
Route::get('/apostila2/unidade5/grammar', 'Apostila2Controller@unidade5Grammar')->name('apostila2/unidade5/grammar');
Route::get('/apostila2/unidade5/pronunciation', 'Apostila2Controller@unidade5Pronunciation')->name('apostila2/unidade5/pronunciation');
Route::get('/apostila2/unidade5/listening', 'Apostila2Controller@unidade5Listening')->name('apostila2/unidade5/listening');
Route::get('/apostila2/unidade5/understanding', 'Apostila2Controller@unidade5Understanding')->name('apostila2/unidade5/understanding');

//UNIDADE 6
Route::get('/apostila2/unidade6/vocabulary', 'Apostila2Controller@unidade6Vocabulary')->name('apostila2/unidade6/vocabulary');
Route::get('/apostila2/unidade6/conversation', 'Apostila2Controller@unidade6Conversation')->name('apostila2/unidade6/conversation');
Route::get('/apostila2/unidade6/grammar', 'Apostila2Controller@unidade6Grammar')->name('apostila2/unidade6/grammar');
Route::get('/apostila2/unidade6/pronunciation', 'Apostila2Controller@unidade6Pronunciation')->name('apostila2/unidade6/pronunciation');
Route::get('/apostila2/unidade6/listening', 'Apostila2Controller@unidade6Listening')->name('apostila2/unidade6/listening');
Route::get('/apostila2/unidade6/understanding', 'Apostila2Controller@unidade6Understanding')->name('apostila2/unidade6/understanding');

//UNIDADE 7
Route::get('/apostila2/unidade7/vocabulary', 'Apostila2Controller@unidade7Vocabulary')->name('apostila2/unidade7/vocabulary');
Route::get('/apostila2/unidade7/conversation', 'Apostila2Controller@unidade7Conversation')->name('apostila2/unidade7/conversation');
Route::get('/apostila2/unidade7/grammar', 'Apostila2Controller@unidade7Grammar')->name('apostila2/unidade7/grammar');
Route::get('/apostila2/unidade7/pronunciation', 'Apostila2Controller@unidade7Pronunciation')->name('apostila2/unidade7/pronunciation');
Route::get('/apostila2/unidade7/listening', 'Apostila2Controller@unidade7Listening')->name('apostila2/unidade7/listening');
Route::get('/apostila2/unidade7/understanding', 'Apostila2Controller@unidade7Understanding')->name('apostila2/unidade7/understanding');

//UNIDADE 8
Route::get('/apostila2/unidade8/vocabulary', 'Apostila2Controller@unidade8Vocabulary')->name('apostila2/unidade8/vocabulary');
Route::get('/apostila2/unidade8/conversation', 'Apostila2Controller@unidade8Conversation')->name('apostila2/unidade8/conversation');
Route::get('/apostila2/unidade8/grammar', 'Apostila2Controller@unidade8Grammar')->name('apostila2/unidade8/grammar');
Route::get('/apostila2/unidade8/pronunciation', 'Apostila2Controller@unidade8Pronunciation')->name('apostila2/unidade8/pronunciation');
Route::get('/apostila2/unidade8/listening', 'Apostila2Controller@unidade8Listening')->name('apostila2/unidade8/listening');
Route::get('/apostila2/unidade8/understanding', 'Apostila2Controller@unidade8Understanding')->name('apostila2/unidade8/understanding');

//UNIDADE 9
Route::get('/apostila2/unidade9/vocabulary', 'Apostila2Controller@unidade9Vocabulary')->name('apostila2/unidade9/vocabulary');
Route::get('/apostila2/unidade9/conversation', 'Apostila2Controller@unidade9Conversation')->name('apostila2/unidade9/conversation');
Route::get('/apostila2/unidade9/grammar', 'Apostila2Controller@unidade9Grammar')->name('apostila2/unidade9/grammar');
Route::get('/apostila2/unidade9/pronunciation', 'Apostila2Controller@unidade9Pronunciation')->name('apostila2/unidade9/pronunciation');
Route::get('/apostila2/unidade9/listening', 'Apostila2Controller@unidade9Listening')->name('apostila2/unidade9/listening');
Route::get('/apostila2/unidade9/understanding', 'Apostila2Controller@unidade9Understanding')->name('apostila2/unidade9/understanding');

//UNIDADE 10
Route::get('/apostila2/unidade10/vocabulary', 'Apostila2Controller@unidade10Vocabulary')->name('apostila2/unidade10/vocabulary');
Route::get('/apostila2/unidade10/conversation', 'Apostila2Controller@unidade10Conversation')->name('apostila2/unidade10/conversation');
Route::get('/apostila2/unidade10/grammar', 'Apostila2Controller@unidade10Grammar')->name('apostila2/unidade10/grammar');
Route::get('/apostila2/unidade10/pronunciation', 'Apostila2Controller@unidade10Pronunciation')->name('apostila2/unidade10/pronunciation');
Route::get('/apostila2/unidade10/listening', 'Apostila2Controller@unidade10Listening')->name('apostila2/unidade10/listening');
Route::get('/apostila2/unidade10/understanding', 'Apostila2Controller@unidade10Understanding')->name('apostila2/unidade10/understanding');

//UNIDADE 11
Route::get('/apostila2/unidade11/vocabulary', 'Apostila2Controller@unidade11Vocabulary')->name('apostila2/unidade11/vocabulary');
Route::get('/apostila2/unidade11/conversation', 'Apostila2Controller@unidade11Conversation')->name('apostila2/unidade11/conversation');
Route::get('/apostila2/unidade11/grammar', 'Apostila2Controller@unidade11Grammar')->name('apostila2/unidade11/grammar');
Route::get('/apostila2/unidade11/pronunciation', 'Apostila2Controller@unidade11Pronunciation')->name('apostila2/unidade11/pronunciation');
Route::get('/apostila2/unidade11/listening', 'Apostila2Controller@unidade11Listening')->name('apostila2/unidade11/listening');
Route::get('/apostila2/unidade11/understanding', 'Apostila2Controller@unidade11Understanding')->name('apostila2/unidade11/understanding');

//UNIDADE 12
Route::get('/apostila2/unidade12/vocabulary', 'Apostila2Controller@unidade12Vocabulary')->name('apostila2/unidade12/vocabulary');
Route::get('/apostila2/unidade12/conversation', 'Apostila2Controller@unidade12Conversation')->name('apostila2/unidade12/conversation');
Route::get('/apostila2/unidade12/grammar', 'Apostila2Controller@unidade12Grammar')->name('apostila2/unidade12/grammar');
Route::get('/apostila2/unidade12/pronunciation', 'Apostila2Controller@unidade12Pronunciation')->name('apostila2/unidade12/pronunciation');
Route::get('/apostila2/unidade12/listening', 'Apostila2Controller@unidade12Listening')->name('apostila2/unidade12/listening');
Route::get('/apostila2/unidade12/understanding', 'Apostila2Controller@unidade12Understanding')->name('apostila2/unidade12/understanding');

//UNIDADE 13
Route::get('/apostila2/unidade13/vocabulary', 'Apostila2Controller@unidade13Vocabulary')->name('apostila2/unidade13/vocabulary');
Route::get('/apostila2/unidade13/conversation', 'Apostila2Controller@unidade13Conversation')->name('apostila2/unidade13/conversation');
Route::get('/apostila2/unidade13/grammar', 'Apostila2Controller@unidade13Grammar')->name('apostila2/unidade13/grammar');
Route::get('/apostila2/unidade13/pronunciation', 'Apostila2Controller@unidade13Pronunciation')->name('apostila2/unidade13/pronunciation');
Route::get('/apostila2/unidade13/listening', 'Apostila2Controller@unidade13Listening')->name('apostila2/unidade13/listening');
Route::get('/apostila2/unidade13/understanding', 'Apostila2Controller@unidade13Understanding')->name('apostila2/unidade13/understanding');

//UNIDADE 14
Route::get('/apostila2/unidade14/vocabulary', 'Apostila2Controller@unidade14Vocabulary')->name('apostila2/unidade14/vocabulary');
Route::get('/apostila2/unidade14/conversation', 'Apostila2Controller@unidade14Conversation')->name('apostila2/unidade14/conversation');
Route::get('/apostila2/unidade14/grammar', 'Apostila2Controller@unidade14Grammar')->name('apostila2/unidade14/grammar');
Route::get('/apostila2/unidade14/pronunciation', 'Apostila2Controller@unidade14Pronunciation')->name('apostila2/unidade14/pronunciation');
Route::get('/apostila2/unidade14/listening', 'Apostila2Controller@unidade14Listening')->name('apostila2/unidade14/listening');
Route::get('/apostila2/unidade14/understanding', 'Apostila2Controller@unidade14Understanding')->name('apostila2/unidade14/understanding');

//UNIDADE 15
Route::get('/apostila2/unidade15/vocabulary', 'Apostila2Controller@unidade15Vocabulary')->name('apostila2/unidade15/vocabulary');
Route::get('/apostila2/unidade15/conversation', 'Apostila2Controller@unidade15Conversation')->name('apostila2/unidade15/conversation');
Route::get('/apostila2/unidade15/grammar', 'Apostila2Controller@unidade15Grammar')->name('apostila2/unidade15/grammar');
Route::get('/apostila2/unidade15/pronunciation', 'Apostila2Controller@unidade15Pronunciation')->name('apostila2/unidade15/pronunciation');
Route::get('/apostila2/unidade15/listening', 'Apostila2Controller@unidade15Listening')->name('apostila2/unidade15/listening');
Route::get('/apostila2/unidade15/understanding', 'Apostila2Controller@unidade15Understanding')->name('apostila2/unidade15/understanding');
//UNIDADE 16
Route::get('/apostila2/unidade16/vocabulary', 'Apostila2Controller@unidade16Vocabulary')->name('apostila2/unidade16/vocabulary');
Route::get('/apostila2/unidade16/conversation', 'Apostila2Controller@unidade16Conversation')->name('apostila2/unidade16/conversation');
Route::get('/apostila2/unidade16/grammar', 'Apostila2Controller@unidade16Grammar')->name('apostila2/unidade16/grammar');
Route::get('/apostila2/unidade16/pronunciation', 'Apostila2Controller@unidade16Pronunciation')->name('apostila2/unidade16/pronunciation');
Route::get('/apostila2/unidade16/listening', 'Apostila2Controller@unidade16Listening')->name('apostila2/unidade16/listening');
Route::get('/apostila2/unidade16/understanding', 'Apostila2Controller@unidade16Understanding')->name('apostila2/unidade16/understanding');
//UNIDADE 17
Route::get('/apostila2/unidade17/vocabulary', 'Apostila2Controller@unidade17Vocabulary')->name('apostila2/unidade17/vocabulary');
Route::get('/apostila2/unidade17/conversation', 'Apostila2Controller@unidade17Conversation')->name('apostila2/unidade17/conversation');
Route::get('/apostila2/unidade17/grammar', 'Apostila2Controller@unidade17Grammar')->name('apostila2/unidade17/grammar');
Route::get('/apostila2/unidade17/pronunciation', 'Apostila2Controller@unidade17Pronunciation')->name('apostila2/unidade17/pronunciation');
Route::get('/apostila2/unidade17/listening', 'Apostila2Controller@unidade17Listening')->name('apostila2/unidade17/listening');
Route::get('/apostila2/unidade17/understanding', 'Apostila2Controller@unidade17Understanding')->name('apostila2/unidade17/understanding');
//UNIDADE 18
Route::get('/apostila2/unidade18/vocabulary', 'Apostila2Controller@unidade18Vocabulary')->name('apostila2/unidade18/vocabulary');
Route::get('/apostila2/unidade18/conversation', 'Apostila2Controller@unidade18Conversation')->name('apostila2/unidade18/conversation');
Route::get('/apostila2/unidade18/grammar', 'Apostila2Controller@unidade18Grammar')->name('apostila2/unidade18/grammar');
Route::get('/apostila2/unidade18/pronunciation', 'Apostila2Controller@unidade18Pronunciation')->name('apostila2/unidade18/pronunciation');
Route::get('/apostila2/unidade18/listening', 'Apostila2Controller@unidade18Listening')->name('apostila2/unidade18/listening');
Route::get('/apostila2/unidade18/understanding', 'Apostila2Controller@unidade18Understanding')->name('apostila2/unidade18/understanding');
//UNIDADE 19
Route::get('/apostila2/unidade19/vocabulary', 'Apostila2Controller@unidade19Vocabulary')->name('apostila2/unidade19/vocabulary');
Route::get('/apostila2/unidade19/conversation', 'Apostila2Controller@unidade19Conversation')->name('apostila2/unidade19/conversation');
Route::get('/apostila2/unidade19/grammar', 'Apostila2Controller@unidade19Grammar')->name('apostila2/unidade19/grammar');
Route::get('/apostila2/unidade19/pronunciation', 'Apostila2Controller@unidade19Pronunciation')->name('apostila2/unidade19/pronunciation');
Route::get('/apostila2/unidade19/listening', 'Apostila2Controller@unidade19Listening')->name('apostila2/unidade19/listening');
Route::get('/apostila2/unidade19/understanding', 'Apostila2Controller@unidade19Understanding')->name('apostila2/unidade19/understanding');
//UNIDADE 20
Route::get('/apostila2/unidade20/vocabulary', 'Apostila2Controller@unidade20Vocabulary')->name('apostila2/unidade20/vocabulary');
Route::get('/apostila2/unidade20/conversation', 'Apostila2Controller@unidade20Conversation')->name('apostila2/unidade20/conversation');
Route::get('/apostila2/unidade20/grammar', 'Apostila2Controller@unidade20Grammar')->name('apostila2/unidade20/grammar');
Route::get('/apostila2/unidade20/pronunciation', 'Apostila2Controller@unidade20Pronunciation')->name('apostila2/unidade20/pronunciation');
Route::get('/apostila2/unidade20/listening', 'Apostila2Controller@unidade20Listening')->name('apostila2/unidade20/listening');
Route::get('/apostila2/unidade20/understanding', 'Apostila2Controller@unidade20Understanding')->name('apostila2/unidade20/understanding');
//UNIDADE 7
Route::get('/apostila2/unidade7/vocabulary', 'Apostila2Controller@unidade7Vocabulary')->name('apostila2/unidade7/vocabulary');
Route::get('/apostila2/unidade7/conversation', 'Apostila2Controller@unidade7Conversation')->name('apostila2/unidade7/conversation');
Route::get('/apostila2/unidade7/grammar', 'Apostila2Controller@unidade7Grammar')->name('apostila2/unidade7/grammar');
Route::get('/apostila2/unidade7/pronunciation', 'Apostila2Controller@unidade7Pronunciation')->name('apostila2/unidade7/pronunciation');
Route::get('/apostila2/unidade7/listening', 'Apostila2Controller@unidade7Listening')->name('apostila2/unidade7/listening');
Route::get('/apostila2/unidade7/understanding', 'Apostila2Controller@unidade7Understanding')->name('apostila2/unidade7/understanding');

//UNIDADE 21
Route::get('/apostila2/unidade21/vocabulary', 'Apostila2Controller@unidade21Vocabulary')->name('apostila2/unidade21/vocabulary');
Route::get('/apostila2/unidade21/conversation', 'Apostila2Controller@unidade21Conversation')->name('apostila2/unidade21/conversation');
Route::get('/apostila2/unidade21/grammar', 'Apostila2Controller@unidade21Grammar')->name('apostila2/unidade21/grammar');
Route::get('/apostila2/unidade21/pronunciation', 'Apostila2Controller@unidade21Pronunciation')->name('apostila2/unidade21/pronunciation');
Route::get('/apostila2/unidade21/listening', 'Apostila2Controller@unidade21Listening')->name('apostila2/unidade21/listening');
Route::get('/apostila2/unidade21/understanding', 'Apostila2Controller@unidade21Understanding')->name('apostila2/unidade21/understanding');

//UNIDADE 22
Route::get('/apostila2/unidade22/vocabulary', 'Apostila2Controller@unidade22Vocabulary')->name('apostila2/unidade22/vocabulary');
Route::get('/apostila2/unidade22/conversation', 'Apostila2Controller@unidade22Conversation')->name('apostila2/unidade22/conversation');
Route::get('/apostila2/unidade22/grammar', 'Apostila2Controller@unidade22Grammar')->name('apostila2/unidade22/grammar');
Route::get('/apostila2/unidade22/pronunciation', 'Apostila2Controller@unidade22Pronunciation')->name('apostila2/unidade22/pronunciation');
Route::get('/apostila2/unidade22/listening', 'Apostila2Controller@unidade22Listening')->name('apostila2/unidade22/listening');
Route::get('/apostila2/unidade22/understanding', 'Apostila2Controller@unidade22Understanding')->name('apostila2/unidade22/understanding');

//UNIDADE 23
Route::get('/apostila2/unidade23/vocabulary', 'Apostila2Controller@unidade23Vocabulary')->name('apostila2/unidade23/vocabulary');
Route::get('/apostila2/unidade23/conversation', 'Apostila2Controller@unidade23Conversation')->name('apostila2/unidade23/conversation');
Route::get('/apostila2/unidade23/grammar', 'Apostila2Controller@unidade23Grammar')->name('apostila2/unidade23/grammar');
Route::get('/apostila2/unidade23/pronunciation', 'Apostila2Controller@unidade23Pronunciation')->name('apostila2/unidade23/pronunciation');
Route::get('/apostila2/unidade23/listening', 'Apostila2Controller@unidade23Listening')->name('apostila2/unidade23/listening');
Route::get('/apostila2/unidade23/understanding', 'Apostila2Controller@unidade23Understanding')->name('apostila2/unidade23/understanding');

//UNIDADE 24
Route::get('/apostila2/unidade24/vocabulary', 'Apostila2Controller@unidade24Vocabulary')->name('apostila2/unidade24/vocabulary');
Route::get('/apostila2/unidade24/conversation', 'Apostila2Controller@unidade24Conversation')->name('apostila2/unidade24/conversation');
Route::get('/apostila2/unidade24/grammar', 'Apostila2Controller@unidade24Grammar')->name('apostila2/unidade24/grammar');
Route::get('/apostila2/unidade24/pronunciation', 'Apostila2Controller@unidade24Pronunciation')->name('apostila2/unidade24/pronunciation');
Route::get('/apostila2/unidade24/listening', 'Apostila2Controller@unidade24Listening')->name('apostila2/unidade24/listening');
Route::get('/apostila2/unidade24/understanding', 'Apostila2Controller@unidade24Understanding')->name('apostila2/unidade24/understanding');

//UNIDADE 25
Route::get('/apostila2/unidade25/vocabulary', 'Apostila2Controller@unidade25Vocabulary')->name('apostila2/unidade25/vocabulary');
Route::get('/apostila2/unidade25/conversation', 'Apostila2Controller@unidade25Conversation')->name('apostila2/unidade25/conversation');
Route::get('/apostila2/unidade25/grammar', 'Apostila2Controller@unidade25Grammar')->name('apostila2/unidade25/grammar');
Route::get('/apostila2/unidade25/pronunciation', 'Apostila2Controller@unidade25Pronunciation')->name('apostila2/unidade25/pronunciation');
Route::get('/apostila2/unidade25/listening', 'Apostila2Controller@unidade25Listening')->name('apostila2/unidade25/listening');
Route::get('/apostila2/unidade25/understanding', 'Apostila2Controller@unidade25Understanding')->name('apostila2/unidade25/understanding');

//UNIDADE 26
Route::get('/apostila2/unidade26/vocabulary', 'Apostila2Controller@unidade26Vocabulary')->name('apostila2/unidade26/vocabulary');
Route::get('/apostila2/unidade26/conversation', 'Apostila2Controller@unidade26Conversation')->name('apostila2/unidade26/conversation');
Route::get('/apostila2/unidade26/grammar', 'Apostila2Controller@unidade26Grammar')->name('apostila2/unidade26/grammar');
Route::get('/apostila2/unidade26/pronunciation', 'Apostila2Controller@unidade26Pronunciation')->name('apostila2/unidade26/pronunciation');
Route::get('/apostila2/unidade26/listening', 'Apostila2Controller@unidade26Listening')->name('apostila2/unidade26/listening');
Route::get('/apostila2/unidade26/understanding', 'Apostila2Controller@unidade26Understanding')->name('apostila2/unidade26/understanding');

//UNIDADE 27
Route::get('/apostila2/unidade27/vocabulary', 'Apostila2Controller@unidade27Vocabulary')->name('apostila2/unidade27/vocabulary');
Route::get('/apostila2/unidade27/conversation', 'Apostila2Controller@unidade27Conversation')->name('apostila2/unidade27/conversation');
Route::get('/apostila2/unidade27/grammar', 'Apostila2Controller@unidade27Grammar')->name('apostila2/unidade27/grammar');
Route::get('/apostila2/unidade27/pronunciation', 'Apostila2Controller@unidade27Pronunciation')->name('apostila2/unidade27/pronunciation');
Route::get('/apostila2/unidade27/listening', 'Apostila2Controller@unidade27Listening')->name('apostila2/unidade27/listening');
Route::get('/apostila2/unidade27/understanding', 'Apostila2Controller@unidade27Understanding')->name('apostila2/unidade27/understanding');

//UNIDADE 28
Route::get('/apostila2/unidade28/vocabulary', 'Apostila2Controller@unidade28Vocabulary')->name('apostila2/unidade28/vocabulary');
Route::get('/apostila2/unidade28/conversation', 'Apostila2Controller@unidade28Conversation')->name('apostila2/unidade28/conversation');
Route::get('/apostila2/unidade28/grammar', 'Apostila2Controller@unidade28Grammar')->name('apostila2/unidade28/grammar');
Route::get('/apostila2/unidade28/pronunciation', 'Apostila2Controller@unidade28Pronunciation')->name('apostila2/unidade28/pronunciation');
Route::get('/apostila2/unidade28/listening', 'Apostila2Controller@unidade28Listening')->name('apostila2/unidade28/listening');
Route::get('/apostila2/unidade28/understanding', 'Apostila2Controller@unidade28Understanding')->name('apostila2/unidade28/understanding');

//UNIDADE 29
Route::get('/apostila2/unidade29/vocabulary', 'Apostila2Controller@unidade29Vocabulary')->name('apostila2/unidade29/vocabulary');
Route::get('/apostila2/unidade29/conversation', 'Apostila2Controller@unidade29Conversation')->name('apostila2/unidade29/conversation');
Route::get('/apostila2/unidade29/grammar', 'Apostila2Controller@unidade29Grammar')->name('apostila2/unidade29/grammar');
Route::get('/apostila2/unidade29/pronunciation', 'Apostila2Controller@unidade29Pronunciation')->name('apostila2/unidade29/pronunciation');
Route::get('/apostila2/unidade29/listening', 'Apostila2Controller@unidade29Listening')->name('apostila2/unidade29/listening');
Route::get('/apostila2/unidade29/understanding', 'Apostila2Controller@unidade29Understanding')->name('apostila2/unidade29/understanding');

//UNIDADE 30
Route::get('/apostila2/unidade30/vocabulary', 'Apostila2Controller@unidade30Vocabulary')->name('apostila2/unidade30/vocabulary');
Route::get('/apostila2/unidade30/conversation', 'Apostila2Controller@unidade30Conversation')->name('apostila2/unidade30/conversation');
Route::get('/apostila2/unidade30/grammar', 'Apostila2Controller@unidade30Grammar')->name('apostila2/unidade30/grammar');
Route::get('/apostila2/unidade30/pronunciation', 'Apostila2Controller@unidade30Pronunciation')->name('apostila2/unidade30/pronunciation');
Route::get('/apostila2/unidade30/listening', 'Apostila2Controller@unidade30Listening')->name('apostila2/unidade30/listening');
Route::get('/apostila2/unidade30/understanding', 'Apostila2Controller@unidade30Understanding')->name('apostila2/unidade30/understanding');

//UNIDADE 31
Route::get('/apostila2/unidade31/vocabulary', 'Apostila2Controller@unidade31Vocabulary')->name('apostila2/unidade31/vocabulary');
Route::get('/apostila2/unidade31/conversation', 'Apostila2Controller@unidade31Conversation')->name('apostila2/unidade31/conversation');
Route::get('/apostila2/unidade31/grammar', 'Apostila2Controller@unidade31Grammar')->name('apostila2/unidade31/grammar');
Route::get('/apostila2/unidade31/pronunciation', 'Apostila2Controller@unidade31Pronunciation')->name('apostila2/unidade31/pronunciation');
Route::get('/apostila2/unidade31/listening', 'Apostila2Controller@unidade31Listening')->name('apostila2/unidade31/listening');
Route::get('/apostila2/unidade31/understanding', 'Apostila2Controller@unidade31Understanding')->name('apostila2/unidade31/understanding');

//UNIDADE 32
Route::get('/apostila2/unidade32/vocabulary', 'Apostila2Controller@unidade32Vocabulary')->name('apostila2/unidade32/vocabulary');
Route::get('/apostila2/unidade32/conversation', 'Apostila2Controller@unidade32Conversation')->name('apostila2/unidade32/conversation');
Route::get('/apostila2/unidade32/grammar', 'Apostila2Controller@unidade32Grammar')->name('apostila2/unidade32/grammar');
Route::get('/apostila2/unidade32/pronunciation', 'Apostila2Controller@unidade32Pronunciation')->name('apostila2/unidade32/pronunciation');
Route::get('/apostila2/unidade32/listening', 'Apostila2Controller@unidade32Listening')->name('apostila2/unidade32/listening');
Route::get('/apostila2/unidade32/understanding', 'Apostila2Controller@unidade32Understanding')->name('apostila2/unidade32/understanding');

//UNIDADE 33
Route::get('/apostila2/unidade33/vocabulary', 'Apostila2Controller@unidade33Vocabulary')->name('apostila2/unidade33/vocabulary');
Route::get('/apostila2/unidade33/conversation', 'Apostila2Controller@unidade33Conversation')->name('apostila2/unidade33/conversation');
Route::get('/apostila2/unidade33/grammar', 'Apostila2Controller@unidade33Grammar')->name('apostila2/unidade33/grammar');
Route::get('/apostila2/unidade33/pronunciation', 'Apostila2Controller@unidade33Pronunciation')->name('apostila2/unidade33/pronunciation');
Route::get('/apostila2/unidade33/listening', 'Apostila2Controller@unidade33Listening')->name('apostila2/unidade33/listening');
Route::get('/apostila2/unidade33/understanding', 'Apostila2Controller@unidade33Understanding')->name('apostila2/unidade33/understanding');

//UNIDADE 34
Route::get('/apostila2/unidade34/vocabulary', 'Apostila2Controller@unidade34Vocabulary')->name('apostila2/unidade34/vocabulary');
Route::get('/apostila2/unidade34/conversation', 'Apostila2Controller@unidade34Conversation')->name('apostila2/unidade34/conversation');
Route::get('/apostila2/unidade34/grammar', 'Apostila2Controller@unidade34Grammar')->name('apostila2/unidade34/grammar');
Route::get('/apostila2/unidade34/pronunciation', 'Apostila2Controller@unidade34Pronunciation')->name('apostila2/unidade34/pronunciation');
Route::get('/apostila2/unidade34/listening', 'Apostila2Controller@unidade34Listening')->name('apostila2/unidade34/listening');
Route::get('/apostila2/unidade34/understanding', 'Apostila2Controller@unidade34Understanding')->name('apostila2/unidade34/understanding');

//UNIDADE 35
Route::get('/apostila2/unidade35/vocabulary', 'Apostila2Controller@unidade35Vocabulary')->name('apostila2/unidade35/vocabulary');
Route::get('/apostila2/unidade35/conversation', 'Apostila2Controller@unidade35Conversation')->name('apostila2/unidade35/conversation');
Route::get('/apostila2/unidade35/grammar', 'Apostila2Controller@unidade35Grammar')->name('apostila2/unidade35/grammar');
Route::get('/apostila2/unidade35/pronunciation', 'Apostila2Controller@unidade35Pronunciation')->name('apostila2/unidade35/pronunciation');
Route::get('/apostila2/unidade35/listening', 'Apostila2Controller@unidade35Listening')->name('apostila2/unidade35/listening');
Route::get('/apostila2/unidade35/understanding', 'Apostila2Controller@unidade35Understanding')->name('apostila2/unidade35/understanding');

//UNIDADE 36
Route::get('/apostila2/unidade36/vocabulary', 'Apostila2Controller@unidade36Vocabulary')->name('apostila2/unidade36/vocabulary');
Route::get('/apostila2/unidade36/conversation', 'Apostila2Controller@unidade36Conversation')->name('apostila2/unidade36/conversation');
Route::get('/apostila2/unidade36/grammar', 'Apostila2Controller@unidade36Grammar')->name('apostila2/unidade36/grammar');
Route::get('/apostila2/unidade36/pronunciation', 'Apostila2Controller@unidade36Pronunciation')->name('apostila2/unidade36/pronunciation');
Route::get('/apostila2/unidade36/listening', 'Apostila2Controller@unidade36Listening')->name('apostila2/unidade36/listening');
Route::get('/apostila2/unidade36/understanding', 'Apostila2Controller@unidade36Understanding')->name('apostila2/unidade36/understanding');

//UNIDADE 37
Route::get('/apostila2/unidade37/vocabulary', 'Apostila2Controller@unidade37Vocabulary')->name('apostila2/unidade37/vocabulary');
Route::get('/apostila2/unidade37/conversation', 'Apostila2Controller@unidade37Conversation')->name('apostila2/unidade37/conversation');
Route::get('/apostila2/unidade37/grammar', 'Apostila2Controller@unidade37Grammar')->name('apostila2/unidade37/grammar');
Route::get('/apostila2/unidade37/pronunciation', 'Apostila2Controller@unidade37Pronunciation')->name('apostila2/unidade37/pronunciation');
Route::get('/apostila2/unidade37/listening', 'Apostila2Controller@unidade37Listening')->name('apostila2/unidade37/listening');
Route::get('/apostila2/unidade37/understanding', 'Apostila2Controller@unidade37Understanding')->name('apostila2/unidade37/understanding');

//UNIDADE 38
Route::get('/apostila2/unidade38/vocabulary', 'Apostila2Controller@unidade38Vocabulary')->name('apostila2/unidade38/vocabulary');
Route::get('/apostila2/unidade38/conversation', 'Apostila2Controller@unidade38Conversation')->name('apostila2/unidade38/conversation');
Route::get('/apostila2/unidade38/grammar', 'Apostila2Controller@unidade38Grammar')->name('apostila2/unidade38/grammar');
Route::get('/apostila2/unidade38/pronunciation', 'Apostila2Controller@unidade38Pronunciation')->name('apostila2/unidade38/pronunciation');
Route::get('/apostila2/unidade38/listening', 'Apostila2Controller@unidade38Listening')->name('apostila2/unidade38/listening');
Route::get('/apostila2/unidade38/understanding', 'Apostila2Controller@unidade38Understanding')->name('apostila2/unidade38/understanding');

//UNIDADE 39
Route::get('/apostila2/unidade39/vocabulary', 'Apostila2Controller@unidade39Vocabulary')->name('apostila2/unidade39/vocabulary');
Route::get('/apostila2/unidade39/conversation', 'Apostila2Controller@unidade39Conversation')->name('apostila2/unidade39/conversation');
Route::get('/apostila2/unidade39/grammar', 'Apostila2Controller@unidade39Grammar')->name('apostila2/unidade39/grammar');
Route::get('/apostila2/unidade39/pronunciation', 'Apostila2Controller@unidade39Pronunciation')->name('apostila2/unidade39/pronunciation');
Route::get('/apostila2/unidade39/listening', 'Apostila2Controller@unidade39Listening')->name('apostila2/unidade39/listening');
Route::get('/apostila2/unidade39/understanding', 'Apostila2Controller@unidade39Understanding')->name('apostila2/unidade39/understanding');

//UNIDADE 40
Route::get('/apostila2/unidade40/vocabulary', 'Apostila2Controller@unidade40Vocabulary')->name('apostila2/unidade40/vocabulary');
Route::get('/apostila2/unidade40/conversation', 'Apostila2Controller@unidade40Conversation')->name('apostila2/unidade40/conversation');
Route::get('/apostila2/unidade40/grammar', 'Apostila2Controller@unidade40Grammar')->name('apostila2/unidade40/grammar');
Route::get('/apostila2/unidade40/pronunciation', 'Apostila2Controller@unidade40Pronunciation')->name('apostila2/unidade40/pronunciation');
Route::get('/apostila2/unidade40/listening', 'Apostila2Controller@unidade40Listening')->name('apostila2/unidade40/listening');
Route::get('/apostila2/unidade40/understanding', 'Apostila2Controller@unidade40Understanding')->name('apostila2/unidade40/understanding');

//UNIDADE 41
Route::get('/apostila2/unidade41/vocabulary', 'Apostila2Controller@unidade41Vocabulary')->name('apostila2/unidade41/vocabulary');
Route::get('/apostila2/unidade41/conversation', 'Apostila2Controller@unidade41Conversation')->name('apostila2/unidade41/conversation');
Route::get('/apostila2/unidade41/grammar', 'Apostila2Controller@unidade41Grammar')->name('apostila2/unidade41/grammar');
Route::get('/apostila2/unidade41/pronunciation', 'Apostila2Controller@unidade41Pronunciation')->name('apostila2/unidade41/pronunciation');
Route::get('/apostila2/unidade41/listening', 'Apostila2Controller@unidade41Listening')->name('apostila2/unidade41/listening');
Route::get('/apostila2/unidade41/understanding', 'Apostila2Controller@unidade41Understanding')->name('apostila2/unidade41/understanding');

//UNIDADE 42
Route::get('/apostila2/unidade42/vocabulary', 'Apostila2Controller@unidade42Vocabulary')->name('apostila2/unidade42/vocabulary');
Route::get('/apostila2/unidade42/conversation', 'Apostila2Controller@unidade42Conversation')->name('apostila2/unidade42/conversation');
Route::get('/apostila2/unidade42/grammar', 'Apostila2Controller@unidade42Grammar')->name('apostila2/unidade42/grammar');
Route::get('/apostila2/unidade42/pronunciation', 'Apostila2Controller@unidade42Pronunciation')->name('apostila2/unidade42/pronunciation');
Route::get('/apostila2/unidade42/listening', 'Apostila2Controller@unidade42Listening')->name('apostila2/unidade42/listening');
Route::get('/apostila2/unidade42/understanding', 'Apostila2Controller@unidade42Understanding')->name('apostila2/unidade42/understanding');

//UNIDADE 43
Route::get('/apostila2/unidade43/vocabulary', 'Apostila2Controller@unidade43Vocabulary')->name('apostila2/unidade43/vocabulary');
Route::get('/apostila2/unidade43/conversation', 'Apostila2Controller@unidade43Conversation')->name('apostila2/unidade43/conversation');
Route::get('/apostila2/unidade43/grammar', 'Apostila2Controller@unidade43Grammar')->name('apostila2/unidade43/grammar');
Route::get('/apostila2/unidade43/pronunciation', 'Apostila2Controller@unidade43Pronunciation')->name('apostila2/unidade43/pronunciation');
Route::get('/apostila2/unidade43/listening', 'Apostila2Controller@unidade43Listening')->name('apostila2/unidade43/listening');
Route::get('/apostila2/unidade43/understanding', 'Apostila2Controller@unidade43Understanding')->name('apostila2/unidade43/understanding');

//UNIDADE 44
Route::get('/apostila2/unidade44/vocabulary', 'Apostila2Controller@unidade44Vocabulary')->name('apostila2/unidade44/vocabulary');
Route::get('/apostila2/unidade44/conversation', 'Apostila2Controller@unidade44Conversation')->name('apostila2/unidade44/conversation');
Route::get('/apostila2/unidade44/grammar', 'Apostila2Controller@unidade44Grammar')->name('apostila2/unidade44/grammar');
Route::get('/apostila2/unidade44/pronunciation', 'Apostila2Controller@unidade44Pronunciation')->name('apostila2/unidade44/pronunciation');
Route::get('/apostila2/unidade44/listening', 'Apostila2Controller@unidade44Listening')->name('apostila2/unidade44/listening');
Route::get('/apostila2/unidade44/understanding', 'Apostila2Controller@unidade44Understanding')->name('apostila2/unidade44/understanding');

//UNIDADE 45
Route::get('/apostila2/unidade45/vocabulary', 'Apostila2Controller@unidade45Vocabulary')->name('apostila2/unidade45/vocabulary');
Route::get('/apostila2/unidade45/conversation', 'Apostila2Controller@unidade45Conversation')->name('apostila2/unidade45/conversation');
Route::get('/apostila2/unidade45/grammar', 'Apostila2Controller@unidade45Grammar')->name('apostila2/unidade45/grammar');
Route::get('/apostila2/unidade45/pronunciation', 'Apostila2Controller@unidade45Pronunciation')->name('apostila2/unidade45/pronunciation');
Route::get('/apostila2/unidade45/listening', 'Apostila2Controller@unidade45Listening')->name('apostila2/unidade45/listening');
Route::get('/apostila2/unidade45/understanding', 'Apostila2Controller@unidade45Understanding')->name('apostila2/unidade45/understanding');

//UNIDADE 46
Route::get('/apostila2/unidade46/vocabulary', 'Apostila2Controller@unidade46Vocabulary')->name('apostila2/unidade46/vocabulary');
Route::get('/apostila2/unidade46/conversation', 'Apostila2Controller@unidade46Conversation')->name('apostila2/unidade46/conversation');
Route::get('/apostila2/unidade46/grammar', 'Apostila2Controller@unidade46Grammar')->name('apostila2/unidade46/grammar');
Route::get('/apostila2/unidade46/pronunciation', 'Apostila2Controller@unidade46Pronunciation')->name('apostila2/unidade46/pronunciation');
Route::get('/apostila2/unidade46/listening', 'Apostila2Controller@unidade46Listening')->name('apostila2/unidade46/listening');
Route::get('/apostila2/unidade46/understanding', 'Apostila2Controller@unidade46Understanding')->name('apostila2/unidade46/understanding');

//UNIDADE 47
Route::get('/apostila2/unidade47/vocabulary', 'Apostila2Controller@unidade47Vocabulary')->name('apostila2/unidade47/vocabulary');
Route::get('/apostila2/unidade47/conversation', 'Apostila2Controller@unidade47Conversation')->name('apostila2/unidade47/conversation');
Route::get('/apostila2/unidade47/grammar', 'Apostila2Controller@unidade47Grammar')->name('apostila2/unidade47/grammar');
Route::get('/apostila2/unidade47/pronunciation', 'Apostila2Controller@unidade47Pronunciation')->name('apostila2/unidade47/pronunciation');
Route::get('/apostila2/unidade47/listening', 'Apostila2Controller@unidade47Listening')->name('apostila2/unidade47/listening');
Route::get('/apostila2/unidade47/understanding', 'Apostila2Controller@unidade47Understanding')->name('apostila2/unidade47/understanding');

//UNIDADE 48
Route::get('/apostila2/unidade48/vocabulary', 'Apostila2Controller@unidade48Vocabulary')->name('apostila2/unidade48/vocabulary');
Route::get('/apostila2/unidade48/conversation', 'Apostila2Controller@unidade48Conversation')->name('apostila2/unidade48/conversation');
Route::get('/apostila2/unidade48/grammar', 'Apostila2Controller@unidade48Grammar')->name('apostila2/unidade48/grammar');
Route::get('/apostila2/unidade48/pronunciation', 'Apostila2Controller@unidade48Pronunciation')->name('apostila2/unidade48/pronunciation');
Route::get('/apostila2/unidade48/listening', 'Apostila2Controller@unidade48Listening')->name('apostila2/unidade48/listening');
Route::get('/apostila2/unidade48/understanding', 'Apostila2Controller@unidade48Understanding')->name('apostila2/unidade48/understanding');

//UNIDADE 49
Route::get('/apostila2/unidade49/vocabulary', 'Apostila2Controller@unidade49Vocabulary')->name('apostila2/unidade49/vocabulary');
Route::get('/apostila2/unidade49/conversation', 'Apostila2Controller@unidade49Conversation')->name('apostila2/unidade49/conversation');
Route::get('/apostila2/unidade49/grammar', 'Apostila2Controller@unidade49Grammar')->name('apostila2/unidade49/grammar');
Route::get('/apostila2/unidade49/pronunciation', 'Apostila2Controller@unidade49Pronunciation')->name('apostila2/unidade49/pronunciation');
Route::get('/apostila2/unidade49/listening', 'Apostila2Controller@unidade49Listening')->name('apostila2/unidade49/listening');
Route::get('/apostila2/unidade49/understanding', 'Apostila2Controller@unidade49Understanding')->name('apostila2/unidade49/understanding');

//UNIDADE 50
Route::get('/apostila2/unidade50/vocabulary', 'Apostila2Controller@unidade50Vocabulary')->name('apostila2/unidade50/vocabulary');
Route::get('/apostila2/unidade50/conversation', 'Apostila2Controller@unidade50Conversation')->name('apostila2/unidade50/conversation');
Route::get('/apostila2/unidade50/grammar', 'Apostila2Controller@unidade50Grammar')->name('apostila2/unidade50/grammar');
Route::get('/apostila2/unidade50/pronunciation', 'Apostila2Controller@unidade50Pronunciation')->name('apostila2/unidade50/pronunciation');
Route::get('/apostila2/unidade50/listening', 'Apostila2Controller@unidade50Listening')->name('apostila2/unidade50/listening');
Route::get('/apostila2/unidade50/understanding', 'Apostila2Controller@unidade50Understanding')->name('apostila2/unidade50/understanding');

//UNIDADE 51
Route::get('/apostila2/unidade51/vocabulary', 'Apostila2Controller@unidade51Vocabulary')->name('apostila2/unidade51/vocabulary');
Route::get('/apostila2/unidade51/conversation', 'Apostila2Controller@unidade51Conversation')->name('apostila2/unidade51/conversation');
Route::get('/apostila2/unidade51/grammar', 'Apostila2Controller@unidade51Grammar')->name('apostila2/unidade51/grammar');
Route::get('/apostila2/unidade51/pronunciation', 'Apostila2Controller@unidade51Pronunciation')->name('apostila2/unidade51/pronunciation');
Route::get('/apostila2/unidade51/listening', 'Apostila2Controller@unidade51Listening')->name('apostila2/unidade51/listening');
Route::get('/apostila2/unidade51/understanding', 'Apostila2Controller@unidade51Understanding')->name('apostila2/unidade51/understanding');

//UNIDADE 52
Route::get('/apostila2/unidade52/vocabulary', 'Apostila2Controller@unidade52Vocabulary')->name('apostila2/unidade52/vocabulary');
Route::get('/apostila2/unidade52/conversation', 'Apostila2Controller@unidade52Conversation')->name('apostila2/unidade52/conversation');
Route::get('/apostila2/unidade52/grammar', 'Apostila2Controller@unidade52Grammar')->name('apostila2/unidade52/grammar');
Route::get('/apostila2/unidade52/pronunciation', 'Apostila2Controller@unidade52Pronunciation')->name('apostila2/unidade52/pronunciation');
Route::get('/apostila2/unidade52/listening', 'Apostila2Controller@unidade52Listening')->name('apostila2/unidade52/listening');
Route::get('/apostila2/unidade52/understanding', 'Apostila2Controller@unidade52Understanding')->name('apostila2/unidade52/understanding');

//UNIDADE 53
Route::get('/apostila2/unidade53/vocabulary', 'Apostila2Controller@unidade53Vocabulary')->name('apostila2/unidade53/vocabulary');
Route::get('/apostila2/unidade53/conversation', 'Apostila2Controller@unidade53Conversation')->name('apostila2/unidade53/conversation');
Route::get('/apostila2/unidade53/grammar', 'Apostila2Controller@unidade53Grammar')->name('apostila2/unidade53/grammar');
Route::get('/apostila2/unidade53/pronunciation', 'Apostila2Controller@unidade53Pronunciation')->name('apostila2/unidade53/pronunciation');
Route::get('/apostila2/unidade53/listening', 'Apostila2Controller@unidade53Listening')->name('apostila2/unidade53/listening');
Route::get('/apostila2/unidade53/understanding', 'Apostila2Controller@unidade53Understanding')->name('apostila2/unidade53/understanding');

//UNIDADE 54
Route::get('/apostila2/unidade54/vocabulary', 'Apostila2Controller@unidade54Vocabulary')->name('apostila2/unidade54/vocabulary');
Route::get('/apostila2/unidade54/conversation', 'Apostila2Controller@unidade54Conversation')->name('apostila2/unidade54/conversation');
Route::get('/apostila2/unidade54/grammar', 'Apostila2Controller@unidade54Grammar')->name('apostila2/unidade54/grammar');
Route::get('/apostila2/unidade54/pronunciation', 'Apostila2Controller@unidade54Pronunciation')->name('apostila2/unidade54/pronunciation');
Route::get('/apostila2/unidade54/listening', 'Apostila2Controller@unidade54Listening')->name('apostila2/unidade54/listening');
Route::get('/apostila2/unidade54/understanding', 'Apostila2Controller@unidade54Understanding')->name('apostila2/unidade54/understanding');

//UNIDADE 55
Route::get('/apostila2/unidade55/vocabulary', 'Apostila2Controller@unidade55Vocabulary')->name('apostila2/unidade55/vocabulary');
Route::get('/apostila2/unidade55/conversation', 'Apostila2Controller@unidade55Conversation')->name('apostila2/unidade55/conversation');
Route::get('/apostila2/unidade55/grammar', 'Apostila2Controller@unidade55Grammar')->name('apostila2/unidade55/grammar');
Route::get('/apostila2/unidade55/pronunciation', 'Apostila2Controller@unidade55Pronunciation')->name('apostila2/unidade55/pronunciation');
Route::get('/apostila2/unidade55/listening', 'Apostila2Controller@unidade55Listening')->name('apostila2/unidade55/listening');
Route::get('/apostila2/unidade55/understanding', 'Apostila2Controller@unidade55Understanding')->name('apostila2/unidade55/understanding');

//UNIDADE 56
Route::get('/apostila2/unidade56/vocabulary', 'Apostila2Controller@unidade56Vocabulary')->name('apostila2/unidade56/vocabulary');
Route::get('/apostila2/unidade56/conversation', 'Apostila2Controller@unidade56Conversation')->name('apostila2/unidade56/conversation');
Route::get('/apostila2/unidade56/grammar', 'Apostila2Controller@unidade56Grammar')->name('apostila2/unidade56/grammar');
Route::get('/apostila2/unidade56/pronunciation', 'Apostila2Controller@unidade56Pronunciation')->name('apostila2/unidade56/pronunciation');
Route::get('/apostila2/unidade56/listening', 'Apostila2Controller@unidade56Listening')->name('apostila2/unidade56/listening');
Route::get('/apostila2/unidade56/understanding', 'Apostila2Controller@unidade56Understanding')->name('apostila2/unidade56/understanding');

//UNIDADE 57
Route::get('/apostila2/unidade57/vocabulary', 'Apostila2Controller@unidade57Vocabulary')->name('apostila2/unidade57/vocabulary');
Route::get('/apostila2/unidade57/conversation', 'Apostila2Controller@unidade57Conversation')->name('apostila2/unidade57/conversation');
Route::get('/apostila2/unidade57/grammar', 'Apostila2Controller@unidade57Grammar')->name('apostila2/unidade57/grammar');
Route::get('/apostila2/unidade57/pronunciation', 'Apostila2Controller@unidade57Pronunciation')->name('apostila2/unidade57/pronunciation');
Route::get('/apostila2/unidade57/listening', 'Apostila2Controller@unidade57Listening')->name('apostila2/unidade57/listening');
Route::get('/apostila2/unidade57/understanding', 'Apostila2Controller@unidade57Understanding')->name('apostila2/unidade57/understanding');

//UNIDADE 58
Route::get('/apostila2/unidade58/vocabulary', 'Apostila2Controller@unidade58Vocabulary')->name('apostila2/unidade58/vocabulary');
Route::get('/apostila2/unidade58/conversation', 'Apostila2Controller@unidade58Conversation')->name('apostila2/unidade58/conversation');
Route::get('/apostila2/unidade58/grammar', 'Apostila2Controller@unidade58Grammar')->name('apostila2/unidade58/grammar');
Route::get('/apostila2/unidade58/pronunciation', 'Apostila2Controller@unidade58Pronunciation')->name('apostila2/unidade58/pronunciation');
Route::get('/apostila2/unidade58/listening', 'Apostila2Controller@unidade58Listening')->name('apostila2/unidade58/listening');
Route::get('/apostila2/unidade58/understanding', 'Apostila2Controller@unidade58Understanding')->name('apostila2/unidade58/understanding');

//UNIDADE 59
Route::get('/apostila2/unidade59/vocabulary', 'Apostila2Controller@unidade59Vocabulary')->name('apostila2/unidade59/vocabulary');
Route::get('/apostila2/unidade59/conversation', 'Apostila2Controller@unidade59Conversation')->name('apostila2/unidade59/conversation');
Route::get('/apostila2/unidade59/grammar', 'Apostila2Controller@unidade59Grammar')->name('apostila2/unidade59/grammar');
Route::get('/apostila2/unidade59/pronunciation', 'Apostila2Controller@unidade59Pronunciation')->name('apostila2/unidade59/pronunciation');
Route::get('/apostila2/unidade59/listening', 'Apostila2Controller@unidade59Listening')->name('apostila2/unidade59/listening');
Route::get('/apostila2/unidade59/understanding', 'Apostila2Controller@unidade59Understanding')->name('apostila2/unidade59/understanding');

//UNIDADE 60
Route::get('/apostila2/unidade60/vocabulary', 'Apostila2Controller@unidade60Vocabulary')->name('apostila2/unidade60/vocabulary');
Route::get('/apostila2/unidade60/conversation', 'Apostila2Controller@unidade60Conversation')->name('apostila2/unidade60/conversation');
Route::get('/apostila2/unidade60/grammar', 'Apostila2Controller@unidade60Grammar')->name('apostila2/unidade60/grammar');
Route::get('/apostila2/unidade60/pronunciation', 'Apostila2Controller@unidade60Pronunciation')->name('apostila2/unidade60/pronunciation');
Route::get('/apostila2/unidade60/listening', 'Apostila2Controller@unidade60Listening')->name('apostila2/unidade60/listening');
Route::get('/apostila2/unidade60/understanding', 'Apostila2Controller@unidade60Understanding')->name('apostila2/unidade60/understanding');

/*****************************************************************************************************************************************/

/* ROTAS PARA O CRUD APOSTILA 01 */
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

/* ROTAS PARA O CRUD APOSTILA 02 */
//UNIDADE 1
Route::post('/apostila2/unidade1/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade1/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade1/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade1/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade1/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade1/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 2
Route::post('/apostila2/unidade2/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade2/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade2/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade2/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade2/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade2/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 3
Route::post('/apostila2/unidade3/vocabulary/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade3/vocabulary/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade3/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade3/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade3/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade3/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade3/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade3/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 4
Route::post('/apostila2/unidade4/vocabulary/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade4/vocabulary/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade4/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade4/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade4/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade4/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade4/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade4/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 5
Route::post('/apostila2/unidade5/vocabulary/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade5/vocabulary/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade5/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade5/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade5/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade5/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade5/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade5/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 6
Route::post('/apostila2/unidade6/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade6/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade6/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade6/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade6/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade6/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 7
Route::post('/apostila2/unidade7/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade7/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade7/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade7/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade7/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade7/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 8
Route::post('/apostila2/unidade8/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade8/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade8/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade8/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade8/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade8/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 9
Route::post('/apostila2/unidade9/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade9/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade9/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade9/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade9/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade9/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 10
Route::post('/apostila2/unidade10/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade10/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade10/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade10/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade10/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade10/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 11
Route::post('/apostila2/unidade11/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade11/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade11/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade11/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade11/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade11/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 12
Route::post('/apostila2/unidade12/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade12/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade12/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade12/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade12/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade12/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 13
Route::post('/apostila2/unidade13/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade13/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade13/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade13/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade13/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade13/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 14
Route::post('/apostila2/unidade14/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade14/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade14/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade14/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade14/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade14/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 15
Route::post('/apostila2/unidade15/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade15/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade15/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade15/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade15/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade15/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 16
Route::post('/apostila2/unidade16/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade16/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade16/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade16/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade16/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade16/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 17
Route::post('/apostila2/unidade17/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade17/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade17/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade17/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade17/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade17/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 18
Route::post('/apostila2/unidade18/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade18/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade18/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade18/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade18/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade18/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 19
Route::post('/apostila2/unidade19/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade19/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade19/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade19/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade19/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade19/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 20
Route::post('/apostila2/unidade20/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade20/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade20/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade20/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade20/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade20/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 21
Route::post('/apostila2/unidade21/vocabulary/respostas', 'RespostaController@store');
Route::get('/apostila2/unidad21/vocabulary/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade21/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade21/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade21/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade21/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade21/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade21/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 22
Route::post('/apostila2/unidade22/vocabulary/respostas', 'RespostaController@store');
Route::get('/apostila2/unidad22/vocabulary/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade22/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade22/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade22/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade22/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade22/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade22/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 23
Route::post('/apostila2/unidade23/vocabulary/respostas', 'RespostaController@store');
Route::get('/apostila2/unidad23/vocabulary/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade23/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade23/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade23/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade23/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade23/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade23/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 24
Route::post('/apostila2/unidade24/vocabulary/respostas', 'RespostaController@store');
Route::get('/apostila2/unidad24/vocabulary/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade24/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade24/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade24/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade24/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade24/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade24/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//Rotas para o Portal do Aluno
Route::get('/portal', 'HomeController@homePortal')->name('portal');
Route::get('/material', 'MaterialDidaticoController@index')->name('material');
Route::get('/nota', 'NotaController@index')->name('nota');
Route::get('/frequencia', 'FrequenciaController@index')->name('frequencia');
Route::get('/financeiro', 'FinanceiroController@index')->name('financeiro');
Route::get('/contato', 'ContatoController@index')->name('contato');
Route::get('/perfil', 'PerfilController@index')->name('perfil');
Route::post('/enviar-email', 'ContatoController@enviar');
Route::post('/enviar-frequencia', 'FrequenciaController@enviar');
Route::post('/atualizar-perfil/{id}', 'PerfilController@update');

Route::get('/atualiza-senha','UserController@atualizaSenha');
//UNIDADE 25
Route::post('/apostila2/unidade25/vocabulary/respostas', 'RespostaController@store');
Route::get('/apostila2/unidad25/vocabulary/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade25/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade25/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade25/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade25/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade25/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade25/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 26
Route::post('/apostila2/unidade26/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade26/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade26/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade26/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade26/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade26/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 27
Route::post('/apostila2/unidade27/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade27/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade27/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade27/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade27/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade27/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 28
Route::post('/apostila2/unidade28/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade28/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade28/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade28/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade28/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade28/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 29
Route::post('/apostila2/unidade29/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade29/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade29/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade29/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade29/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade29/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 30
Route::post('/apostila2/unidade30/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade30/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade30/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade30/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade30/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade30/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 31
Route::post('/apostila2/unidade31/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade31/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade31/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade31/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade31/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade31/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 32
Route::post('/apostila2/unidade32/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade32/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade32/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade32/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade32/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade32/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 33
Route::post('/apostila2/unidade33/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade33/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade33/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade33/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade33/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade33/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 34
Route::post('/apostila2/unidade34/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade34/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade34/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade34/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade34/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade34/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 35
Route::post('/apostila2/unidade35/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade35/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade35/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade35/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade35/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade35/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 36
Route::post('/apostila2/unidade36/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade36/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade36/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade36/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade36/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade36/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 37
Route::post('/apostila2/unidade37/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade37/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade37/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade37/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade37/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade37/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 38
Route::post('/apostila2/unidade38/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade38/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade38/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade38/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade38/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade38/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 39
Route::post('/apostila2/unidade39/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade39/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade39/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade39/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade39/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade39/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 40
Route::post('/apostila2/unidade40/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade40/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade40/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade40/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade40/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade40/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 41
Route::post('/apostila2/unidade41/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade41/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade41/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade41/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade41/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade41/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 42
Route::post('/apostila2/unidade42/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade42/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade42/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade42/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade42/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade42/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 43
Route::post('/apostila2/unidade43/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade43/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade43/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade43/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade43/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade43/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 44
Route::post('/apostila2/unidade44/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade44/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade44/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade44/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade44/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade44/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 45
Route::post('/apostila2/unidade45/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade45/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade45/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade45/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade45/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade45/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 46
Route::post('/apostila2/unidade46/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade46/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade46/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade46/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade46/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade46/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 47
Route::post('/apostila2/unidade47/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade47/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade47/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade47/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade47/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade47/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 48
Route::post('/apostila2/unidade48/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade48/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade48/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade48/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade48/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade48/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 49
Route::post('/apostila2/unidade49/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade49/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade49/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade49/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade49/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade49/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 50
Route::post('/apostila2/unidade50/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade50/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade50/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade50/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade50/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade50/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 51
Route::post('/apostila2/unidade51/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade51/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade51/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade51/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade51/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade51/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 52
Route::post('/apostila2/unidade52/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade52/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade52/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade52/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade52/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade52/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 53
Route::post('/apostila2/unidade53/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade53/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade53/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade53/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade53/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade53/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 54
Route::post('/apostila2/unidade54/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade54/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade54/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade54/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade54/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade54/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 55
Route::post('/apostila2/unidade55/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade55/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade55/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade55/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade55/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade55/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 56
Route::post('/apostila2/unidade56/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade56/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade56/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade56/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade56/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade56/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 57
Route::post('/apostila2/unidade57/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade57/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade57/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade57/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade57/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade57/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 58
Route::post('/apostila2/unidade58/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade58/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade58/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade58/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade58/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade58/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 59
Route::post('/apostila2/unidade59/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade59/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade59/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade59/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade59/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade59/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 60
Route::post('/apostila2/unidade60/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade60/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade60/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade60/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade60/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade60/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

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






