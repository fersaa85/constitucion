<div class="form-group">
    {!! Form::label('email', 'Email', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('email', Input::get('email'), ['class' => 'form-control', 'placeholder' => '']) !!}
    </div>
</div>



<div class="form-group">
    {!! Form::label('password', 'Password', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '']) !!}
    </div>
</div>


<div class="form-group">
    <span class="col-sm-2 control-label"></span>
    <div class="col-sm-10">
        {!! Form::submit('Enviar', ['class' => 'btn btn-info']) !!}
    </div>
</div>