<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Fiksi',
            'description' => 'Kategori cerita yang dibuat berdasarkan khayalan pengarang.',
        ]);

        Genre::create([
            'name' => 'Non-Fiksi',
            'description' => 'Genre tulisan yang berdasarkan fakta, peristiwa nyata, atau tokoh nyata, dengan tujuan untuk menyajikan informasi akurat kepada pembaca.',
        ]);

        Genre::create([
            'name' => 'Fiksi Sains',
            'description' => 'Genre yang mengeksplorasi ide-ide spekulatif berdasarkan sains dan teknologi imajiner maupun nyata.',
        ]);

        Genre::create([
            'name' => 'Romansa',
            'description' => 'Genre fiksi yang berfokus pada hubungan cinta romantis antara dua tokoh atau lebih, biasanya dengan fokus pada gairah, keintiman, dan ikatan emosional.',
        ]);

        Genre::create([
            'name' => 'Komedi',
            'description' => 'Jenis karya seni yang bertujuan untuk menghibur dan menimbulkan tawa melalui kelucuan.',
        ]);
    }
}
