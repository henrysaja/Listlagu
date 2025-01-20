<?php

namespace Database\Factories;

use App\Models\Lagu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lagu>
 */
class LaguFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }
    public function run(): void
    {
        Lagu::factory()->count(10)->create();
    }
}
