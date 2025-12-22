<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $student = User::factory()->create([
            'name' => 'student',
            'password' => Hash::make('123'),
            'email' => 'student@gmail.com',
        ]);

        $mentor = User::factory()->create([
            'name' => 'mentor',
            'password' => Hash::make('123'),
            'email' => 'mentor@gmail.com',
        ]);

        $student->assignRole('student');
        $mentor->assignRole('mentor');


    }
}
