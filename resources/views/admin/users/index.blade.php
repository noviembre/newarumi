@extends('template.cpmaster')


@section('content')


    <!-- ======= Paso 03 ==================================== -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="flexbox padd-10 bb-1">
                    <h4 class="mb-0">Lista de todos los Usuarios</h4>
                    <a href="{{ route('user.create') }}" class="btn gredient-btn"  title="Crear">
                        Nuevo Usuario
                    </a>
                </div>


                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-lg table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Permisos</th>
                                <th>Eliminar</th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody>

                            @if($users->count()> 0)

                                @foreach($users as $user)
                                    <tr>
                                        <td> {{ $user->id }}</td>
                                        <td>
                                            <img src="{{ asset($user->profile->avatar) }}" class="avatar" alt="" width="60px" height="60px" style="border-radius: 50%">
                                        </td>
                                        <td> {{ $user->name }}</td>

                                        <td>
                                            @if($user->admin)
                                                <a href="{{ route('user.not.admin',['id'=> $user->id]) }}" class="btn btn-danger btn-xs">
                                                    Quitar Permisos
                                                </a>
                                            @else
                                                <a href="{{ route('user.admin',['id'=> $user->id]) }}" class="btn btn-success btn-xs">
                                                    Conceder Permisos</a>
                                            @endif
                                        </td>

                                        <td>
                                            @if(Auth::id() !== $user->id )
                                                <a href="{{ route('user.delete',['id'=> $user->id]) }}" class="btn btn-danger btn-xs">
                                                    Eliminar
                                                </a>
                                            @endif
                                        </td>

                                        <td></td>
                                    </tr>
                                @endforeach

                            @else
                                <tr >
                                    <th colspan="6" class="text-center text-danger">
                                        No se encontro ningun usuario
                                    </th>
                                </tr>

                            @endif


                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
        </div>
    </div>

@stop