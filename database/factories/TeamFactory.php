<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

            return [
                'name' => $this->faker->name,
                'user_id' => User::all()->random()->id,
            ];
    
    }
    public function numbered(int $position)
    {
        return $this->state(function (array $attributes) use ($position) {
            return [
                'name' => 'team ' . $position,
            ];
        });
    }
}

