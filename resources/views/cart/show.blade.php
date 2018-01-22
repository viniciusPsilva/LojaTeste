@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Remover</th>

            </tr>
            </thead>
            <tbody>
            @foreach($cart->getCardItem() as $item)
                <tr>
                    <th scope="row">{{$item->getNome()}}</th>
                    <td>R$ {{$item->getPreco()}}</td>
                    <th scope="col"><a href="{{route('cart.remove',$item->getId())}}}}">Remover</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{route('pedido.create')}}" class="btn btn-default">Finalzar Compra</a>
    </div>


@endsection