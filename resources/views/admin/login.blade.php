@extends('template')


@section('title')
    <p class="title">resultados</p>
@stop()


@section('body')

    <section class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="text-uppercase">Resultados</h1>
            </div>
            <div class="col-md-2">

            </div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 bg-grey">

                {!! Form::open(['url'		=> 'admin/login',
							'method' 	=> 'POST',
							'name' 		=> 'frmAdmin',
							'files' 	=> true,
							'class' 	=> 'form-horizontal']) !!}

                    <fieldset>
                        <legend>Login administrador</legend>
                        @include('admin.forms.form')
                    </fieldset>
                {!! Form::close() !!}



            </div>
            <div class="col-md-2"></div>

        </div>
    </section>
@stop()

