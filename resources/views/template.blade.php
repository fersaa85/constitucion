<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	{!! Html::style('assets/css/bootstrap.css') !!}
	{!! Html::style('assets/css/full-default.css') !!}

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<script>
		var thanks = false;
	</script>
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown active">
						<a href="index" class="dropdown-toggle text-uppercase" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cultura democratic <span class="vertical-white-line"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#" class="text-uppercase">Opinión y analisis</a></li>
							<li><a href="#" class="text-uppercase">Opinión y analisis</a></li>
						</ul>
					</li>
					<li><a href="#" class="text-uppercase join-now">Participación <span class="vertical-white-line"></span></a></li>
					<li><a href="opinion-y-analisis" class="text-uppercase">Lineamientos generales <span class="vertical-white-line"></span></a></li>
					<li><a href="busqueda" class="text-uppercase">Busqueda de articulos <span class="vertical-white-line"></span></a></li>
					<li><a href="sitios-de-interes" class="text-uppercase">Sitios de interes</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" class="text-uppercase"><span class="vertical-white-line vertical-white-line-right"></span>Resultados</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>

	<div class="container navbar-subar">
		<div class="row">
			<div class="col-md-9 navigation-map">
				@yield('title')
			</div>
			<div class="col-md-3 social-network">
				<ul>
					<li><a href="" class="rss"></a></li>
					<li><a href="" class="instagram"></a></li>
					<li><a href="" class="linkedin"></a></li>
					<li><a href="" class="google"></a></li>
					<li><a href="" class="twitter"></a></li>
					<li><a href="" class="facebook"></a></li>
				</ul>
			</div>
		</div>
	</div>


	@yield('body')





	<script>
	@if( Session::has('thanks') )
		thanks = {{ Session::get('thanks') }};
		@endif
	</script>

	@include('web.modal.join-now')
	@include('web.modal.terminos')
	@include('web.modal.register-thanks')




	<div class="row-fluid bg-red">
		<div class="container bg-tricolor text-center color-white">

			<p>"El contenido de esta pagina es de carater informativo"</p>
		</div>

	</div>

	<footer>
		<div class="container">
			<div class="col-md-2">
				{!!  HTML::image('assets/images/logo-blanco.png') !!}
			</div>
			<div class="col-md-4">
				<h4>Constitución Mexicana</h4>
				<div>
					<ul>
						<li>Informacion</li>
					</ul>
					<ul>
						<li>Multimedia</li>
					</ul>
					<ul>
						<li>Otros</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<h4>Senado de la republica</h4>
				<div>
					<ul>
						<li>Informacion</li>
					</ul>
					<ul>
						<li>Multimedia</li>
					</ul>
					<ul>
						<li>Otros</li>
					</ul>
				</div>

			</div>
		</div>

	</footer>
	<!-- Scripts -->
	{!! Html::script('http://code.jquery.com/jquery-1.12.2.min.js') !!}
	{!! Html::script('assets/js/bootstrap.min.js') !!}


	{!! Html::style('assets/js/jquery-ui-1.11.4/basic.min.css') !!}
	{!! Html::script('assets/js/jquery-ui-1.11.4/dropzone.min.js') !!}


	{!! Html::script('assets/js/full-default.js') !!}

	<script>
	$(document).ready(function () {
		Dropzone.autoDiscover = false;
		$("#dZUpload").dropzone({
			url: "upload",
			addRemoveLinks: true,
			success: function (file, response) {
				var imgName = response;
				file.previewElement.classList.add("dz-success");
				if( response.model ){
					$("#openModalThanks").modal();
				}
			},
			error: function (file, response) {
				file.previewElement.classList.add("dz-error");
			}
		});
	});
	</script>



</body>
</html>