<?php

namespace Database\Seeders;

use App\Models\Knowledge;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class UserKnowledgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users_knowledges')->insert([
            'user_id' => 1,
            'knowledge_id' => 1,
            'level_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
