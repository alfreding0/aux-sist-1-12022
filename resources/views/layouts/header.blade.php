<nav class="navbar nav-extended no-padding teal lighten-1">
    
    <div class="nav-wrapper">
        <a href="{{ route('home') }}" class="brand-logo hide-on-small-only">VENTAS CAMIRI</a>
        <ul id="nav-mobile" class="right">
            <li><a href="{{ route('usuario.index') }}" class="waves-effect dark-primary-color-text" type="submit">Usuario</a></li>
            <li><a href="#" class="waves-effect dark-primary-color-text" type="submit">Cliente</a></li>
            <li><a href="{{ route('personal.index') }}" class="waves-effect dark-primary-color-text" type="submit">Personal</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="waves-effect dark-primary-color-text" type="submit">Cerrar sesión</a></li>
            <form style="height: 0;" id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </ul>
        @yield('breadcrumb')

        
    </div>
</nav>
