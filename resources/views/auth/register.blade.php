@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="panel-heading">Endereço</div>
                            <!--Cidade Field-->
                            <div class="form-group{{ $errors->has('cidade') ? ' has-error' : '' }}">
                                <label for="cidade" class="col-md-4 control-label">Cidade:</label>

                                <div class="col-md-6">
                                    <input id="cidade" type="text" class="form-control" name="cidade" value="{{ old('cidade') }}" required autofocus>

                                    @if ($errors->has('cidade'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('cidade') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!--Bairro Field-->
                            <div class="form-group{{ $errors->has('bairro') ? ' has-error' : '' }}">
                                <label for="bairro" class="col-md-4 control-label">Bairro:</label>

                                <div class="col-md-6">
                                    <input id="bairro" type="text" class="form-control" name="bairro" value="{{ old('bairro') }}" required autofocus>

                                    @if ($errors->has('bairro'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('bairro') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!--Rua Field-->
                            <div class="form-group{{ $errors->has('bairro') ? ' has-error' : '' }}">
                                <label for="rua" class="col-md-4 control-label">Rua:</label>

                                <div class="col-md-6">
                                    <input id="rua" type="text" class="form-control" name="rua" value="{{ old('rua') }}" required autofocus>

                                    @if ($errors->has('rua'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('rua') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!--numero Field-->
                            <div class="form-group{{ $errors->has('numero') ? ' has-error' : '' }}">
                                <label for="numero" class="col-md-4 control-label">Número:</label>

                                <div class="col-md-2">
                                    <input id="numero" type="text" class="form-control" name="numero" value="{{ old('numero') }}" required autofocus>

                                    @if ($errors->has('numero'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('numero') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!--cep Field-->
                            <div class="form-group{{ $errors->has('cep') ? ' has-error' : '' }}">
                                <label for="cep" class="col-md-4 control-label">Cep:</label>

                                <div class="col-md-2">
                                    <input id="cep" type="text" class="form-control" name="cep" value="{{ old('cep') }}" required autofocus>

                                    @if ($errors->has('cep'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('cep') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
