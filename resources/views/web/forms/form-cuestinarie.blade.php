{!! Form::open(array('url' => 'web/questinarie',
                              'method'=>'post',
                              'name'=>'frmQuestinarie')) !!}

<div><!--primera parte del formulario-->
    <div class="primera-linea cero-margin-padding margin-top-bottom">
        EDAD
        <div class="clear"></div>
        <input type="text" name="age" placeholder="AÑOS"/>
    </div>
    <div class="primera-linea cero-margin-padding margin-top-bottom div-sex">
        SEXO
        <div class="clear"></div>
        <div class="opcion div-radio clear-0 box-50" data-value="0">
            F
            <input id="chequed" name="sex" type="radio" value="f"/>
        </div>

        <div class="opcion div-radio clear-0  box-50" data-value="0">
            M
            <input id="chequed" name="sex" type="radio" value="m"/>
        </div>
    </div>
</div>

<div class="clear"></div>
<div class="segunda-linea cero-margin-padding margin-top-bottom"><!--segunda parte del formulario-->
    ESCOLARIDAD
    <div class="clear"></div>
    <div class="opcion div-radio clear-1" data-value="1">
        PRIMARIA
        <input id="chequed" type="radio" name="school" value="primaria"/>
    </div>
    <div class="opcion div-radio clear-1" data-value="1">
        SECUNDARIA
        <input id="chequed" type="radio" name="school" value="secundaria"/>
    </div>
    <div class="opcion div-radio clear-1" data-value="1">
        PREPARATORIA
        <input id="chequed" type="radio" name="school" value="preparatoria"/>
    </div>
    <div class="opcion div-radio clear-1" data-value="1">
        UNIVERSIDAD
        <input id="chequed" type="radio" name="school" value="universidad"/>
    </div>
    <div class="opcion div-radio clear-1" data-value="1">
        POSGRADO
        <input id="chequed" type="radio" name="school" value="posgrado"/>
    </div>
    <input type="text" placeholder="OTRO (ESPECIFICA)" name="school_text" style="float: left;
                                                                                position: relative;
                                                                                width: 240px;"/>
</div>
<div class="clear"></div>
<hr>


<div><!--PREGUNTA 1 parte del formulario-->
    1. ¿QUÉ ES PARA TI <br/>
    LA CONSTIRUCIÓN MEXICANA?
    <input type="text" placeholder="ESCRIBE AQUÍ TU RESPUESTA" name="constitucion_opinion"/>
</div>
<hr>



<div class="pregunta-dos cero-margin-padding margin-top-bottom"><!--PREGUNTA 2 parte del formulario-->
    2. ¿CUÁNTO CONOCES DE LA <br/>
    CONSTIRUCIÓN MEXICANA?
    <div class="clear"></div>
    <div class="opcion2 div-radio clear-2" data-value="2">
        Mucho
        <input id="chequed" type="radio"  name="constitucion_level" value="mucho"/>
    </div>
    <div class="opcion2 div-radio clear-2" data-value="2">
        Algo
        <input id="chequed" type="radio" name="constitucion_level" value="algo"/>
    </div>
    <div class="opcion2 div-radio clear-2" data-value="2">
        Poco
        <input id="chequed" type="radio" name="constitucion_level" value="poco"/>
    </div>
    <div class="opcion2 div-radio clear-2" data-value="2">
        Nada
        <input id="chequed" type="radio" name="constitucion_level" value="nada"/>
    </div>
</div>
<div class="clear"></div>
<hr>



<div class="pregunta-tres cero-margin-padding margin-top-bottom"><!--PREGUNTA TRES parte del formulario-->
    3. ¿CON QUÉ FRASE <br/>
    TE IDENTIFICAS MÁS?
    <div class="clear"></div>
    <div class="opcion3 div-radio clear-3" data-value="3">
        He leído completa<br /> la Constitución mexicana
        <input id="chequed" type="radio" name="constitucion_frase" value="he leido completa"/>
    </div>
    <div class="opcion3 div-radio clear-3" data-value="3">
        He leído solo unos cuantos artículos de la Constitución mexcana
        <input id="chequed" type="radio" name="constitucion_frase" value="he leido unos cuantos"/>
    </div>
    <div class="opcion3 div-radio clear-3" data-value="3">
        Nunca he leído <br />la Constitución mexicana
        <input id="chequed" type="radio" name="constitucion_frase"  value="nunca he leido"/>
    </div>
</div>
<div class="clear"></div>
<hr>


<div class="pregunta-cuatro cero-margin-padding margin-top-bottom"><!--PREGUNTA CUATRO del formulario-->
    4. SI HAS LEÍDO EN TODO O EN PARTE LA CONSTITUCIÓN MEXICANA, SEÑALA CUÁL FRASE SE AJUSTA MÁS A LAS RAZONES QUE TUVISTE PARA HACERLO
    <div class="clear"></div>
    <div class="opcion4 div-radio clear-4" data-value="4">
        Para conocer mis derechos
        <input id="chequed" type="radio" name="constitucion_leer" value="conocer mis derechos"/>
    </div>
    <div class="opcion4 div-radio clear-4" data-value="4">
        Porque me resultaba de interés
        <input id="chequed" type="radio" name="constitucion_leer" value="resultaba de interes"/>
    </div>
    <div class="opcion4 div-radio clear-4" data-value="4">
        Por motivos escolares o acádemicos
        <input id="chequed" type="radio" name="constitucion_leer" value="motivos escolares"/>
    </div>
    <div class="opcion4 div-radio clear-4" data-value="4">
        Para conocer mis derechos
        <input id="chequed" type="radio" name="constitucion_leer" value="conocer mis derechos"/>
    </div>
    <input type="text" placeholder="ESPECIFICA"  name="constitucion_leer_text" style="position: relative;
                                                                                      width: 60%;
                                                                                      height: 80px;
                                                                                      margin: 5px;
                                                                                    "/>
</div>
<div class="clear"></div>
<hr>


<div class="pregunta-cinco cero-margin-padding margin-top-bottom"><!--PREGUNTA CINCO parte del formulario-->
    5. SI NO HAS LEÍDO LA CONSTITUCIÓN MEXICANA, SEÑALA CUÁL FRASE SE AJUSTA A LAS RAZONES POR LAS QUE NO LO HAS HECHO
    <div class="clear"></div>
    <div class="opcion5 div-radio clear-5" data-value="5">
        No me resulta <br />de interés
        <input id="chequed" type="radio" name="constitucion_no_leer" value="no me resulta de interes"/>
    </div>
    <div class="opcion5 div-radio clear-5" data-value="5">
        Es un texto complicado de entender
        <input id="chequed" type="radio" name="constitucion_no_leer" value="complicado de entender"/>
    </div>
    <div class="opcion5 div-radio clear-5" data-value="5">
        No creo que me sea de utilidad leer la Constitución
        <input id="chequed" type="radio" name="constitucion_no_leer" value="no creo que sea util"/>
    </div>
    <div class="opcion5 div-radio clear-5" data-value="5">
        Por otros<br /> motivos
        <input id="chequed" type="radio" name="constitucion_no_leer" value="otros motivos"/>
    </div>
    <input type="text" placeholder="ESPECIFICA" name="constitucion_no_leer_text" style="position: relative;
                                                                                      width: 60%;
                                                                                      height: 80px;
                                                                                      margin: 5px;
                                                                                    "/>
</div>
<div class="clear"></div>
<hr>


<div class="pregunta-seis cero-margin-padding margin-top-bottom"><!--PREGUNTA SEIS parte del formulario-->
    6. ¿QUE FRASE CONSIDERAS QUE DESCRIBE MEJOR <br/>
    A LA CONSTITUCIÓN MEXICANA
    <div class="clear"></div>
    <div class="opcion6 div-radio clear-6" data-value="6">
        Es muy adecuada para las necesidades de la sociedad actual
        <input id="chequed" type="radio" name="constitucion_describe" value="adecuada para la sociedad actual"/>
    </div>
    <div class="opcion6 div-radio clear-6" data-value="6">
        Es algo adecuado para las necesidades de la sociedad actual
        <input id="chequed" type="radio" name="constitucion_describe" value="algo adecuada para la sociedad actual"/>
    </div>
    <div class="opcion6 div-radio clear-6" data-value="6">
        Es totalmente inadecuada para las necesidades de la sociedad actual
        <input id="chequed" type="radio"  name="constitucion_describe" value="inadecuada para la sociedad actual"/>
    </div>
</div>
<div class="clear"></div>
<hr>



<div class="pregunta-siete cero-margin-padding margin-top-bottom"><!--PREGUNTA SIETE parte del formulario-->
    7. ¿CON QUÉ FRASE ESTARÍAS DE ACUERDO
    <div class="clear"></div>
    <div class="opcion7 div-radio clear-7" data-value="7">
        Los valores y principios de la Constitución mexicana son muy adecuados para la sociedad presente y futura
        <input id="chequed" type="radio" name="constitucion_deacuerdo" value="valores adecuados"/>
    </div>
    <div class="opcion7 div-radio clear-7" data-value="7">
        Los valores y principios de la Constitución mexicana son algo adecuados para la sociedad presente y futura
        <input id="chequed" type="radio" name="constitucion_deacuerdo" value="valores algo adecuados"/>
    </div>
    <div class="opcion7 div-radio clear-7" data-value="7">
        Los valores y principios de la Constitución mexicana son totalmente inadecuados para la sociedad presente y futura
        <input id="chequed" type="radio" name="constitucion_deacuerdo" value="valores inadecuados"/>
    </div>
</div>
<div class="clear"></div>
<hr>



<div class="pregunta-ocho  cero-margin-padding margin-top-bottom"><!--PREGUNTA OCHO parte del formulario-->
    8. CONSIDERAS QUE LO QUE NECESITAMOS LOS MEXICANOS ES
    <div class="clear"></div>
    <div class="opcion8 div-radio clear-8" data-value="8">
        Dejar la Constitución como está
        <input id="chequed" type="radio" name="consideras" value="dejar la constitucion como esta"/>
    </div>
    <div class="opcion8 div-radio clear-8" data-value="8">
        Un nuevo texto de la Constitución
        <input id="chequed" type="radio" name="consideras" value="valores algo adecuados"/>
    </div>
    <div class="opcion8 div-radio clear-8" data-value="8">
        Modificar solo parte de la Constitución
        <input id="chequed" type="radio" name="consideras" value="modificar parte de la constitucion"/>
    </div>
    <div class="opcion8 div-radio clear-8" data-value="8">
        Dejar solo lo más importante para simplificar su contenido
        <input id="chequed" type="radio" name="consideras" value="simplificar su contenido"/>
    </div>
</div>

<div class="clear"></div>
<br/><br/>

<input type="submit" name="submit" class="submit enviar" value="REGISTRARME &#x00A; Y ENVIAR" />


{!! Form::close() !!}