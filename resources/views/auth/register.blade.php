@extends('layouts.blank')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-12 control-label">Correo electrónico</label>
                    <div class=" input-group col-md-12">
                        <div class="input-group-addon"><i class="fa fa-id-card-o" aria-hidden="true"></i></div>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-12 control-label">Contraseña</label>

                    <div class="input-group col-md-12">
                        <div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></div>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-md-12 control-label">Confirma tu contraseña</label>

                    <div class="input-group col-md-12">
                        <div class="input-group-addon"><i class="fa fa-unlock" aria-hidden="true"></i></div>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirma tu contraseña" required>
                    </div>
                </div>

                <div class="registrame form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">
                            Registrame
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
