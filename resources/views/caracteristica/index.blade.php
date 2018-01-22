@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">Caracteristicas</div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($caracteristicas as $caracteristica)
                    <tr>
                        <td scope="row">{{$caracteristica->id}}</td>
                        <td>{{$caracteristica->nome}}</td>
                        <td><a class="btn btn-default" href="{{route('caracteristica.edit',$caracteristica->id)}}">editar</a></td>
                        <td>
                            <form action="{{route('caracteristica.destroy',$caracteristica->id)}}" method="post">
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