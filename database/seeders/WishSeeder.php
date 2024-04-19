<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wish;

class WishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Wish::factory(10)->create();
    }
}
