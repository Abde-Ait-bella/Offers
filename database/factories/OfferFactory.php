<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraph(4),
            'location' => $this->faker->city(),
            'company_name' => $this->faker->company(),
            'salary' => $this->faker->optional()->randomFloat(2, 3000, 15000), // Nullable salaire
            'job_type' => $this->faker->randomElement(['full-time', 'part-time', 'contract', 'freelance', 'internship']),
            'deadline' => $this->faker->optional()->dateTimeBetween('+1 week', '+6 months')?->format('Y-m-d'),
            'is_active' => $this->faker->boolean(90), // 90% des jobs sont actifs
            'recruteur_id' => User::factory(), // Associe un job à un utilisateur
        ];
    }
}
