@extends('template')

@section('title')
    <p class="title">participacion / registro</p>
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
            {!! Form::open(array('url' => 'web/register-continue',
                                'method'=>'post',
                                'name'=>'frmRegister')) !!}

            @include('web.forms.form')

            <p class="text-center">lorem</p>
            <p class="text-center">{!! Form::checkbox('agree', 1, true, ['class' => 'field', 'required' => true]) !!} <strong>Acepto</strong></p>



            {!! Form::submit('Enviar', ['class'=> 'submit', 'name'=>'submit']) !!}
            <a href="mas-tarde" class="buttom-later" >Mas tarde</a>
            <p class="text-center">Campos obligatorios *</p>
            <p class="text-center">Revisa nuestro <a href="" class="color-red"><strong>aviso de privacidad</strong></a></p>
            {!! Form::close() !!}
        </div>
        <div class="col-md-4"></div>
    </section>




@stop()