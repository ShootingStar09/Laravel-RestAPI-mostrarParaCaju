<?php

namespace App\Http\Controllers;

use App\Model\Dentista;
use Illuminate\Http\Request;

class DentistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $dentistas = Dentista::all();
      return view('dentistas.index',['dentistas' => $dentistas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dentistas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $dentista = new Dentista;
        $dentista->nome = $request->nome;
        $dentista->CRO = $request->CRO;
        $dentista->especialidade = $request->especialidade;
        $dentista->curriculo = $request->curriculo;
        $dentista->urlFoto = "doctor-1149149_960_720.jpg";
        $dentista->disponibilidade = true;
        $dentista->save();

        $dentistas = Dentista::all();
        return view('dentistas.index',['dentistas' => $dentistas]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Dentista  $dentista
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dentista = Dentista::find($id);
        if(!$dentista){
          abort(404);
        }
        return view('dentistas')->with('paginaDetalhes',$dentista);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Dentista  $dentista
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
      $dentista = Dentista::find($request->id);
      if(!$dentista){
          abort(404);
      }
      return view('dentistas.edit')->with('dentista', $dentista);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Dentista  $dentista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $dentista = Dentista::findOrFail($request->id);
      $dentista->nome = $request->nome;
      $dentista->CRO = $request->CRO;
      $dentista->especialidade = $request->especialidade;
      $dentista->curriculo = $request->curriculo;
      $dentista->urlFoto = "doctor-1149149_960_720.jpg";
      $dentista->save();
      $dentistas = Dentista::all();
      //return redirect()->route('dentistas', ['dentistas' => $dentistas])->with('message', 'Dentista Atualizado com sucesso');
      return redirect('dentistas',302,['dentistas' => $dentistas])->with('message', 'Dentista Atualizado com sucesso');
;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Dentista  $dentista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $dentista = Dentista::find($request->id);
        $dentista->delete();
        return redirect('dentistas')->with('message', 'Dentista apagado com sucesso!');
    }
}
