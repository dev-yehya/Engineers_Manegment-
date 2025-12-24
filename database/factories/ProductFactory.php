<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'details' => $this->faker->sentence(),
            'cover_image_path' => json_encode([$this->faker->imageUrl(), $this->faker->imageUrl()]), // Simulate multiple image paths
            'price' => $this->faker->numberBetween(1000, 50000), // Price in cents or units
            'rating' => $this->faker->randomFloat(1, 0, 5), // Rating between 0.0 and 5.0
            'user_id' => \App\Models\User::factory(), // Associate with a user
        ];
    }
}
