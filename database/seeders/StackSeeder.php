<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('stacks')->insert([
            ['stack' => 'Front-End', 'created_at' => $now, 'updated_at' => $now],
            ['stack' => 'Front-Backend', 'created_at' => $now, 'updated_at' => $now],
            ['stack' => 'Control Versiones', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
