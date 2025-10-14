<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        [
            'name' => 'Fiksi',
            'description' => 'Kategori cerita yang dibuat berdasarkan khayalan pengarang.',
        ],
        [
            'name' => 'Non-Fiksi',
            'description' => 'Genre tulisan yang berdasarkan fakta, peristiwa nyata, atau tokoh nyata, dengan tujuan untuk menyajikan informasi akurat kepada pembaca.',
        ],
        [
            'name' => 'Fiksi Sains',
            'description' => 'Genre yang mengeksplorasi ide-ide spekulatif berdasarkan sains dan teknologi imajiner maupun nyata.',
        ],
        [
            'name' => 'Romansa',
            'description' => 'Genre fiksi yang berfokus pada hubungan cinta romantis antara dua tokoh atau lebih, biasanya dengan fokus pada gairah, keintiman, dan ikatan emosional.',
        ],
        [
            'name' => 'Komedi',
            'description' => 'Jenis karya seni yang bertujuan untuk menghibur dan menimbulkan tawa melalui kelucuan.',
        ]
        ];

        public function getGenres() {
            return $this->genres;
        }
}
