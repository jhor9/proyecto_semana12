<div class="table-responsive">
    <table class="table" id="citaDestalles-table">
        <thead>
            <tr>
                <th>Idcita</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($citaDestalles as $citaDestalle)
            <tr>
                <td>{{ $citaDestalle->idcita }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['citaDestalles.destroy', $citaDestalle->idcita_destalle], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('citaDestalles.show', [$citaDestalle->idcita_destalle]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('citaDestalles.edit', [$citaDestalle->idcita_destalle]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
