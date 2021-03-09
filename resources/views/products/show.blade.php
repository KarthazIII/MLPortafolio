@extends('products.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
        
        <br> <H1> <div style="text-align:center"> Datos de la persona </div> </H1> </br>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Atrás</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Información:</strong>
                {{ $product->detail }}
            </div>
        </div>
    </div>
@endsection