@extends('template.cpmaster')


@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <a href="{{ route('posts') }}" class="btn btn-secondary">
                Volver
            </a>
            <h4 class="theme-cl pull-right">Crear un nuevo post</h4>
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
               <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data" data-toggle="validator" class="padd-20">

                        {{ csrf_field() }}

                    <div class="row mrg-0">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputName" class="control-label"><b>Titulo</b></label>
                                <input name="title" type="text" class="form-control" id="inputName" placeholder="Titulo" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputEmail" class="control-label"><b>Imagen</b></label>
                                <input name="featured" type="file" class="form-control" id="inputEmail">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                    </div>

                    <div class="row mrg-0">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleSelect1"><b>Categorias</b></label>
                                <select name="category_id" class="form-control" id="exampleSelect1">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="control-label"><b>Etiquetas</b></label>
                                @foreach($tags as $tag)
                                    <div>
                                        <label class="form-check-label">
                                            <input value="{{ $tag->id }}" name="tags[]" type="checkbox" class="form-check-input">
                                            {{ $tag->tag }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>



                   <div class="row mrg-0">
                       <div class="col-sm-12">
                           <div class="form-group">
                               <label for="inputphone" class="control-label"><b>Contenido</b></label>
                               <textarea name="contenido" id="contenido" cols="30" rows="10" class="form-control"></textarea>
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

@section('styles')

    <link href="{{ asset('assets/summernote/css/summernote-bs4.css') }}" rel="stylesheet">

@stop


@section('scripts')
    <!-- Scripts para Editor de texto  -->
    <script src="{{ asset('assets/summernote/js/summernote-bs4.min.js') }}"></script>

    <script>
        $(document).ready(function () {

            $('#contenido').summernote();

        });

    </script>

@stop