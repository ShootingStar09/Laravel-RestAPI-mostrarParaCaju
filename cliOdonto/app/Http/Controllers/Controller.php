<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
      return view('home');

    }

    public function contato()
    {
      return view('contato');

    }

    public function getEntrar()
    {
        return view('contas.entrar');
    }

    public function postEntrar(Request $request)
    {
        $remember = false;
        if('remember' == $request->input('remember'))
        {
            $remember = true;
        }

         $credentials = $request->only('email', 'senha');

         if (Auth::attempt($credentials, $remember)) {
             return view('home');
         }
        else
        {
            return Redirect::to('/entrar')
                ->with('flash_error', 1)
                ->withInput();
        }
    }

    public function getSair()
    {
        Auth::logout();
        return Redirect::to('/');
    }

    public function getInserir()
    {

        $usuario = new User();

        return view('contas.registrar', compact('titulo', 'usuario'));
    }

    public function postInserir(Request $request)
        {
            $usuario = new User();

            $usuario->nome = $request->input('nome');
            $usuario->email = $request->input('email');
            $usuario->tipo = "cliente";

            $usuario->password = Hash::make($request->input('senha'));

            $usuario->save();

            return Redirect::to('/home');
        }


            public function getEditar($id)
            {
                $usuario = User::find($id);
                $titulo = 'Editar Usuário - Desenvolvendo com Laravel';
                return View::make('contas.editar', compact('usuario', 'titulo'));
            }

            public function postEditar(Request $request)
            {
                $usuario = User::find($request->input('id'));

                $usuario->nome = $request->input('nome');
                $usuario->email = $request->input('email');
                $usuario->tipo = "cliente";

                if($request->input('senha'))
                {
                    $usuario->senha = Hash::make($request->input('senha'));
                }

                $usuario->save();

                return Redirect::to('/usuarios');
            }

            public function getRemover($id)
            {
                $usuario = User::find($id);
                $usuario->delete();

                return Redirect::to('/usuarios');
            }

}
