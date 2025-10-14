<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'name' => 'Tere Liye',
            'photo' => 'tere_liye.jpg',
            'bio' => 'Dikenal sebagai salah satu penulis terkenal Indonesia.',
        ],
        [
            'name' => 'Mark Manson',
            'photo' => 'mark_manson.jpg',
            'bio' => 'Terkenal melalui bukunya yang berjudul Sebuah Seni untuk Bersikap Bodo Amat yang diterjemahkan ke berbagai bahasa.',
        ],
        [
            'name' => 'Jocelyn Suherman',
            'photo' => 'joy.jpg',
            'bio' => 'Seorang penulis novel dan adik dari artis cilik Joshua Suherman.',
        ],
        [
            'name' => 'Sakurajimai',
            'photo' => 'sakurajimai.jpg',
            'bio' => 'Seorang penulis fiksi penggemar yang terkenal di kalangan fans grup KPop Tresure, Teume.',
        ],
        [
            'name' => 'Yourkidlee',
            'photo' => 'yourkidlee.jpg',
            'bio' => 'Seorang penulis yang terkenal di aplikasi Wattpad.',
        ],
    ];

    public function getAuthors() {
        return $this->authors;
    }
}
