<?php

namespace Database\Factories;

use App\Models\Tipe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kamar>
 */
class KamarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $abcd = array(
            'A',
            'B',
            'C',
            'D'
        );
        $price = array(
            450000,
            500000,
            650000,
            700000,
            850000,
            950000,
            1200000,
            1500000,
            1750000,
            2000000,
        );
        static $order = 10;
        return [
            'tipe_id' => Tipe::all()->random()->id,
            'status_kamar_id' => '1',
            'nomor' => $order++.$abcd[array_rand($abcd)],
            'kapasitas' => $this->faker->numberBetween(1,12),
            'harga' => $this->faker->randomElement($price),
            'pemandangan' => $this->faker->paragraph(35)
        ];
    }
}
