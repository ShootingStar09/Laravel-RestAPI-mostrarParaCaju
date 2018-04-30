
@extends('base')

@section('content')
{{ Session::get('message') }}
<div class="pure-g-r content-ribbon">
    <div class="pure-u-1">
        <h2>Informe os dados do Cliente</h2>
          <fieldset>
            <form method="post" action="/cadastrarClienteBanco" class="pure-form pure-form-stacked">

                  {{ csrf_field() }}

                    <div class="pure-control-group">
                        <strong>Nome : </strong>
                        <input class="form-control input-lg"  type="text" name="nome" value=""autofocus='true' placeholder="Nome">
                    </div>

                    <div class="pure-control-group">
                        <strong>CPF : </strong>
                        <input class="form-control input-lg"  type="text" name="cpf" autofocus='true' placeholder="CPF">
                    </div>

                    <div class="pure-control-group">
                        <strong>idade : </strong>
                        <input class="form-control input-lg"  type="number" name="idade" value="" autofocus='true' placeholder="20">
                    </div>

                    <div class="pure-controls">
                        <button type="submit" class="pure-button pure-button-primary">Cadastrar</button>
                    </div>
        </form>
      </fieldset>
    </div>
</div>
@endsection
