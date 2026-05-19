<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Obat;


    class ObatSeeder extends Seeder
{
    public function run(): void
    {
    Obat::create([
        'nama_obat' => 'Prevathon 50 SC',
        'bahan_aktif' => 'Klorantraniliprol 50 g/l',
        'target_hama' => 'Ulat Grayak & Penggorok Daun',
        'gambar' => 'prevathon.jpeg'
    ]);
    Obat::create([
        'nama_obat' => 'Mutual 25/25 WP',
        'bahan_aktif' => 'Asetampirid 25% + Buprofezin 25%',
        'target_hama' => 'Kutu Kebul & Thrips',
        'gambar' => 'mutual.jpeg'
    ]);
    Obat::create([
        'nama_obat' => 'Avidor 25 WP',
        'bahan_aktif' => 'Imidakloprid 25%',
        'target_hama' => 'Kutu Kebul & Oteng-oteng',
        'gambar' => 'avidor.jpeg'
    ]);
    
        
    
}
}