<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;

class PainelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'register',
            'pequenosGrupos',
            'index'
        ]]);
    }

    public function index()
    {

        return view('/painel/home/index');
    }

    public function register()
    {
        $users = Register::all();
        return view('painel/register/index', ['users' =>  $users]);
    }

    public function pequenosGrupos()
    {

        return view('painel/pequenos_grupos/index');
    }
}
