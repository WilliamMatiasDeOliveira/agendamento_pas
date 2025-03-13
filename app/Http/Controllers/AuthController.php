<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginSubmit(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email|max:255',
            'password' => 'required|string|min:8',
        ]);

        $user = User::where('email', $request->input('email'))->first();
        if (!$user || !Hash::check($request->input('password'), $user->password)) {
            return redirect()->route('login')
                             ->withInput()
                             ->withErrors(['email_or_password_invalid' => 'E-mail ou senha inválidos']);
        }

        Auth::login($user);
        return redirect()->route('home')->with('user', $user);

    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerSubmit(Request $request)
    {
        $request->validate(
            // rulles
            [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email|max:255',
                'password' => 'required|string|min:8|confirmed',
                'endereco' => 'required|string|max:255',
                'num_casa' => 'required|integer|min:1',
                'cep' => 'required|string|size:8|regex:/^[0-9]{8}$/',
                'num_sus' => 'required|string|size:15|regex:/^[0-9]{15}$/|unique:users,num_sus',
                'cpf' => 'required|string|size:11|regex:/^[0-9]{11}$/|unique:users,cpf',
                'rg' => 'required|string|max:20|unique:users,rg',
                'telefone' => 'nullable|string',
                'celular' => 'required|string'
            ]
        );


        $email = $request->input('email');
        $user = User::where('email', $email)
            ->where('cpf', $request->input('cpf'))
            ->first();

        if ($user) {
            return redirect()->route('register')
                ->withInput()
                ->withErrors('register_error', "Este Usuário não é válido");
        }

        User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->password),
            'endereco'=>$request->input('endereco'),
            'num_casa'=>$request->input('num_casa'),
            'cep'=>$request->input('cep'),
            'num_sus'=>$request->input('num_sus'),
            'cpf'=>$request->input('cpf'),
            'rg'=>$request->input('rg'),
            'telefone'=>$request->input('telefone'),
            'celular'=>$request->input('celular')
        ]);
        return redirect()->route('login');
    }
}
