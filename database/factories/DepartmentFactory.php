<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'name' => $this->faker->company . ' Department',
            'department_head' => $this->faker->name,
            'description' => $this->faker->sentence(10),
            'is_active' => $this->faker->boolean(90),
            'created_by' => $this->faker->name,
        ];
    }
}
