<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('levels')->insert([
            ['level' => 'Senior', 'created_at' => $now, 'updated_at' => $now],
            ['level' => 'Mid', 'created_at' => $now, 'updated_at' => $now],
            ['level' => 'Junior', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
