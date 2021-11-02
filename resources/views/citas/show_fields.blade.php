<!-- Idpaciente Field -->
<div class="col-sm-12">
    {!! Form::label('idpaciente', 'Idpaciente:') !!}
    <p>{{ $citas->idpaciente }}</p>
</div>

<!-- Fechacita Field -->
<div class="col-sm-12">
    {!! Form::label('fechacita', 'Fechacita:') !!}
    <p>{{ $citas->fechacita }}</p>
</div>

<!-- Id Doctor Field -->
<div class="col-sm-12">
    {!! Form::label('id_doctor', 'Id Doctor:') !!}
    <p>{{ $citas->id_doctor }}</p>
</div>

