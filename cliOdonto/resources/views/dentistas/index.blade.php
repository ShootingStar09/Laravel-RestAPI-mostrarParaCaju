    @extends('base')

    @section('content')
    <div class="pure-g-r content-ribbon">
        <div class="pure-u-1">
            <div class="l-box">
                <h4 class="content-subhead">Dentistas da CliOdonto</h4>
                <p>Abaixo a lista de dentistas disponíveis na plataforma</p>
                <a href="cadastrarDentista"><button class="btn btn-info" type="submit">Cadastrar</button></a></td>
                <h1>{{ Session::get('message') }}</h1>
            </div>
        </div>
    </div>

    @foreach($dentistas as $dentista)
    @if ($dentista->disponibilidade == true)
    <div class="pure-g-r content-ribbon">
        <div class="pure-u-1-3">
            <div class="l-box">
                <a href="/dentistas/{{ $dentista->id }}">
                @if ($dentista->urlFoto != '')
                <img src="{{ asset('imgs/'.$dentista->urlFoto) }}" />
                @else
                <img src="" alt="{{ $dentista->nome }}" />
                @endif
                </a>
            </div>
        </div>
        <div class="pure-u-2-3">
            <div class="l-box">
                <h4 class="content-subhead"><a href="/dentistas/{{ $dentista->id }}" title="">{{ $dentista->nome }}</a></h4>
                <h6 class="content-subhead"><a href="/dentistas/{{ $dentista->id }}" title="">{{ $dentista->especialidade }}</a></h6><br>
                {{ $dentista->curriculo }}
            </div>
            <form id="formulario" action="consulta" method="post" >
              {{ csrf_field() }}
              <input name="idDentista" type="hidden" value="{{ $dentista->id }}">
              <button class="btn btn-warning" type="submit" >Consultas do Dentista</button>
            </form>
        </div>
        <form action="/editarDentistaBanco" method="post">
          {{ csrf_field() }}
          <input name="id" type="hidden" value="{{ $dentista->id }}">
          <button class="btn btn-info" type="submit">Editar</button>
        </form>
          <form id="formulario" action="/deletarDentistaBanco" method="post" >
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="DELETE">
            <input name="id" type="hidden" value="{{ $dentista->id }}">
            <button class="btn btn-danger" type="button" onclick="pergunta()">Deletar</button>
          </form>

        <hr>
    </div>
    @endif
    @endforeach
    @endsection
