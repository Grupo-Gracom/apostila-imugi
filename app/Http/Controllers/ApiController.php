<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Lead;
use App\Estado;
use App\UnidadesImugi;

class ApiController extends Controller
{
    public function index($unidade = null){
        if($unidade){
            $leads = Lead::with('estado','unidade')->where('estado',$unidade)->get();
        }else{
            $leads = lead::with('estado','unidade')->get();
        }

        return response()->json($leads);
    }

    public function quantidade(){
        $quantidade = lead::where("status", 1)->count();
        return response()->json($quantidade);
    }

    public function leadsEstado(){
        $quantidade = Estado::with("quantidade")->get();
        return response()->json($quantidade);
    }

    public function leadsUnidade($estado = null){
        if($estado){
            $unidadeLead = UnidadesImugi::with("alunos")->where("unidade_estado",$estado)->get();
        }else{
            $unidadeLead = UnidadesImugi::with("alunos")->get();
        }
        
        return response()->json($unidadeLead);
    }

    public function unidadeEstado($id)
    {
        $data = UnidadesImugi::where('unidade_estado',$id)->get();
        
        return response()->json(['data' => $data]);
    }

    public function apiAluno($matricula = null)
    {
        if ($matricula == null) {
            $usuarios = User::select("id", "name", "email", "matricula")->get();
        } else {
            $usuarios = User::where("matricula", $matricula)->select("id", "name", "email", "matricula")->get();
        }

        return response()->json($usuarios);
    }

    public function editar(Request $request)
    {

        $data = $request->all();

        if ($request->has('user_id')) {

            $aluno = User::find($data['user_id']);

            $aluno->name = $data['e_name'];
            $aluno->email = $data['e_email'];
            $aluno->password = Hash::make($data['e_password']);

            $aluno->save();

            return "2";

        } else {
            return "1"; //falha

        }

    }
}
