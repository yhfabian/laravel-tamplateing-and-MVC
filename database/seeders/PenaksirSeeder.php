<?php

namespace Database\Seeders;

use Database\Factories\PenaksirFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penaksir;

class PenaksirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penaksir::factory(15)->create();
    }
}
