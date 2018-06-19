@extends('template.cpmaster')


@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Editar tu Perfil</h4>
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
                <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data" data-toggle="validator" class="padd-20">

                    {{ csrf_field() }}

                    <div class="row mrg-0">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputName" class="control-label"><b>Usuario:</b></label>
                                <input name="name" value="{{ $user->name }}" type="text" class="form-control" id="inputName" placeholder="Ingrese un nombre Usuario">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="control-label"><b>E-Mail:</b></label>
                                <input name="email" value="{{ $user->email }}" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese un email">
                            </div>
                        </div>
                    </div>



                    <div class="row mrg-0">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputName" class="control-label"><b>Nuevo Password:</b></label>
                                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                        </div>

                        <div class="col-sm-6">

                            <div class="form-group">
                                <label for="exampleInputFile"><b>Avatar:</b></label>
                                <input name="avatar" type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">Si desea suba una imagen para su perfil.</small>
                            </div>

                        </div>
                    </div>



                    <div class="row mrg-0">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputName" class="control-label"><b>Facebook:</b></label>
                                <input name="facebook" value="{{$user->profile->facebook}}" type="text" class="form-control" id="inputName" placeholder="Facebook">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputName" class="control-label"><b>Youtube:</b></label>
                                <input name="youtube" value="{{$user->profile->youtube}}" type="text" class="form-control" id="inputName" placeholder="Youtube">
                            </div>
                        </div>
                    </div>




                    <div class="row mrg-0">

                        <div class="col-sm-6">

                            <div class="form-group">
                                <label for="exampleTextarea"><b>Acerca de mi:</b></label>
                                <textarea name="about" class="form-control" id="exampleTextarea" rows="3">{{$user->profile->about}}</textarea>
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