{!! Form::text('name', Input::get('name'), ['class' => 'form-control', 'placeholder' => 'Nombre*', 'required'=>true]) !!}

{!! Form::text('email', Input::get('email'), ['class' => 'form-control', 'placeholder' => 'Correo*', 'required'=>true]) !!}

{!! Form::text('ages', Input::get('ages'), ['class' => 'form-control inputOnlyNumbers', 'placeholder' => 'Edad*', 'required'=>true, 'type' => 'number'] ) !!}

{!! Form::text('study', Input::get('study'), ['class' => 'form-control', 'placeholder' => 'Nivel de estudios*', 'required'=>true]) !!}

{!! Form::text('sex', Input::get('sex'), ['class' => 'form-control', 'placeholder' => 'Sexo']) !!}

{!! Form::text('localite', Input::get('localite'), ['class' => 'form-control', 'placeholder' => 'Localidad']) !!}

{!! Form::select('ocupation',array(''=>'Ocupación',
                                   '1'=>'Estudiante',
                                   '2'=>'Empleado',
                                   '3'=>'Desempleado',
                                   '4'=>'Empresario',
                                   '5'=>'Hogar'), null, ['class' => 'form-control'] ) !!}

