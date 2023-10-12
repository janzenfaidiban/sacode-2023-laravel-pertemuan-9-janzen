<?php

namespace Database\Seeders;

use App\Models\Developers;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DevelopersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Developers::create(
            [
                'first_name' => 'Samuel',
                'last_name' => 'Bosawer',
                'description' => 'Web Developer and Coding Trainer',
            ]
        );

        Developers::create(
            [
                'first_name' => 'Janzen',
                'last_name' => 'Faidiban',
                'description' => 'Coding Trainer and Computer Literacy Tutor',
            ]
        );

        Developers::create(
            [
                'first_name' => 'Efati',
                'last_name' => 'Isir',
                'description' => 'Computer Ingineering Student',
            ]
        );

    }
}
