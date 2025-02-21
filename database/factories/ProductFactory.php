<?php

namespace Database\Factories;
use Faker\Provider\FakeCar;
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
    public function definition(): array
    {
        $this->faker->addProvider(new FakeCar($this->faker));
        $vehicle = $this->faker->vehicleArray();
        return [
            'name' => $vehicle['brand'] . ' ' . $vehicle['model'],
            'description' => $this->faker->text,
            'price' => $this->faker->numberBetween(10000, 100000),
        ];
    }
}
