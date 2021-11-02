<!-- Ap Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ap_nom', 'Ap Nom:') !!}
    {!! Form::text('ap_nom', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Dni Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dni', 'Dni:') !!}
    {!! Form::number('dni', null, ['class' => 'form-control']) !!}
</div>

<!-- Espesialidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('espesialidad', 'Espesialidad:') !!}
    {!! Form::text('espesialidad', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>