<?php

namespace App\Http\Controllers;

use App\Unidade;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\ContatoSite;
use App\Mail\ContatoFranquia;
use App\Mail\SocioMail;
use App\Mail\FranqueadoMail;
use Redirect;

class ContatoController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $aluno = User::find($id);

        return view('portal.contato.index',compact('aluno'));
    }

    public function siteContato()
    {
        return view('site.contato.index');
    }

    public function franquia()
    {
        return view('site.franquia.index');
    }

    public function socioInvestidor()
    {
        return view('site.socio-investidor.index');
    }

    public function nossoFranqueado()
    {
        return view('site.nosso-franqueado.index');
    }

    public function enviar(Request $request)
    {
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
      
           Mail::to('contato@imugi.com.br')->send(new SendMail($data));
           return back()->with('success', 'Email enviado com sucesso !');
      
    }
        
        public function contatoAluno(Request $request){
            
            Mail::to('contato@imugi.com.br')->send(new ContatoSite($request));

               $notification = array(
                'message' => 'Mensagem enviada com sucesso!', 
                'alert-type' => 'success'
            );
            
            return Redirect::to('/site')->with($notification);
        
        }

        public function contatoSocioInvestidor(Request $request){
            
            Mail::to('expansao@imugi.com.br')
            ->cc(['pirolla.rfs@gmail.com','carlos.eduardo@grupogracom.com.br'])
            ->send(new SocioMail($request));

               $notification = array(
                'message' => 'Mensagem enviada com sucesso!', 
                'alert-type' => 'success'
            );
            
            return Redirect::to('/socio-investidor')->with($notification);
        
        }

        public function contatoFranqueado(Request $request){
            
            Mail::to('expansao@imugi.com.br')
            ->cc(['pirolla.rfs@gmail.com','carlos.eduardo@grupogracom.com.br'])
            ->send(new FranqueadoMail($request));

               $notification = array(
                'message' => 'Mensagem enviada com sucesso!', 
                'alert-type' => 'success'
            );
            
            return Redirect::to('/nosso-franqueado')->with($notification);
        
        }

            public function contatoFranquia(Request $request){
            
                $this->validate($request, [
                    'nome'     =>  'required',
                    'email'  =>  'required',
                    'telefone'  =>  'required',
                   ]);
              
                      $data = array(
                          'nome' =>  $request->nome,
                          'email' =>  $request->email,
                          'telefone'   =>  $request->telefone,
                      );
              
                   Mail::to('smtp@imugi.com.br')->send(new ContatoFranquia($data));
                   return back()->with('success', 'Email enviado com sucesso !');
            }
    }
