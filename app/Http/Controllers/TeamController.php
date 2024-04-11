<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function generateTeams(Request $request)
    {
        // Obtener el número mínimo y máximo de participantes por equipo
        $minParticipants = $request->input('minParticipants');
        $maxParticipants = $request->input('maxParticipants');

        // Obtener los usuarios que cumplen con los criterios requeridos
        $users = User::whereHas('knowledges', function ($query) {
            $query->where('level_id', 1) // Senior en back
                  ->whereHas('stack', function ($query) {
                      $query->where('id', 2); // Stack número 2 (backend)
                  });
        })->get();

        // Lógica para distribuir los usuarios en equipos según los criterios específicos
        $teams = $this->assignUsersToTeams($users, $minParticipants, $maxParticipants);

        // Devolver los equipos en formato JSON
        return response()->json(['teams' => $teams]);
    }

    // Método para asignar usuarios a equipos (implementación depende de tu lógica específica)
    private function assignUsersToTeams($users, $minParticipants, $maxParticipants)
    {
        // Implementa la lógica para asignar usuarios a equipos aquí
    }
}

