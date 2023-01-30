<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Professores;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfessoresController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create()
    {
        return view('login.cadastro');
    }

    public function store(Request $request)
    {
        $alunos = Alunos::get();
        $request->validate([
            'password' => 'min:6'
        ]);
        $dados = $request->except('_token');
        $dados['password'] = Hash::make($dados['password']);
        $user = User::create($dados);
        Auth::login($user);
        // dd(Auth::check());
        return redirect()->route('alunos.index', compact('alunos'));
    }
    public function loginReturn(Request $request)
    {
        $alunos = Alunos::get();
        if (Auth::attempt($request->only('email', 'password'))) {
            return view('index', compact('alunos'));
        }
        return redirect()->back();
    }
    public function login()
    {
        return view('login.login');
    }
    public function destroy(){
        Auth::logout();
        // dd(Auth::check());
        return to_route('login');
    }
}
