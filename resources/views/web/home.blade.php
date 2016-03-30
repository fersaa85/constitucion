@extends('template')


@section('title')
@stop()

@section('body')

    <section id="home" class="container">

            <div class="row">
                <div class="col-md-9 clear-padding">
                   <div class="pull-left bg-senado">
                        <div class="bg-senado-de-la-republica"></div>
                   </div>
                   <div class="pull-left" style="padding: 20px; width: 660px;">
                    <h1 class="text-uppercase">Consulta democrática sobre la cosntitución mexicana </h1>
                    <h4>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, </h4>
                   </div>
                </div>
                <div class="col-md-3 col-buttoms">
                    <ul>
                        <li><a href="" class="text-uppercase">¿Qué es?</a></li>
                        <li><a href="web/reglas-ensayo" class="text-uppercase">Bases de <br />participación<span class="icon-download"></span></a></li>
                        <li><a href="#" class="active text-uppercase join-now">Participar <br />ahora</a></li>
                    </ul>
                </div>
            </div>

        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
                <div class="col-md-6 line-grey-right">
               <p>Hay muchas variaciones de los pasajes de Lorem Ipsum disponibles, pero la mayoría sufrió alteraciones en alguna manera, ya sea porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto. Todos los generadores de Lorem Ipsum que se encuentran en Internet tienden a repetir trozos predefinidos cuando sea necesario, haciendo a este el único generador verdadero (válido) en la Internet. Usa un diccionario de mas de 200 palabras provenientes del latín, combinadas con estructuras muy útiles de sentencias, para generar texto de Lorem Ipsum que parezca razonable. Este Lorem Ipsum generado siempre estará libre de repeticiones, humor agregado o palabras no características del lenguaje, etc.</p>
                <p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).</p>
               </div>
                <div class="col-md-6">
                    <p>Hay muchas variaciones de los pasajes de Lorem Ipsum disponibles, pero la mayoría sufrió alteraciones en alguna manera, ya sea porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto. Todos los generadores de Lorem Ipsum que se encuentran en Internet tienden a repetir trozos predefinidos cuando sea necesario, haciendo a este el único generador verdadero (válido) en la Internet. Usa un diccionario de mas de 200 palabras provenientes del latín, combinadas con estructuras muy útiles de sentencias, para generar texto de Lorem Ipsum que parezca razonable. Este Lorem Ipsum generado siempre estará libre de repeticiones, humor agregado o palabras no características del lenguaje, etc.</p>
                    <p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).</p>
               </div>
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