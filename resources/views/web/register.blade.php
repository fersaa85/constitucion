@extends('template')

<<<<<<< HEAD
@section('title')
    <p>registro</p>
@stop()

@section('body')
    <section class="container">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h1 class="text-uppercase">Registro</h1>
         </div>
        <div class="col-md-2"></div>

        <div class="col-md-4"></div>
        <div class="col-md-4">
            {!! Form::open(array('url' => 'web/register',
                                'method'=>'post',
                                'name'=>'frmRegister')) !!}

            @include('web.forms.form')

            <p class="text-center">lorem</p>
            <p class="text-center">{!! Form::checkbox('agree', 1, true, ['class' => 'field']) !!} <strong>Acepto</strong></p>


            {!! Form::submit('Enviar', ['class'=> 'submit', 'name'=>'submit']) !!}
            <p class="text-center">Campos obligatorios *</p>
            <p class="text-center">Revisa nuestro <a href="" class="color-red"><strong>aviso de privacidad</strong></a></p>
            {!! Form::close() !!}
        </div>
        <div class="col-md-4"></div>

    </section>




=======
@section('body')
<h1>hello word</h1>
>>>>>>> 0ea6e23229b8d37dbc8a6c0f769d451cacc4cd32
@stop()