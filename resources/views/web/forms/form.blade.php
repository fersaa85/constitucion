{!! Form::text('name', Input::get('name'), ['class' => 'form-control', 'placeholder' => 'Nombre*', 'required'=>true]) !!}

{!! Form::text('email', Input::get('email'), ['class' => 'form-control', 'placeholder' => 'Correo*', 'required'=>true]) !!}

{!! Form::text('ages', Input::get('ages'), ['class' => 'form-control', 'placeholder' => 'Edad*', 'required'=>true]) !!}

{!! Form::text('study', Input::get('study'), ['class' => 'form-control', 'placeholder' => 'Nivel de estudios*', 'required'=>true]) !!}

{!! Form::text('sex', Input::get('sex'), ['class' => 'form-control', 'placeholder' => 'Sexo']) !!}

{!! Form::text('localite', Input::get('localite'), ['class' => 'form-control', 'placeholder' => 'Localidad']) !!}

{!! Form::select('ocupation',array('uno', 'dos'), null, ['class' => 'form-control'] ) !!}

