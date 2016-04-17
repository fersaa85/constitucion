<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CONSULTA DEMOCRÁTICA SOBRE LA COSNTITUCIÓN MEXICANA</title>

	{!! HTML::style('assets/css/bootstrap.css') !!}
	{!! HTML::style('assets/css/full-default.css') !!}
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/icono.ico">

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
		<div class="container clear-padding">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10 bg-navbar clear-padding-left-right">

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

							<li class="dropdown {{ $viewshare['home'] or '' }}">
								<a href="/index" class="dropdown-toggle text-uppercase" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="false" >
									Cultura democrática <span class="vertical-white-line"></span>
								</a>
								<!--
								<ul class="dropdown-menu">
									<li class="{{ $viewshare['opinion-analitycs'] or '' }}"><a href="opinion-y-analisis" class="text-uppercase">Opinión y análisis</a></li>
									<li class="{{ $viewshare['opinion-analitycs'] or '' }}"><a href="opinion-y-analisis" class="text-uppercase">Opinión y análisis</a></li>
								</ul>
								-->
							</li>

							<li class="{{ $viewshare['participation'] or '' }}"><a href="convocatoria" class="text-uppercase">Convocatoria <span class="vertical-white-line"></span></a></li>
							<li class="{{ $viewshare['general-guidelines'] or '' }}"><a href="lineamientos-generales" class="text-uppercase">Lineamientos generales <span class="vertical-white-line"></span></a></li>
							<li class="{{ $viewshare['search'] or '' }}"><a href="busqueda" class="text-uppercase">Constituciones<span class="vertical-white-line"></span></a></li>
							<li class="{{ $viewshare['opinions'] or '' }}"><a href="opiniones" class="text-uppercase">Opiniones<span class="vertical-white-line"></a></li>
							<li class="{{ $viewshare['what-it-is'] or '' }}"><a href="que-es" class="text-uppercase">¿Qué es?</a></li>
						</ul>

						<ul class="nav navbar-nav navbar-right">
							<li><a href="#" class="text-uppercase"><span class="vertical-white-line vertical-white-line-right"></span>Resultados</a></li>
						</ul>
					</div><!--/.nav-collapse -->

				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</nav>

	<div class="container navbar-subar">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-7 navigation-map">
				@yield('title')
			</div>
			<div class="col-md-3 social-network">
				<ul>
					<!--
					<li><a href="http://www.gob.mx/presidencia/"  target="_blank" class="rss"></a></li>
					<li><a href="http://www.gob.mx/presidencia/" target="_blank" class="instagram"></a></li>
					<li><a href="http://www.gob.mx/presidencia/" target="_blank" class="linkedin"></a></li>
					<li><a href="http://www.gob.mx/presidencia/" target="_blank" class="google"></a></li>
					-->
					<li><a href="https://twitter.com/presidenciamx?lang=es" target="_blank" class="twitter"></a></li>
					<li><a href="https://www.facebook.com/PresidenciaMX/" target="_blank" class="facebook"></a></li>
				</ul>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>



	@if ( !$errors->isEmpty() ):
		<div class="container">
			<div class="alert alert-danger" role="alert">
				<p class="alert-link">El e-mail ya se encuentra registrado, por favor ingrese un mail diferente</p>
			</div>
		</div>
	@endif


	@yield('body')





	<script>
	@if( Session::has('thanks') )
		thanks = '{{ Session::get('thanks') }}';
		@endif
	</script>

	@include('web.modal.join-now')
	@include('web.modal.terminos')
	@include('web.modal.register-thanks')




	<div class="row-fluid bg-red">
		<div class="container bg-green text-center color-white">

			<p>""El contenido de esta página es sólo de carácter informativo"."<br />
				SENADO DE LA REPÚBLICA: Av. Paseo de la Reforma 135, esq. Insurgentes Centro, Colonia Tabacalera,<br />
				Delegación Cuauhtémoc, Ciudad de México C.P. 06030 Teléfono: 5345 3000 y 5130 2200</p>
		</div>

	</div>

	<footer>
		<div class="container">
			<div class="col-md-2 text-center">
				{!!  HTML::image('assets/images/logo-blanco.png') !!}
			</div>
			<div class="col-md-4 cero-paddig-left">
				<h4 class="text-uppercase">Constitución Mexicana</h4>
				<div class="row">
					<ul class="col-lg-4">
						<li>INFORMACIÓN</li>
						<li><a href="">Boletines</a></li>
						<li><a href="">Versiones</a></li>
						<li><a href="">Agenda</a></li>
						<li><a href="">Síntesis</a></li>
					</ul>
					<ul class="col-lg-4">
						<li>MULTIMEDIA</li>
						<li><a href="">Fotografías</a></li>
						<li><a href="">Videos</a></li>
						<li><a href="">Audios</a></li>
						<li><a href="">Infografías</a></li>
						<li><a href="">En vivo</a></li>
					</ul>
					<ul class="col-lg-4">
						<li>OTROS</li>
						<li><a href="">Estenografía</a></li>
						<li><a href="" class="prelative">Senadores en redes sociales</a></li>
						<li><a href="" class="prelative">Histórico de comunicación</a></li>
						<li><a href="">Senado</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-4  cero-paddig-left">
				<h4 class="text-uppercase">Senado de la república</h4>

				<div class="row">
					<ul class="col-lg-4">
						<li>INFORMACIÓN</li>
						<li><a href="">Boletines</a></li>
						<li><a href="">Versiones</a></li>
						<li><a href="">Agenda</a></li>
						<li><a href="">Síntesis</a></li>
					</ul>
					<ul class="col-lg-4">
						<li>MULTIMEDIA</li>
						<li><a href="">Fotografías</a></li>
						<li><a href="">Videos</a></li>
						<li><a href="">Audios</a></li>
						<li><a href="">Infografías</a></li>
						<li><a href="">En vivo</a></li>
					</ul>
					<ul class="col-lg-4">
						<li>OTROS</li>
						<li><a href="">Estenografía</a></li>
						<li><a href="" class="prelative">Senadores en redes sociales</a></li>
						<li><a href="" class="prelative">Histórico de comunicación</a></li>
						<li><a href="">Senado</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-1"></div>

		</div>

	</footer>
	<!-- Scripts -->
	<script>
		var  site_domine= '{{$site_domine}}';
	</script>
	{!! HTML::script('http://code.jquery.com/jquery-1.12.2.min.js') !!}
	{!! HTML::script('assets/js/bootstrap.min.js') !!}
	{!! HTML::script('assets/js/bootstrap-hover-dropdown.min.js') !!}




	{!! HTML::style('assets/js/jquery-ui-1.11.4/basic.min.css') !!}
	{!! HTML::script('assets/js/jquery-ui-1.11.4/dropzone.min.js') !!}



	{!! HTML::script('assets/js/full-default.js') !!}


	<script>
	$(document).ready(function () {
		Dropzone.autoDiscover = false;
		$("#dZUpload").dropzone({
			url: "upload",
			addRemoveLinks: true,
			//acceptedFiles: ".txt,.pdf,.doc,.docx",
			accept: function(file, done) {

				var type = ['txt','pdf','doc','docx'];
				var ext = file.name.substr( (file.name.lastIndexOf('.') + 1) );
				if( type.indexOf(ext) == -1 ){
					alert("El archivo no tiene un formato valido, PDF / TXT / DOC ");
					done("El archivo no tiene un formato valido");
				}else{
					done();
				}

			},
			success: function (file, response) {
				var imgName = response;
				file.previewElement.classList.add("dz-success");
				if( response.model ){
					//$("#openModalThanks").modal();
					window.location.href = site_domine;
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