<?php

namespace Database\Seeders;

use App\Models\Categori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categori::create([
            'name' => 'Informasi',
            'status' => 1
        ]);

        Categori::create([
            'name' => 'Kerjasama',
            'status' => 1
        ]);

        Categori::create([
            'name' => 'Prestasi',
            'status' => 1
        ]);
    }
}
