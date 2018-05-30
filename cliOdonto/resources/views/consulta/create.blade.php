
@extends('base')

@section('content')
{{ Session::get('message') }}

@inject('dentistas', 'App\Model\Dentista')
@inject('clientes', 'App\Model\cliente')

<div class="pure-g-r content-ribbon">
    <div class="pure-u-1">
        <h2>Informe os dados da Consulta</h2>
          <fieldset>
            <form method="post" action="/cadastrarConsultaBanco" class="pure-form pure-form-stacked">

                  {{ csrf_field() }}

                    <div class="pure-control-group">
                        <strong>Dentista : </strong>

                        <select name="dentista_id">
                        @foreach($dentistas::all() as $dentista)
                        <option value="{{ $dentista->id }}"> {{ $dentista->nome }}</option>
                        @endforeach
                        <select>
                    </div>

                    <div class="pure-control-group">
                        <strong>Cliente : </strong>
                        <select name="cliente_id">
                        @foreach($clientes::all() as $cliente)
                        <option value="{{ $cliente->id }}"> {{ $cliente->nome }}</option>
                        @endforeach
                        <select>
                    </div>

                    <div class="pure-control-group">
                        <strong>Tipo : </strong>
                        <select name="tipo">
                        @foreach(['orcamento','operacao','manutencao','montagem'] as $tipo)
                        <option value="{{ $tipo }}"> {{ $tipo }}<option>
                        @endforeach
                        <select>
                    </div>

                    <div class="pure-control-group">
                        <strong>Preco : </strong>
                        <input class="form-control input-lg"  type="number" name="preco" value="" autofocus='true' placeholder="$20">
                    </div>

                    <div class="pure-control-group">
                        <strong>Dia : </strong>
                        <input class="form-control input-lg"  type="date" name="agendada_para" value="" autofocus='true' placeholder="dia">
                    </div>

                    <div class="pure-control-group">
                        <strong>hora : </strong>
                        <input class="form-control input-lg"  type="time" name="hora_agendada " value="" autofocus='true' placeholder="Hora">
                    </div>

                    <div class="pure-controls">
                        <button type="submit" class="pure-button pure-button-primary">Cadastrar</button>
                    </div>
        </form>
      </fieldset>
    </div>
</div>
@endsection
