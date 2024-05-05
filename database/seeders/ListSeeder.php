<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('list')->insert([
            [
                'kode_barang' => 'MNG-01',
                'nama_barang' => 'Mangga Harum Manis',
                'price' => '15000',
                'unit_id' => 1,
                'description' => 'Mangga Harum Manis adalah varietas mangga yang memiliki rasa manis dan aroma harum khas, sangat cocok dinikmati sebagai buah segar atau diolah menjadi jus.',
            ],
            [
                'kode_barang' => 'BTL-01',
                'nama_barang' => 'Botol Minum Stainless Steel',
                'price' => '55000',
                'unit_id' => 4,
                'description' => 'Botol minum stainless steel adalah pilihan yang ramah lingkungan dan tahan lama untuk membawa minuman favorit Anda saat bepergian. Terbuat dari bahan berkualitas tinggi yang aman untuk minuman panas maupun dingin.',
            ],
            [
                'kode_barang' => 'TKW-01',
                'nama_barang' => 'Tas Kanvas Warna-warni',
                'price' => '75000',
                'unit_id' => 4,
                'description' => 'Tas kanvas warna-warni adalah pilihan yang stylish dan fungsional untuk membawa barang-barang Anda sehari-hari. Terbuat dari bahan kanvas yang tahan lama dan ringan, cocok untuk berbagai aktivitas.',
            ],
            [
                'kode_barang' => 'PST-01',
                'nama_barang' => 'Pisang Cavendish',
                'price' => '20000',
                'unit_id' => 1,
                'description' => 'Pisang Cavendish adalah varietas pisang yang populer dan memiliki tekstur lembut serta rasa manis, cocok untuk dikonsumsi langsung atau dijadikan bahan dalam berbagai hidangan.',
            ],
        ]);

    }
}