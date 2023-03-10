<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // empty roles table
        Role::factory(1)->create([
            'name' => 'admin',
        ]);
        Role::factory(1)->create([
            'name' => 'employee',
        ]);
    }
}
