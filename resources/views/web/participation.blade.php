@extends('template')

@section('title')
    <p class="title">Convocatoria</p>
@stop()


@section('body')

    <section class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="text-uppercase">Convocatoria</h1>
            </div>
            <div class="col-md-2">
               <a href="#" class="text-uppercase join-now btn-participation">Participar <br />ahora</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 bg-grey">
                  <p>augue semper facilisis vel a dolor. Nam vel enim non enim tempus semper. Nunc rhoncus, arcu sit amet malesuada euismod, enim ligula facilisis diam, at rutrum tortor magna ut lectus. Sed posuere leo elit, ut vestibulum nunc tempor ornare. Suspendisse pharetra lacinia urna at ultrices. Donec vitae eros eget sem molestie tristique. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse nulla dui, dapibus vitae orci sed, vehicula auctor augue. Aliquam sed metus quis diam gravida bibendum vel eget felis. Phasellus eu leo sed ipsum luctus porttitor eu in lacus. Aenean tempor ultricies convallis.</p>
                <p>augue semper facilisis vel a dolor. Nam vel enim non enim tempus semper. Nunc rhoncus, arcu sit amet malesuada euismod, enim ligula facilisis diam, at rutrum tortor magna ut lectus. Sed posuere leo elit, ut vestibulum nunc tempor ornare. Suspendisse pharetra lacinia urna at ultrices. Donec vitae eros eget sem molestie tristique. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse nulla dui, dapibus vitae orci sed, vehicula auctor augue. Aliquam sed metus quis diam gravida bibendum vel eget felis. Phasellus eu leo sed ipsum luctus porttitor eu in lacus. Aenean tempor ultricies convallis.</p>
                <p>augue semper facilisis vel a dolor. Nam vel enim non enim tempus semper. Nunc rhoncus, arcu sit amet malesuada euismod, enim ligula facilisis diam, at rutrum tortor magna ut lectus. Sed posuere leo elit, ut vestibulum nunc tempor ornare. Suspendisse pharetra lacinia urna at ultrices. Donec vitae eros eget sem molestie tristique. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse nulla dui, dapibus vitae orci sed, vehicula auctor augue. Aliquam sed metus quis diam gravida bibendum vel eget felis. Phasellus eu leo sed ipsum luctus porttitor eu in lacus. Aenean tempor ultricies convallis.</p>

				  <ul class="nuevos-botones">
						
                        <li><a href="ver-mas" target="_blank" class="text-uppercase btn-see-more" >Ver <br /> más</a></li>
                        <li><a href="assets/download/sample.pdf" target="_blank" class="text-uppercase">Descargar la <br />convocatoria<span class="icon-download"></span></a></li>
						
					</ul>		
            </div>
            <div class="col-md-2"></div>

        </div>
    </section>
	
	<style>
	.nuevos-botones{
		list-style: none;
	}
	.nuevos-botones li a{
	background: red none repeat scroll 0 0;
    color: #fff;
    display: inline-block;
    float: right;
    font-family: nexa_boldregular;
    margin-bottom: 5px;
    margin-top: 5px;
    padding: 10px 0;
    text-align: center;
    text-decoration: none;
    width: 185px;
	}
	</style>
@stop()

