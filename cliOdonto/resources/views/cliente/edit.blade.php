
@extends('base')

@section('content')
{{ Session::get('message') }}
<div class="pure-g-r content-ribbon">
    <div class="pure-u-1">
        <h2>Informe os dados á Serem Alterados do Cliente</h2>
          <fieldset>
            <form id="formulario" method="post" action="/atualizarClienteBanco" class="pure-form pure-form-stacked" >

                  {{ csrf_field() }}

                    <input name="id" value="{{ $cliente->id }}" type="hidden">

                    <div class="pure-control-group">
                        <strong>Nome : </strong>
                        <input class="form-control input-lg"  type="text" name="nome" autofocus='true'  value="{{ $cliente->nome }}">
                    </div>

                    <div class="pure-control-group">
                        <strong>CPF : </strong>
                        <input class="form-control input-lg"  type="text" name="cpf" autofocus='true'  value="{{ $cliente->cpf }}">
                    </div>

                    <div class="pure-control-group">
                        <strong>idade : </strong>
                        <input class="form-control input-lg"  type="number" name="idade"  autofocus='true'  value="{{ $cliente->idade }}">
                    </div>

                    <div class="pure-controls">
                        <button type="button" class="pure-button pure-button-primary" onclick="pergunta()">Alterar</button>
                    </div>
        </form>
      </fieldset>
    </div>
</div>
@endsection
