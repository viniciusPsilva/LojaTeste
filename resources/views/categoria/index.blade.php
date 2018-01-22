@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">Categorias</div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                        <td scope="row">{{$categoria->id}}</td>
                        <td>{{$categoria->nome}}</td>
                        <td><a class="btn btn-default" href="{{route('categoria.edit',$categoria->id)}}">editar</a></td>
                        <td>
                            <form action="{{route('categoria.destroy',$categoria->id)}}" method="post">
                                {!! method_field('DELETE') !!}
                                {!! csrf_field() !!}
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection