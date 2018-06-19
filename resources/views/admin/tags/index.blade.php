@extends('template.cpmaster')


@section('content')


<!-- ======= Paso 03 ==================================== -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="flexbox padd-10 bb-1">
                    <h4 class="mb-0">Lista de todas las Etiquetas</h4>
                    <a href="{{ route('tag.create') }}" class="btn gredient-btn"  title="Crear">
                        Nueva Etiqueta
                    </a>
                </div>


                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-lg table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody>

                            @if($tags->count()> 0)

                                @foreach($tags as $tag)
                                    <tr>
                                        <td> {{ $tag->id }}</td>
                                        <td> {{ $tag->tag }}</td>

                                        <td><a href="{{ route('tag.edit', ['id' => $tag->id ]) }}" class="btn btn-info btn-xs">Editar</a>  </td>

                                        <td><a href="{{ route('tag.delete', ['id' => $tag->id ]) }}" class="btn btn-danger btn-xs">Eliminar</a>  </td>
                                        <td></td>
                                    </tr>
                                @endforeach

                            @else
                                <tr >
                                    <th colspan="5" class="text-center text-danger">
                                        No se encontro ninguna etiqueta
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