<nav class="navbar nav-extended no-padding">
    <div class="nav-wrapper">
        <a href="{{ route('home') }}" class="brand-logo hide-on-small-only">VENTAS CAMIRI</a>
        <ul id="nav-mobile" class="right">
            <li><a href="#" class="waves-effect dark-primary-color-text" type="submit">Cliente</a></li>
            <li><a href="{{ route('personal.index') }}" class="waves-effect dark-primary-color-text" type="submit">Personal</a></li>
            <li><a href="#" class="waves-effect dark-primary-color-text" type="submit">Cerrar sesión</a></li>
        </ul>
        @yield('breadcrumb')
    </div>
</nav>
