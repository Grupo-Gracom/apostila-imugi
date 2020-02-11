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

    public function unidade1Vocabulary(){
        return view('unidade1/vocabulary');
    }
    public function unidade1Grammar(){
        return view('unidade1/grammar');
    }
    public function unidade1Listening(){
        return view('unidade1/listening');
    }
    public function unidade1Understanding(){
        return view('unidade1/understanding');
    }

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
    
    public function unidade3Vocabulary(){
        return view('unidade3/vocabulary');
    }
    public function unidade3Conversation(){
        return view('unidade3/conversation');
    }
    public function unidade3Grammar(){
        return view('unidade3/grammar');
    }
    public function unidade3Listening(){
        return view('unidade3/listening');
    }
    public function unidade3Understanding(){
        return view('unidade3/understanding');
    }
}
