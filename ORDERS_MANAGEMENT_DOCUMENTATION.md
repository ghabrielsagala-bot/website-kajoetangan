# Dashboard Admin - Manajemen Pesanan

Dokumentasi lengkap untuk sistem CRUD manajemen pesanan tiket di Admin Dashboard.

## 📋 Fitur Utama

Sistem ini menyediakan fungsi **CRUD** lengkap (Create, Read, Update, Delete) untuk mengelola pesanan tiket dengan antarmuka yang sederhana dan responsif.

### Features:
- ✅ **Read** - Melihat daftar semua pesanan dengan pagination
- ✅ **Create** - Menambah pesanan baru
- ✅ **Update** - Mengubah data pesanan
- ✅ **Delete** - Menghapus pesanan
- ✅ **Mobile First** - Desain responsif untuk semua ukuran layar
- ✅ **Tailwind CSS** - Styling modern dengan warna coklat yang elegan

---

## 🗂️ Struktur File

### Database Migration
```
database/migrations/2025_12_18_000001_create_orders_table.php
```
Tabel dengan kolom sesuai gambar SQL yang Anda berikan.

### Model
```
app/Models/Order.php
```
Model Laravel untuk interaksi dengan table orders.

### Controller
```
app/Http/Controllers/OrderController.php
```
Berisi logic CRUD dengan 6 method:
- `index()` - Tampilkan semua orders
- `create()` - Form tambah orders
- `store()` - Simpan orders baru
- `edit()` - Form edit orders
- `update()` - Update orders
- `destroy()` - Hapus orders

### Views
```
resources/views/admin/orders/
├── index.blade.php      # Dashboard dengan tabel pesanan
├── create.blade.php     # Form tambah pesanan
└── edit.blade.php       # Form edit pesanan
```

### Routes
```
routes/web.php
```
Routes tersedia di middleware `admin`:
- `GET  /admin/orders` - List pesanan
- `GET  /admin/orders/create` - Form tambah
- `POST /admin/orders` - Simpan pesanan baru
- `GET  /admin/orders/{id}/edit` - Form edit
- `PUT  /admin/orders/{id}` - Update pesanan
- `DELETE /admin/orders/{id}` - Hapus pesanan

---

## 💾 Struktur Data

### Table: `orders`

```sql
CREATE TABLE orders (
    id                      BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    nama_awalan            VARCHAR(100) NOT NULL,
    email                  VARCHAR(255) NOT NULL,
    tenis_tiket            ENUM('Lokal', 'Mancanegara') NOT NULL,
    metode_pembayaran      ENUM('Gopay', 'QRIS') DEFAULT 'Gopay',
    jumlah_tiket           INT UNSIGNED NOT NULL,
    total_harga            INT UNSIGNED NOT NULL,
    status_pembayaran      ENUM('Ditolak', 'Ditunggu', 'Diterima') DEFAULT 'Ditunggu',
    bukti_pembayaran       VARCHAR(255) NULLABLE,
    tanggal_berlaku        DATE NULLABLE,
    tanggal_kadaluarsa     DATE NULLABLE,
    created_at             TIMESTAMP,
    updated_at             TIMESTAMP
);
```

---

## 🎨 Desain UI

### Color Palette (Warna Coklat yang Selaras)
- **Primary Brown**: `#8B6F47` (Coklat utama)
- **Dark Brown**: `#5C4E3A` (Coklat gelap untuk header)
- **Cream Background**: `#FFFCF5` (Latar belakang yang hangat)
- **Status Colors**:
  - Ditunggu: `#FEF3C7` (Kuning)
  - Diterima: `#DCFCE7` (Hijau)
  - Ditolak: `#FEE2E2` (Merah)

### Responsive Design
- **Mobile** (< 640px): Single column, optimized touch targets
- **Tablet** (640px - 1024px): 2 column layout
- **Desktop** (> 1024px): Full layout dengan semua kolom

---

## 🚀 Cara Menggunakan

### 1. Melihat Daftar Pesanan (READ)
```
Akses: http://localhost/admin/orders
```
- Menampilkan semua pesanan dengan pagination (10 per halaman)
- Tampilkan stats: Total, Menunggu, Diterima, Ditolak
- Responsive table dengan icon actions

### 2. Menambah Pesanan Baru (CREATE)
```
Akses: http://localhost/admin/orders/create
```
- Klik tombol "Tambah Pesanan"
- Isi semua field yang diperlukan:
  - Nama Pengunjung *
  - Email *
  - Tipe Tiket * (Lokal/Mancanegara)
  - Metode Pembayaran * (Gopay/QRIS)
  - Jumlah Tiket *
  - Total Harga *
  - Status Pembayaran *
  - Bukti Pembayaran (opsional)
  - Tanggal Berlaku (opsional)
  - Tanggal Kadaluarsa (opsional)
- Klik "Simpan Pesanan"

### 3. Mengubah Pesanan (UPDATE)
```
Akses: http://localhost/admin/orders/{id}/edit
```
- Klik icon edit (✎) di tabel
- Ubah data yang diperlukan
- Klik "Update Pesanan"

### 4. Menghapus Pesanan (DELETE)
```
Akses: Action di tabel pesanan
```
- Klik icon hapus (🗑️) di tabel
- Konfirmasi penghapusan
- Pesanan akan dihapus secara permanen

---

## ✅ Validasi Form

### Required Fields (Wajib Diisi):
- ✓ nama_awalan - String max 100 karakter
- ✓ email - Format email valid
- ✓ tenis_tiket - Harus Lokal atau Mancanegara
- ✓ metode_pembayaran - Harus Gopay atau QRIS
- ✓ jumlah_tiket - Angka min 1
- ✓ total_harga - Angka min 0
- ✓ status_pembayaran - Harus Ditolak, Ditunggu, atau Diterima

### Optional Fields (Opsional):
- ○ bukti_pembayaran - String max 255 karakter
- ○ tanggal_berlaku - Format tanggal (YYYY-MM-DD)
- ○ tanggal_kadaluarsa - Format tanggal (YYYY-MM-DD)

---

## 📱 Mobile First Design

### Fitur Responsive:
1. **Header Stats** - Grid 2 kolom di mobile, 4 kolom di desktop
2. **Table** - Horizontal scroll di mobile, column semi-hidden untuk konten yang tidak penting
3. **Form** - Single column di mobile, 2 column di desktop
4. **Buttons** - Full width di mobile, flex di desktop

### Breakpoints Tailwind:
- `sm:` - 640px
- `md:` - 768px
- `lg:` - 1024px

---

## 🎯 Statistik Dashboard

Halaman index menampilkan 4 card statistik:

1. **Total** - Jumlah total pesanan
   ```php
   Order::count()
   ```

2. **Menunggu** - Pesanan dengan status 'Ditunggu'
   ```php
   Order::where('status_pembayaran', 'Ditunggu')->count()
   ```

3. **Diterima** - Pesanan dengan status 'Diterima'
   ```php
   Order::where('status_pembayaran', 'Diterima')->count()
   ```

4. **Ditolak** - Pesanan dengan status 'Ditolak'
   ```php
   Order::where('status_pembayaran', 'Ditolak')->count()
   ```

---

## 💡 Tips Penggunaan

1. **Format Tanggal**: Gunakan format YYYY-MM-DD (contoh: 2025-12-18)
2. **Format Uang**: Input hanya angka, display akan otomatis format Rp.
3. **Email Valid**: Email harus sesuai format standar (nama@domain.com)
4. **Status Pembayaran**: 
   - Ditunggu = Menunggu konfirmasi
   - Diterima = Sudah terverifikasi
   - Ditolak = Pembayaran ditolak
5. **Tipe Tiket**:
   - Lokal = Pengunjung dalam negeri
   - Mancanegara = Pengunjung luar negeri

---

## 🔒 Keamanan

- Semua routes dilindungi middleware `admin`
- CSRF protection untuk semua form
- Input validation di server-side
- Method spoofing untuk DELETE dan PUT requests

---

## 📋 Checklist Implementasi

- ✅ Migration table `orders` dibuat
- ✅ Model `Order` dengan fillable attributes
- ✅ Controller `OrderController` dengan semua method CRUD
- ✅ View `index.blade.php` dengan stats dan tabel
- ✅ View `create.blade.php` untuk tambah pesanan
- ✅ View `edit.blade.php` untuk edit pesanan
- ✅ Routes di `web.php` menggunakan resource routes
- ✅ Design mobile-first dengan Tailwind
- ✅ Warna coklat yang elegan dan selaras
- ✅ Validasi form lengkap
- ✅ Flash messages untuk feedback

---

## 🆘 Troubleshooting

### Error: "Route not found"
- Pastikan routes sudah di-register di `web.php`
- Jalankan `php artisan route:cache` untuk clear cache

### Error: "Table orders not found"
- Jalankan `php artisan migrate`
- Pastikan migration file ada di folder `database/migrations`

### Error: "Class not found"
- Jalankan `composer dump-autoload`
- Pastikan namespace di controller benar

---

## 📞 Support

Untuk pertanyaan atau bantuan, silakan cek:
- File dokumentasi di repository
- Comments di code
- Artisan command: `php artisan route:list`

---

**Version**: 1.0.0  
**Last Updated**: 2025-12-18  
**Created By**: Admin Dashboard System
