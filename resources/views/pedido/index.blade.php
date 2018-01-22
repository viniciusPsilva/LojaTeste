@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($pedidos as $pedido)
            <ul class="list-group">
                <li class="list-group-item active"><span style="font-size: 1.5em;">Pedidos de :{{$pedido->user->name}}</span>
                    </br> Valor Total R${{$pedido->valorTotal}}</hr>
                    <br> <span style="font-size: 1.5em;">Endereço :</span>
                    <br> Cidade: {{$pedido->user->endereco->cidade}},&nbsp;  Bairro: {{$pedido->user->endereco->bairro}},&nbsp;
                    Rua: {{$pedido->user->endereco->rua}},&nbsp;Cep: {{$pedido->user->endereco->cep}}<br>
                    <span style="font-size: 1.5em;">Produtos</span>
                </li>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">nome</th>
                        <th scope="col">valor</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pedido->produtos as $produto)
                        <tr>
                            <th scope="row">{{$produto->nome}}</th>
                            <td>{{$produto->preco}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </ul>
        @endforeach
    </div>
@endsection