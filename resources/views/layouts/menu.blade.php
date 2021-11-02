<li class="nav-item">
    <a href="{{ route('citaDestalles.index') }}"
       class="nav-link {{ Request::is('citaDestalles*') ? 'active' : '' }}">
        <p>Cita Destalles</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('citas.index') }}"
       class="nav-link {{ Request::is('citas*') ? 'active' : '' }}">
        <p>Citas</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('doctors.index') }}"
       class="nav-link {{ Request::is('doctors*') ? 'active' : '' }}">
        <p>Doctors</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('pacientes.index') }}"
       class="nav-link {{ Request::is('pacientes*') ? 'active' : '' }}">
        <p>Pacientes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('usuarios.index') }}"
       class="nav-link {{ Request::is('usuarios*') ? 'active' : '' }}">
        <p>Usuarios</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('vuedoctor.index') }}"
       class="nav-link {{ Request::is('vuedoctor*') ? 'active' : '' }}">
        <p>Vue Doctor</p>
    </a>
</li>


