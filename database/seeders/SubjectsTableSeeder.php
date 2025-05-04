<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('subjects')->insert([
          ['id' => 1, 'name' => 'Numerical Ability', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 2, 'name' => 'Analytical Ability',  'created_at' => now(), 'updated_at' => now()],
          ['id' => 3, 'name' => 'General Information', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 4, 'name' => 'Verbal Ability', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 5, 'name' => 'Clerical Ability', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 6, 'name' => 'Professional Education', 'created_at' => now(), 'updated_at' => now()],
          ['id' => 7, 'name' => 'General Education', 'created_at' => now(), 'updated_at' => now()],
          // …add more as needed…
        ]);
    }
}
