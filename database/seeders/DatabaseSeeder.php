<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            GenderSeeder::class,
            BootcampSeeder::class,
            StackSeeder::class,
            LevelSeeder::class,
            KnowledgeSeeder::class,
            UserSeeder::class,
            UserKnowledgeSeeder::class,
            TeamSeeder::class,
        ]);
    }
}
