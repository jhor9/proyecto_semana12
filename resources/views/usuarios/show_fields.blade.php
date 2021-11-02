<!-- Ap Nom Field -->
<div class="col-sm-12">
    {!! Form::label('ap_nom', 'Ap Nom:') !!}
    <p>{{ $usuario->ap_nom }}</p>
</div>

<!-- Usuario Field -->
<div class="col-sm-12">
    {!! Form::label('usuario', 'Usuario:') !!}
    <p>{{ $usuario->usuario }}</p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $usuario->password }}</p>
</div>

