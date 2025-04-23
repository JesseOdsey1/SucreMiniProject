<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employees>
 */
class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'FirstName' => fake()->firstName(),
            'LastName' => fake()->lastName(),
            'Gender' =>  fake()->randomElement(['Male', 'Female']),
            'Birthday' => fake()->dateTimeBetween($startDate = '-80 years', $endDate='-15 years')->format('y-m-d'),
            'MonthlySalary' => 100*(fake()->numberBetween(150,2000))
        ];
    }
}
