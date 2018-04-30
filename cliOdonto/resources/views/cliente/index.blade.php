{{ Session::get('message') }}

@extends('base')

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
                <th><a class="btn btn-info btn-xs" href="cadastrarClienteBanco">Cadastrar Cliente</a></th>
             </tr>
                <tr>
                    <th>foto</th>
                    <th>Nome</th>
                    <th>cpf</th>
                    <th>idade</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                <tr>
                    <td><img src= "{{ asset('imgs/'.$cliente->urlFoto) }}"></td>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->cpf }}</td>
                    <td>{{ $cliente->idade }}</td>
                    <td class="actions">
                        <form action="/editarClienteBanco" method="post">
                          {{ csrf_field() }}
                          <input name="id" type="hidden" value="{{ $cliente->id }}">
                          <button class="btn btn-warning btn-xs" type="submit">Editar</button>
                        </form>
                        <form action="/deletarClienteBanco" method="post">
                          {{ csrf_field() }}
                          <input name="_method" type="hidden" value="DELETE">
                          <input name="id" type="hidden" value="{{ $cliente->id }}">
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
