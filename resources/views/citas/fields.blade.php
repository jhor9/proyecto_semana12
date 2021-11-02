<!-- Idpaciente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idpaciente', 'Idpaciente:') !!}
    {!! Form::number('idpaciente', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechacita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechacita', 'Fechacita:') !!}
    {!! Form::text('fechacita', null, ['class' => 'form-control','id'=>'fechacita']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fechacita').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Id Doctor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_doctor', 'Id Doctor:') !!}
    {!! Form::text('id_doctor', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>