<?php

namespace Database\Seeders;

use App\Models\Shift;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shift::factory(1)->create([
            'user_id' => 1,
            'name' => 'Shift 1',
            'date' => '2023-03-23',
            'start_time' => '08:00',
            'end_time' => '16:00',
        ]);

        Shift::factory(1)->create([
            'user_id' => 3,
            'name' => 'Shift 2',
            'date' => '2023-03-23',
            'start_time' => '08:00',
            'end_time' => '16:00',
        ]);

        Shift::factory(1)->create([
        'user_id' => 1,
        'name' => 'Shift 3',
        'date' => '2023-04-23',
        'start_time' => '08:00',
        'end_time' => '16:00',
    ]);
    }
}
