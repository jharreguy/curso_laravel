<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo')</title>
	<link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
	<div class="row">
		<div class="col-md-12">
		<nav class="navbar navbar-default">
	  <div class="container-fluid">
	  	<div class="col-md-8">
	  		<ul class="nav navbar-nav">
	  		<li class="active"><a href="{{route('categorias.index')}}">Categorias <span class="sr-only">(current)</span></a></li>
	  		<li class="active"><a href="{{route('categorias.galeria')}}">Galeria categorias <span class="sr-only">(current)</span></a></li>
	  		<li class="active"><a href="{{route('productos.index')}}">Productos <span class="sr-only">(current)</span></a></li>
        
    </ul>
	  	</div>
			<div class="col-md-4">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Brand</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      {{Form::open(['route' => 'categorias.b', 'method' => 'POST'])}}
	        <div class="form-group">
	          <input type="text" name="texto" class="form-control" placeholder="Buscar">
	        </div>
	        <button type="submit" class="btn btn-default">Buscar</button>
	      {{form::close()}}
	    </div><!-- /.navbar-collapse -->
	</div>
	  </div><!-- /.container-fluid -->
	</nav>
	</div>
  </div>
	@yield('contenido')
</body>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}">
</script>
</html>