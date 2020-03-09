<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use DB;

use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function index()
    {
        $matricula = Auth::user()->matricula;
        $alunos = DB::table('turmas')->where('matricula', $matricula)->get();
        
        $nota = DB::table('notas')->where('matricula', $matricula)->get();

        $notas = [
            "modulos" =>[
                "PLAY GO",
                "PHOTOSHOP",
                "DOMINATE",
                "GAME AND ANIMATION",
                "ADVANCED",
                "VIDEO EDITION"
            ],
            "prova_teorica" => [
                "","","","","",""
            ],
            "prova_pratica" => [
                "","","","","",""
            ],
            "trabalhos" => [
                "","","","","",""
            ],
            "media" => [
                "","","","","",""
            ]
          ];

        return view('portal/nota/index',compact('alunos','notas'));
    }


}
