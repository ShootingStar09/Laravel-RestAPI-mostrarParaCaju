<?php

namespace App\Http\Controllers;

use App\Model\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cliente = Cliente::all();
      return view('cliente.index',['clientes' => $cliente]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $cliente = new Cliente;
      $cliente->nome = $request->nome;
      $cliente->cpf = $request->cpf;
      $cliente->idade = $request->idade;
      $cliente->urlFoto = "cantinho-de-maria.jpg";
      $cliente->disponibilidade = 1;
      $cliente->save();

      return redirect('clientes')->with('message', 'Cliente atualizado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $cliente = Cliente::find($id);
     if(!$cliente){
         abort(404);
     }
     return view('cliente.details')->with('paginaDetalhes', $cliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
      $cliente = Cliente::find($request->id);
      if(!$cliente){
          abort(404);
      }
      return view('cliente.edit',['cliente' => $cliente])->with('paginaDetalhes', $cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $cliente = Cliente::find($request->id);
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->idade = $request->idade;
        $cliente->disponibilidade = 1;
        $cliente->save();

        $clientes = Cliente::all();
        return view('cliente.index' , ['clientes' => $clientes])->with('message', 'Cliente editado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $cliente = Cliente::find($request->id);
      $cliente->delete();

      $clientes = Cliente::all();
      return view('cliente.index' , ['clientes' => $clientes])->with('message', 'Cliente apagado com sucesso!');
    }
}
