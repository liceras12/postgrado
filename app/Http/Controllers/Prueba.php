<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Persona;
use App\Models\User;
use App\Models\Usuario;

class Prueba extends Controller
{
    //
    public function index(){
        return view('vindex');
    }
    public function saludo(){
        $personas = Persona::all();
        //print_r ($personas);
        //$cuenta =1;
        //foreach ($personas as $persona) {
          //  echo $cuenta++.' '.$persona->ci . ' ' . $persona->nombre . ' ' . $persona->paterno . ' ' . $persona->materno . '<br>';
        //}
        return view ('registro', compact('personas'));
        //return view('vsaludo');
    }

    public function showLoginForm(){
        return view('login');
    }

    public function login(Request $request){
        $request->validate([
            'usuario' => 'required',
            'password' => 'required'
        ]);
        $usuario = Persona::where('usuario', $request->email)->first();
        if($usuario == null){
            return "User not found";
        }
        $isPasswordValid = $usuario->password == $request->password;
        $isEmailValid = $usuario->usuario == $request->usuario;
        
        if ( $isPasswordValid && $isEmailValid ){ 
            Session::put('data_session', $usuario);
            return redirect('/index')   ;
        }
    }

    public function logout()
    {
        Session::forget('data_session');
        return redirect('/login');
    }
}
