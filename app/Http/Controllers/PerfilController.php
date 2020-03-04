<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Validator;
use Redirect;

class PerfilController extends Controller
{
    public function index(){
        $matricula = Auth::user()->matricula;
        // $aluno = User::find($matricula);

        $alunos = DB::table('users')->where('matricula', $matricula)->get();
     
        return view('portal.editarAluno.index', compact('alunos'));
    }

    public function update(Request $request, $id){
        $rules = array(
            'nome' => 'required',
            'email' => ['required', 'string', 'max:255', 'unique:users'],
            'nova_senha' => ['required','min:8'],
    );

        $validator = Validator::make($request->all(), $rules);
        
        
        
        if ($validator->fails())
        {
            return Redirect::to('/perfil')->withInput()->withErrors($validator);
        }else{
            $usuario = User::find($id);
            $usuario->name = $request->get('nome');
            $usuario->email = $request->get('email');
            $usuario->password = Hash::make($request->get('nova_senha'));
            $usuario->save();
            return back()->with('success','Atualizado com Sucesso!');
        }
       
    }
}
