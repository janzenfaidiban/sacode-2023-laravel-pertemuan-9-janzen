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
            ]
        );
    }
}
