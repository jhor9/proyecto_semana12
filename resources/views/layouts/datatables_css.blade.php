<!-- DataTable Bootstrap -->
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.bootstrap4.min.css">

<li class="nav-item">
    <a href="{{ route('vuecliente.index') }}"
       class="nav-link {{ Request::is('vuecliente*') ? 'active' : '' }}">
        <p>Vue Cliente</p>
    </a>
</li>

