<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $service_name = $this->faker->unique()->word($nb = 4, $asText = true);
        $slug = Str::slug($service_name) . "-";
        $imageName = 'service' . '_' . $this->faker->unique()->numberBetween(1, 20) . '.jpg';
        return [
            'name' => $service_name,
            'slug' => $slug,
            'tagline' => $this->faker->text(20),
            'description' => $this->faker->text(500),
            'service_category_id' => $this->faker->numberBetween(1, 14),
            'price' => $this->faker->numberBetween(300, 1000),
            'image' => $imageName,
            'thumbnail' => $imageName,
            'inclusion' => $this->faker->text(20) . '|' . $this->faker->text(20) . '|' . $this->faker->text(20) . '|' . $this->faker->text(20) . '|' . $this->faker->text(20),
            'exclusion' => $this->faker->text(20) . '|' . $this->faker->text(20) . '|' . $this->faker->text(20) . '|' . $this->faker->text(20) . '|' . $this->faker->text(20),
        ];
    }
}
