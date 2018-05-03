
@extends('base')

@section('content')
{{ Session::get('message') }}

</head>

<div class="pure-g-r content-ribbon">
    <div class="pure-u-1">
        <h2>Informe os dados à serem alterados do Dentista</h2>
          <fieldset>
            <form  id="formulario" method="post" action="/atualizarDentistaBanco" class="pure-form pure-form-stacked" >

                  {{ csrf_field() }}

                    <input type="hidden" value="{{ $dentista->id }}" name="id" >

                    <div class="pure-control-group">
                        <strong>Nome : </strong>
                        <input class="form-control input-lg"  type="text" name="nome" value="{{ $dentista->nome }}"autofocus='true' placeholder="Nome">
                    </div>

                    <div class="pure-control-group">
                        <strong>CRO : </strong>
                        <input class="form-control input-lg"  type="text" name="CRO" autofocus='true' placeholder="CRO" value="{{ $dentista->CRO }}">
                    </div>

                    <div class="pure-control-group">
                        <strong>especialidade : </strong>
                        <input class="form-control input-lg"  type="text" name="especialidade" value="{{ $dentista->especialidade }}" autofocus='true' placeholder="Odontologia">
                    </div>

                    <div class="pure-control-group">
                        <strong>Curriculo : </strong>
                        <input class="form-control input-lg"  type="text" name="curriculo" value="{{ $dentista->curriculo }}" autofocus='true' placeholder="Curriculo">
                    </div>

                    <div class="pure-controls">
                        <button type="button" class="pure-button pure-button-primary" onclick="pergunta()">Atualizar</button>
                    </div>
        </form>
      </fieldset>
    </div>
</div>
@endsection
