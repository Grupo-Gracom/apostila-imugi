<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use App\Unidade;
use Illuminate\Support\Facades\Auth;
>>>>>>> 3e93df142f23f8ae7c33d6e1be8d5bc4d81e9489

class FinanceiroController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        return view('portal/financeiro/index');
=======
        $matricula = Auth::user()->matricula;
        $unidades = Unidade::where('matricula', '=',$matricula)
        ->select('cod_unidade')
        ->get('cod_unidade');
        return view('portal/financeiro/index', compact('unidades'));
>>>>>>> 3e93df142f23f8ae7c33d6e1be8d5bc4d81e9489
    }
}
