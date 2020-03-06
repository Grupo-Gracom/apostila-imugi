<?php

namespace App\Http\Controllers;

use App\User;
use App\Resposta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\O_Turma;

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
        $matricula = Auth::user()->id;
        $aluno = User::find($matricula);

        return view('home/index',compact('aluno'));
    }

    public function apostila1Intro()
    {
        return view('apostila1/intro1/intro');
    }

    public function apostila2Intro()
    {
        return view('apostila2/intro2/intro');
    }

    public function homePortal()
    {
        return view('portal/home/index');
    }

    public function materialDidatico(){
        return view('portal/material/index');
    }

}
