<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidade;
use Illuminate\Support\Facades\Auth;

class FinanceiroController extends Controller
{
    public function index()
    {
        $matricula = Auth::user()->matricula;
        $unidades = Unidade::where('matricula', '=',$matricula)
        ->select('cod_unidade')
        ->get('cod_unidade');
        return view('portal/financeiro/index', compact('unidades'));
    }
}
