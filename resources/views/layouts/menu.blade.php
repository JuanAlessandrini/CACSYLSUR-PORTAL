<li class="side-menus {{ Request::is('roles') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-home"></i><span>Home</span>
    </a>
    <a class="nav-link" href="/usuarios">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    <a class="nav-link" href="/empresas">
        <i class=" fas fa-building"></i><span>Empresas</span>
    </a>
    <a class="nav-link" href="/certificaciones">
        @can('ver-certificado')
        <i class=" fas  fa-certificate"></i><span>Certificaciones</span>
        @endcan
    </a>
    <a class="nav-link" href="/roles">
        @can('ver-rol')
        <i class=" fas fa-user-shield"></i><span>Roles</span>
        @endcan
    </a>
</li>