{{ Session::get('message') }}
    @extends('base')

    @section('content')
    <div class="pure-g-r content-ribbon">
        <div class="pure-u-1">
            <div class="l-box">
                <h4 class="content-subhead">Dentistas da CliOdonto</h4>
                <p>Abaixo a lista de dentistas disponíveis na plataforma</p>
                <a href="cadastrarDentista"><button class="btn btn-info" type="submit">Cadastrar</button></a></td>
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
        </div>
          <form action="/deletarDentistaBanco" method="post">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="DELETE">
            <input name="id" type="hidden" value="{{ $dentista->id }}">
            <button class="btn btn-danger" type="submit">Deletar</button>
          </form>
          <form action="/editarDentistaBanco" method="post">
            {{ csrf_field() }}
            <input name="id" type="hidden" value="{{ $dentista->id }}">
            <button class="btn btn-info" type="submit">Editar</button>
          </form>


        <hr>
    </div>
    @endif
    @endforeach
    @endsection
