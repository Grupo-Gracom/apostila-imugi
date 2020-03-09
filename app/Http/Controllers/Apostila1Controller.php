<?php

namespace App\Http\Controllers;

use App\User;
use App\Resposta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Apostila1Controller extends Controller
{
    
    protected $usuario;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->usuario = Auth::user();

            return $next($request);
        });
    }

    public function apostila1($unidade,$item){
        $id = Auth::user()->id;
        $aluno = User::find($id);
        return view('apostila1'.'/'.$unidade.'/'.$item.'', compact('aluno'));
    }


}