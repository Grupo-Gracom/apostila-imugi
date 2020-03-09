<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\Frequencia;


use Illuminate\Http\Request;

class FrequenciaController extends Controller
{
    public function index()
    {
        $matricula = Auth::user()->matricula;
        $alunos = DB::table('turmas')->where('matricula', $matricula)->get();
        $frequencia = DB::table('frequencia')->select('p_presenca')->where('codigo', $matricula)->get('p_presenca');
        return view('portal/frequencia/index',compact('frequencia','alunos'));
    }

    public function enviar(Request $request){
        $this->validate($request, [
            'nome'     =>  'required',
            'telefone'  =>  'required',
            'email'  =>  'required',
            'aula_perdida'  =>  'required',
            'mensagem' =>  'required'
           ]);
      
              $data = array(
                  'nome'    =>  $request->nome,
                  'email'   =>  $request->email,
                  'telefone'   =>  $request->telefone,
                  'aula_perdida'   =>  $request->aula_perdida,
                  'mensagem' => $request->mensagem
              );
      
           Mail::to('wrodrigues153@gmail.com')->send(new Frequencia($data));
           return back()->with('success', 'Email enviado com sucesso !');
      
          }
}
