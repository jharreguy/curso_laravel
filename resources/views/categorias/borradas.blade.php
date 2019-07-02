@extends('layouts.cuerpo')
@section('titulo', 'Categorias borradas')
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
							<a href="{{route('categorias.restaurar', $categoria->id)}}">
										<button class="btn btn-warning">
												Restaurar
										</button>
										</a>
									</th>
								</tr>
							@endforeach
						</table>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection