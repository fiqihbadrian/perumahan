# Setup Instructions - Perumahan Asri Laravel Project

## Langkah-langkah Setup

### 1. Reset dan Migrate Database
Jalankan perintah berikut untuk mereset database dan menjalankan migration baru:

```bash
php artisan migrate:fresh
```

### 2. Jalankan Seeder
Setelah migration berhasil, jalankan seeder untuk mengisi database dengan data contoh:

```bash
php artisan db:seed
```

### 3. Jalankan Server Laravel
Untuk menjalankan aplikasi, gunakan perintah:

```bash
php artisan serve
```

Aplikasi akan berjalan di: http://localhost:8000

## Struktur Data

### Model Rumah
- **blok**: A, B, C, D
- **nomor**: 1-20
- **status**: terisi/kosong
- **penghuni**: Nama penghuni (jika terisi)
- **no_telp**: Nomor telepon
- **email**: Email penghuni
- **jumlah_penghuni**: Jumlah anggota keluarga
- **keterangan**: Catatan tambahan

## Fitur Aplikasi

1. **Hero Section** - Tampilan utama dengan statistik perumahan
2. **Denah Section** - Denah perumahan per blok dengan status rumah
3. **Fasilitas Section** - Daftar fasilitas yang tersedia
4. **Berita Section** - Berita terbaru perumahan
5. **Kontak Section** - Form kontak dan informasi kontak

## Routes
- `/` - Halaman utama (HomeController)
- `/rumah` - Halaman daftar rumah (RumahController)

## Notes
- Design menggunakan Tailwind CSS via CDN
- Alpine.js untuk interaktivitas
- Font Awesome untuk icon
- Responsive design untuk semua ukuran layar
