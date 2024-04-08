<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KnowledgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('knowledges')->insert([
            ['stacks_id' => 1, 'tecnology' => 'Angular', 'created_at' => $now, 'updated_at' => $now],
            ['stacks_id' => 1, 'tecnology' => 'React', 'created_at' => $now, 'updated_at' => $now],
            ['stacks_id' => 1, 'tecnology' => 'Vue', 'created_at' => $now, 'updated_at' => $now],
            ['stacks_id' => 2, 'tecnology' => 'Laravel', 'created_at' => $now, 'updated_at' => $now],
            ['stacks_id' => 2, 'tecnology' => 'Spring', 'created_at' => $now, 'updated_at' => $now],
            ['stacks_id' => 2, 'tecnology' => 'NestJs', 'created_at' => $now, 'updated_at' => $now],
            ['stacks_id' => 3, 'tecnology' => 'Git y Github', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
