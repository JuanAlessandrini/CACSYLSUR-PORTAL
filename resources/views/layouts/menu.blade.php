<li class="side-menus {{ Request::is('asd') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-home"></i><span>Home</span>
    </a>
    @can('ver-alumnos')
    <a class="nav-link" href="/alumnos">
        <i class=" fas fa-user-graduate"></i><span>Alumnos</span>
    </a>
    @endcan
    @can('ver-empresa')
    <a class="nav-link" href="/empresas">
        <i class=" fas fa-building"></i><span>Empresas</span>
    </a>
    @endcan
    @can('ver-grupos')
    <a class="nav-link" href="/cursos">
        <i class=" fas fa-chalkboard "></i><span>Cursada</span>
    </a>
    @endcan
    @can('ver-curso')
    <a class="nav-link" href="/certificaciones">
        <i class=" fas  fa-certificate"></i><span>Cursos</span>
    </a>
    @endcan
    @can('ver-curso')
    <a class="nav-link" href="/calificaciones">
        <i class=" fas  fa-sort-numeric-down"></i><span>Notas</span>
    </a>
    @endcan
    @can('ver-usuarios')
    <a class="nav-link" href="/usuarios">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    @endcan
    @can('ver-rol')
    <a class="nav-link" href="/roles">

        <i class=" fas fa-user-shield"></i><span>Roles</span>

    </a>
    @endcan
</li>