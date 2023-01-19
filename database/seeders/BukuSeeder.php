<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Buku::create([
            'judul' => 'Garis Waktu',
            'slug' => Str::slug('garis waktu'),
            'sampul' => 'buku/garis_waktu.jpg',
            'penulis' => 'fiersa besari',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'Layangan Putus',
            'slug' => Str::slug('layangan putus'),
            'sampul' => 'buku/Layanganputus.jpg',
            'penulis' => 'Mommy Asfs',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'One Piece',
            'slug' => Str::slug('onepiece'),
            'sampul' => 'buku/komik_one_piece.jpg',
            'penulis' => 'Eichiro Oda',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'Nalar Tasawuf',
            'slug' => Str::slug('nalar tasawuf'),
            'sampul' => 'buku/nalar_tasawuf.jpg',
            'penulis' => 'Istania Widayanti',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 7,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'Sejarah Dunia',
            'slug' => Str::slug('sejarah dunia'),
            'sampul' => 'buku/sejarah_dunia.jpg',
            'penulis' => 'Jonathan Black',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'naruto volume 72',
            'slug' => Str::slug('naruto-volume-72'),
            'sampul' => 'buku/naruto_vol_72.webp',
            'penulis' => 'Masashi Kishimoto',
            'penerbit_id' => 3,
            'kategori_id' => 6,
            'rak_id' => 12,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'R.A. Kartini',
            'slug' => Str::slug('r.a. kartini'),
            'sampul' => 'buku/ra_kartini.jpg',
            'penulis' => 'Imon Rosyadi',
            'penerbit_id' => 3,
            'kategori_id' => 6,
            'rak_id' => 13,
            'stok' => 10
        ]);
    }
}
