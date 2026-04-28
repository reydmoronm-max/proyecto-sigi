<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        $titulo = 'Iniciar sesión';
        return view('modules.auth.login', compact('titulo'));
    }

    public function login(Request $request){
        // Validar
        $credenciales = $request->validate([
            'user' => 'required',
            'password' => 'required'
        ]);

        // Buscar usuario
        $user = User::where('user', $request->user)->first();

        // Validar usuario y contraseña
        if(!$user || !Hash::check($request->password, $user->password)){
            return back()->withErrors(['user' => 'Credenciales incorrectas'])->withInput();

        }

        // El usuario está activo
        if(!$user->activo){
            return back()->withErrors(['user' => 'Tu usuario está inactivo'])->withInput();

        }

        // Crear sesión
        Auth::login($user);
        $request->session()->regenerate();

        return to_route('home');
    }

    public function crearAdmin(){
        // Crear un admin
        User::create([
            'name' => 'Rey Morón',
            'user' => 'admin',
            'password' => Hash::make('admin'),
            'activo' => true
        ]);

        return 'Admin creado';
    }

    public function logout(){
        Auth::logout();
        return to_route('login');
    }
}
