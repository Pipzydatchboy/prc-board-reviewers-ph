<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // <-- your seeder call goes here
        $this->call(\Database\Seeders\CSE\GeneralInformation\GeneralInformationPart1Seeder::class);
        $this->call(\Database\Seeders\SubjectsTableSeeder::class);
        $this->call(\Database\Seeders\ExamsTableSeeder::class);



        // any other seeders or factories
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
