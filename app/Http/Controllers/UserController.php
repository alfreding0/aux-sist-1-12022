<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));    
    }

    public function create()
    {
        $personales = Personal::all();
        return view('user.create', compact('personales'));
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->nombre;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->personal_id = $request->personal_id;
        $user->save();

        return redirect()->route('user.index');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $personales = Personal::all();
        return view('user.edit', compact('user', 'personales'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->nombre;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->personal_id = $request->personal_id;
        $user->save();

        return redirect()->route('usuario.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('usuario.index');
    }

}
