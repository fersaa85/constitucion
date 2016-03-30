@extends('template')

@section('title')
    <p class="title">participacion / cuestinario </p>
@stop()

@section('body')
    <section class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="text-uppercase">Cuestinario</h1>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 bg-grey">
                @include('web.forms.form-cuestinarie')
            </div>

            <div class="col-md-2"></div>
        </div>

    </section>


@stop()