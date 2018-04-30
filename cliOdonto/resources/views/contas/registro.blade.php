@extends('base.html')

@section('content')
<div class="pure-g-r content-ribbon">
    <div class="pure-u-1">
        <h2>Informe seus dados</h2>
        <form class="pure-form pure-form-stacked" method="post" action="/entrar">
            <fieldset>

              <div class="pure-control-group">
                  <strong>Email : </strong>
                  <input class="form-control input-lg"  type="text" name="email" autofocus='true' placeholder="E-mail">
              </div>

              <div class="pure-control-group">
                  <strong>Senha : </strong>
                  <input class="form-control input-lg"  type="text" name="senha" autofocus='true' placeholder="Senha">
              </div>

                  @if (Session::has('flash_error'))
                      <div class="alert alert-danger">E-mail ou senha inválidos.</div>
                  @endif

                    <label class="checkbox">
                        <input class="checkbox"  type="text" name="remember" value='remember'>Lembre-se de mim.
                    </label>

                <div class="pure-controls">
                    <button type="submit" class="pure-button pure-button-primary">Cadastrar</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection
