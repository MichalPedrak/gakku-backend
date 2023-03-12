<?php

namespace Database\Factories;

use App\Models\Groups;
use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cards>
 */
class CardsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
//            'group_id' => rand(1,10),
            'title' => Str::random(5),
            'group_id' => Groups::factory()->create(),
            'content' => Str::random(7),
            'content_example' => Str::random(25),
            'definition' => Str::random(7),
            'definition_example' => Str::random(25),
        ];
    }
}
