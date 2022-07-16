@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col s10 offset-s1">

        <h5>REGISTRO DE PERSONAL</h5>

        <form action="{{ route('personal.store') }}" method="post">
            @csrf

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                            <input placeholder="Placeholder" id="first_name" type="text" class="validate" name="ci">
                            <label for="first_name">CI</label>
                        </div>
                        <div class="input-field col s4">
                            <input placeholder="Placeholder" id="first_name" type="text" class="validate" name="nombres">
                            <label for="first_name">NOMBRE</label>
                        </div>
                        <div class="input-field col s4">
                            <input placeholder="Placeholder" id="first_name" type="text" class="validate" name="celular">
                            <label for="first_name">CELULAR</label>
                        </div>
                        <div class="input-field col s4">
                            <input placeholder="Placeholder" id="first_name" type="text" class="validate" name="direccion">
                            <label for="first_name">DIRECCION</label>
                        </div>
                        <div class="input-field col s4">
                            <input placeholder="Placeholder" id="first_name" type="text" class="validate" name="fecha_nac">
                            <label for="first_name">FECHA NAC</label>
                        </div>
                    </div>
                </form>

                <button class="btn" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection
