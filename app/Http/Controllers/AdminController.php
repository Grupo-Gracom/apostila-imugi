<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Cargo;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('gestao/index');
    }

    public function menusLista(){
        $cargos = Cargo::all();
        return view("layouts/gestao/menus/menus", compact('cargos'));
    }
}
