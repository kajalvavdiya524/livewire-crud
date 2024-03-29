<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentfactoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "firstname" => $this->faker->firstName,
            "lastname" => $this->faker->lastLame,
            "phone" => $this->faker->phoneNumber,
            "email" => $this->faker->email,
        ];
    }
}
