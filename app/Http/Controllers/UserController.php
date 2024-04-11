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



}
