<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Student::class;

    public function definition()
    {
        return [
            'student_id' =>  "6336".$this->faker->randomDigit().$this->faker->randomDigit().$this->faker->randomDigit().$this->faker->randomDigit(),
            'fullname' => $this->faker->unique()->firstNameMale().' '.$this->faker->unique()->lastName(),
            'gpa' =>  $this->faker->randomFloat(2,1,3),
            'smiley' => $this->faker->state(),
            'class' => $this->faker->jobTitle(), //$this->faker->text
        ];
    }
}
