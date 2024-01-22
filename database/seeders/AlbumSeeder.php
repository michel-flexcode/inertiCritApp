<?php

namespace Database\Seeders;

use Database\Factories\AlbumFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AlbumFactory::factory()->count(50)->create();
    }
}
