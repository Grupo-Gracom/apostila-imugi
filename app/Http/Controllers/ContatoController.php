<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ContatoController extends Controller
{
    public function index() {
        return view('portal.contato.index');
    }

    public function enviar(Request $request){
        $this->validate($request, [
            'nome'     =>  'required',
            'telefone'  =>  'required',
            'estado'  =>  'required',
            'cidade'  =>  'required',
            'mensagem' =>  'required'
           ]);
      
              $data = array(
                  'nome' =>  $request->nome,
                  'telefone' =>  $request->telefone,
                  'estado'   =>  $request->estado,
                  'cidade'   =>  $request->cidade,
                  'mensagem' =>   $request->mensagem
              );
      
           Mail::to('wrodrigues153@gmail.com')->send(new SendMail($data));
           return back()->with('success', 'Email enviado com sucesso !');
      
          }
    }
