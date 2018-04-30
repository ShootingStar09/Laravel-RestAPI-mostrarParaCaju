{{ Session::get('message') }}

@extends('base')
@inject('dentista', 'App\Model\Dentista')
@inject('cliente', 'App\Model\cliente')

@section('content')
    <div id="list" class="row">

    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th><a class="btn btn-info btn-xs" href="cadastrarConsultaBanco">Cadastrar Consulta</a></th>
             </tr>
                <tr>
                    <th>Dentista</th>
                    <th>Cliente</th>
                    <th>tipo</th>
                    <th>preco</th>
                    <th>estado</th>
                    <th>Agendada Para</th>
                    <th>Horario</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            <tbody>
                @foreach($consultas as $consulta)

                <tr>
                    <td>{{ $dentista::find($consulta->dentista_id)->nome }}</td>
                    <td>{{ $cliente::find($consulta->cliente_id)->nome }}</td>
                    <td>{{ $consulta->tipo }}</td>
                    <td>{{ $consulta->preco }}</td>
                    <td>{{ $consulta->estado }}</td>
                    <td>{{ $consulta->agendada_para }}</td>
                    <td>{{ $consulta->hora_agendada }}</td>
                    <td class="actions">
                        <form action="/editarConsultaBanco" method="post">
                          {{ csrf_field() }}
                          <input name="id" type="hidden" value="{{ $consulta->id }}">
                          <button class="btn btn-warning btn-xs" type="submit">Editar</button>
                        </form>
                        <form action="/deletarConsultaBanco" method="post">
                          {{ csrf_field() }}
                          <input name="_method" type="hidden" value="DELETE">
                          <input name="id" type="hidden" value="{{ $consulta->id }}">
                          <button class="btn btn-danger btn-xs" type="submit">Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

         </table>

     </div>
 </div> <!-- /#list -->

@endsection
