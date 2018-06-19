@extends('template.cpmaster')


@section('content')




    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="flexbox padd-10 bb-1">
                    <h4 class="mb-0">Listar todos los Post Inactivos</h4>
                    <a href="{{ route('category.create') }}" class="btn gredient-btn"  title="Crear">
                        Nuevo Post
                    </a>
                </div>


                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-lg table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Nombre</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody>

                            @if($posts->count()> 0)

                                @foreach($posts as $post)
                                    <tr>
                                        <td> {{ $post->id }}</td>
                                        <td><img src="{{ $post->featured }}" width="90px" height="50px"> </td>
                                        <td>{{ $post->title }}</td>
                                        <td>
                                            <a href="{{ route('posts.restore', ['id' => $post->id]) }}" class="btn btn-success">
                                                <i class="fa fa-check"></i> Activar</a>


                                        </td>
                                        <td>
                                            <a href="{{ route('posts.kill', ['id' => $post->id]) }}" class="btn btn-danger">
                                                <i class="fa fa-times"></i> Eliminar</a>
                                        </td>
                                        <td></td>
                                    </tr>
                                @endforeach

                            @else
                                <tr >
                                    <th colspan="6" class="text-center text-danger">
                                        No se encontro ningun Post
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