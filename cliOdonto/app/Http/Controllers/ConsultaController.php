<?php

namespace App\Http\Controllers;

use App\Model\consulta;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $consultas = Consulta::all();
      return view('consulta.index',['consultas' => $consultas]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consulta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

              $consulta = new Consulta;
              $consulta->dentista_id = $request->dentista_id;
              $consulta->cliente_id = $request->cliente_id;
              $consulta->tipo = $request->tipo;
              $consulta->preco = $request->preco;
              $consulta->agendada_para = $request->agendada_para;
              $consulta->hora_agendada = $request->hora_agendada;
              $consulta->estado = "pendente";
              $consulta->save();

              $consultas = Consulta::all();
              return view('consulta.index',['consultas' => $consultas])->with('message', 'Consultas atualizado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function show(consulta $consulta)
    {
      $consultas = Consultas::find($id);
      if(!$consultas){
          abort(404);
      }
      return view('consultas.details')->with('paginaDetalhes', $consultas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
      $consultas = Consulta::find($request->id);
     if(!$consultas){
         abort(404);
     }
     return view('consulta.edit')->with('consulta', $consultas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

          $consulta = Consulta::find($request->id);
          $consulta->dentista_id = $request->dentista_id;
          $consulta->cliente_id = $request->cliente_id;
          $consulta->tipo = $request->tipo;
          $consulta->preco = $request->preco;
          $consulta->agendada_para = $request->agendada_para;
          $consulta->hora_agendada = $request->hora_agendada;
          $consulta->estado = "pendente";
          $consulta->save();

          $consultas = Consulta::all();
          return view('consulta.index',['consultas' => $consultas])->with('message', 'Consultas atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $consulta = Consulta::find($request->id);
      $consulta->delete();


      $consultas = Consulta::all();
      return view('consulta.index',['consultas' => $consultas])->with('message', 'Consultas atualizado com sucesso!');

    }
}
