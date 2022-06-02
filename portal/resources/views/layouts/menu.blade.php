<li class="side-menus {{ Request::is('asd') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-home"></i><span>Home</span>
    </a>
    <a class="nav-link" href="/alumnos">
        <i class=" fas fa-user-graduate"></i><span>Alumnos</span>
    </a>
    <a class="nav-link" href="/empresas">
        <i class=" fas fa-building"></i><span>Empresas</span>
    </a>
    <a class="nav-link" href="/cursos">
        <i class=" fas fa-chalkboard "></i><span>Grupos</span>
    </a>
    <a class="nav-link" href="/certificaciones">
        @can('ver-certificado')
        <i class=" fas  fa-certificate"></i><span>Cursos</span>
        @endcan
    </a>
    <a class="nav-link" href="/usuarios">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    <a class="nav-link" href="/roles">
        @can('ver-rol')
        <i class=" fas fa-user-shield"></i><span>Roles</span>
        @endcan
    </a>
</li>