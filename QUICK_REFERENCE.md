# 🎯 Quick Reference - Config Site

## 📝 Edit Satu File untuk Semua Perubahan

```php
config/site.php
```

---

## ⚡ Perubahan Cepat (Copy-Paste Ready)

### 1. Ganti Nama Perumahan
```php
'name' => 'Nama Perumahan Anda',
```
**Berubah di**: Navbar, Hero, Footer (otomatis)

---

### 2. Ganti Nomor Telepon
```php
'phone' => [
    '+62 xxx xxxx xxxx',
    '+62 xxx xxxx xxxx',
],
```
**Berubah di**: Footer, Section Kontak

---

### 3. Ganti Email
```php
'email' => [
    'info@domain.com',
    'admin@domain.com',
],
```
**Berubah di**: Footer, Section Kontak

---

### 4. Ganti Alamat
```php
'address' => [
    'street' => 'Jl. Nama Jalan No. XX',
    'city' => 'Nama Kota',
    'province' => 'Nama Provinsi',
    'postal_code' => '12345',
],
```
**Berubah di**: Section Kontak

---

### 5. Ganti Social Media
```php
'social' => [
    'facebook' => 'https://facebook.com/yourpage',
    'instagram' => 'https://instagram.com/yourpage',
    'whatsapp' => 'https://wa.me/628xxxxxxxxx',
],
```
**Berubah di**: Footer

---

### 6. Ganti Developer Info
```php
'developer' => [
    'name' => 'Nama Developer',
    'year' => '2026',
],
```
**Berubah di**: Copyright Footer

---

## 🎨 Menggunakan di View

```blade
{{ config('site.name') }}
{{ config('site.contact.phone.0') }}
{{ config('site.contact.email.0') }}
{{ config('site.developer.name') }}
```

---

## 🚀 Setelah Edit (Production)

```bash
php artisan config:cache
```

---

## 📚 Dokumentasi Lengkap

- [CONFIG_GUIDE.md](CONFIG_GUIDE.md) - Panduan detail
- [DEVELOPER_GUIDE.md](DEVELOPER_GUIDE.md) - Guide untuk developer
- [config/site.examples.php](config/site.examples.php) - Contoh kustomisasi

---

## ✅ Checklist Kustomisasi

- [ ] Nama perumahan
- [ ] Tagline & deskripsi
- [ ] Nomor telepon (minimal 1)
- [ ] Email (minimal 1)
- [ ] Alamat lengkap
- [ ] Jam operasional
- [ ] Link social media
- [ ] Info developer
- [ ] Test di browser

---

**File Location**: `/config/site.php`  
**No Need**: Edit multiple files  
**One Config**: Rules them all 🔥
