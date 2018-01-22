@extends('layouts.app')
@section('content')
    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{route('produto.store')}}">
        <fieldset>

            <!-- Form Name -->
            <legend>Cadastro de Produto</legend>

        {!! csrf_field() !!}

        <!-- Text input-->
            <div class="form-group {{$errors->has('nome') ? 'has-error' : ''}}">
                <label class="col-md-4 control-label" for="nome">nome</label>
                <div class="col-md-5">
                    <input id="nome" name="nome" type="text" placeholder="nome" class="form-control input-md">
                    @if($errors->has('nome'))
                        <p class="help-block">{{$errors->first('nome')}}</p>
                    @endif
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group {{$errors->has('preco') ? 'has-error' : ''}}">
                <label class="col-md-4 control-label" for="preco">Preço</label>
                <div class="col-md-4">
                    <input id="preco" name="preco" type="text" placeholder="" class="form-control input-md">
                    @if($errors->has('preco'))
                        <p class="help-block">{{$errors->first('preco')}}</p>
                    @endif
                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group {{$errors->has('descricao') ? 'has-error' : ''}}">
                <label class="col-md-4 control-label" for="descricao">Descrição</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="descricao" name="descricao"></textarea>
                    @if($errors->has('descricao'))
                        <p class="help-block">{{$errors->first('descricao')}}</p>
                    @endif
                </div>
            </div>

            <!-- File Button -->
            <div class="form-group {{$errors->has('imagem') ? 'has-error' : ''}}">
                <label class="col-md-4 control-label" for="imagem">Imagem</label>
                <div class="col-md-4">
                    <input id="imagem" name="imagem" class="input-file" type="file">
                    @if($errors->has('imagem'))
                        <p class="help-block">{{$errors->first('imagem')}}</p>
                    @endif
                </div>
            </div>

            <!-- Multiple Checkboxes -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="categoria">Categoria</label>
                <div class="col-md-4">
                    @foreach($categorias as $categoria )
                        <div class="checkbox">
                            <label for="categoria[]">
                                <input type="checkbox" name="categoria[]"  value="{{$categoria->id}}">
                                {{$categoria->nome}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Multiple Checkboxes -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="caracteristica">caracteristica</label>
                <div class="col-md-4">
                    @foreach($caracteristas as $caracterista)
                        <div class="checkbox">
                            <label for="caracteristica[]">
                                <input type="checkbox" name="caracteristica[]"  value="{{$caracterista->id  }}">
                                {{$caracterista->nome}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="btn-enviar"></label>
                <div class="col-md-4">
                    <button id="btn-enviar" name="btn-enviar" class="btn btn-primary">Enviar</button>
                </div>
            </div>

        </fieldset>
    </form>

@endsection