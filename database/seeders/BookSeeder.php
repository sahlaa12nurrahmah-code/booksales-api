<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Pulang',
            'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya.',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => '1',
            'author_id' => '1',
        ]);

        Book::create([
            'title' => 'Sebuah Seni untuk Bersikap Bodo Amat',
            'description' => 'Buku yang membahas tentang kehidupan dan filosopi hidup seseorang.',
            'price' => 25000,
            'stock' => 15,
            'cover_photo' => 'sebuah_seni.jpg',
            'genre_id' => '2',
            'author_id' => '2',
        ]);

        Book::create([
            'title' => 'Calon Besan',
            'description' => 'Sebuah rencana pembatalan pernikahan orang tua mereka oleh Jian dan Giani.',
            'price' => 90000,
            'stock' => 15,
            'cover_photo' => 'calon_besan.jpg',
            'genre_id' => '3',
            'author_id' => '3',
        ]);

        Book::create([
            'title' => 'K: A Man of Letters',
            'description' => 'Berawal dari Raisa yang tertekanan atas persaingan akademis dan kemudian menemukan Khail, seorang mahasiswa kedokteran hewan.',
            'price' => 90000,
            'stock' => 15,
            'cover_photo' => 'kamol.jpg',
            'genre_id' => '4',
            'author_id' => '4',
        ]);

        Book::create([
            'title' => 'Einstein',
            'description' => 'Kisah Alea Maynanda, siswa pindahan kelas 11 IPA 1, yang bersama teman-teman sekelasnya yang dianggap "jenius" oleh orang lain.',
            'price' => 99000,
            'stock' => 15,
            'cover_photo' => 'einstein.jpg',
            'genre_id' => '5',
            'author_id' => '5',
        ]);
    }
}
