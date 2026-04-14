# 🚀 QUICK START - Dashboard Admin Manajemen Pesanan

## Apa yang Sudah Dibuat?

Sistem CRUD (Create, Read, Update, Delete) lengkap untuk mengelola pesanan tiket dengan interface yang sederhana, mobile-first, dan warna coklat yang elegan.

---

## 📂 File-File yang Dibuat

### 1. Database Migration
**Lokasi**: `database/migrations/2025_12_18_000001_create_orders_table.php`

Membuat table `orders` dengan struktur sesuai gambar SQL yang Anda berikan.

### 2. Model
**Lokasi**: `app/Models/Order.php`

Model untuk interaksi dengan database.

### 3. Controller
**Lokasi**: `app/Http/Controllers/OrderController.php`

Menangani logic CRUD dengan method:
- `index()` - Tampilkan semua pesanan
- `create()` - Tampilkan form tambah
- `store()` - Simpan pesanan baru
- `edit()` - Tampilkan form edit
- `update()` - Update pesanan
- `destroy()` - Hapus pesanan

### 4. Views
**Lokasi**: `resources/views/admin/orders/`

Tiga file view:
- `index.blade.php` - Dashboard dengan tabel pesanan + stats
- `create.blade.php` - Form tambah pesanan baru
- `edit.blade.php` - Form edit pesanan

### 5. Routes
**Lokasi**: `routes/web.php`

Semua routes dilindungi middleware `admin`:
```
GET    /admin/orders              → Lihat semua pesanan
GET    /admin/orders/create       → Form tambah pesanan
POST   /admin/orders              → Simpan pesanan baru
GET    /admin/orders/{id}/edit    → Form edit pesanan
PUT    /admin/orders/{id}         → Update pesanan
DELETE /admin/orders/{id}         → Hapus pesanan
```

### 6. Database Seeder (Optional)
**Lokasi**: 
- `database/seeders/OrderSeeder.php`
- `database/factories/OrderFactory.php`

Untuk generate 20 data sample untuk testing.

---

## 🎨 Desain & Styling

### Warna (Coklat & Selaras)
```
- Primary Brown: #8B6F47
- Dark Brown: #5C4E3A
- Cream Background: #FFFCF5
- Status Warna:
  • Ditunggu: Kuning (#FEF3C7)
  • Diterima: Hijau (#DCFCE7)
  • Ditolak: Merah (#FEE2E2)
```

### Mobile First Responsive
```
- Mobile (< 640px): Single column, optimized
- Tablet (640px - 1024px): 2 column layout
- Desktop (> 1024px): Full responsive layout
```

### Framework
- Tailwind CSS untuk styling
- Font Heritage (Playfair Display) untuk heading
- Font Body (Inter) untuk konten

---

## 🔑 Fitur Utama

### Dashboard (READ)
- 📊 4 Statistics Card (Total, Menunggu, Diterima, Ditolak)
- 📋 Tabel pesanan dengan pagination (10 per halaman)
- ✏️ Button edit untuk setiap pesanan
- 🗑️ Button hapus untuk setiap pesanan
- 📱 Fully responsive design

### Form Tambah (CREATE)
- ✅ 10 input fields sesuai struktur table
- 🔴 Mandatory fields validation
- ⚠️ Error messages yang jelas
- 📱 Mobile-friendly form layout

### Form Edit (UPDATE)
- ✏️ Pre-filled dengan data existing
- 🔄 Same validation seperti form tambah
- 💾 Update button untuk save perubahan
- 📱 Mobile-friendly layout

### Delete (DELETE)
- 🗑️ Confirmation dialog sebelum hapus
- ⚡ Instant deletion (permanent)
- ✅ Flash message confirm

---

## 🧪 Testing dengan Sample Data

Sudah ada 20 data sample yang bisa langsung digunakan untuk testing:

```bash
php artisan db:seed --class=OrderSeeder
```

Data sample sudah berisi:
- ✓ Berbagai nama pengunjung
- ✓ Email yang valid
- ✓ Mix tipe tiket (Lokal/Mancanegara)
- ✓ Mix metode pembayaran (Gopay/QRIS)
- ✓ Jumlah tiket bervariasi (1-5)
- ✓ Total harga bervariasi (50rb - 500rb)
- ✓ Mix status pembayaran (Ditolak, Ditunggu, Diterima)

---

## 🌐 Cara Akses

### Asumsi Anda sudah login di admin dashboard

1. **Lihat Pesanan (READ)**
   ```
   URL: http://localhost/admin/orders
   ```
   - Klik menu "Kelola Pesanan" atau akses URL langsung

2. **Tambah Pesanan (CREATE)**
   ```
   URL: http://localhost/admin/orders/create
   Atau klik tombol "Tambah Pesanan" di dashboard
   ```
   - Isi form dengan data pesanan
   - Klik "Simpan Pesanan"

3. **Edit Pesanan (UPDATE)**
   ```
   URL: http://localhost/admin/orders/{id}/edit
   Atau klik icon ✎ di tabel pesanan
   ```
   - Ubah data yang perlu diubah
   - Klik "Update Pesanan"

4. **Hapus Pesanan (DELETE)**
   ```
   Klik icon 🗑️ di tabel pesanan
   ```
   - Confirm dialog akan muncul
   - Klik OK untuk hapus (permanent)

---

## ✅ Struktur Form

### Kolom yang Wajib Diisi (*)
1. **Nama Pengunjung** - String max 100 karakter
2. **Email** - Format email valid
3. **Tipe Tiket** - Lokal atau Mancanegara
4. **Metode Pembayaran** - Gopay atau QRIS
5. **Jumlah Tiket** - Angka min 1
6. **Total Harga (Rp)** - Angka min 0
7. **Status Pembayaran** - Ditolak, Ditunggu, atau Diterima

### Kolom Opsional (Boleh Kosong)
1. **Bukti Pembayaran** - Path file (max 255 karakter)
2. **Tanggal Berlaku** - Tanggal (YYYY-MM-DD)
3. **Tanggal Kadaluarsa** - Tanggal (YYYY-MM-DD)

---

## 📊 Statistik di Dashboard

Dashboard menampilkan 4 card dengan data real-time:

```
Total = Jumlah semua pesanan
Menunggu = Count dengan status "Ditunggu"
Diterima = Count dengan status "Diterima"
Ditolak = Count dengan status "Ditolak"
```

Statistik update otomatis ketika ada perubahan data.

---

## 🔒 Security Features

✅ **CSRF Protection** - Semua form dilindungi CSRF token  
✅ **Admin Middleware** - Hanya user yang sudah login sebagai admin  
✅ **Server-side Validation** - Validasi di backend  
✅ **Method Spoofing** - DELETE & PUT requests via HTML form  
✅ **Confirmation Dialog** - Sebelum delete permanent  

---

## 📱 Mobile Screenshot Info

### Dashboard di Mobile
```
├─ Header dengan title & desc
├─ 4 Stats Card (2 kolom)
├─ Tombol "Tambah Pesanan"
├─ Tabel dengan scroll horizontal
│  ├─ ID, Nama, Harga (visible)
│  ├─ Email, Jumlah (hidden sm)
│  ├─ Tipe (hidden md)
│  └─ Status, Actions (always visible)
└─ Pagination
```

### Form di Mobile
```
├─ Nama & Email (stack vertically)
├─ Tipe Tiket & Metode (stack vertically)
├─ Jumlah & Total Harga (stack vertically)
├─ Status & Bukti (stack vertically)
├─ Tanggal Berlaku & Kadaluarsa (stack vertically)
└─ Buttons (full width)
```

---

## 🎯 Next Steps

1. ✅ Setup migration dan database
2. ✅ Create model dan controller
3. ✅ Setup routes
4. ✅ Create views (dashboard, create, edit)
5. ✅ Add sample data via seeder
6. 🔄 **Testing** - Coba CRUD functionality
7. 🔄 **Customize** - Sesuaikan sesuai kebutuhan
8. 🔄 **Deploy** - Push ke production

---

## 🆘 Troubleshooting

### Issue: "Table 'orders' not found"
**Solusi**: 
```bash
php artisan migrate
```

### Issue: "Class OrderController not found"
**Solusi**: 
```bash
composer dump-autoload
```

### Issue: Routes tidak muncul
**Solusi**: 
```bash
php artisan route:cache
```

### Issue: Form validation error
**Cek**:
- Email format harus valid
- Jumlah tiket harus > 0
- Status harus salah satu dari: Ditolak, Ditunggu, Diterima

---

## 📞 File Dokumentasi Lengkap

Untuk dokumentasi lebih detail, lihat file:
```
ORDERS_MANAGEMENT_DOCUMENTATION.md
```

---

## ✨ Summary

Sistem CRUD untuk manajemen pesanan telah siap digunakan dengan:

✅ Database table yang terstruktur  
✅ Model & Controller yang rapi  
✅ Views dengan design modern & mobile-first  
✅ Warna coklat yang elegan & selaras  
✅ Validasi form yang lengkap  
✅ Security features yang memadai  
✅ Sample data untuk testing  

**Anda siap untuk mulai using!** 🚀

---

**Created**: 2025-12-18  
**Version**: 1.0.0
