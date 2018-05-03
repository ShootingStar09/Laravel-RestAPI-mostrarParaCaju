<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Simple MOOC - Uma simples plataforma de ensino a distância" />
    <title>CliOdonto</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.3.0/pure-min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <script language="JavaScript">
    function pergunta(){
       if (confirm('Tem certeza de que quer concluir a ação?')){
          document.getElementById("formulario").submit();
       }
    }
    </script>
<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>
<body>
<div class="header">
    <div class="pure-menu pure-menu-open pure-menu-fixed pure-menu-horizontal">
        <a class="pure-menu-heading" href="/home">CliOdonto</a>
        <ul>
            <li class="pure-menu-selected" ><a href="/home" class="btn btn-info navbar-btn navbar-right">Início</a></li>
            <li><a href="dentistas" class="btn btn-info navbar-btn navbar-right">Dentistas</a></li>
            <li><a href="clientes" class="btn btn-info navbar-btn navbar-right">Clientes</a></li>
            <li><a href="consulta"  class="btn btn-info navbar-btn navbar-right">Consultas</a></li>
            <li><a href="contato" class="btn btn-info navbar-btn navbar-right">Contato</a></li>
            @if (Auth::check())
            <li><a href="{{ url('sair') }}" class="btn btn-danger navbar-btn navbar-right">Sair</a></li>
            @else
            <li><a href="{{ url('entrar') }}" class="btn btn-success navbar-btn navbar-right">Entrar</a></li>
            @endif

        </ul>
    </div>
</div>
<div class="content">
          @yield('content')
    <div class="footer">
        CliOdonto - Uma simples plataforma Clinica
    </div>
</div>
<script src="http://yui.yahooapis.com/3.12.0/build/yui/yui-min.js"></script>
</body>
</html>
