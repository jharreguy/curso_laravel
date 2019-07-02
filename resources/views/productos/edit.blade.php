@extends('layouts.cuerpo')
@section('titulo', 'Creación de producto')
@section('contenido')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">
	  	@if(count($errors) > 0)
					<div class="alert alert-danger">
	  	<ul>
	  		@foreach($errors->all() as $error)
	  		<li>{{ $error }}</li>
	  		@endforeach
	  	</ul>
	  	</div>
	  	@endif
	<div class="panel panel-default">
	  <div class="panel-heading">Complete formulario</div>
	  <div class="panel-body">
	    {!!Form::model($producto, ['route'=>['productos.update', $producto->id], 'method'=>'PUT', 'files' => true])!!}	
	    <div class="input-group">
		@include('productos.campos')
		<button class="btn btn-danger pull-right" type="submit">Editar producto</button>
	    </div>
	{{Form::close()}}
	  </div>
	</div>

	</div>
	</div>
		</div>
	</div>
@endsection