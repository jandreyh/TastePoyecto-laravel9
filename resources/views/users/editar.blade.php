@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="cardo">
                <center><b><div class="form-title-group1">{{ __('Editar usuario') }}</div></b></center>

                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Verifique los campos</strong>
                            @foreach ($errors->all() as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    @endif

                    {!! Form::model($user, ['method' =>'PATCH', 'route' => ['users.update', $user->id]]) !!}
                    <div class="row">
                        <div class="form-group1">
                            {!! Form::label('name', 'Nombre') !!}
                            {!! Form::text('name', null, ['class' => 'form-control1', 'placeholder' => 'Nombre']) !!}
                        </div>
                        <div class="form-group1">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::text('email', null, ['class' => 'form-control1', 'placeholder' => 'Email']) !!}
                        </div>
                        <div class="form-group1">
                            {!! Form::label('password', 'Contraseña') !!}
                            {!! Form::password('password', ['class' => 'form-control1', 'placeholder' => 'Contraseña']) !!}
                        </div>
                        <div class="form-group1">
                            {!! Form::label('confirm-password', 'Confirmar contraseña') !!}
                            {!! Form::password('confirm-password', ['class' => 'form-control1', 'placeholder' => 'Confirmar contraseña']) !!}
                        </div>
                        <div class="form-group1">
                            {!! Form::label('rol', 'Rol') !!}
                            {!! Form::select('roles[]', $roles, $userRole, array('class' => 'form-control1')) !!}
                        </div>
                        <center><div class="form-group1">
                            {!! Form::submit('Modificar', ['class' => 'button-login']) !!}
                        </div></center>
                        
                        {!! Form::close() !!}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection

