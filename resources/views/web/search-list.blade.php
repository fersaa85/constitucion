@extends('template')


@section('title')
    <p class="title">Constituciones / resultados</p>
@stop()


@section('body')

    <section class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8"><h1 class="text-uppercase">Constituciones</h1><h1>{{ $title }}</h1></div>
            <div class="col-md-2">
                <a href="#" class="text-uppercase join-now btn-participation">Participar <br />ahora</a>
            </div>
        </div>


        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 bg-grey">
        @if(  $Constitucion->isEmpty() )
            <div class="col-md-12">No se ecnontraron resultados</div>
            <div class="col-md-12"><a href="./busqueda"  class="buttom-new-search">Nueva busqueda</a></div>
        @else
                @foreach($Constitucion as $value)
                  <div class="col-md-12 content-article">
                      <h2 class="color-red text-decoration-none">{{$value->article}}</h2>{!! $value->description  !!}
                  </div>
                @endforeach
                <div class="col-md-12"><a href="./busqueda" class="buttom-new-search">Nueva busqueda</a></div>
        @endif
            </div>
            <div class="col-md-2"></div>


        </div>
    </section>
@stop()