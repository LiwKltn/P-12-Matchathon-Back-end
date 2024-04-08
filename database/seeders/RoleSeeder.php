<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('roles')->insert([
            ['role' => 'admin', 'created_at' => $now, 'updated_at' => $now],
            ['role' => 'coder', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
