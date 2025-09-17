<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        User::insert([
            [
                'id' => 1,
                'name' => "Admin Mg Mg",
                'email' => 'admin@mail.com',
                'password' => Hash::make('12345678'),
                'role_id' => 1, // admin
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 2,
                'name' => "Teacher Aye Aye",
                'email' => 'teacher@mail.com',
                'password' => Hash::make('12345678'),
                'role_id' => 2, // teacher
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 3,
                'name' => "Student Ko Ko",
                'email' => 'student@mail.com',
                'password' => Hash::make('12345678'),
                'role_id' => 3, // student
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 4,
                'name' => "Student Ma Ma",
                'email' => 'mama@mail.com',
                'password' => Hash::make('12345678'),
                'role_id' => 3, // student
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 5,
                'name' => "Student Moe Kaung",
                'email' => 'moekaung@mail.com',
                'password' => Hash::make('12345678'),
                'role_id' => 3, // student
                'created_at' => $now,
                'updated_at' => $now
            ],
    
    ]);
    }
}
