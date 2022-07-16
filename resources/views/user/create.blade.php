@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col s12 m6 offset-m3">
        <form method="POST" action="{{ route('usuario.store') }}">
            @csrf
            <div class="card teal lighten-4">
                <div class="card-content black-text">
                    <span class="card-title">Crear usuario</span>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="last_name" type="text" class="validate" name="nombre">
                            <label for="last_name">Nombre de Usuario</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="last_name" type="text" class="validate" name="email">
                            <label for="last_name">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="last_name" type="password" class="validate" name="password">
                            <label for="last_name">Contraseña</label>
                        </div>
                        <div class="input-field col s12">
                            <select name="personal_id">
                                <option value="" disabled selected>Seleccione un personal:</option>
                                @foreach ($personales as $personal)
                                    <option value="{{ $personal->id }}">{{ $personal->nombre }}</option>
                                @endforeach
                            </select>
                            <label>Personales</label>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <button type="submit" class="btn blue">
                        Guardar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
