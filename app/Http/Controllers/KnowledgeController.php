<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KnowldgeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function orderByKnowledge ()
    {
        $team = team::orderByKnowledge()

        return view('home', ['team' => $team]);
    }
};
