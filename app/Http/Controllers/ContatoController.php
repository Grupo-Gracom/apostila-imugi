<?php

namespace App\Http\Controllers;

use App\Unidade;
use App\User;
use App\Estado;
use App\Lead;
use App\UnidadesImugi;
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
        $estados = Estado::orderBy('estado_nome')->get();
        $unidades = UnidadesImugi::orderBy("unidade_nome")->get();
        return view('site.contato.index',compact('estados','unidades'));
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

           $unidade = UnidadesImugi::where("unidade_id", $request->unidade)->get();
           $estado = Estado::where("id_estados", $request->estado)->get();
      
              $data = array(
                  'nome' =>  $request->nome,
                  'telefone' =>  $request->telefone,
                  'estado'   =>  $request->estado,
                  'cidade'   =>  $request->cidade,
                  'mensagem' =>   $request->mensagem
              );
            
              $lead = new Lead();
              $lead->nome = $request->nome;
              $lead->telefone = $request->telefone;
              $lead->cidade = $request->cidade;
              $lead->status = 1;
              $lead->data_cadastro = date("Y-m-d");
              $lead->data_update = date("Y-m-d");
              $lead->estado = $request->estado;

              if($lead->save()){
                return back()->with('success', 'Email enviado com sucesso !');
              }else{
                return back()->with('error', 'Ouve Error :(');
              }

              Mail::to('contato@imugi.com.br')->send(new SendMail($data));
      
          
      
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
              
                   Mail::to('contato@imugi.com.br')->send(new ContatoFranquia($data));
                   return back()->with('success', 'Email enviado com sucesso !');
            }
    }
