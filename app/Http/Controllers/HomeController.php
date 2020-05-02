<?php

namespace App\Http\Controllers;

use App\Unidade;
use App\User;
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
        if (Auth::check()) {
            $matricula = Auth::user()->id;
            $aluno = User::find($matricula);
            return view('home/index', compact('aluno'));
        } else {
            return redirect('/');
        }
    }

    public function apostila1Intro()
    {
        if (Auth::check()) {
            $matricula = Auth::user()->id;
            $aluno = User::find($matricula);

            return view('apostila1/intro1/intro', compact('aluno'));
        }
    }

    public function apostila2Intro()
    {
        $aluno = User::find(request()->user()->matricula);

        return view('apostila2/intro2/intro', compact('aluno'));
    }

    public function homePortal()
    {
        if(Auth::check()){
            return view('portal/home/index');
        }else{
            return redirect('/');
        }
    }

    public function site()
    {
        return view('site/home/index');
    }

    public function depoimentos()
    {
        return view('site/depoimento/index');
    }
    
    public function materialDidatico(){
        $matricula = Auth::user()->id;
        $aluno = User::find($matricula);
        return view('portal/material/index',compact('aluno'));
    }

}
