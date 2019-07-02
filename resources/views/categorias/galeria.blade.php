@extends('layouts.cuerpo')
@section('titulo', 'Galeria de categorias')
@section('contenido')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				@foreach($categorias as $categoria)
				<div class="col-md-4">
				<div class="thumbnail">
			      <img src="{{ asset($categoria->imagen) }}" alt="{{ asset('/img/no_existe.jpg') }}">
			      <div class="caption">
			        <h3>{{ $categoria->nombre }}</h3>
			        <p>{{ $categoria->descripcion }}</p>
			        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			      </div>
			    </div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection