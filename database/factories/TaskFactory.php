<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Task;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Task::class;
    public function definition()
    {
        return [
            'title' => $this->faker->realText(rand(15,40)),
            'is_done' => $this->faker->boolean(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
