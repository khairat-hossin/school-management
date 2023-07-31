<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Using Factory
        \App\Models\User::factory(10)->create();
        Post::factory(15)->create();

        Student::factory(10)->create();

        //Using Seeder
        $this->call([
            SubjectSeeder::class
        ]);

        $this->call([
            ClassSeeder::class
        ]);
    }
}
