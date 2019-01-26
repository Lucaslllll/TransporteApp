<!DOCTYPE html>
<html>
<head>
	<!--Arquivos bootstrap-->
	<meta charset="utf-8" />
	
	<title>TecHay - OnibusRN</title>
	<link href="{{asset('assets/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/stylehome.css')}}" />
	<link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- Menu -->
	<nav class="navbar navbar-expand-lg navbar-light bg-warning">
		<div class="container">
			<a class="navbar-brand" href="#">TecHay</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Ex: Celular" aria-label="Search">
					<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
				</form>
			</div>
		</div>
	</nav>
	<!-- Fim do menu -->
	<!-- Capa Parallax -->
	@yield('parallax')

	<!-- Fim da capa Parallax -->
	@yield('informacao')

	<!-- Inicio Conteudo -->
	@yield('conteudo')



	<div id="rodape">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 bg-warning pt-4 pb-4">
					<h3 class="text-center text-black">
						TecHay
					</h3>
				</div>
			</div>
		</div>
	</div>
	<!-- Arquivos boostrap -->
	<script src="{{asset('https://code.jquery.com/jquery-1.10.2.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/main.js')}}"></script>
	



	<script src="assets/js/jquery.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
</body>
</html>