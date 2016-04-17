@extends('template')

@section('title')
    <p class="title">Constituciones</p>
@stop()


@section('body')

    <section class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8"><h1 class="text-uppercase">Constituciones</h1></div>
            <div class="col-md-2">
                <a href="#" class="text-uppercase join-now btn-participation">Participar <br />ahora</a>
            </div>
        </div>



        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 search">
                <h4 class="text-uppercase font-bold">En que Constitución <br />deseas buscar</h4>
                <ul class="search-constitution">
                    <li class="active"><a href="adult" class="buttom-search">Cosntitución vigente<span class="vertical-white-line"></span></a></li>
                    <li><a href="boy" class="buttom-search">Constitución para niños<span class="vertical-white-line"></span></a></li>
                    <li><a href="http://www.senado.gob.mx/index.php" target="_blank">Diccíonario</a></li>
                    <div class="clear"></div>
                </ul>
                {!! Form::open(['url' => 'search', 'method'=> 'post', 'name'=>'frmSearch']) !!}
                    {!! Form::text('search', Input::get('search'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    {!! Form::hidden('type', 'adult') !!}
                    <input type="image" src="assets/images/icon-lupita.png" class="icon-search" >
                {!! Form::close() !!}
            </div>
            <div class="col-md-3"></div>
        </div>

       <span class="glyphicons glyphicons-search"></span>
    </section>
@stop()