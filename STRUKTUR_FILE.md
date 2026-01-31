# Struktur File Project Perumahan Asri

## 📁 Struktur Directory

```
resources/views/
├── layouts/
│   └── app.blade.php          # Layout utama aplikasi
├── partials/
│   ├── head.blade.php         # Meta tags, CSS, Scripts
│   ├── navbar.blade.php       # Navigasi utama & mobile menu
│   └── footer.blade.php       # Footer dengan menu & social media
├── sections/
│   ├── hero.blade.php         # Hero section dengan statistik
│   ├── denah.blade.php        # Section denah perumahan per blok
│   ├── fasilitas.blade.php    # Section fasilitas perumahan
│   ├── berita.blade.php       # Section berita terbaru
│   └── kontak.blade.php       # Section kontak & form
└── home.blade.php             # Main page yang meng-include semua section
```

## 📝 Penjelasan Setiap File

### 1. **layouts/app.blade.php**
Layout master aplikasi yang berisi struktur HTML dasar:
- Include head partial
- Include navbar partial
- Content area untuk section
- Include footer partial

### 2. **partials/head.blade.php**
Berisi semua meta tags, CDN, dan custom styles:
- Meta charset & viewport
- Title (bisa di-override)
- Tailwind CSS CDN
- Font Awesome icons
- Alpine.js
- Custom CSS animations (blob, fade-in-up, smooth scroll)

### 3. **partials/navbar.blade.php**
Komponen navigasi yang responsive:
- Logo
- Desktop menu (Home, Denah, Fasilitas, Berita, Kontak)
- Mobile menu button
- Mobile menu dropdown
- Sticky navbar dengan efek scroll

### 4. **partials/footer.blade.php**
Footer dengan 4 kolom:
- Company info
- Menu links
- Kontak informasi
- Social media links
- Copyright

### 5. **sections/hero.blade.php**
Hero section halaman utama:
- Judul & subtitle
- CTA buttons (Lihat Denah, Hubungi Kami)
- Statistik cards (Total Rumah, Terisi, Kosong, Total Blok)
- Decorative blobs dengan animasi

### 6. **sections/denah.blade.php**
Section denah perumahan:
- Legend (Terisi/Kosong)
- Grid blok A, B, C, D
- Setiap rumah dengan nomor & status
- Peta lokasi perumahan

### 7. **sections/fasilitas.blade.php**
Section fasilitas perumahan dengan 6 items:
- Keamanan 24 Jam
- Taman & Area Hijau
- WiFi Area Umum
- Fitness Center
- Kolam Renang
- Playground Anak

### 8. **sections/berita.blade.php**
Section berita terbaru:
- Grid layout untuk berita
- Gambar, judul, deskripsi
- Link "Baca Selengkapnya"

### 9. **sections/kontak.blade.php**
Section kontak lengkap:
- 4 info cards (Alamat, Telepon, Email, Jam Operasional)
- Form kontak dengan validasi
- Input fields: Nama, Email, Telepon, Pesan

### 10. **home.blade.php**
File utama yang menggunakan:
```blade
@extends('layouts.app')

@section('content')
    @include('sections.hero')
    @include('sections.denah')
    @include('sections.fasilitas')
    @include('sections.berita')
    @include('sections.kontak')
@endsection
```

## 🎯 Keuntungan Struktur Ini

### ✅ **Modular**
- Setiap komponen di file terpisah
- Mudah di-maintain dan di-update
- Bisa digunakan ulang di halaman lain

### ✅ **Organized**
- Struktur folder yang jelas
- Mudah dinavigasi
- Standar Laravel best practices

### ✅ **Reusable**
- Layout bisa digunakan untuk halaman lain
- Partials (navbar, footer) bisa dipanggil di mana saja
- Sections bisa di-mix and match

### ✅ **Scalable**
- Mudah menambah section baru
- Mudah menambah layout berbeda
- Mudah menambah partial components

## 🔧 Cara Menggunakan

### Membuat Halaman Baru
```blade
@extends('layouts.app')

@section('content')
    <section>
        <!-- Your content here -->
    </section>
@endsection
```

### Menambah Section Baru
1. Buat file di `resources/views/sections/nama_section.blade.php`
2. Include di halaman: `@include('sections.nama_section')`

### Menambah Partial Baru
1. Buat file di `resources/views/partials/nama_partial.blade.php`
2. Include di layout atau section: `@include('partials.nama_partial')`

### Override Title
```blade
@section('content')
    @php
        $title = 'Judul Custom - Perumahan Asri';
    @endphp
    <!-- content -->
@endsection
```

## 📊 Data Flow

```
Controller (HomeController)
    ↓
    ├─ totalRumah
    ├─ rumahTerisi
    ├─ rumahKosong
    └─ blokStats
    ↓
View (home.blade.php)
    ↓
    ├─ Layout (layouts/app.blade.php)
    │   ├─ Partials (head, navbar, footer)
    │   └─ Content Section
    └─ Sections (hero, denah, fasilitas, berita, kontak)
```

## 🎨 Styling

- **Framework**: Tailwind CSS (via CDN)
- **Icons**: Font Awesome 6.4.0
- **Interactivity**: Alpine.js 3.x
- **Custom CSS**: Defined in `partials/head.blade.php`

## 🚀 Next Steps

Jika ingin menambah fitur:
1. **CRUD Rumah** - Buat section admin untuk manage data rumah
2. **Authentication** - Tambah login untuk penghuni
3. **API Integration** - Connect dengan Google Maps API
4. **Real-time Updates** - Gunakan Laravel Echo & Broadcasting
5. **Search & Filter** - Tambah fitur search rumah per blok
