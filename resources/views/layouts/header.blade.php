<nav class="navbar nav-extended no-padding teal lighten-1">

    <a href="#" data-target="slide-out" class="sidenav-trigger left show-on-medium-and-up"><i class="material-icons">menu</i></a>
    <div class="nav-wrapper">
        
        {{-- <a href="{{ route('home') }}" class="brand-logo hide-on-small-only">VENTAS CAMIRI</a> --}}
        <ul id="nav-mobile" class="right">
            
            <li><a href="{{ route('usuario.index') }}" class="waves-effect dark-primary-color-text" type="submit">Usuario</a></li>
            <li><a href="#" class="waves-effect dark-primary-color-text" type="submit">Cliente</a></li>
            <li><a href="{{ route('personal.index') }}" class="waves-effect dark-primary-color-text" type="submit">Personal</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="waves-effect dark-primary-color-text red lighten-3" type="submit"><i class="material-icons right">exit_to_app</i>Cerrar sesión</a></li>
            <form style="height: 0;" id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </ul>
        @yield('breadcrumb')
        
    </div>
</nav>

<ul id="slide-out" class="sidenav">
    <li>
        <div class="user-view">
            <div class="background">
                <img src="https://images.pexels.com/photos/5444431/pexels-photo-5444431.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            </div>
            <a href="#user"><img class="circle" src="https://images.pexels.com/photos/3585095/pexels-photo-3585095.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"></a>
            <a href="#name"><span class="black-text name">John Doe</span></a>
            <a href="#email"><span class="black-text email">jdandturk@gmail.com</span></a>
        </div>
    </li>
    <li><a class="waves-effect" href="{{ route('home') }}"><i class="material-icons">home</i>Inicio</a></li>
    <li><a class="waves-effect" href="{{ route('personal.index') }}"><i class="material-icons">group</i>Gestionar Personal</a></li>
    <li><a class="waves-effect" href="{{ route('usuario.index') }}"><i class="material-icons">face</i>Gestionar Usuario</a></li>
</ul>

