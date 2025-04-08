<?php

namespace Database\Factories\Karyawan;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Karyawan\Staff>
 */
class StaffFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode' => 'STF' . $this->faker->unique()->randomNumber(5),
            'nama_staff' => $this->faker->name,
            'jabatan' => $this->faker->jobTitle,
            'alamat' => $this->faker->address(),
            'no_telp' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail(),
        ];
    }
}
