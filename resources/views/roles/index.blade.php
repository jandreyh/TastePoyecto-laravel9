@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('roles') }}</div>

                <div class="card-body">

                    @can('crear-rol')
                        <a class="btn btn-warning" href="{{ route('roles.create') }}">Nuevo</a>
                    @endcan
                    <table class="table table-striped mt-2">
                        <thead style="background-color: #677ef;">
                            <th style="display: none;" > ID</th>
                            <th style="color: rgb(0, 0, 0)" > Rol</th>
                            <th style="color: rgb(0, 0, 0)">Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($roles as $role )
                            <tr>
                                <td >{{ $role->name }}</td>
                                <td>
                                    @can('editar-rol')
                                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}" class="btn btn-primary">Edit</a>
                                    @endcan
                                    @can('eliminar-rol')
                                        {!! Form::open(['method' => 'DELETE', 'route'=>['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}

                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination justify-content-end">
                        {!! $roles->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
