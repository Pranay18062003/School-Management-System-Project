<?php

namespace Database\Seeders;

use App\Models\Subject;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                $now = Carbon::now();

        Subject::insert([
            ['id'=>1, 'name' => 'English', 'created_at' => $now, 'updated_at' => $now],
            ['id'=>2, 'name' => 'Mathematics', 'created_at' => $now, 'updated_at' => $now],
            ['id'=>3, 'name' => 'Science', 'created_at' => $now, 'updated_at' => $now],
            ['id'=>4, 'name' => 'History', 'created_at' => $now, 'updated_at' => $now],
            ['id'=>5, 'name' => 'Geography', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
