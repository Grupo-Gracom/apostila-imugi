<?php

namespace App\Http\Controllers;

use App\Mail\ContatoFranquia;
use App\Mail\ContatoSite;
use App\Mail\SendMail;
use App\Unidade;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Redirect;

class ContatoController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $aluno = User::find($id);

        $matricula = Auth::user()->matricula;
        $unidades = Unidade::where('matricula', '=', $matricula)
            ->select('cod_unidade')
            ->get('cod_unidade');
        return view('portal.contato.index', compact('aluno', 'unidades'));

    }

    public function siteContato()
    {
        return view('site.contato.index');
    }

    public function franquia()
    {
        return view('site.franquia.index');
    }

    public function enviar(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'telefone' => 'required',
            'estado' => 'required',
            'cidade' => 'required',
            'mensagem' => 'required',
        ]);

        $data = array(
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'estado' => $request->estado,
            'cidade' => $request->cidade,
            'mensagem' => $request->mensagem,
        );

        Mail::to('wrodrigues153@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Email enviado com sucesso !');

    }

    public function contatoAluno(Request $request)
    {

        Mail::to('wrodrigues153@gmail.com')->send(new ContatoSite($request));

        $notification = array(
            'message' => 'Mensagem enviada com sucesso!',
            'alert-type' => 'success',
        );

        return Redirect::to('/site')->with($notification);

    }

    public function contatoFranquia(Request $request)
    {

        $this->validate($request, [
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
        ]);

        $data = array(
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
        );

        Mail::to('wrodrigues153@gmail.com')->send(new ContatoFranquia($data));
        return back()->with('success', 'Email enviado com sucesso !');
    }
}
