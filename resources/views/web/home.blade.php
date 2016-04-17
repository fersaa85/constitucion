@extends('template')


@section('title')
@stop()

@section('body')

    <section id="home" class="container">

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-8 clear-padding-left-right">
                   <div class="pull-left bg-senado">
                        <div class="bg-senado-de-la-republica"></div>
                   </div>
                   <div class="pull-left bg-opacity-white">
                    <h2 class="text-uppercase">Consulta Democrática Nacional sobre la Constitución Mexicana</h2>
                    <h4 class="nexa_boldregular">Comisión Especial para el Diagnóstico y Reflexión<br />sobre el Texto que Conforma la Constitución Política<br />de los Estados Unidos Mexicanos</h4>
                   </div>

                </div>
                <div class="col-md-2 col-buttoms  clear-padding-left-right">
                    <ul>
						<!--
                        <li><a href="que-es" target="_blank" class="text-uppercase">¿Qué es?</a></li>
                        <li><a href="assets/download/sample.pdf" target="_blank" class="text-uppercase">Bases de <br />participación<span class="icon-download"></span></a></li>
						-->
                        <li><a href="#" class="text-uppercase join-now">Participar <br />ahora</a></li>

                    </ul>
                </div>
                <div class="col-md-1" ></div>

            </div>

        <div class="row margin-top-20">
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
                <div class="col-md-1"></div>
                <div class="col-md-5 line-grey-right">
                    <p class="text-justify">Las senadoras y los senadores te damos la más cordial bienvenida a este sitio. Lo hemos diseñado y puesto en funcionamiento pensando en ti y buscando tu participación. Como probablemente habrás escuchado, el 05 de febrero del próximo año la Constitución mexicana, la ley más importante de todas las personas que formamos este gran país, cumplirá 100 años de estar viva y de proteger nuestros derechos. ¡Si, los mexicanos tenemos una de las constituciones más antiguas del mundo! Por ese motivo estamos de fiesta y queremos que tú seas parte. Es sencillo y muy importante que te </p>
                </div>
                <div class="col-md-5">
                    <p class="text-justify">unas. ¿Cómo? Participando en la Consulta Democrática Nacional para que reflexiones y des tu opinión acerca de los valores, los derechos y deberes señalados en la Constitución. Puedes hacerlo respondiendo a un breve cuestionario o enviando un ensayo. Aquí te decimos cómo y te ofrecemos información para que conozcas mejor nuestra Ley Fundamental, así como algunas opiniones y reflexiones acerca de ella.</p>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="col-md-2">

            </div>
      </div>


      <div class="row">
            <div class="col-md-2"> </div>
            <div class="col-md-8">
                <div class="col-md-6">
                    <a href="http://www.gob.mx/presidencia/" target="_blank">
                        {!!  HTML::image('assets/images/visitar-sitio-centenario-constitucion.png', '',['class' => 'buttom-image']) !!}
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="http://www.gob.mx/presidencia/" target="_blank">
                        {!!  HTML::image('assets/images/visitar-sitio-comision-reflexion-texto-constitucion.png', '', ['class' => 'buttom-image']) !!}
                    </a>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

    </section>



@stop()