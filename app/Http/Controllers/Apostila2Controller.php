<?php

namespace App\Http\Controllers;

use App\User;
use App\Resposta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Apostila2Controller extends Controller
{
    
    protected $usuario;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->usuario = Auth::user();

            return $next($request);
        });
    }

//UNIDADE 1
    public function unidade1Vocabulary(){
        return view('apostila2/unidade1/vocabulary');
    }
    public function unidade1Conversation(){
        return view('apostila2/unidade1/conversation');
    }
    public function unidade1Grammar(){
        return view('apostila2/unidade1/grammar');
    }
    public function unidade1Listening(){
        return view('apostila2/unidade1/listening');
    }
    public function unidade1Pronunciation(){
        return view('apostila2/unidade1/pronunciation');
    }
    public function unidade1Understanding(){
        return view('apostila2/unidade1/understanding');
    }

    //UNIDADE 2
    public function unidade2Vocabulary(){
        return view('apostila2/unidade2/vocabulary');
    }
    public function unidade2Conversation(){
        return view('apostila2/unidade2/conversation');
    }
    public function unidade2Pronunciation(){
        return view('apostila2/unidade2/pronunciation');
    }
    public function unidade2Grammar(){
        return view('apostila2/unidade2/grammar');
    }
    public function unidade2Listening(){
        return view('apostila2/unidade2/listening');
    }
    public function unidade2Understanding(){
        return view('apostila2/unidade2/understanding');
    }

    //UNIDADE 3
    public function unidade3Vocabulary(){
        return view('apostila2/unidade3/vocabulary');
    }
    public function unidade3Conversation(){
        return view('apostila2/unidade3/conversation');
    }
    public function unidade3Grammar(){
        return view('apostila2/unidade3/grammar');
    }
    public function unidade3Pronunciation(){
        return view('apostila2/unidade3/pronunciation');
    }
    public function unidade3Listening(){
        return view('apostila2/unidade3/listening');
    }
    public function unidade3Understanding(){
        return view('apostila2/unidade3/understanding');
    }
    
    //UNIDADE 4
    public function unidade4Vocabulary(){
        return view('apostila2/unidade4/vocabulary');
    }
    public function unidade4Conversation(){
        return view('apostila2/unidade4/conversation');
    }
    public function unidade4Grammar(){
        return view('apostila2/unidade4/grammar');
    }
    public function unidade4Pronunciation(){
        return view('apostila2/unidade4/pronunciation');
    }
    public function unidade4Listening(){
        return view('apostila2/unidade4/listening');
    }
    public function unidade4Understanding(){
        return view('apostila2/unidade4/understanding');
    }

    //UNIDADE 5
    public function unidade5Vocabulary(){
        return view('apostila2/unidade5/vocabulary');
    }
    public function unidade5Conversation(){
        return view('apostila2/unidade5/conversation');
    }
    public function unidade5Grammar(){
        return view('apostila2/unidade5/grammar');
    }
    public function unidade5Pronunciation(){
        return view('apostila2/unidade5/pronunciation');
    }
    public function unidade5Listening(){
        return view('apostila2/unidade5/listening');
    }
    public function unidade5Understanding(){
        return view('apostila2/unidade5/understanding');
    }

    //UNIDADE 6
    public function unidade6Vocabulary(){
        return view('apostila2/unidade6/vocabulary');
    }
    public function unidade6Conversation(){
        return view('apostila2/unidade6/conversation');
    }
    public function unidade6Grammar(){
        return view('apostila2/unidade6/grammar');
    }
    public function unidade6Pronunciation(){
        return view('apostila2/unidade6/pronunciation');
    }
    public function unidade6Listening(){
        return view('apostila2/unidade6/listening');
    }
    public function unidade6Understanding(){
        return view('apostila2/unidade6/understanding');
    }
    
    //UNIDADE 7
    public function unidade7Vocabulary(){
        return view('apostila2/unidade7/vocabulary');
    }
    public function unidade7Conversation(){
        return view('apostila2/unidade7/conversation');
    }
    public function unidade7Grammar(){
        return view('apostila2/unidade7/grammar');
    }
    public function unidade7Pronunciation(){
        return view('apostila2/unidade7/pronunciation');
    }
    public function unidade7Listening(){
        return view('apostila2/unidade7/listening');
    }
    public function unidade7Understanding(){
        return view('apostila2/unidade7/understanding');

    }

    //UNIDADE 8
    public function unidade8Vocabulary(){
        return view('apostila2/unidade8/vocabulary');
    }
    public function unidade8Conversation(){
        return view('apostila2/unidade8/conversation');
    }
    public function unidade8Grammar(){
        return view('apostila2/unidade8/grammar');
    }
    public function unidade8Pronunciation(){
        return view('apostila2/unidade8/pronunciation');
    }
    public function unidade8Listening(){
        return view('apostila2/unidade8/listening');
    }
    public function unidade8Understanding(){
        return view('apostila2/unidade8/understanding');
    }

    //UNIDADE 9
    public function unidade9Vocabulary(){
        return view('apostila2/unidade9/vocabulary');
    }
    public function unidade9Conversation(){
        return view('apostila2/unidade9/conversation');
    }
    public function unidade9Grammar(){
        return view('apostila2/unidade9/grammar');
    }
    public function unidade9Pronunciation(){
        return view('apostila2/unidade9/pronunciation');
    }
    public function unidade9Listening(){
        return view('apostila2/unidade9/listening');
    }
    public function unidade9Understanding(){
        return view('apostila2/unidade9/understanding');
    }

    //UNIDADE 10
    public function unidade10Vocabulary(){
        return view('apostila2/unidade10/vocabulary');
    }
    public function unidade10Conversation(){
        return view('apostila2/unidade10/conversation');
    }
    public function unidade10Grammar(){
        return view('apostila2/unidade10/grammar');
    }
    public function unidade10Pronunciation(){
        return view('apostila2/unidade10/pronunciation');
    }
    public function unidade10Listening(){
        return view('apostila2/unidade10/listening');
    }
    public function unidade10Understanding(){
        return view('apostila2/unidade10/understanding');
    }

    //UNIDADE 11
    public function unidade11Vocabulary(){
        return view('apostila2/unidade11/vocabulary');
    }
    public function unidade11Conversation(){
        return view('apostila2/unidade11/conversation');
    }
    public function unidade11Grammar(){
        return view('apostila2/unidade11/grammar');
    }
    public function unidade11Pronunciation(){
        return view('apostila2/unidade11/pronunciation');
    }
    public function unidade11Listening(){
        return view('apostila2/unidade11/listening');
    }
    public function unidade11Understanding(){
        return view('apostila2/unidade11/understanding');
    }

    //UNIDADE 12
    public function unidade12Vocabulary(){
        return view('apostila2/unidade12/vocabulary');
    }
    public function unidade12Conversation(){
        return view('apostila2/unidade12/conversation');
    }
    public function unidade12Grammar(){
        return view('apostila2/unidade12/grammar');
    }
    public function unidade12Pronunciation(){
        return view('apostila2/unidade12/pronunciation');
    }
    public function unidade12Listening(){
        return view('apostila2/unidade12/listening');
    }
    public function unidade12Understanding(){
        return view('apostila2/unidade12/understanding');
    }

    //UNIDADE 13
    public function unidade13Vocabulary(){
        return view('apostila2/unidade13/vocabulary');
    }
    public function unidade13Conversation(){
        return view('apostila2/unidade13/conversation');
    }
    public function unidade13Grammar(){
        return view('apostila2/unidade13/grammar');
    }
    public function unidade13Pronunciation(){
        return view('apostila2/unidade13/pronunciation');
    }
    public function unidade13Listening(){
        return view('apostila2/unidade13/listening');
    }
    public function unidade13Understanding(){
        return view('apostila2/unidade13/understanding');
    }

    //UNIDADE 14
    public function unidade14Vocabulary(){
        return view('apostila2/unidade14/vocabulary');
    }
    public function unidade14Conversation(){
        return view('apostila2/unidade14/conversation');
    }
    public function unidade14Grammar(){
        return view('apostila2/unidade14/grammar');
    }
    public function unidade14Pronunciation(){
        return view('apostila2/unidade14/pronunciation');
    }
    public function unidade14Listening(){
        return view('apostila2/unidade14/listening');
    }
    public function unidade14Understanding(){
        return view('apostila2/unidade14/understanding');
    }

    //UNIDADE 15
    public function unidade15Vocabulary(){
        return view('apostila2/unidade15/vocabulary');
    }
    public function unidade15Conversation(){
        return view('apostila2/unidade15/conversation');
    }
    public function unidade15Grammar(){
        return view('apostila2/unidade15/grammar');
    }
    public function unidade15Pronunciation(){
        return view('apostila2/unidade15/pronunciation');
    }
    public function unidade15Listening(){
        return view('apostila2/unidade15/listening');
    }
    public function unidade15Understanding(){
        return view('apostila2/unidade15/understanding');
    }

    //UNIDADE 16
    public function unidade16Vocabulary(){
        return view('apostila2/unidade16/vocabulary');
    }
    public function unidade16Conversation(){
        return view('apostila2/unidade16/conversation');
    }
    public function unidade16Grammar(){
        return view('apostila2/unidade16/grammar');
    }
    public function unidade16Pronunciation(){
        return view('apostila2/unidade16/pronunciation');
    }
    public function unidade16Listening(){
        return view('apostila2/unidade16/listening');
    }
    public function unidade16Understanding(){
        return view('apostila2/unidade16/understanding');
    }

    //UNIDADE 17
    public function unidade17Vocabulary(){
        return view('apostila2/unidade17/vocabulary');
    }
    public function unidade17Conversation(){
        return view('apostila2/unidade17/conversation');
    }
    public function unidade17Grammar(){
        return view('apostila2/unidade17/grammar');
    }
    public function unidade17Pronunciation(){
        return view('apostila2/unidade17/pronunciation');
    }
    public function unidade17Listening(){
        return view('apostila2/unidade17/listening');
    }
    public function unidade17Understanding(){
        return view('apostila2/unidade17/understanding');
    }

    //UNIDADE 18
    public function unidade18Vocabulary(){
        return view('apostila2/unidade18/vocabulary');
    }
    public function unidade18Conversation(){
        return view('apostila2/unidade18/conversation');
    }
    public function unidade18Grammar(){
        return view('apostila2/unidade18/grammar');
    }
    public function unidade18Pronunciation(){
        return view('apostila2/unidade18/pronunciation');
    }
    public function unidade18Listening(){
        return view('apostila2/unidade18/listening');
    }
    public function unidade18Understanding(){
        return view('apostila2/unidade18/understanding');
    }

    //UNIDADE 19
    public function unidade19Vocabulary(){
        return view('apostila2/unidade19/vocabulary');
    }
    public function unidade19Conversation(){
        return view('apostila2/unidade19/conversation');
    }
    public function unidade19Grammar(){
        return view('apostila2/unidade19/grammar');
    }
    public function unidade19Pronunciation(){
        return view('apostila2/unidade19/pronunciation');
    }
    public function unidade19Listening(){
        return view('apostila2/unidade19/listening');
    }
    public function unidade19Understanding(){
        return view('apostila2/unidade19/understanding');
    }

    //UNIDADE 20
    public function unidade20Vocabulary(){
        return view('apostila2/unidade20/vocabulary');
    }
    public function unidade20Conversation(){
        return view('apostila2/unidade20/conversation');
    }
    public function unidade20Grammar(){
        return view('apostila2/unidade20/grammar');
    }
    public function unidade20Pronunciation(){
        return view('apostila2/unidade20/pronunciation');
    }
    public function unidade20Listening(){
        return view('apostila2/unidade20/listening');
    }
    public function unidade20Understanding(){
        return view('apostila2/unidade20/understanding');
    }

    //UNIDADE 21
    public function unidade21Vocabulary(){
        return view('apostila2/unidade21/vocabulary');
    }
    public function unidade21Conversation(){
        return view('apostila2/unidade21/conversation');
    }
    public function unidade21Grammar(){
        return view('apostila2/unidade21/grammar');
    }
    public function unidade21Pronunciation(){
        return view('apostila2/unidade21/pronunciation');
    }
    public function unidade21Listening(){
        return view('apostila2/unidade21/listening');
    }
    public function unidade21Understanding(){
        return view('apostila2/unidade21/understanding');
    }

    //UNIDADE 22
    public function unidade22Vocabulary(){
        return view('apostila2/unidade22/vocabulary');
    }
    public function unidade22Conversation(){
        return view('apostila2/unidade22/conversation');
    }
    public function unidade22Grammar(){
        return view('apostila2/unidade22/grammar');
    }
    public function unidade22Pronunciation(){
        return view('apostila2/unidade22/pronunciation');
    }
    public function unidade22Listening(){
        return view('apostila2/unidade22/listening');
    }
    public function unidade22Understanding(){
        return view('apostila2/unidade22/understanding');
    }

    //UNIDADE 23
    public function unidade23Vocabulary(){
        return view('apostila2/unidade23/vocabulary');
    }
    public function unidade23Conversation(){
        return view('apostila2/unidade23/conversation');
    }
    public function unidade23Grammar(){
        return view('apostila2/unidade23/grammar');
    }
    public function unidade23Pronunciation(){
        return view('apostila2/unidade23/pronunciation');
    }
    public function unidade23Listening(){
        return view('apostila2/unidade23/listening');
    }
    public function unidade23Understanding(){
        return view('apostila2/unidade23/understanding');
    }

    //UNIDADE 24
    public function unidade24Vocabulary(){
        return view('apostila2/unidade24/vocabulary');
    }
    public function unidade24Conversation(){
        return view('apostila2/unidade24/conversation');
    }
    public function unidade24Grammar(){
        return view('apostila2/unidade24/grammar');
    }
    public function unidade24Pronunciation(){
        return view('apostila2/unidade24/pronunciation');
    }
    public function unidade24Listening(){
        return view('apostila2/unidade24/listening');
    }
    public function unidade24Understanding(){
        return view('apostila2/unidade24/understanding');
    }

    //UNIDADE 25
    public function unidade25Vocabulary(){
        return view('apostila2/unidade25/vocabulary');
    }
    public function unidade25Conversation(){
        return view('apostila2/unidade25/conversation');
    }
    public function unidade25Grammar(){
        return view('apostila2/unidade25/grammar');
    }
    public function unidade25Pronunciation(){
        return view('apostila2/unidade25/pronunciation');
    }
    public function unidade25Listening(){
        return view('apostila2/unidade25/listening');
    }
    public function unidade25Understanding(){
        return view('apostila2/unidade25/understanding');
    }

    //UNIDADE 26
    public function unidade26Vocabulary(){
        return view('apostila2/unidade26/vocabulary');
    }
    public function unidade26Conversation(){
        return view('apostila2/unidade26/conversation');
    }
    public function unidade26Grammar(){
        return view('apostila2/unidade26/grammar');
    }
    public function unidade26Pronunciation(){
        return view('apostila2/unidade26/pronunciation');
    }
    public function unidade26Listening(){
        return view('apostila2/unidade26/listening');
    }
    public function unidade26Understanding(){
        return view('apostila2/unidade26/understanding');
    }
    
    //UNIDADE 27
    public function unidade27Vocabulary(){
        return view('apostila2/unidade27/vocabulary');
    }
    public function unidade27Conversation(){
        return view('apostila2/unidade27/conversation');
    }
    public function unidade27Grammar(){
        return view('apostila2/unidade27/grammar');
    }
    public function unidade27Pronunciation(){
        return view('apostila2/unidade27/pronunciation');
    }
    public function unidade27Listening(){
        return view('apostila2/unidade27/listening');
    }
    public function unidade27Understanding(){
        return view('apostila2/unidade27/understanding');
    }

    //UNIDADE 28
    public function unidade28Vocabulary(){
        return view('apostila2/unidade28/vocabulary');
    }
    public function unidade28Conversation(){
        return view('apostila2/unidade28/conversation');
    }
    public function unidade28Grammar(){
        return view('apostila2/unidade28/grammar');
    }
    public function unidade28Pronunciation(){
        return view('apostila2/unidade28/pronunciation');
    }
    public function unidade28Listening(){
        return view('apostila2/unidade28/listening');
    }
    public function unidade28Understanding(){
        return view('apostila2/unidade28/understanding');
    }

    //UNIDADE 29
    public function unidade29Vocabulary(){
        return view('apostila2/unidade29/vocabulary');
    }
    public function unidade29Conversation(){
        return view('apostila2/unidade29/conversation');
    }
    public function unidade29Grammar(){
        return view('apostila2/unidade29/grammar');
    }
    public function unidade29Pronunciation(){
        return view('apostila2/unidade29/pronunciation');
    }
    public function unidade29Listening(){
        return view('apostila2/unidade29/listening');
    }
    public function unidade29Understanding(){
        return view('apostila2/unidade29/understanding');
    }

    //UNIDADE 30
    public function unidade30Vocabulary(){
        return view('apostila2/unidade30/vocabulary');
    }
    public function unidade30Conversation(){
        return view('apostila2/unidade30/conversation');
    }
    public function unidade30Grammar(){
        return view('apostila2/unidade30/grammar');
    }
    public function unidade30Pronunciation(){
        return view('apostila2/unidade30/pronunciation');
    }
    public function unidade30Listening(){
        return view('apostila2/unidade30/listening');
    }
    public function unidade30Understanding(){
        return view('apostila2/unidade30/understanding');
    }

    //UNIDADE 31
    public function unidade31Vocabulary(){
        return view('apostila2/unidade31/vocabulary');
    }
    public function unidade31Conversation(){
        return view('apostila2/unidade31/conversation');
    }
    public function unidade31Grammar(){
        return view('apostila2/unidade31/grammar');
    }
    public function unidade31Pronunciation(){
        return view('apostila2/unidade31/pronunciation');
    }
    public function unidade31Listening(){
        return view('apostila2/unidade31/listening');
    }
    public function unidade31Understanding(){
        return view('apostila2/unidade31/understanding');
    }

    //UNIDADE 32
    public function unidade32Vocabulary(){
        return view('apostila2/unidade32/vocabulary');
    }
    public function unidade32Conversation(){
        return view('apostila2/unidade32/conversation');
    }
    public function unidade32Grammar(){
        return view('apostila2/unidade32/grammar');
    }
    public function unidade32Pronunciation(){
        return view('apostila2/unidade32/pronunciation');
    }
    public function unidade32Listening(){
        return view('apostila2/unidade32/listening');
    }
    public function unidade32Understanding(){
        return view('apostila2/unidade32/understanding');
    }

    //UNIDADE 33
    public function unidade33Vocabulary(){
        return view('apostila2/unidade33/vocabulary');
    }
    public function unidade33Conversation(){
        return view('apostila2/unidade33/conversation');
    }
    public function unidade33Grammar(){
        return view('apostila2/unidade33/grammar');
    }
    public function unidade33Pronunciation(){
        return view('apostila2/unidade33/pronunciation');
    }
    public function unidade33Listening(){
        return view('apostila2/unidade33/listening');
    }
    public function unidade33Understanding(){
        return view('apostila2/unidade33/understanding');
    }

    //UNIDADE 34
    public function unidade34Vocabulary(){
        return view('apostila2/unidade34/vocabulary');
    }
    public function unidade34Conversation(){
        return view('apostila2/unidade34/conversation');
    }
    public function unidade34Grammar(){
        return view('apostila2/unidade34/grammar');
    }
    public function unidade34Pronunciation(){
        return view('apostila2/unidade34/pronunciation');
    }
    public function unidade34Listening(){
        return view('apostila2/unidade34/listening');
    }
    public function unidade34Understanding(){
        return view('apostila2/unidade34/understanding');
    }

    //UNIDADE 35
    public function unidade35Vocabulary(){
        return view('apostila2/unidade35/vocabulary');
    }
    public function unidade35Conversation(){
        return view('apostila2/unidade35/conversation');
    }
    public function unidade35Grammar(){
        return view('apostila2/unidade35/grammar');
    }
    public function unidade35Pronunciation(){
        return view('apostila2/unidade35/pronunciation');
    }
    public function unidade35Listening(){
        return view('apostila2/unidade35/listening');
    }
    public function unidade35Understanding(){
        return view('apostila2/unidade35/understanding');
    }

    //UNIDADE 36
    public function unidade36Vocabulary(){
        return view('apostila2/unidade36/vocabulary');
    }
    public function unidade36Conversation(){
        return view('apostila2/unidade36/conversation');
    }
    public function unidade36Grammar(){
        return view('apostila2/unidade36/grammar');
    }
    public function unidade36Pronunciation(){
        return view('apostila2/unidade36/pronunciation');
    }
    public function unidade36Listening(){
        return view('apostila2/unidade36/listening');
    }
    public function unidade36Understanding(){
        return view('apostila2/unidade36/understanding');
    }

    //UNIDADE 37
    public function unidade37Vocabulary(){
        return view('apostila2/unidade37/vocabulary');
    }
    public function unidade37Conversation(){
        return view('apostila2/unidade37/conversation');
    }
    public function unidade37Grammar(){
        return view('apostila2/unidade37/grammar');
    }
    public function unidade37Pronunciation(){
        return view('apostila2/unidade37/pronunciation');
    }
    public function unidade37Listening(){
        return view('apostila2/unidade37/listening');
    }
    public function unidade37Understanding(){
        return view('apostila2/unidade37/understanding');
    }

    //UNIDADE 38
    public function unidade38Vocabulary(){
        return view('apostila2/unidade38/vocabulary');
    }
    public function unidade38Conversation(){
        return view('apostila2/unidade38/conversation');
    }
    public function unidade38Grammar(){
        return view('apostila2/unidade38/grammar');
    }
    public function unidade38Pronunciation(){
        return view('apostila2/unidade38/pronunciation');
    }
    public function unidade38Listening(){
        return view('apostila2/unidade38/listening');
    }
    public function unidade38Understanding(){
        return view('apostila2/unidade38/understanding');
    }

    //UNIDADE 39
    public function unidade39Vocabulary(){
        return view('apostila2/unidade39/vocabulary');
    }
    public function unidade39Conversation(){
        return view('apostila2/unidade39/conversation');
    }
    public function unidade39Grammar(){
        return view('apostila2/unidade39/grammar');
    }
    public function unidade39Pronunciation(){
        return view('apostila2/unidade39/pronunciation');
    }
    public function unidade39Listening(){
        return view('apostila2/unidade39/listening');
    }
    public function unidade39Understanding(){
        return view('apostila2/unidade39/understanding');
    }

    //UNIDADE 40
    public function unidade40Vocabulary(){
        return view('apostila2/unidade40/vocabulary');
    }
    public function unidade40Conversation(){
        return view('apostila2/unidade40/conversation');
    }
    public function unidade40Grammar(){
        return view('apostila2/unidade40/grammar');
    }
    public function unidade40Pronunciation(){
        return view('apostila2/unidade40/pronunciation');
    }
    public function unidade40Listening(){
        return view('apostila2/unidade40/listening');
    }
    public function unidade40Understanding(){
        return view('apostila2/unidade40/understanding');
    }

    //UNIDADE 41
    public function unidade41Vocabulary(){
        return view('apostila2/unidade41/vocabulary');
    }
    public function unidade41Conversation(){
        return view('apostila2/unidade41/conversation');
    }
    public function unidade41Grammar(){
        return view('apostila2/unidade41/grammar');
    }
    public function unidade41Pronunciation(){
        return view('apostila2/unidade41/pronunciation');
    }
    public function unidade41Listening(){
        return view('apostila2/unidade41/listening');
    }
    public function unidade41Understanding(){
        return view('apostila2/unidade41/understanding');
    }

    //UNIDADE 42
    public function unidade42Vocabulary(){
        return view('apostila2/unidade42/vocabulary');
    }
    public function unidade42Conversation(){
        return view('apostila2/unidade42/conversation');
    }
    public function unidade42Grammar(){
        return view('apostila2/unidade42/grammar');
    }
    public function unidade42Pronunciation(){
        return view('apostila2/unidade42/pronunciation');
    }
    public function unidade42Listening(){
        return view('apostila2/unidade42/listening');
    }
    public function unidade42Understanding(){
        return view('apostila2/unidade42/understanding');
    }

    //UNIDADE 43
    public function unidade43Vocabulary(){
        return view('apostila2/unidade43/vocabulary');
    }
    public function unidade43Conversation(){
        return view('apostila2/unidade43/conversation');
    }
    public function unidade43Grammar(){
        return view('apostila2/unidade43/grammar');
    }
    public function unidade43Pronunciation(){
        return view('apostila2/unidade43/pronunciation');
    }
    public function unidade43Listening(){
        return view('apostila2/unidade43/listening');
    }
    public function unidade43Understanding(){
        return view('apostila2/unidade43/understanding');
    }

    //UNIDADE 44
    public function unidade44Vocabulary(){
        return view('apostila2/unidade44/vocabulary');
    }
    public function unidade44Conversation(){
        return view('apostila2/unidade44/conversation');
    }
    public function unidade44Grammar(){
        return view('apostila2/unidade44/grammar');
    }
    public function unidade44Pronunciation(){
        return view('apostila2/unidade44/pronunciation');
    }
    public function unidade44Listening(){
        return view('apostila2/unidade44/listening');
    }
    public function unidade44Understanding(){
        return view('apostila2/unidade44/understanding');
    }

    //UNIDADE 45
    public function unidade45Vocabulary(){
        return view('apostila2/unidade45/vocabulary');
    }
    public function unidade45Conversation(){
        return view('apostila2/unidade45/conversation');
    }
    public function unidade45Grammar(){
        return view('apostila2/unidade45/grammar');
    }
    public function unidade45Pronunciation(){
        return view('apostila2/unidade45/pronunciation');
    }
    public function unidade45Listening(){
        return view('apostila2/unidade45/listening');
    }
    public function unidade45Understanding(){
        return view('apostila2/unidade45/understanding');
    }

    //UNIDADE 46
    public function unidade46Vocabulary(){
        return view('apostila2/unidade46/vocabulary');
    }
    public function unidade46Conversation(){
        return view('apostila2/unidade46/conversation');
    }
    public function unidade46Grammar(){
        return view('apostila2/unidade46/grammar');
    }
    public function unidade46Pronunciation(){
        return view('apostila2/unidade46/pronunciation');
    }
    public function unidade46Listening(){
        return view('apostila2/unidade46/listening');
    }
    public function unidade46Understanding(){
        return view('apostila2/unidade46/understanding');
    }

    //UNIDADE 47
    public function unidade47Vocabulary(){
        return view('apostila2/unidade47/vocabulary');
    }
    public function unidade47Conversation(){
        return view('apostila2/unidade47/conversation');
    }
    public function unidade47Grammar(){
        return view('apostila2/unidade47/grammar');
    }
    public function unidade47Pronunciation(){
        return view('apostila2/unidade47/pronunciation');
    }
    public function unidade47Listening(){
        return view('apostila2/unidade47/listening');
    }
    public function unidade47Understanding(){
        return view('apostila2/unidade47/understanding');
    }

    //UNIDADE 48
    public function unidade48Vocabulary(){
        return view('apostila2/unidade48/vocabulary');
    }
    public function unidade48Conversation(){
        return view('apostila2/unidade48/conversation');
    }
    public function unidade48Grammar(){
        return view('apostila2/unidade48/grammar');
    }
    public function unidade48Pronunciation(){
        return view('apostila2/unidade48/pronunciation');
    }
    public function unidade48Listening(){
        return view('apostila2/unidade48/listening');
    }
    public function unidade48Understanding(){
        return view('apostila2/unidade48/understanding');
    }

    //UNIDADE 49
    public function unidade49Vocabulary(){
        return view('apostila2/unidade49/vocabulary');
    }
    public function unidade49Conversation(){
        return view('apostila2/unidade49/conversation');
    }
    public function unidade49Grammar(){
        return view('apostila2/unidade49/grammar');
    }
    public function unidade49Pronunciation(){
        return view('apostila2/unidade49/pronunciation');
    }
    public function unidade49Listening(){
        return view('apostila2/unidade49/listening');
    }
    public function unidade49Understanding(){
        return view('apostila2/unidade49/understanding');
    }

    //UNIDADE 50
    public function unidade50Vocabulary(){
        return view('apostila2/unidade50/vocabulary');
    }
    public function unidade50Conversation(){
        return view('apostila2/unidade50/conversation');
    }
    public function unidade50Grammar(){
        return view('apostila2/unidade50/grammar');
    }
    public function unidade50Pronunciation(){
        return view('apostila2/unidade50/pronunciation');
    }
    public function unidade50Listening(){
        return view('apostila2/unidade50/listening');
    }
    public function unidade50Understanding(){
        return view('apostila2/unidade50/understanding');
    }

    //UNIDADE 51
    public function unidade51Vocabulary(){
        return view('apostila2/unidade51/vocabulary');
    }
    public function unidade51Conversation(){
        return view('apostila2/unidade51/conversation');
    }
    public function unidade51Grammar(){
        return view('apostila2/unidade51/grammar');
    }
    public function unidade51Pronunciation(){
        return view('apostila2/unidade51/pronunciation');
    }
    public function unidade51Listening(){
        return view('apostila2/unidade51/listening');
    }
    public function unidade51Understanding(){
        return view('apostila2/unidade51/understanding');
    }

    //UNIDADE 52
    public function unidade52Vocabulary(){
        return view('apostila2/unidade52/vocabulary');
    }
    public function unidade52Conversation(){
        return view('apostila2/unidade52/conversation');
    }
    public function unidade52Grammar(){
        return view('apostila2/unidade52/grammar');
    }
    public function unidade52Pronunciation(){
        return view('apostila2/unidade52/pronunciation');
    }
    public function unidade52Listening(){
        return view('apostila2/unidade52/listening');
    }
    public function unidade52Understanding(){
        return view('apostila2/unidade52/understanding');
    }

    //UNIDADE 53
    public function unidade53Vocabulary(){
        return view('apostila2/unidade53/vocabulary');
    }
    public function unidade53Conversation(){
        return view('apostila2/unidade53/conversation');
    }
    public function unidade53Grammar(){
        return view('apostila2/unidade53/grammar');
    }
    public function unidade53Pronunciation(){
        return view('apostila2/unidade53/pronunciation');
    }
    public function unidade53Listening(){
        return view('apostila2/unidade53/listening');
    }
    public function unidade53Understanding(){
        return view('apostila2/unidade53/understanding');
    }

    //UNIDADE 54
    public function unidade54Vocabulary(){
        return view('apostila2/unidade54/vocabulary');
    }
    public function unidade54Conversation(){
        return view('apostila2/unidade54/conversation');
    }
    public function unidade54Grammar(){
        return view('apostila2/unidade54/grammar');
    }
    public function unidade54Pronunciation(){
        return view('apostila2/unidade54/pronunciation');
    }
    public function unidade54Listening(){
        return view('apostila2/unidade54/listening');
    }
    public function unidade54Understanding(){
        return view('apostila2/unidade54/understanding');
    }

    //UNIDADE 55
    public function unidade55Vocabulary(){
        return view('apostila2/unidade55/vocabulary');
    }
    public function unidade55Conversation(){
        return view('apostila2/unidade55/conversation');
    }
    public function unidade55Grammar(){
        return view('apostila2/unidade55/grammar');
    }
    public function unidade55Pronunciation(){
        return view('apostila2/unidade55/pronunciation');
    }
    public function unidade55Listening(){
        return view('apostila2/unidade55/listening');
    }
    public function unidade55Understanding(){
        return view('apostila2/unidade55/understanding');
    }

    //UNIDADE 56
    public function unidade56Vocabulary(){
        return view('apostila2/unidade56/vocabulary');
    }
    public function unidade56Conversation(){
        return view('apostila2/unidade56/conversation');
    }
    public function unidade56Grammar(){
        return view('apostila2/unidade56/grammar');
    }
    public function unidade56Pronunciation(){
        return view('apostila2/unidade56/pronunciation');
    }
    public function unidade56Listening(){
        return view('apostila2/unidade56/listening');
    }
    public function unidade56Understanding(){
        return view('apostila2/unidade56/understanding');
    }

    //UNIDADE 57
    public function unidade57Vocabulary(){
        return view('apostila2/unidade57/vocabulary');
    }
    public function unidade57Conversation(){
        return view('apostila2/unidade57/conversation');
    }
    public function unidade57Grammar(){
        return view('apostila2/unidade57/grammar');
    }
    public function unidade57Pronunciation(){
        return view('apostila2/unidade57/pronunciation');
    }
    public function unidade57Listening(){
        return view('apostila2/unidade57/listening');
    }
    public function unidade57Understanding(){
        return view('apostila2/unidade57/understanding');
    }

    //UNIDADE 58
    public function unidade58Vocabulary(){
        return view('apostila2/unidade58/vocabulary');
    }
    public function unidade58Conversation(){
        return view('apostila2/unidade58/conversation');
    }
    public function unidade58Grammar(){
        return view('apostila2/unidade58/grammar');
    }
    public function unidade58Pronunciation(){
        return view('apostila2/unidade58/pronunciation');
    }
    public function unidade58Listening(){
        return view('apostila2/unidade58/listening');
    }
    public function unidade58Understanding(){
        return view('apostila2/unidade58/understanding');
    }

    //UNIDADE 59
    public function unidade59Vocabulary(){
        return view('apostila2/unidade59/vocabulary');
    }
    public function unidade59Conversation(){
        return view('apostila2/unidade59/conversation');
    }
    public function unidade59Grammar(){
        return view('apostila2/unidade59/grammar');
    }
    public function unidade59Pronunciation(){
        return view('apostila2/unidade59/pronunciation');
    }
    public function unidade59Listening(){
        return view('apostila2/unidade59/listening');
    }
    public function unidade59Understanding(){
        return view('apostila2/unidade59/understanding');
    }

    //UNIDADE 60
    public function unidade60Vocabulary(){
        return view('apostila2/unidade60/vocabulary');
    }
    public function unidade60Conversation(){
        return view('apostila2/unidade60/conversation');
    }
    public function unidade60Grammar(){
        return view('apostila2/unidade60/grammar');
    }
    public function unidade60Pronunciation(){
        return view('apostila2/unidade60/pronunciation');
    }
    public function unidade60Listening(){
        return view('apostila2/unidade60/listening');
    }
    public function unidade60Understanding(){
        return view('apostila2/unidade60/understanding');
    }

}