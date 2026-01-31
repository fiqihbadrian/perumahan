<?php

/*
|--------------------------------------------------------------------------
| CONTOH KUSTOMISASI - config/site.php
|--------------------------------------------------------------------------
|
| File ini berisi contoh-contoh kustomisasi yang bisa Anda lakukan.
| JANGAN gunakan file ini langsung! Copy kode yang Anda butuhkan
| ke file config/site.php yang asli.
|
*/

// ===========================================
// CONTOH 1: Perumahan dengan Brand Berbeda
// ===========================================

return [
    'name' => 'Green Valley Residence',
    'tagline' => 'Hunian hijau dengan konsep eco-friendly di tengah kota Jakarta',
    'description' => 'Perumahan modern dengan konsep ramah lingkungan dan fasilitas lengkap.',
    
    'meta' => [
        'title' => 'Green Valley Residence - Eco Friendly Living',
        'description' => 'Perumahan eco-friendly dengan konsep green living, fasilitas lengkap, dan lokasi strategis di Jakarta',
        'keywords' => 'perumahan eco friendly, green living, perumahan jakarta, hunian hijau, green valley',
        'author' => 'PT. Green Valley Property',
        'image' => '/images/green-valley-og.jpg',
    ],
    
    // ... dst
];

// ===========================================
// CONTOH 2: Perumahan Minimalis dengan 3 Kontak
// ===========================================

return [
    'contact' => [
        'address' => [
            'street' => 'Jl. Harmoni Raya No. 88',
            'city' => 'Bandung',
            'province' => 'Jawa Barat',
            'postal_code' => '40123',
        ],
        'phone' => [
            '+62 22 8765 4321',    // Office
            '+62 811 2222 3333',   // Marketing
            '+62 812 4444 5555',   // Customer Service
        ],
        'email' => [
            'sales@greenvalley.com',
            'info@greenvalley.com',
            'support@greenvalley.com',
        ],
        'operating_hours' => [
            'weekdays' => 'Senin - Jumat: 09.00 - 18.00',
            'saturday' => 'Sabtu: 09.00 - 15.00',
            'sunday' => 'Minggu: 10.00 - 14.00',  // Buka minggu
        ],
    ],
];

// ===========================================
// CONTOH 3: Social Media Lengkap dengan YouTube & TikTok
// ===========================================

return [
    'social' => [
        'facebook' => 'https://facebook.com/greenvalleyresidence',
        'twitter' => 'https://twitter.com/greenvalley_id',
        'instagram' => 'https://instagram.com/greenvalleyresidence',
        'whatsapp' => 'https://wa.me/628112223333',
        'youtube' => 'https://youtube.com/@greenvalleyresidence',  // Aktif!
        'tiktok' => 'https://tiktok.com/@greenvalley.id',         // Aktif!
    ],
];

// ===========================================
// CONTOH 4: Developer Agency
// ===========================================

return [
    'developer' => [
        'name' => 'Digital Creative Studio',
        'website' => 'https://digitalcreativestudio.com',
        'email' => 'hello@digitalcreativestudio.com',
        'year' => '2026',
    ],
];

// ===========================================
// CONTOH 5: Fasilitas Premium (8 items)
// ===========================================

return [
    'facilities' => [
        [
            'icon' => 'fa-shield-alt',
            'color' => 'blue',
            'title' => 'Security 24/7',
            'description' => 'Sistem keamanan terintegrasi dengan CCTV dan security terlatih.',
        ],
        [
            'icon' => 'fa-tree',
            'color' => 'green',
            'title' => 'Taman Eco Park',
            'description' => 'Taman luas dengan konsep eco-friendly dan jogging track.',
        ],
        [
            'icon' => 'fa-wifi',
            'color' => 'purple',
            'title' => 'Smart Home Ready',
            'description' => 'Infrastruktur smart home dan WiFi coverage di area umum.',
        ],
        [
            'icon' => 'fa-dumbbell',
            'color' => 'orange',
            'title' => 'Premium Gym',
            'description' => 'Fitness center dengan peralatan modern dan personal trainer.',
        ],
        [
            'icon' => 'fa-swimming-pool',
            'color' => 'cyan',
            'title' => 'Olympic Pool',
            'description' => 'Kolam renang standar olimpik dengan pemandangan city view.',
        ],
        [
            'icon' => 'fa-basketball-ball',
            'color' => 'red',
            'title' => 'Sport Center',
            'description' => 'Lapangan basket, tennis, dan badminton indoor.',
        ],
        [
            'icon' => 'fa-shopping-cart',
            'color' => 'pink',
            'title' => 'Mini Market',
            'description' => 'Mini market 24 jam untuk kebutuhan sehari-hari.',
        ],
        [
            'icon' => 'fa-car',
            'color' => 'indigo',
            'title' => 'Smart Parking',
            'description' => 'Parkir luas dengan sistem smart parking dan EV charging.',
        ],
    ],
];

// ===========================================
// CONTOH 6: Perumahan Syariah
// ===========================================

return [
    'name' => 'Baitul Jannah Residence',
    'tagline' => 'Hunian Islami tanpa riba dengan konsep syariah dan lingkungan muslim',
    'description' => 'Perumahan syariah dengan akad yang sesuai syariat Islam, tanpa bank, tanpa riba, tanpa denda.',
    
    'facilities' => [
        [
            'icon' => 'fa-mosque',
            'color' => 'green',
            'title' => 'Masjid Megah',
            'description' => 'Masjid dengan kapasitas 500 jamaah dan kajian rutin.',
        ],
        [
            'icon' => 'fa-quran',
            'color' => 'blue',
            'title' => 'TPQ & TPA',
            'description' => 'Tempat Pendidikan Al-Quran untuk anak-anak dan remaja.',
        ],
        [
            'icon' => 'fa-users',
            'color' => 'purple',
            'title' => 'Komunitas Islami',
            'description' => 'Lingkungan muslim dengan berbagai kegiatan islami.',
        ],
        // ... dst
    ],
];

// ===========================================
// CONTOH 7: Perumahan dengan Assets Custom
// ===========================================

return [
    'assets' => [
        'logo' => '/images/logo-company.png',
        'logo_dark' => '/images/logo-dark.png',  // Logo untuk dark mode
        'map' => 'https://maps.googleapis.com/...',  // Google Maps embed
        'banner' => '/images/banner-home.jpg',
        'favicon' => '/favicon.ico',
    ],
];

// ===========================================
// CARA MENGGUNAKAN CONTOH INI
// ===========================================

/*
1. Pilih contoh yang sesuai dengan kebutuhan Anda
2. Copy kode yang dibutuhkan
3. Paste ke file config/site.php (file asli)
4. Sesuaikan dengan data Anda
5. Test di browser
6. Jika di production, jalankan: php artisan config:cache

CATATAN:
- Jangan langsung replace semua isi config/site.php
- Copy hanya bagian yang Anda butuhkan
- Pastikan struktur array tetap benar
- Test setiap perubahan

TIPS:
- Backup config/site.php sebelum edit besar-besaran
- Edit bertahap dan test satu per satu
- Gunakan version control (git) untuk track changes
*/
