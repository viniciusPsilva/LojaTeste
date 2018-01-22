@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-push-4">
            @php($url = \Illuminate\Support\Facades\Storage::url($produto->imagem))
            <div class="card">
                <img class="card-img-top" src="{{$url}}" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title">{{$produto->nome}}</h4>
                    <p class="card-text">{{$produto->descricao}}</p>
                    <h2 class="card-title">Preço: R${{$produto->preco}}</h2>
                    <a href="{{route('cart.add',$produto->id)}}" class="btn btn-success">Adicionar Ao
                        carrinho</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection