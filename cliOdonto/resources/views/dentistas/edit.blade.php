
@extends('base')

@section('content')
{{ Session::get('message') }}
<div class="pure-g-r content-ribbon">
    <div class="pure-u-1">
        <h2>Informe os dados à serem alterados do Dentista</h2>
          <fieldset>
            <form method="post" action="/atualizarDentistaBanco" class="pure-form pure-form-stacked">

                  {{ csrf_field() }}

                    <input type="hidden" value="{{ consulta->id }}" name="id" >

                    <div class="pure-control-group">
                        <strong>Nome : </strong>
                        <input class="form-control input-lg"  type="text" name="nome" value=""autofocus='true' placeholder="Nome">
                    </div>

                    <div class="pure-control-group">
                        <strong>CRO : </strong>
                        <input class="form-control input-lg"  type="text" name="CRO" autofocus='true' placeholder="CRO">
                    </div>

                    <div class="pure-control-group">
                        <strong>especialidade : </strong>
                        <input class="form-control input-lg"  type="text" name="especialidade" value="" autofocus='true' placeholder="Odontologia">
                    </div>

                    <div class="pure-control-group">
                        <strong>Curriculo : </strong>
                        <input class="form-control input-lg"  type="text" name="curriculo" value="" autofocus='true' placeholder="Curriculo">
                    </div>

                    <div class="pure-controls">
                        <button type="submit" class="pure-button pure-button-primary">Atualizar</button>
                    </div>
        </form>
      </fieldset>
    </div>
</div>
@endsection
