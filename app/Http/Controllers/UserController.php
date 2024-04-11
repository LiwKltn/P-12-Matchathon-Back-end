<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
{
    $users = User::all();
    return response()->json(['users' => $users]);
}

public function show($id)
{
    $user = User::with('knowledgeUser')->find($id);

    if (!$user) {
        return response()->json(['error' => 'User not found'], 404);
    }

    return response()->json(['user' => $user]);
}

public function store(Request $request)
{
    // Validar los datos recibidos
    $request->validate([
        'name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'bootcamp_id' => 'required|exists:bootcamps,id',
    ]);

    // Crear un nuevo usuario con los datos proporcionados
    $user = User::create($request->only(['name', 'last_name', 'email', 'bootcamp_id']));

    // Devolver una respuesta con el usuario creado
    return response()->json(['user' => $user], 201);
}

public function update(Request $request, $id)
{
    // Encontrar el usuario por su ID
    $user = User::find($id);

    // Verificar si el usuario existe
    if (!$user) {
        return response()->json(['error' => 'User not found'], 404);
    }

    // Validar los datos recibidos
    $request->validate([
        'name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        'bootcamp_id' => 'required|exists:bootcamps,id',
    ]);

    // Actualizar los datos del usuario con los datos proporcionados
    $user->update($request->only(['name', 'last_name', 'email', 'bootcamp_id']));

    // Devolver una respuesta con el usuario actualizado
    return response()->json(['user' => $user]);
}



}
