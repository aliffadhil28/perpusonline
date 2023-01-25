<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(2, true),
            'author' => $this->faker->name(),
            'publisher' => $this->faker->userName(),
            'year' => $this->faker->year(),
            'edition' => $this->faker->randomDigit(),
            'quantity' => $this->faker->randomDigit(),
            'category' => $this->faker->word(),
            'cover' => $this->faker->imageUrl(640, 480, 'books', true),
        ];
    }
}
