@extends('template')

@section('title')
    <p class="title">Búsqueda de artículos</p>
@stop()


@section('body')

    <section class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8"><h1 class="text-uppercase">Búsqueda <br />de artículos</h1></div>
            <div class="col-md-2"></div>
        </div>



        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h4 class="text-uppercase font-bold">En que Constitución <br />deseas buscar</h4>
                <ul class="search-constitution">
                    <li class="active"><a href="#">Cosntitución vigente<span class="vertical-white-line"></span></a></li>
                    <li><a href="http://www.senado.gob.mx/index.php" target="_blank">Constitución para niños<span class="vertical-white-line"></span></a></li>
                    <li><a href="http://www.senado.gob.mx/index.php" target="_blank">Diccíonario</a></li>
                    <div class="clear"></div>
                </ul>
                {!! Form::open(['url' => 'web/search', 'method'=> 'post', 'name'=>'frmSearch']) !!}
                {!! Form::text('search', Input::get('search'), ['class' => 'form-control', 'placeholder' => '']) !!}
                <input type="image" src="../assets/images/icon-lupita.png" class="icon-search" >
                <!--{!! Form::submit('Enviar', ['class'=> 'submit', 'name'=>'submit']) !!}-->
                {!! Form::close() !!}
            </div>
            <div class="col-md-3"></div>
        </div>

       <span class="glyphicons glyphicons-search"></span>
    </section>
@stop()