<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

class MaterialDidaticoController extends Controller
{
    public function index()
    {

        $matricula = Auth::user()->matricula;
        
        $material = DB::table('turmas')->select('curso','tipo_unidade')->where('matricula', $matricula)->pluck('curso','tipo_unidade');
        
        return view('portal/material/index',compact('material'));
    }
}
