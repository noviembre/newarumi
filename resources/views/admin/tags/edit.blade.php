@extends('template.cpmaster')


@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <a href="{{ route('tags') }}" class="btn btn-secondary">
                Volver
            </a>
            <h4 class="theme-cl pull-right">Actualizar Etiqueta</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->



    <!-- ==== show Erros starts ==== -->
    @include('admin.includes.errors')
    <!-- ==== show Erros starts ==== -->



    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <!-- form start -->
                <form action="{{ route('tag.update', ['id' => $tag->id ]) }}" method="post" data-toggle="validator" class="padd-20">

                    {{ csrf_field() }}

                    <div class="row mrg-0">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputName" class="control-label"><b>Nombre:</b></label>
                                <input value="{{ $tag->tag }}" name="tag" type="text" class="form-control" id="inputName" placeholder="Nombre de la Etiqueta">
                            </div>
                        </div>



                    </div>



                    <div class="col-12">
                        <div class="form-group">
                            <div class="text-left">
                                <button type="submit" class="btn gredient-btn">Guardar</button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
        <!-- /.col-md-12 -->

    </div>




@stop