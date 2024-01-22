<?php

namespace Database\Factories;

use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // àquoisertcetteligne ?
    protected $model = Review::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Crée un utilisateur lié à la critique
            'item_id' => $this->faker->numberBetween(1, 100), // Remplacez par la logique appropriée pour l'ID de l'élément
            'item_type' => $this->faker->randomElement(['movies', 'series', 'albums', 'books']),
            'comment' => $this->faker->paragraph,
            'rating' => $this->faker->numberBetween(1, 5),
        ];
    }
}
