<?php

namespace Database\Seeders;

use App\Models\Knowledge;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserKnowledgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener todos los usuarios y conocimientos
        $users = User::all();
        $knowledges = Knowledge::all();
        $now = Carbon::now();

        // Iterar sobre cada usuario
        foreach ($users as $user) {
            // Seleccionar un número aleatorio de conocimientos para este usuario
            $randomKnowledges = $knowledges->random(rand(1, min(3, $knowledges->count())));

            // Adjuntar los conocimientos al usuario si aún no están asociados
            foreach ($randomKnowledges as $knowledge) {
                // Verificar si ya está asociado
                if (!$user->knowledgeUser()->where('knowledge_id', $knowledge->id)->exists()) {
                    // Adjuntar el conocimiento al usuario
                    $user->knowledgeUser()->attach($knowledge->id, ['created_at' => $now, 'updated_at' => $now]);
                }
            }
        }
    }
}
