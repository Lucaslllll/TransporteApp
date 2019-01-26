@extends('template.base')

@section('parallax')
<div id="capa" class="mt-0">
	<div class="container-fluid">
		<div class="center">
			<div class="row">
				<div class="col-12 faixa-preta">
					<div class="col-12">
						<h2 class="title text-center h1">TecHay - OnibusRN</h2>
					</div>
					<div class="col-12">
						<a class="text-center d-block"><button class="btn btn-outline-danger my-2 my-sm-0 button-baixar">Baixar</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


@section('informacao')
<div id="carousel">
	<div class="container-fluid">
		<div class="row">
			<div class="bg-warning col-12">
				<div class="col-12">
					<h2 class="text-center h1 font-weight-bold">Vantagens</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div id="carousell" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100 img-carousel-1">
							<div class="carousel-caption d-none d-md-block">
								<h4>Gratuito</h4>
								<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100 img-carousel-2">
							<div class="carousel-caption d-none d-md-block">
								<h4>Gratuito</h4>
								<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100 img-carousel-3">
							<div class="carousel-caption d-none d-md-block">
								<h4>Gratuito</h4>
								<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carousell" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousell" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection



@section('conteudo')
<div id="conteudo">
	<div class="container-fluid">
		<div class="row">
			<div class="bg-warning col-12">
				<div class="col-12">
					<h2 class="text-center h1 ">Sobre</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-6 bg-dark">
				<h3 class="text-center text-primary"> lorem ipsum?</h3>
				<p class="text-justify sobreapp text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
			</div>
			<div class="col-6 bg-primary">
				<h3 class="text-center text-white"> lorem ipsum?</h3>
				<p class="text-justify sobreapp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
			</div>

			<div class="col-6 bg-danger">
				<h3 class="text-center text-success"> lorem ipsum?</h3>
				<p class="text-justify sobreapp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
			</div>

			<div class="col-6">
				<h3 class="text-center text-secondary"> lorem ipsum?</h3>
				<p class="text-justify sobreapp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
			</div>
		</div>
	</div>
</div>
@endsection






