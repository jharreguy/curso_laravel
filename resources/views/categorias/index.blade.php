@extends('layouts.cuerpo')
@section('titulo', 'Listado de categoria')
@section('contenido')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6">
					<div class="panel panel-default">
					  <div class="panel-heading">
					  Listado
					  <a href="{{route('categorias.create')}}">
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
									
								</th>
								<th>
									
								</th>
							</thead>
							@foreach($categorias as $categoria)
								<tr>
									<th class="datos">
										{{$categoria->nombre}}
									</th>
									<th class="datos">
										{{$categoria->descripcion}}
									</th>
									<th>
											<a href="{{route('categorias.edit', $categoria->id)}}">
										<button class="btn btn-warning">
												Editar
										</button>
										</a>
									</th>
									<th>
										{!!Form::open(['class'=>'en-linea', 'route'=>['categorias.eliminar', $categoria->id], 'method' => 'DELETE'])!!}
					                        <button class="btn btn-danger" onclick="return confirm('¿Realmente deseas borrar la categoria?')" type="submit">
					                            Borrar
					                        </button>
					                        {!!Form::close()!!}
									</th>
								</tr>
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