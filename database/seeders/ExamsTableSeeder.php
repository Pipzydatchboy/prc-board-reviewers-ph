<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  // ← add this

class ExamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('exams')->insert([
           /* ['id' => 1, 'type' => 'Civil Service Exam',            'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'type' => 'Licensure Exam for Teachers',    'created_at' => now(), 'updated_at' => now()], */
            ['id' => 3, 'type' => 'Criminology Licensure Examination',    'created_at' => now(), 'updated_at' => now()],
            // …add more exam types here…
        ]);
    }
}
