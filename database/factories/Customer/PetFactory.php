<?php

namespace Database\Factories\Customer;

use App\Models\Customer\OwnerPet;
use Illuminate\Database\Eloquent\Factories\Factory;


class PetFactory extends Factory
{
    public function definition(): array
    {
        return [
            'owner_pet_id' => OwnerPet::factory(),
            'kode' => 'PET' . $this->faker->unique()->randomNumber(5),
            'nama_pet' => $this->faker->firstName(),
            'jenis_pet' => $this->faker->randomElement(['Anjing', 'Kucing', 'Burung', 'Ikan', 'Reptil']),
            'ras_pet' => $this->faker->randomElement(['Persia', 'Kampung', 'Bulldog', 'Golden Retriever', 'Siamese']),
            'birth_date' => $this->faker->date(),
            'umur' => $this->faker->numberBetween(1, 20),
            'speksifikasi' => $this->faker->colorName(),
        ];
    }
}
