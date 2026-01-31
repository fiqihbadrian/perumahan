# 🏘️ Perumahan Asri - Developer Guide

## 📋 Untuk Developer

Guide ini ditujukan untuk developer yang akan melakukan kustomisasi atau maintenance website Perumahan Asri.

---

## 🎯 Quick Configuration

Untuk mengubah informasi perumahan, edit file berikut:

### **config/site.php** ⭐ (UTAMA)

File ini adalah **pusat konfigurasi** untuk seluruh website. Anda dapat mengubah:

```php
'name' => 'Perumahan Asri',              // Nama perumahan
'tagline' => '...',                       // Tagline di homepage
'description' => '...',                   // Deskripsi singkat

'meta' => [
    'title' => '...',                     // SEO Title
    'description' => '...',               // SEO Description
    'keywords' => '...',                  // SEO Keywords
    'author' => 'Fiqih Badrian',         // Author
],

'contact' => [
    'address' => [...],                   // Alamat lengkap
    'phone' => [...],                     // Array nomor telepon
    'email' => [...],                     // Array email
    'operating_hours' => [...],           // Jam operasional
],

'social' => [
    'facebook' => '#',                    // Link social media
    'instagram' => '#',
    // ... dst
],

'developer' => [
    'name' => 'Fiqih Badrian',           // Nama developer
    'website' => '...',                   // Website portfolio
    'email' => '...',                     // Email developer
    'year' => '2026',                     // Copyright year
],

'facilities' => [
    // Array fasilitas perumahan
],
```

📖 **Dokumentasi Lengkap**: Lihat [CONFIG_GUIDE.md](CONFIG_GUIDE.md)

---

## 🔧 Cara Kustomisasi Cepat

### 1️⃣ Ubah Nama Perumahan
```php
// config/site.php
'name' => 'Nama Perumahan Baru',
```

Otomatis berubah di:
- ✅ Navbar (logo)
- ✅ Hero section (judul utama)
- ✅ Footer
- ✅ Semua tempat yang menggunakan nama perumahan

---

### 2️⃣ Ubah Informasi Kontak
```php
// config/site.php
'contact' => [
    'phone' => [
        '+62 xxx xxxx xxxx',  // Telepon 1
        '+62 xxx xxxx xxxx',  // Telepon 2 (bisa ditambah/dikurangi)
    ],
    'email' => [
        'info@example.com',
        'admin@example.com',
    ],
],
```

---

### 3️⃣ Ubah Social Media
```php
// config/site.php
'social' => [
    'facebook' => 'https://facebook.com/yourpage',
    'instagram' => 'https://instagram.com/yourpage',
    'whatsapp' => 'https://wa.me/6281234567890',
    'twitter' => null,  // Set null untuk hide
],
```

---

### 4️⃣ Ubah Info Developer (Copyright)
```php
// config/site.php
'developer' => [
    'name' => 'Your Name',
    'website' => 'https://yourwebsite.com',
    'email' => 'your@email.com',
    'year' => '2026',
],
```

Footer akan otomatis menampilkan:
```
© 2026 Your Name. All rights reserved.
```

---

### 5️⃣ Tambah/Edit Fasilitas
```php
// config/site.php
'facilities' => [
    [
        'icon' => 'fa-shield-alt',    // Font Awesome icon
        'color' => 'blue',             // Tailwind color
        'title' => 'Keamanan 24 Jam',
        'description' => 'Deskripsi...',
    ],
    // Tambah fasilitas baru di sini
    [
        'icon' => 'fa-car',
        'color' => 'indigo',
        'title' => 'Parkir Luas',
        'description' => 'Area parkir yang luas...',
    ],
],
```

---

## 📁 Struktur File yang Sudah Dimodularisasi

```
resources/views/
├── layouts/
│   └── app.blade.php          # Layout master
│
├── partials/
│   ├── head.blade.php         # Meta tags, CSS, Scripts
│   ├── navbar.blade.php       # Navigation (sudah pakai config)
│   └── footer.blade.php       # Footer (sudah pakai config)
│
├── sections/
│   ├── hero.blade.php         # Hero section (sudah pakai config)
│   ├── denah.blade.php        # Denah perumahan (sudah pakai config)
│   ├── fasilitas.blade.php    # Fasilitas (sudah pakai config loop)
│   ├── berita.blade.php       # Berita
│   └── kontak.blade.php       # Kontak (sudah pakai config)
│
└── home.blade.php             # Homepage (hanya include sections)
```

📖 **Dokumentasi Struktur**: Lihat [STRUKTUR_FILE.md](STRUKTUR_FILE.md)

---

## 🎨 Menggunakan Config di View

### Akses Config Value
```blade
{{ config('site.name') }}
{{ config('site.contact.phone.0') }}
{{ config('site.developer.name') }}
```

### Conditional Rendering
```blade
@if(config('site.social.facebook'))
    <a href="{{ config('site.social.facebook') }}">
        Facebook
    </a>
@endif
```

### Loop Config Array
```blade
@foreach(config('site.facilities') as $facility)
    <h3>{{ $facility['title'] }}</h3>
    <p>{{ $facility['description'] }}</p>
@endforeach
```

---

## 🚀 Cache Management

### Development (local)
Config di-load otomatis tanpa cache.

### Production
Setelah edit config, jalankan:
```bash
php artisan config:cache
```

Clear cache jika ada masalah:
```bash
php artisan config:clear
```

---

## 🎯 Fitur yang Sudah Terintegrasi

✅ **SEO Ready**
- Meta title & description dinamis
- Open Graph tags (Facebook share)
- Twitter Card tags
- Structured meta tags

✅ **Responsive Design**
- Mobile-first approach
- Navbar responsive dengan mobile menu
- Grid layout yang adaptif

✅ **Configuration-Based**
- Semua teks utama dari config
- Social media links dari config
- Fasilitas dari config (loop)
- Contact info dari config

✅ **Modular Structure**
- Layouts terpisah
- Partials reusable
- Sections independent

---

## 📝 Checklist Sebelum Deploy

- [ ] Edit `config/site.php` dengan info perumahan yang benar
- [ ] Ganti semua link social media
- [ ] Update developer info di footer
- [ ] Test semua link dan kontak
- [ ] Run `php artisan config:cache`
- [ ] Test di berbagai device (responsive)
- [ ] Check SEO meta tags

---

## 🔒 Security Notes

1. **Jangan commit .env** ke git
2. **Set APP_DEBUG=false** di production
3. **Gunakan HTTPS** di production
4. **Strong APP_KEY** untuk production
5. **Validasi form input** (jika ada form backend)

---

## 📊 File Config yang Tersedia

| File | Purpose |
|------|---------|
| `config/site.php` | **Konfigurasi utama website** |
| `config/app.php` | Laravel app config |
| `config/database.php` | Database config |
| `.env` | Environment variables |

---

## 🆘 Troubleshooting

### Config tidak berubah?
```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
```

### Error 500 setelah edit?
```bash
# Check logs
tail -f storage/logs/laravel.log

# Check config syntax
php artisan config:show site
```

### Social media icon tidak muncul?
Pastikan value tidak null:
```php
'facebook' => 'https://...',  // ✅ OK
'facebook' => null,            // ❌ Akan di-hide
'facebook' => '#',             // ✅ OK (dummy link)
```

---

## 📞 Support & Contact

**Developer**: {{ config('site.developer.name') }}  
**Email**: {{ config('site.developer.email') }}  
**Website**: {{ config('site.developer.website') }}

---

## 📚 Dokumentasi Tambahan

- [CONFIG_GUIDE.md](CONFIG_GUIDE.md) - Panduan lengkap config file
- [STRUKTUR_FILE.md](STRUKTUR_FILE.md) - Struktur file & folder
- [SETUP_INSTRUCTIONS.md](SETUP_INSTRUCTIONS.md) - Setup awal project

---

**Last Updated**: January 2026  
**Laravel Version**: 11.x  
**PHP Version**: 8.2+
