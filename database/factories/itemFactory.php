<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class itemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'TenHang'=>$this->faker->name(),
            'DonViTinh'=>$this->faker->name(),
            'SoLuongNhap'=>$this->faker->randomNumber(),
            'GiaNhap'=>$this->faker->randomNumber(),
            'GiaBan'=>$this->faker->randomNumber()
        ];
    }
}
