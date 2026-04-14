# Dashboard Admin CRUD - Order Management System

## 📋 Overview

Sistem Order Management Dashboard Admin yang sederhana dan responsif dengan fokus pada **CRUD Operations** (Create, Read, Update, Delete) menggunakan **Tailwind CSS** dan warna **coklat yang selaras**.

## 🎯 Fitur Utama

### 1. **Dashboard/Index** (`/admin/orders`)
- Menampilkan daftar semua pesanan dengan pagination
- **Statistics Cards** menampilkan:
  - Total Pesanan
  - Pesanan Menunggu Verifikasi
  - Pesanan Diterima
  - Total Pendapatan
- Tabel responsif dengan kolom: ID, Nama, Email, Jenis Tiket, Status, Aksi
- Tombol aksi: View, Edit, Delete

### 2. **Create** (`/admin/orders/create`)
- Form lengkap untuk membuat pesanan baru
- Field yang diisi:
  - Nama Pemesan
  - Email
  - Jenis Tiket (Lokal/Mancanegara)
  - Metode Pembayaran (Gopay/QRIS)
  - Jumlah Tiket
  - Total Harga
  - Bukti Pembayaran (File Upload)
  - Tanggal Berlaku
  - Tanggal Kadaluarsa
- Validasi input lengkap
- Mobile-first responsive design

### 3. **Edit** (`/admin/orders/{id}/edit`)
- Update semua field pesanan
- Field tambahan: Status Pembayaran (Ditunggu/Diterima/Ditolak)
- File upload untuk bukti pembayaran baru
- Menampilkan file lama jika sudah ada

### 4. **Show/Detail** (`/admin/orders/{id}`)
- Menampilkan detail lengkap pesanan
- Organized dalam grid layout
- Tombol aksi: Edit, Delete, Kembali
- Info sistem (ID, Created At, Updated At)

## 🗄️ Database Structure

```
Table: orders
├── id (bigint unsigned, PRI, auto_increment)
├── nama_awalan (varchar(100))
├── email (varchar(255))
├── jenis_tiket (enum: 'Lokal', 'Mancanegara')
├── metode_pembayaran (enum: 'Gopay', 'QRIS')
├── jumlah_tiket (int unsigned)
├── total_harga (int unsigned)
├── status_pembayaran (enum: 'Ditolak', 'Ditunggu', 'Diterima')
├── bukti_pembayaran (varchar(255), nullable)
├── tanggal_berlaku (date)
├── tanggal_kadaluarsa (date)
├── created_at (timestamp)
└── updated_at (timestamp)
```

## 📁 File Structure

```
app/
├── Http/Controllers/
│   └── OrderController.php (CRUD Methods)
├── Models/
│   └── Order.php (Model with Fillable)

database/
├── migrations/
│   └── 2025_12_18_000000_create_orders_table.php
└── seeders/

resources/views/admin/orders/
├── index.blade.php (Dashboard/List)
├── create.blade.php (Create Form)
├── edit.blade.php (Edit Form)
└── show.blade.php (Detail View)

routes/
└── web.php (Resource Route)
```

## 🎨 Design & Color Scheme

### Primary Colors
- **Brown Primary**: `#6B4423` - Header, buttons, links
- **Brown Dark**: `#4A2F1A` - Hover states, footer
- **Cream Background**: `#FFFCF5` - Main background
- **Brown Light**: `#D4A574` - Accent elements

### Status Colors
- **Ditunggu (Pending)**: Yellow (`#FEF3C7` bg, `#92400E` text)
- **Diterima (Verified)**: Green (`#DCFCE7` bg, `#15803D` text)
- **Ditolak (Rejected)**: Red (`#FEE2E2` bg, `#991B1B` text)

### Typography
- **Headings**: Playfair Display (serif)
- **Body**: Inter (sans-serif)

## 📱 Mobile-First Responsive

- **Grid Columns**: 1 column pada mobile, 2+ pada desktop
- **Padding**: 4px-6px (mobile), 6px-8px (tablet/desktop)
- **Font Sizes**: Smaller pada mobile, scaled up pada desktop
- **Table**: Horizontal scroll on mobile, full width on desktop
- **Touch-friendly**: Buttons/links dengan padding cukup untuk touch

## 🔧 Controller Methods

### OrderController.php

```php
// Read - Display all orders with stats
public function index()

// Create - Show create form
public function create()

// Store - Save new order
public function store(Request $request)

// Read - Show order detail
public function show(Order $order)

// Update - Show edit form
public function edit(Order $order)

// Update - Save changes
public function update(Request $request, Order $order)

// Delete - Remove order
public function destroy(Order $order)
```

## 🛣️ Routes

```php
Route::resource('admin/orders', OrderController::class, ['names' => 'admin.orders']);
```

Routes yang dibuat:
- `GET /admin/orders` → index (list)
- `GET /admin/orders/create` → create (form)
- `POST /admin/orders` → store (save)
- `GET /admin/orders/{id}` → show (detail)
- `GET /admin/orders/{id}/edit` → edit (form)
- `PUT /admin/orders/{id}` → update (save)
- `DELETE /admin/orders/{id}` → destroy (delete)

## 📝 Validasi

### Create/Store Validation
```
nama_awalan: required|string|max:100
email: required|email|max:255
jenis_tiket: required|in:Lokal,Mancanegara
metode_pembayaran: required|in:Gopay,QRIS
jumlah_tiket: required|integer|min:1
total_harga: required|integer|min:0
bukti_pembayaran: nullable|file|mimes:jpg,jpeg,png,pdf|max:2048
tanggal_berlaku: required|date
tanggal_kadaluarsa: required|date|after:tanggal_berlaku
```

### Update Validation
```
Semua field di atas +
status_pembayaran: required|in:Ditolak,Ditunggu,Diterima
```

## 🚀 Usage

### Akses Dashboard
```
URL: http://localhost/admin/orders
Requires: Admin login
```

### Create Order
```
1. Klik "+ Tambah Pesanan"
2. Isi semua field yang wajib (*)
3. Upload bukti pembayaran (optional)
4. Klik "Simpan Pesanan"
```

### Edit Order
```
1. Di list, klik icon edit (pencil)
2. Update data yang diperlukan
3. Ubah status pembayaran jika perlu
4. Upload bukti baru jika ingin
5. Klik "Simpan Pesanan"
```

### Delete Order
```
1. Di list, klik icon trash
2. Confirm dialog
3. Pesanan dihapus dari database
```

### View Detail
```
1. Di list, klik icon eye
2. Lihat semua detail pesanan
3. Tombol Edit/Delete tersedia
```

## 📊 Statistics

Dashboard menampilkan real-time statistics:
- Total pesanan di database
- Count pesanan dengan status "Ditunggu"
- Count pesanan dengan status "Diterima"
- Sum total_harga untuk pesanan yang "Diterima"

## 🔒 Security Features

- CSRF Protection (Laravel @csrf)
- Validation on both client & server
- Sanitized output dengan Blade templating
- File upload dengan tipe whitelist
- Confirmation dialog sebelum delete

## 🎯 Best Practices Applied

✅ Mobile-First Design
✅ Semantic HTML
✅ Responsive Grid System
✅ Clear Color Hierarchy
✅ Consistent Typography
✅ Touch-Friendly UI
✅ Error Handling
✅ Success/Validation Messages
✅ Loading States
✅ Accessibility Considerations

## 📝 Notes

- File storage untuk bukti_pembayaran di folder `storage/app/public/bukti_pembayaran/`
- Pastikan symbolic link sudah dibuat: `php artisan storage:link`
- Pagination default: 10 items per page
- Date format: `d M Y` (contoh: 18 Dec 2025)
- Currency format: Indonesian Rupiah dengan separator ribuan

---

**Created**: 18 Desember 2025
**Version**: 1.0
**Status**: Production Ready
