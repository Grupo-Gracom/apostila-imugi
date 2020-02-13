<?php

namespace App\Http\Controllers;

use App\User;
use App\Resposta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
    protected $usuario;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->usuario = Auth::user();

            return $next($request);
        });
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$ultimasNoticias = Noticia::orderBy('noticia_id', 'desc')->simplePaginate(10);
        return view('home/index');
    }

    //UNIDADE 1
    public function unidade1Vocabulary(){
        return view('unidade1/vocabulary');
    }
    public function unidade1Conversation(){
        return view('unidade1/conversation');
    }
    public function unidade1Grammar(){
        return view('unidade1/grammar');
    }
    public function unidade1Listening(){
        return view('unidade1/listening');
    }
    public function unidade1Pronunciation(){
        return view('unidade1/pronunciation');
    }
    public function unidade1Understanding(){
        return view('unidade1/understanding');
    }

    //UNIDADE 2
    public function unidade2Vocabulary(){
        return view('unidade2/vocabulary');
    }
    public function unidade2Grammar(){
        return view('unidade2/grammar');
    }
    public function unidade2Listening(){
        return view('unidade2/listening');
    }
    public function unidade2Understanding(){
        return view('unidade2/understanding');
    }

    //UNIDADE 3
    public function unidade3Vocabulary(){
        return view('unidade3/vocabulary');
    }
    public function unidade3Conversation(){
        return view('unidade3/conversation');
    }
    public function unidade3Grammar(){
        return view('unidade3/grammar');
    }
    public function unidade3Pronunciation(){
        return view('unidade3/pronunciation');
    }
    public function unidade3Listening(){
        return view('unidade3/listening');
    }
    public function unidade3Understanding(){
        return view('unidade3/understanding');
    }
    
    //UNIDADE 4
    public function unidade4Vocabulary(){
        return view('unidade4/vocabulary');
    }
    public function unidade4Conversation(){
        return view('unidade4/conversation');
    }
    public function unidade4Grammar(){
        return view('unidade4/grammar');
    }
    public function unidade4Pronunciation(){
        return view('unidade4/pronunciation');
    }
    public function unidade4Listening(){
        return view('unidade4/listening');
    }
    public function unidade4Understanding(){
        return view('unidade4/understanding');
    }

    //UNIDADE 5
    public function unidade5Vocabulary(){
        return view('unidade5/vocabulary');
    }
    public function unidade5Conversation(){
        return view('unidade5/conversation');
    }
    public function unidade5Grammar(){
        return view('unidade5/grammar');
    }
    public function unidade5Pronunciation(){
        return view('unidade5/pronunciation');
    }
    public function unidade5Listening(){
        return view('unidade5/listening');
    }
    public function unidade5Understanding(){
        return view('unidade5/understanding');
    }

    //UNIDADE 7
    public function unidade7Vocabulary(){
        return view('unidade7/vocabulary');
    }
    public function unidade7Conversation(){
        return view('unidade7/conversation');
    }
    public function unidade7Grammar(){
        return view('unidade7/grammar');
    }
    public function unidade7Pronunciation(){
        return view('unidade7/pronunciation');
    }
    public function unidade7Listening(){
        return view('unidade7/listening');
    }
    public function unidade7Understanding(){
        return view('unidade7/understanding');
    }
    //UNIDADE 6
    public function unidade6Vocabulary(){
        return view('unidade6/vocabulary');
    }
    public function unidade6Conversation(){
        return view('unidade6/conversation');
    }
    public function unidade6Grammar(){
        return view('unidade6/grammar');
    }
    public function unidade6Pronunciation(){
        return view('unidade6/pronunciation');
    }
    public function unidade6Listening(){
        return view('unidade6/listening');
    }
    public function unidade6Understanding(){
        return view('unidade6/understanding');
    }

    //UNIDADE 9
    public function unidade9Vocabulary(){
        return view('unidade9/vocabulary');
    }
    public function unidade9Conversation(){
        return view('unidade9/conversation');
    }
    public function unidade9Grammar(){
        return view('unidade9/grammar');
    }
    public function unidade9Pronunciation(){
        return view('unidade9/pronunciation');
    }
    public function unidade9Listening(){
        return view('unidade9/listening');
    }
    public function unidade9Understanding(){
        return view('unidade9/understanding');
    }

    //UNIDADE 10
    public function unidade10Vocabulary(){
        return view('unidade10/vocabulary');
    }
    public function unidade10Conversation(){
        return view('unidade10/conversation');
    }
    public function unidade10Grammar(){
        return view('unidade10/grammar');
    }
    public function unidade10Pronunciation(){
        return view('unidade10/pronunciation');
    }
    public function unidade10Listening(){
        return view('unidade10/listening');
    }
    public function unidade10Understanding(){
        return view('unidade10/understanding');
    }
    
    
}
