@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col s12 m6 offset-m3">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="card teal lighten-4">
                <div class="card-content black-text">
                    <span class="card-title">Iniciar sesion</span>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate" name="email">
                            <label for="last_name">Email</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="password" class="validate" name="password">
                            <label for="last_name">Contraseña</label>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <button type="submit" class="btn blue">
                        Ingresar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
