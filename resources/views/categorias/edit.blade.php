@extends('layouts.cuerpo')
@section('titulo', 'Creación de categoria')
@section('contenido')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">
			
	<div class="panel panel-default">
	  <div class="panel-heading">Actualizar categoria</div>
	  <div class="panel-body">
	    
	    {!!Form::model($categoria, ['route'=>['categorias.update', $categoria->id], 'method'=>'PUT', 'files' => true])!!}	
	    <div class="input-group">
		@include('categorias.campos')
		<button onclick="return confirm('¿Realmente deseas editar la categoria?')" class="btn btn-danger pull-left" type="submit">Actualizar categoria</button>
	    </div>
	{{Form::close()}}
	  </div>
	</div>

	</div>
	</div>
		</div>
	</div>
@endsection