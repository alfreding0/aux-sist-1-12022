<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
   
    // listar todos los registros
    public function index()
    {
        $personales = Personal::all();  //SELECT * FROM personal;
        return view('personal.index', compact('personales'));
    }

    // crear un nuevo registro en el formulario
    public function create()
    {
        return view('personal.create');
    }

    // guardar un nuevo registro en la base de datos
    public function store(Request $request)
    {
        $personal = new Personal;
        $personal->ci = $request->input('ci');
        $personal->nombre = $request->input('nombres');
        $personal->celular = $request->input('celular');
        $personal->direccion = $request->input('direccion');
        $personal->fecha_nac = $request->input('fecha_nac');

        $personal->save(); //INSERT INTO personal (ci, nombre, celular, direccion, fecha_nac) VALUES (...);

        return redirect()->route('personal.index');
    }

    // mostrar un registro en especifico
    public function show($id)
    {
        $personal = Personal::findOrFail($id);
        return view('personal.show', compact('personal'));
    }

    // mostrar el formulario para editar un registro
    public function edit($id)
    {
        $personal = Personal::findOrFail($id);
        return view('personal.edit', compact('personal'));
    }

    // actualizar un registro en la base de datos
    public function update(Request $request, $id)
    {
        $personal = Personal::findOrFail($id);
        $personal->ci = $request->input('ci');
        $personal->nombre = $request->input('nombres');
        $personal->celular = $request->input('celular');
        $personal->direccion = $request->input('direccion');
        $personal->fecha_nac = $request->input('fecha_nac');

        $personal->save();

        return redirect()->route('personal.index');
    }

    // eliminar un registro en la base de datos
    public function destroy($id)
    {
        $personal = Personal::findOrFail($id);
        $personal->delete();

        return redirect()->route('personal.index');
    }
}
