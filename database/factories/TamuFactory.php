<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tamu>
 */
class TamuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'alamat' => $this->faker->address,
            'jenis_kelamin' => $this->faker->randomElement(['Male', 'Female']),
            'pekerjaan' => $this->faker->jobTitle,
            'tanggal_lahir' => $this->faker->date(),
            'user_id' => User::factory()->isTamu()
        ];
    }
}
