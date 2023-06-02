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
            'judul' => 'Klasifikasi Sinyal Phonocardiogram Menggunakan Short Time Fourier Transform dan Convolutional Neural Network',
            'slug' => Str::slug('Klasifikasi Sinyal Phonocardiogram Menggunakan Short Time Fourier Transform dan Convolutional Neural Network'),
            'sampul' => 'buku/ZpuMnHQf7pVfgAKirF8iqF5pJY1RrCpqVFlnJA3V.jpg',
            'penulis' => 'Muhammad Alwi Adnan Amal, Dodi Zulherman, Rahmat Widadi',
            'penerbit_id' => 1,
            'kategori_id' => 7,
            'rak_id' => 2,
            'stok' => 10,
        ]);

        Buku::create([
            'judul' => 'Usability Evaluation for Mobile-Based Nutritional Food Recommender System',
            'slug' => Str::slug('Usability Evaluation for Mobile-Based Nutritional Food Recommender System'),
            'sampul' => 'buku/F1M4LfBnqLxnOA4zojCLGBe0rxzzVjysIJ60BXwl.jpg',
            'penulis' => 'Ratih Kartika Dewi, Tri Afirianto, Eva Putri Arfiani, Nabila Fairuz Zahra',
            'penerbit_id' => 1,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 10,
        ]);

        Buku::create([
            'judul' => 'Analisis Sentimen Objek Wisata di Provinsi Sulawesi Selatan Berdasarkan Ulasan Pengunjung Menggunakan Metode Random Forest Classifier',
            'slug' => Str::slug('Analisis Sentimen Objek Wisata di Provinsi Sulawesi Selatan Berdasarkan Ulasan Pengunjung Menggunakan Metode Random Forest Classifier'),
            'sampul' => 'buku/qRr9PXgwZG1LhDoFJccF8LSRI482WYpIZRjAImOs.jpg',
            'penulis' => 'Aisyah Nurul Izza, Dian Eka Ratnawati, Widhy Hayuhardhika Nugraha Putra',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 3,
            'stok' => 10,
        ]);

        Buku::create([
            'judul' => 'Analisis Usability Pada Website Universitas Brawijaya Dengan Heuristic Evaluation',
            'slug' => Str::slug('Analisis Usability Pada Website Universitas Brawijaya Dengan Heuristic Evaluation'),
            'sampul' => 'buku/px66KOcpR2IMvB3Jboc8g4kjwdIDUuqwQQhgOvYt.jpg',
            'penulis' => 'Bella Aulia Mustikaningtyas, Mochamad Chandra Saputra, Aryo Pinandito',
            'penerbit_id' => 1,
            'kategori_id' => 4,
            'rak_id' => 4,
            'stok' => 11,
        ]);

        Buku::create([
            'judul' => 'Pengenalan Pemrograman Mobile Menggunakan Progressive Web Apps untuk Siswa SMK Negeri 1 Bangkinang',
            'slug' => Str::slug('Pengenalan Pemrograman Mobile Menggunakan Progressive Web Apps untuk Siswa SMK Negeri 1 Bangkinang'),
            'sampul' => 'buku/BH2CFETeMaUv98lbXnNZr9EddNYFEu958u4GKTK4.jpg',
            'penulis' => 'Khusaeri Andesa, Torkis Nasution; Herwin, Nurjayadi',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 5,
            'stok' => 10,
        ]);
    }
}
