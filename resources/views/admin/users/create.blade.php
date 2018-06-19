@extends('template.cpmaster')


@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <a href="{{ route('users') }}" class="btn btn-secondary">
                Volver
            </a>
            <h4 class="theme-cl pull-right">Crear un Usuario</h4>
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
                <form action="{{ route('user.store') }}" method="post" data-toggle="validator" class="padd-20">

                    {{ csrf_field() }}

                    <div class="row mrg-0">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputName" class="control-label"><b>Nombre:</b></label>
                                <input name="name" type="text" class="form-control" id="inputName" placeholder="Ingrese el Nombre del Usuario">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="control-label"><b>E-Mail:</b></label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese un email">
                            </div>
                        </div>



                    </div>



                    <div class="col-12">
                        <div class="form-group">
                            <div class="text-center">
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