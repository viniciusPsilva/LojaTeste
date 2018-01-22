@extends('layouts.app')

@section('content')
    <div class="container">
        @if(isset($caracteristica))
            <form class="form-horizontal" method="POST" action="{{route('caracteristica.update',$caracteristica->id)}}">
                {!! method_field('PUT') !!}
                @else
                    <form class="form-horizontal" method="POST" action="{{route('caracteristica.store')}}">
                        @endif
            <fieldset>

                <!-- Form Name -->
                <legend>Caracteristica</legend>

            {!! csrf_field() !!}

            <!-- Text input-->
                <div class="form-group" {{$errors->has('nome') ? 'has-error' : ''}}>
                    <label class="col-md-4 control-label" for="categoria">Nome:</label>
                    <div class="col-md-5">
                        <input id="categoria" name="nome" type="text" placeholder="" class="form-control input-md" value="{{$caracteristica->nome or old('nome')}}">
                        @if($errors->has('nome'))
                            <p class="help-block">{{$errors->first('nome')}}</p>
                        @endif
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

    </div>
@endsection