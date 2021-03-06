<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->sentence(),
            'slug' => $this->faker->unique()->slug(),
            'category_id' => Category::factory(),
            'price' => 10,
            'description' => $this->faker->text(),
            'condition' => $this->faker->word(),
        ];
    }
}
