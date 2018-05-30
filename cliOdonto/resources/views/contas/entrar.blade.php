@extends('base')

@section('content')
<div class="pure-g-r content-ribbon">
    <div class="pure-u-1">
        <h2>Informe seus dados</h2>
        <form class="pure-form pure-form-stacked" method="post" action="/entrar">
          {{ csrf_field() }}
            <fieldset>

                <div class="pure-control-group">
                    <strong>Email : </strong>
                      <input class="form-control input-lg"  type="text" name="email" autofocus='true' placeholder="E-mail">
                 </div>

                <div class="pure-control-group">
                    <strong>Senha : </strong>
                      <input class="form-control input-lg"  type="password" name="senha" placeholder="Senha">
                </div>
                
                <div class="pure-control-group">
                  @if (Session::has('flash_error'))
                      <div class="alert alert-danger">E-mail ou senha inválidos.</div>
                  @endif   
                    Lembre-se de mim.<input type="checkbox" name="remember" value='remember'>
                </div>
                <div class="pure-controls">
                    <button type="submit" class="pure-button pure-button-primary">Logar</button>
                </div>
            </fieldset>
        </form>

        <p>
     Não é cadastrado? <a href="/cadastrarUsuario" title="">Cadastre-se</a> <br />
     Esqueceu a senha? <a href="" title="">Nova senha</a> <br />
 </p>
    </div>
</div>
@endsection
