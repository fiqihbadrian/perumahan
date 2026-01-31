# Panduan Konfigurasi Website - config/site.php

## 📋 Daftar Isi
- [Pendahuluan](#pendahuluan)
- [Informasi Perumahan](#informasi-perumahan)
- [Meta Tags SEO](#meta-tags-seo)
- [Informasi Kontak](#informasi-kontak)
- [Social Media](#social-media)
- [Developer Info](#developer-info)
- [Assets](#assets)
- [Fasilitas](#fasilitas)
- [Cara Menggunakan](#cara-menggunakan)

---

## 📖 Pendahuluan

File `config/site.php` adalah pusat konfigurasi untuk seluruh website perumahan. Dengan mengedit file ini, Anda dapat mengubah:
- Nama perumahan
- Meta tags untuk SEO
- Informasi kontak
- Link social media
- Info developer
- Fasilitas yang ditampilkan

**File Location:** `/config/site.php`

---

## 🏘️ Informasi Perumahan

```php
'name' => 'Perumahan Asri',
'tagline' => 'Sistem informasi perumahan yang memudahkan...',
'description' => 'Sistem informasi perumahan yang memudahkan...',
```

### Penjelasan:
- **`name`**: Nama perumahan yang muncul di navbar, hero section, footer
- **`tagline`**: Kalimat tagline di hero section homepage
- **`description`**: Deskripsi singkat untuk footer

### Cara Menggunakan di View:
```blade
{{ config('site.name') }}
{{ config('site.tagline') }}
{{ config('site.description') }}
```

---

## 🔍 Meta Tags SEO

```php
'meta' => [
    'title' => 'Perumahan Asri - Sistem Informasi Perumahan',
    'description' => 'Website resmi Perumahan Asri...',
    'keywords' => 'perumahan, perumahan asri, sistem informasi...',
    'author' => 'Fiqih Badrian',
    'image' => '/images/perumahan-og.jpg',
],
```

### Penjelasan:
- **`title`**: Title tag default untuk semua halaman
- **`description`**: Meta description untuk SEO
- **`keywords`**: Keywords untuk mesin pencari
- **`author`**: Nama author website
- **`image`**: Gambar untuk Open Graph (Facebook, Twitter share)

### Fitur SEO yang Sudah Diimplementasi:
✅ Meta title & description  
✅ Meta keywords  
✅ Open Graph tags (Facebook)  
✅ Twitter Card tags  
✅ Dynamic URL  

---

## 📞 Informasi Kontak

```php
'contact' => [
    'address' => [
        'street' => 'Jl. Perumahan Asri No. 123',
        'city' => 'Jakarta Selatan',
        'province' => 'DKI Jakarta',
        'postal_code' => '12345',
    ],
    'phone' => [
        '+62 21 1234 5678',
        '+62 812 3456 7890',
    ],
    'email' => [
        'info@perumahanasri.com',
        'admin@perumahanasri.com',
    ],
    'operating_hours' => [
        'weekdays' => 'Senin - Jumat: 08.00 - 17.00',
        'saturday' => 'Sabtu: 08.00 - 12.00',
        'sunday' => 'Tutup',
    ],
],
```

### Cara Menggunakan:
```blade
{{ config('site.contact.address.street') }}
{{ config('site.contact.phone.0') }}  // Nomor pertama
{{ config('site.contact.email.1') }}  // Email kedua
{{ config('site.contact.operating_hours.weekdays') }}
```

### Catatan:
- Array `phone` dan `email` bisa ditambah atau dikurangi sesuai kebutuhan
- Gunakan index (0, 1, 2...) untuk akses item tertentu

---

## 📱 Social Media

```php
'social' => [
    'facebook' => 'https://facebook.com/perumahanasri',
    'twitter' => 'https://twitter.com/perumahanasri',
    'instagram' => 'https://instagram.com/perumahanasri',
    'whatsapp' => 'https://wa.me/6281234567890',
    'youtube' => null,  // Set null jika tidak digunakan
    'tiktok' => null,
],
```

### Cara Menonaktifkan Social Media:
Set value menjadi `null` atau kosongkan:
```php
'facebook' => null,  // Tidak akan ditampilkan
```

### Menambah Social Media Baru:
1. Tambah di config:
```php
'youtube' => 'https://youtube.com/@perumahanasri',
```

2. Tambah di `partials/footer.blade.php`:
```blade
@if(config('site.social.youtube'))
<a href="{{ config('site.social.youtube') }}" ...>
    <i class="fab fa-youtube"></i>
</a>
@endif
```

---

## 👨‍💻 Developer Info

```php
'developer' => [
    'name' => 'Fiqih Badrian',
    'website' => 'https://fiqihbadrian.com',
    'email' => 'fiqih@example.com',
    'year' => '2026',
],
```

### Penjelasan:
- **`name`**: Nama developer (muncul di copyright footer)
- **`website`**: Website portfolio developer
- **`email`**: Email kontak developer
- **`year`**: Tahun copyright

### Cara Menggunakan:
```blade
© {{ config('site.developer.year') }} {{ config('site.developer.name') }}
```

---

## 🖼️ Assets

```php
'assets' => [
    'logo' => '/images/logo.png',
    'map' => 'https://raw.githubusercontent.com/.../peta.png',
],
```

### Penjelasan:
- **`logo`**: Path ke logo perumahan
- **`map`**: URL atau path ke gambar peta lokasi

### Cara Menggunakan:
```blade
<img src="{{ config('site.assets.map') }}" alt="Peta">
```

---

## 🏗️ Fasilitas

```php
'facilities' => [
    [
        'icon' => 'fa-shield-alt',
        'color' => 'blue',
        'title' => 'Keamanan 24 Jam',
        'description' => 'Sistem keamanan terpadu...',
    ],
    // ... fasilitas lainnya
],
```

### Struktur Fasilitas:
- **`icon`**: Class Font Awesome icon (tanpa 'fas')
- **`color`**: Warna Tailwind (blue, green, red, etc.)
- **`title`**: Judul fasilitas
- **`description`**: Deskripsi lengkap

### Menambah Fasilitas Baru:
```php
[
    'icon' => 'fa-car',
    'color' => 'indigo',
    'title' => 'Parkir Luas',
    'description' => 'Area parkir yang luas dan aman untuk kendaraan Anda.',
],
```

### Menghapus Fasilitas:
Cukup hapus array fasilitas yang tidak diinginkan dari config.

---

## 🚀 Cara Menggunakan

### 1. Edit Config File
```bash
nano config/site.php
# atau gunakan editor favorit Anda
```

### 2. Clear Config Cache (Jika di Production)
```bash
php artisan config:cache
```

### 3. Refresh Browser
Website akan otomatis menggunakan konfigurasi baru!

---

## 🎨 Contoh Kustomisasi

### Mengubah Nama Perumahan
```php
// Dari
'name' => 'Perumahan Asri',

// Menjadi
'name' => 'Perumahan Harmoni',
```

### Mengubah Nomor Telepon
```php
'phone' => [
    '+62 21 9876 5432',  // Ganti nomor pertama
    '+62 821 1111 2222', // Ganti nomor kedua
],
```

### Menambah Email Ketiga
```php
'email' => [
    'info@perumahanasri.com',
    'admin@perumahanasri.com',
    'support@perumahanasri.com',  // Email baru
],
```

---

## ⚠️ Catatan Penting

1. **Selalu backup** config sebelum edit
2. **Jangan ubah structure** array, hanya ubah valuenya
3. **Pakai quotes** untuk string: `'value'`
4. **Gunakan null** untuk disable fitur: `'youtube' => null`
5. **Clear cache** setelah edit di production: `php artisan config:cache`

---

## 🆘 Troubleshooting

### Config tidak berubah setelah edit?
```bash
php artisan config:clear
php artisan config:cache
```

### Error setelah edit config?
```bash
# Cek syntax error
php artisan config:show site

# Atau restore backup
cp config/site.php.backup config/site.php
```

---

## 📞 Support

Jika ada pertanyaan tentang konfigurasi, hubungi:
- **Developer**: {{ config('site.developer.name') }}
- **Email**: {{ config('site.developer.email') }}
- **Website**: {{ config('site.developer.website') }}

---

**Last Updated**: January 2026  
**Version**: 1.0.0
