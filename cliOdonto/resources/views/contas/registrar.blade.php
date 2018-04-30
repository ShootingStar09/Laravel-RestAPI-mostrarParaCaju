
@extends('base')

@section('content')
<div class="pure-g-r content-ribbon">
    <div class="pure-u-1">
        <h2>Informe seus dados</h2>
          <fieldset>
            <form method="post" action="/cadastrarUsuario" class="pure-form pure-form-stacked">
                  {{ csrf_field() }}

                    <div class="pure-control-group">
                        <strong>Nome : </strong>
                        <input class="form-control input-lg"  type="text" name="nome" value="{{ $usuario->nome }}"autofocus='true' placeholder="Nome">
                    </div>

                    <div class="pure-control-group">
                        <strong>Email : </strong>
                        <input class="form-control input-lg"  type="text" name="email" autofocus='true' placeholder="E-mail">
                    </div>

                    <div class="pure-control-group">
                        <strong>Senha : </strong>
                        <input class="form-control input-lg"  type="password" name="senha" value="{{ $usuario->senha }}"autofocus='true' placeholder="Senha">
                    </div>

                    <div class="pure-control-group">
                        <strong>Tipo : </strong>
                        <select  name='tipo'>
                            <option value="dentista">Dentista</option>
                            <option value="cliente">Cliente</option>
                        </select>
                    </div>
            <input class="btn btn-lg btn-primary btn-block"  type="submit" name="Enviar" >
        </form>
      </fieldset>
    </div>
</div>
@endsection
