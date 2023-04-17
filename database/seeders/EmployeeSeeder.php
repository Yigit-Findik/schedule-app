<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'employee',
            'username' => 'employee',
            'email' => 'employee@employee.nl',
            'password' => bcrypt('password'),
            'role_id' => 2,
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'employee2',
            'username' => 'employee2',
            'email' => 'employee2@employee2.nl',
            'password' => bcrypt('password'),
            'role_id' => 2,
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
