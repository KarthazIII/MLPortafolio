@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        
         <br> <H1> <div style="text-align:center"> Añadir nueva persona </div> </H1> </br>
        
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Atrás</a> 
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Hay un problema con el texto que quieres ingresar.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('products.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" class="form-control" placeholder="Ingresa el nombre de la persona">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Información de la persona:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Ingresa información de relevancia"></textarea>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
   
</form>
@endsection