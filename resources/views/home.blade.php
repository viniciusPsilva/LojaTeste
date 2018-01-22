@extends('layouts.app')

@section('content')
    <div class="container container-fluid">
            <div class="row">
            <form class="form-horizontal" method="POST" action="{{route('find.produto')}}">
                <!--Proteção contra ataque crsf-->
                {{csrf_field()}}
                {{method_field('POST')}}

                <fieldset>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput"></label>
                        <div class="col-md-8">
                            <input id="textinput" name="nome" type="text" placeholder="Pesquisar Produto"
                                   class="form-control input-md">
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <div class="col-md-2">
                                <button type="submit" id="btn-enviar" name="btn-enviar" class="btn btn-success">OK
                                </button>
                            </div>
                        </div>

                    </div>

                </fieldset>
            </form>
    </div>


            <div role="main" class="col-md-9 col-md-push-3">
                @foreach($produtos as $produto)
                    @php($url = \Illuminate\Support\Facades\Storage::url($produto->imagem))
                    <a href="{{route('produto.show',$produto->id)}}">
                        <div class="col-md-6" style="margin-bottom: 5%;">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="{{$url}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{$produto->name}}</h5>
                                    <p class="card-text">{{$produto->descricao}}</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">preço : R${{$produto->preco}}</li>
                                </ul>
                                <div class="card-body">
                                    <a href="{{route('cart.add',$produto->id)}}" class="card-link">Adicionar Ao
                                        carrinho</a>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <aside role="complementary" class="col-md-3 col-md-pull-9">
                <ul class="list-group">
                    <li class="list-group-item active">Categorias</li>
                    @foreach($categorias as $categoria)
                        <li class="list-group-item"><a href="{{route('categoria.produtos',$categoria->id)}}"
                                                       style="cursor: pointer;">{{$categoria->nome}}</a></li>
                    @endforeach
                </ul>
            </aside>



    </div>
@endsection
