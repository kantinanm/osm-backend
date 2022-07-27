<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UniversityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'univ_id' => $this->faker->numerify('#####'),
            'univ_name_th' => $this->faker->streetName(),
            'univ_name_eng' => $this->faker->cityPrefix(),
            'univ_master' => $this->faker->numerify('#####'),
            'province_id' => $this->faker->numberBetween(10, 97),
            'univ_type_name' => $this->faker->numberBetween(100, 900),
            'univ_group_name' => $this->faker->jobTitle(),
            'univ_group_id' => $this->faker->numberBetween(1, 20),
            'institute_type_id' =>$this->faker->numberBetween(1, 3),
            'institute_type_name' => $this->faker->state(),
        ];
    }
}
