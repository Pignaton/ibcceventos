<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return view('painel/login');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $users = DB::select('select * from users where email = :email and password = :password', ['email' => $email, 'password' => md5($password)]);

        if ($users) {
            return redirect()->to('/painel/home');
           
        } else {
            return redirect()->back()->withErrors('E-mail e/ou senha incorreto!');
        }
    }

    public function validar(Request $request)
    {
        return $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
    }
}
