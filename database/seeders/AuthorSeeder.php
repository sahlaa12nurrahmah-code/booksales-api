<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Tere Liye',
            'bio' => 'Dikenal sebagai salah satu penulis terkenal Indonesia.',
            'photo' => 'tere_liye.jpg'
        ]);

        Author::create([
            'name' => 'Mark Manson',
            'bio' => 'Terkenal melalui bukunya yang berjudul Sebuah Seni untuk Bersikap Bodo Amat yang diterjemahkan ke berbagai bahasa.',
            'photo' => 'mark_manson.jpg'
        ]);

        Author::create([
            'name' => 'Jocelyn Suherman',
            'bio' => 'Seorang penulis novel dan adik dari artis cilik Joshua Suherman.',
            'photo' => 'jocelyn.jpg'
        ]);

        Author::create([
            'name' => 'Sakurajimai',
            'bio' => 'Seorang penulis fiksi penggemar yang terkenal di kalangan fans grup KPop Tresure, Teume.',
            'photo' => 'sakurajimai.jpg'
        ]);

        Author::create([
            'name' => 'Yourkidlee',
            'bio' => 'Seorang penulis yang terkenal di aplikasi Wattpad.',
            'photo' => 'yourkiddlee.jpg'
        ]);
    }
}
