<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('subjects')->insert([
         /* ['id' => 1, 'name' => 'Numerical Ability', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 2, 'name' => 'Analytical Ability',  'created_at' => now(), 'updated_at' => now()],
          ['id' => 3, 'name' => 'General Information', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 4, 'name' => 'Verbal Ability', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 5, 'name' => 'Clerical Ability', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 6, 'name' => 'Professional Education', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 7, 'name' => 'General Education', 'created_at' => now(), 'updated_at' => now()], 
          ['id' => 8, 'name' => 'Specialized Subject: Early Childhood Education', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 9, 'name' => 'Specialized Subject: Special Needs Education', 'created_at' => now(), 'updated_at' => now()], 
          ['id' => 10, 'name' => 'Specialized Subject: English', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 11, 'name' => 'Specialized Subject: Filipino', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 12, 'name' => 'Specialized Subject: Mathematics', 'created_at' => now(), 'updated_at' => now()],   
          ['id' => 13, 'name' => 'Specialized Subject: Physical Science', 'created_at' => now(), 'updated_at' => now()], 
          ['id' => 14, 'name' => 'Specialized Subject: Social Studies', 'created_at' => now(), 'updated_at' => now()],           
          ['id' => 15, 'name' => 'Specialized Subject: Values Education', 'created_at' => now(), 'updated_at' => now()],  
          ['id' => 16, 'name' => 'Specialized Subject: Technology and Livelihood Education', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 17, 'name' => 'Specialized Subject: Technical - Vocational Teacher Education', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 18, 'name' => 'Specialized Subject: Physical Education', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 19, 'name' => 'Specialized Subject: Culture and Arts Education', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 20, 'name' => 'Specialized Subject: Biological Science', 'created_at' => now(), 'updated_at' => now()], 
          ['id' => 21, 'name' => 'Criminal Jurisprudence and Procedure', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 22, 'name' => 'Law Enforcement Administration', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 23, 'name' => 'Crime Detection, Investigation & Prevention', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 24, 'name' => 'Criminalistics', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 25, 'name' => 'Correctional Administration', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 26, 'name' => 'Criminal Sociology, Ethics and Human Relations', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 27, 'name' => 'Obstetrics & Gynecology', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 28, 'name' => 'Fundamentals of Health Care', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 29, 'name' => 'Infant Care & Feeding', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 30, 'name' => 'Primary Health Care', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 31, 'name' => 'Professional Growth & Development', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 32, 'name' => 'Clinical Chemistry', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 33, 'name' => 'Microbiology & Parasitology', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 34, 'name' => 'Hematology', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 35, 'name' => 'Blood Banking & Serology', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 36, 'name' => 'Clinical Microscopy', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 37, 'name' => 'Histopathologic Techniques & MT Laws', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 38, 'name' => 'Applied Mathematics, Surveying & Transportation Engineering', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 39, 'name' => 'Hydraulics & Geotechnical Engineering', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 40, 'name' => 'Structural Engineering & Construction', 'created_at' => now(), 'updated_at' => now()],*/
          ['id' => 41, 'name' => 'General Ability', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 42, 'name' => 'Fire Suppression', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 43, 'name' => 'Fire Safety & Prevention', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 44, 'name' => 'Fire Investigation', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 45, 'name' => 'Administrative Matters', 'created_at' => now(), 'updated_at' => now()],
          // …add more as needed…
        ]);
    }
}
