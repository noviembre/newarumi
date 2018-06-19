
@if(count($errors) > 0)
<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title m-b-0">Hay Campos que necesita llenar</h4>
            </div>


            <div class="card-body">
                @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }} <a href="#" class="alert-link">Upps</a>.
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-12">

    </div>
</div>
@endif