<?php

namespace Database\Factories;

use App\Models\Shifts;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShiftsFactory extends Factory
{
    protected $model = Shifts::class;

    public function definition(): array
    {
        return [
            //create 1 shift for each user
            'user_id' => $this->faker->numberBetween(1, 10),
            'date' => $this->faker->date(),
            'start_time' => $this->faker->time(),
            'end_time' => $this->faker->time()
        ];
    }
}
