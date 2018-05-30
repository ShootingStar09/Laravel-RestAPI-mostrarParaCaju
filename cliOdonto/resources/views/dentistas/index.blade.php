@inject('clientes', 'App\Model\cliente')
@inject('dentistaClasse', 'App\Model\Dentista')

    @extends('base')

    @section('content')
    <div class="pure-g-r content-ribbon">
        <div class="pure-u-1">
            <div class="l-box">
                <h4 class="content-subhead">Dentistas da CliOdonto</h4>
                <p>Abaixo a lista de dentistas disponíveis na plataforma</p>
                @if(Auth::check())
                @if(Auth::user()->tipo == "admin")
                <a href="cadastrarDentista"><button class="btn btn-info" type="submit">Cadastrar</button></a></td>
                @endif
                @endif
                <h1>{{ Session::get('message') }}</h1>
            </div>
        </div>
    </div>

    @php
    $array = array();
    if(Auth::check()){if(Auth::user()->tipo == "cliente"){$dentistas = $clientes::find(Auth::user()->id)->consultas;
          $x = 0;
          foreach($dentistas as $k){
              $array[$x] = $k->dentista_id;
              $x = $x+1;
          }


    }};@endphp

    @foreach(array_unique($array) as $dentistaIDconsulta)
              @php if(Auth::check()){if(Auth::user()->tipo == "cliente"){$consulta = $dentistaClasse::find($dentistaIDconsulta);}};  @endphp
    @if ($consulta->disponibilidade == true)
    <div class="pure-g-r content-ribbon">
        <div class="pure-u-1-3">
            <div class="l-box">
                <a href="/dentistas/{{ $consulta->id }}">
                @if ($consulta->urlFoto != '')
                <img src="{{ asset('imgs/'.$consulta->urlFoto) }}" />
                @else
                <img src="" alt="{{ $consulta->nome }}" />
                @endif
                </a>
            </div>
        </div>
        <div class="pure-u-2-3">
            <div class="l-box">
                <h4 class="content-subhead"><a href="/dentistas/{{ $consulta->id }}" title="">{{ $consulta->nome }}</a></h4>
                <h6 class="content-subhead"><a href="/dentistas/{{ $consulta->id }}" title="">{{ $consulta->especialidade }}</a></h6><br>
                {{ $consulta->curriculo }}
            </div>
        @if(Auth::check())
        @if(Auth::user()->tipo == "admin")
            <form id="formulario" action="consulta" method="post" >
              {{ csrf_field() }}
              <input name="idDentista" type="hidden" value="{{ $consulta->id }}">
              <button class="btn btn-warning" type="submit" >Consultas do Dentista</button>
            </form>
        </div>
        <form action="/editarDentistaBanco" method="post">
          {{ csrf_field() }}
          <input name="id" type="hidden" value="{{ $consulta->id }}">
          <button class="btn btn-info" type="submit">Editar</button>
        </form>
          <form id="formulario" action="/deletarDentistaBanco" method="post" >
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="DELETE">
            <input name="id" type="hidden" value="{{ $consulta->id }}">
            <button class="btn btn-danger" type="button" onclick="pergunta()">Deletar</button>
          </form>

      @else
          </div>
          @endif
    @else
        </div>
      @endif
        <hr>
    </div>
    @endif
    @endforeach
    @endsection
