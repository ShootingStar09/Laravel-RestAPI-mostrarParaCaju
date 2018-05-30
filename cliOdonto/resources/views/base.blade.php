<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Simple MOOC - Uma simples plataforma de ensino a distância" />
    <title>Simple MOOC</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.3.0/pure-min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
<div class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="{% url 'core:home' %}">SIMPLE MOOC</a>
        <ul>
            <li><a href="{{ url('/home') }}">Inicio</a></li>
            <li><a href="{{ url('dentistas') }}">Dentistas</a></li>
            <li><a href="{{ url('/contato') }}">Contato</a></li>
        @if(Auth::check())
            <li><a href="{{ url('consulta') }}">Consultas</a></li>
            @if(Auth::user()->tipo == "admin")
            <li><a href="{{ url('clientes') }}">Clientes</a></li>
            @endif
            <li><a href="{{ url('sair') }}">Sair</a></li>
        @else
        <li><a href="{{ url('entrar') }}">Entrar</a></li>
        @endif
        </ul>
    </div>
</div>
<div class="content">
    @yield('content')
    <div class="footer">
        Simple MOOC - Uma simples plataforma de ensino a distância
    </div>
</div>
<script src="http://yui.yahooapis.com/3.12.0/build/yui/yui-min.js"></script>
</body>
</html>
