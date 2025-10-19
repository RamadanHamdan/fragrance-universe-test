<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->numberBetween(1, 1000),
            'brand_id' => $this->faker->numberBetween(1, 1000),
            'name' => fake()->name(),
            'top_notes' => $this->faker->text(),
            'middle_notes' => $this->faker->text(),
            'base_notes' => $this->faker->text(),
            'price' => fake()->text(),
            'category' => $this->faker->text(),
            'size' => $this->faker->text(),
            'image_url' => $this->faker->text(),
            'description' => $this->faker->paragraph(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
