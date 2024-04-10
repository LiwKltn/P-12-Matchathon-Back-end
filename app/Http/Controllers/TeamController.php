<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        return view ('home');
    }

    public function createTeams(Request $request)
    {
        $minParticipants = 7;
        $maxParticipants = 9;

        $users = User::all();

        $teams = $this->assignUsersToTeams($users, $minParticipants, $maxParticipants);

        return view('teams', compact('teams'));
    }

    private function assignUsersToTeams($users, $minParticipants, $maxParticipants)
    {
        $teams = [];
        $assignedUsers = [];

        foreach ($users as $user) {
            if (count($assignedUsers) >= count($users)) {
                break;
            }

            $team = [];
           
        }

        return $teams;
    }
}


            // Lógica para asignar usuarios a equipos basada en los conocimientos o habilidades

            // Por ejemplo, podrías usar las relaciones definidas en los modelos para obtener los conocimientos de un usuario
            //$userKnowledges = $user->knowledges;

            // Lógica para construir el equipo de acuerdo a los conocimientos
            // Aquí puedes adaptar la lógica del controlador original según tus necesidades

            // Agregar el usuario al equipo
            //$team[] = $user;
            //$assignedUsers[] = $user->id;

            // Agregar el equipo a la lista de equipos
            //$teams[] = $team;
        

        //return $teams;
    
