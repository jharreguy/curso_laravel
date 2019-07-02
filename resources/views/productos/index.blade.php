@extends('layouts.cuerpo')
@section('titulo', 'Listado de productos')
@section('contenido')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6">
					<div class="panel panel-default">
					  <div class="panel-heading">
					  Listado
					  <a href="{{route('productos.create')}}">
						<button class="btn btn-info pull-right">
								Nuevo
						</button>
						</a>
					</div>
						  <div class="panel-body">
						    <table class="table table-hove">
							<thead>
								<th>
									Nombre
								</th>
								<th>
									Decripcion
								</th>
								<th>
									Precio
								</th>
								<th>
									Categoria
								</th>
								<th>
									
								</th>
								<th>
									
								</th>
							</thead>
							@foreach($productos as $producto)
								<tr>
									<th class="datos">
										{{$producto->nombre}}
									</th>
									<th class="datos">
										{{$producto->descripcion}}
									</th>
									<th class="datos">
										{{$producto->precio}}
									</th>
									<th class="datos">
										{{$producto->categoria->nombre}}
									</th>
									<th>
											<a href="{{route('productos.edit', $producto->id)}}">
										<button class="btn btn-warning">
												Editar
										</button>
										</a>
									</th>
										
									<th>
										{!!Form::open(['class'=>'en-linea', 'route'=>['productos.eliminar', $producto->id], 'method' => 'DELETE'])!!}
					                        <button class="btn btn-danger" onclick="return confirm('¿Realmente deseas borrar el producto?')" type="submit">
					                            Borrar
					                        </button>
					                        {!!Form::close()!!}
									</th>								</tr>
							@endforeach
						</table>
						<a href="{{route('categorias.borradas')}}">
						<button class="btn btn-warning pull-right">
								Categorias eliminadas
						</button>
						</a>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection