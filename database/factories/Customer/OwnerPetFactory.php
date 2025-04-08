<?php

namespace Database\Factories\Customer;

use Illuminate\Database\Eloquent\Factories\Factory;

class OwnerPetFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode' => 'OWNPET' . fake()->unique()->randomNumber(5),
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address,
            'no_telp' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
