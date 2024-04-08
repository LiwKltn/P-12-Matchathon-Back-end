<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('genders')->insert([
            ['gender' => 'Masculino', 'created_at' => $now, 'updated_at' => $now],
            ['gender' => 'Femenino', 'created_at' => $now, 'updated_at' => $now],
            ['gender' => 'Otro', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
