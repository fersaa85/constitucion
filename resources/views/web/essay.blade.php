@extends('template')

@section('body')

    <section class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="text-uppercase">Ensayo</h1>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 bg-grey">



                <!--
                <form action="{{ url('web/upload')}}" class="dropzone" ></form>
                -->
                <div id="dZUpload" class="dropzone">
                    <div class="dz-default dz-message">
                        <p class="text-uppercase text-center">Arrastra el archivo  aquí <br >o si prefieres...<span>selecionar Archivo del equipo</span>pdf / TXT / DOC </p>
                    </div>
                </div>

                <a href="registro" class="text-uppercase text-center buttom-register">Registrarse y enviar</a>

            </div>
            <div class="col-md-2"></div>

        </div>
    </section>
@stop()

