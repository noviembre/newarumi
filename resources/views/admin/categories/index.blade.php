@extends('template.cpmaster')


@section('content')




    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="flexbox padd-10 bb-1">
                    <h4 class="mb-0">Lista de las Categorias</h4>
                    <a href="{{ route('category.create') }}" class="btn gredient-btn"  title="Crear">
                        Nueva Categoria
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
                            </tr>
                            </thead>

                            <tbody>

                            @if($categories->count()> 0)

                                @foreach($categories as $category)
                                    <tr>
                                        <td> {{ $category->id }}</td>
                                        <td> {{ $category->name }}</td>

                                        <td><a href="{{ route('category.edit', ['id' => $category->id ]) }}" class="btn btn-info btn-xs">Editar</a>  </td>

                                        <td><a href="{{ route('category.delete', ['id' => $category->id ]) }}" class="btn btn-danger btn-xs">Eliminar</a>  </td>
                                    </tr>
                                @endforeach

                            @else
                                <tr >
                                    <th colspan="5" class="text-center text-danger">
                                        No se encontro ninguna categoria
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