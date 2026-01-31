<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rumah;

class RumahSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        // Sample names for residents
        $names = [
            'Budi Santoso', 'Siti Aminah', 'Ahmad Fauzi', 'Dewi Lestari', 'Eko Prasetyo',
            'Fitri Handayani', 'Gunawan', 'Hana Permata', 'Indra Wijaya', 'Joko Susilo',
            'Kartika Sari', 'Lukman Hakim', 'Maya Anggraini', 'Nugroho', 'Olivia Tan',
            'Putri Wulandari', 'Reza Ramadhan', 'Silvia Nursanti', 'Toni Hermawan', 'Umar Bakri'
        ];

        // Blok A - 7 rumah (90% terisi - 6 terisi, 1 kosong)
        $blokAData = [
            ['nomor' => 14, 'status' => 'terisi'],
            ['nomor' => 15, 'status' => 'kosong'],
            ['nomor' => 16, 'status' => 'terisi'],
            ['nomor' => 17, 'status' => 'kosong'],
            ['nomor' => 18, 'status' => 'terisi'],
            ['nomor' => 19, 'status' => 'kosong'],
            ['nomor' => 20, 'status' => 'terisi'],
        ];

        foreach ($blokAData as $index => $data) {
            Rumah::create([
                'blok' => 'A',
                'nomor' => $data['nomor'],
                'status' => $data['status'],
                'penghuni' => $data['status'] == 'terisi' ? $names[array_rand($names)] : null,
                'no_telp' => $data['status'] == 'terisi' ? '+62 8' . rand(10, 99) . ' ' . rand(1000, 9999) . ' ' . rand(1000, 9999) : null,
                'email' => $data['status'] == 'terisi' ? strtolower(str_replace(' ', '', $names[array_rand($names)])) . '@email.com' : null,
                'jumlah_penghuni' => $data['status'] == 'terisi' ? rand(2, 5) : 0,
            ]);
        }

        // Blok B - 20 rumah (65% terisi - 13 terisi, 7 kosong)
        $blokBData = [
            ['nomor' => 1, 'status' => 'terisi'],
            ['nomor' => 2, 'status' => 'terisi'],
            ['nomor' => 3, 'status' => 'kosong'],
            ['nomor' => 4, 'status' => 'terisi'],
            ['nomor' => 5, 'status' => 'kosong'],
            ['nomor' => 6, 'status' => 'terisi'],
            ['nomor' => 7, 'status' => 'terisi'],
            ['nomor' => 8, 'status' => 'kosong'],
            ['nomor' => 9, 'status' => 'terisi'],
            ['nomor' => 10, 'status' => 'terisi'],
            ['nomor' => 11, 'status' => 'terisi'],
            ['nomor' => 12, 'status' => 'kosong'],
            ['nomor' => 13, 'status' => 'terisi'],
            ['nomor' => 14, 'status' => 'terisi'],
            ['nomor' => 15, 'status' => 'kosong'],
            ['nomor' => 16, 'status' => 'terisi'],
            ['nomor' => 17, 'status' => 'terisi'],
            ['nomor' => 18, 'status' => 'kosong'],
            ['nomor' => 19, 'status' => 'kosong'],
            ['nomor' => 20, 'status' => 'terisi'],
        ];

        foreach ($blokBData as $data) {
            Rumah::create([
                'blok' => 'B',
                'nomor' => $data['nomor'],
                'status' => $data['status'],
                'penghuni' => $data['status'] == 'terisi' ? $names[array_rand($names)] : null,
                'no_telp' => $data['status'] == 'terisi' ? '+62 8' . rand(10, 99) . ' ' . rand(1000, 9999) . ' ' . rand(1000, 9999) : null,
                'email' => $data['status'] == 'terisi' ? strtolower(str_replace(' ', '', $names[array_rand($names)])) . '@email.com' : null,
                'jumlah_penghuni' => $data['status'] == 'terisi' ? rand(2, 5) : 0,
            ]);
        }

        // Blok C - 20 rumah (65% terisi - 13 terisi, 7 kosong)
        $blokCData = [
            ['nomor' => 1, 'status' => 'terisi'],
            ['nomor' => 2, 'status' => 'terisi'],
            ['nomor' => 3, 'status' => 'kosong'],
            ['nomor' => 4, 'status' => 'terisi'],
            ['nomor' => 5, 'status' => 'kosong'],
            ['nomor' => 6, 'status' => 'terisi'],
            ['nomor' => 7, 'status' => 'terisi'],
            ['nomor' => 8, 'status' => 'kosong'],
            ['nomor' => 9, 'status' => 'terisi'],
            ['nomor' => 10, 'status' => 'terisi'],
            ['nomor' => 11, 'status' => 'terisi'],
            ['nomor' => 12, 'status' => 'kosong'],
            ['nomor' => 13, 'status' => 'terisi'],
            ['nomor' => 14, 'status' => 'terisi'],
            ['nomor' => 15, 'status' => 'kosong'],
            ['nomor' => 16, 'status' => 'terisi'],
            ['nomor' => 17, 'status' => 'terisi'],
            ['nomor' => 18, 'status' => 'kosong'],
            ['nomor' => 19, 'status' => 'kosong'],
            ['nomor' => 20, 'status' => 'terisi'],
        ];

        foreach ($blokCData as $data) {
            Rumah::create([
                'blok' => 'C',
                'nomor' => $data['nomor'],
                'status' => $data['status'],
                'penghuni' => $data['status'] == 'terisi' ? $names[array_rand($names)] : null,
                'no_telp' => $data['status'] == 'terisi' ? '+62 8' . rand(10, 99) . ' ' . rand(1000, 9999) . ' ' . rand(1000, 9999) : null,
                'email' => $data['status'] == 'terisi' ? strtolower(str_replace(' ', '', $names[array_rand($names)])) . '@email.com' : null,
                'jumlah_penghuni' => $data['status'] == 'terisi' ? rand(2, 5) : 0,
            ]);
        }

        // Blok D - 20 rumah (65% terisi - 13 terisi, 7 kosong)
        $blokDData = [
            ['nomor' => 1, 'status' => 'terisi'],
            ['nomor' => 2, 'status' => 'terisi'],
            ['nomor' => 3, 'status' => 'kosong'],
            ['nomor' => 4, 'status' => 'terisi'],
            ['nomor' => 5, 'status' => 'kosong'],
            ['nomor' => 6, 'status' => 'terisi'],
            ['nomor' => 7, 'status' => 'terisi'],
            ['nomor' => 8, 'status' => 'kosong'],
            ['nomor' => 9, 'status' => 'terisi'],
            ['nomor' => 10, 'status' => 'terisi'],
            ['nomor' => 11, 'status' => 'terisi'],
            ['nomor' => 12, 'status' => 'kosong'],
            ['nomor' => 13, 'status' => 'terisi'],
            ['nomor' => 14, 'status' => 'terisi'],
            ['nomor' => 15, 'status' => 'kosong'],
            ['nomor' => 16, 'status' => 'terisi'],
            ['nomor' => 17, 'status' => 'terisi'],
            ['nomor' => 18, 'status' => 'kosong'],
            ['nomor' => 19, 'status' => 'kosong'],
            ['nomor' => 20, 'status' => 'terisi'],
        ];

        foreach ($blokDData as $data) {
            Rumah::create([
                'blok' => 'D',
                'nomor' => $data['nomor'],
                'status' => $data['status'],
                'penghuni' => $data['status'] == 'terisi' ? $names[array_rand($names)] : null,
                'no_telp' => $data['status'] == 'terisi' ? '+62 8' . rand(10, 99) . ' ' . rand(1000, 9999) . ' ' . rand(1000, 9999) : null,
                'email' => $data['status'] == 'terisi' ? strtolower(str_replace(' ', '', $names[array_rand($names)])) . '@email.com' : null,
                'jumlah_penghuni' => $data['status'] == 'terisi' ? rand(2, 5) : 0,
            ]);
        }
    }
}
