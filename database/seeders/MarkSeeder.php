<?php

namespace Database\Seeders;

use App\Models\Exam;
use App\Models\Mark;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = User::where('role_id', 3)->get();

        // Get all exams
        $exams = Exam::all();

        foreach ($students as $student) {
            foreach ($exams as $exam) {
                Mark::create([
                    'student_id' => $student->id,
                    'exam_id' => $exam->id,
                    'marks_obtained' => rand(40, 100),
                ]);
            }
        }
    }
}
