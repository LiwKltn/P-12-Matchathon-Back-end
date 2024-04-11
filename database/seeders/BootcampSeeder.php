<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('bootcamps')->insert([
            ['bootcamp' => 'FemCoders Norte', 'created_at' => $now, 'updated_at' => $now],
            ['bootcamp' => 'FemCoders Barcelona', 'created_at' => $now, 'updated_at' => $now],
            ['bootcamp' => 'Arrabal', 'created_at' => $now, 'updated_at' => $now],
            ['bootcamp' => 'Rural', 'created_at' => $now, 'updated_at' => $now],
            ['bootcamp' => 'Gijón', 'created_at' => $now, 'updated_at' => $now],
            ['bootcamp' => 'Madrid', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
