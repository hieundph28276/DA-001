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
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'brand'=>$this->faker->brand(),
            'description'=>$this->faker->description(),
            'price'=>$this->faker->price(),
            'quantity'=>$this->faker->quantity(),
            'image'=>$this->faker->image(),
        ];
    }
}
