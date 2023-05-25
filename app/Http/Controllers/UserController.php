<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\Models\User;
use Auth;

class UserController extends Controller
{

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function login()
    {
        return view('login');
    }

    public function indexRegister()
    {
        return view('indexRegister');
    }

    public function dashboard()
    {       

        return view('app.dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|min:3|max:200',
            'password' => 'required|min:8|max:32'
        ]);

        $user = $request->all();
        $nova_senha = preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$%&*()_+=])[A-Za-z\d@#$%&*()_+=]{8,}$/', $user['password']);
        $nova_senha_repeticao = preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$%&*()_+=])[A-Za-z\d@#$%&*()_+=]{8,}$/', $user['confirm_password']);

        //Verifica se as Senhas digitadas conferem
        if ($user['password'] != $user['confirm_password']) {
            return redirect()->back()->with('warning', 'Os campos: "Senha" e "Confirmar Senha" não estão iguais. Por favor, informe corretamente!');
            //Verifica se a Senha possui pelo menos uma letra maiúscula, uma letra minúscula, um número, um caracter especial e no mínimo 8 caracteres
        }
        if (!$nova_senha || !$nova_senha_repeticao) {
            return redirect()->back()->with('warning', 'Sua Senha tem que ter pelo menos uma letra maiúscula, uma letra minúscula, um número, um caracter especial (@#$%&*()_+=) e no mínimo 8 caracteres');
        }

        $user['password'] = password_hash($request->password, PASSWORD_DEFAULT);

        try {
            $user = User::create($user);
            Auth::login($user);
            return redirect('app/dashboard');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', 'Erro ao tentar cadastrar Usuário!' . $ex);
        }
    }    
}
