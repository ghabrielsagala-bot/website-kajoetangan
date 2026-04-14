# Quick Setup Guide - Order Management CRUD

## ✅ Checklist Setup

### 1. Database Migration
```bash
php artisan migrate
```
Status: ✅ **Tabel sudah ada**

### 2. Storage Link (Untuk file upload)
```bash
php artisan storage:link
```
Jika belum ada, jalankan command ini untuk membuat symbolic link ke `public/storage`

### 3. Permissions
Pastikan folder `storage/app/public/` writable:
```bash
chmod -R 755 storage/app/public/
```

### 4. Konfigurasi .env (jika perlu)
```env
FILESYSTEM_DISK=public
```

---

## 🌍 Akses CRUD

### URLs yang Tersedia

| Operation | URL | Method |
|-----------|-----|--------|
| List Pesanan | `/admin/orders` | GET |
| Create Form | `/admin/orders/create` | GET |
| Save Pesanan | `/admin/orders` | POST |
| Detail | `/admin/orders/{id}` | GET |
| Edit Form | `/admin/orders/{id}/edit` | GET |
| Update | `/admin/orders/{id}` | PUT |
| Delete | `/admin/orders/{id}` | DELETE |

---

## 📁 File-File Penting

### Model
- `app/Models/Order.php` - ✅ Updated dengan fillable yang benar

### Controller
- `app/Http/Controllers/OrderController.php` - ✅ Semua CRUD methods

### Views
- `resources/views/admin/orders/index.blade.php` - ✅ Dashboard
- `resources/views/admin/orders/create.blade.php` - ✅ Create form
- `resources/views/admin/orders/edit.blade.php` - ✅ Edit form
- `resources/views/admin/orders/show.blade.php` - ✅ Detail view

### Migration
- `database/migrations/2025_12_18_000000_create_orders_table.php` - ✅ Tabel orders

### Routes
- `routes/web.php` - ✅ Resource route sudah ada

---

## 🎨 Warna & Design

### Color Palette
```
Primary Brown: #6B4423
Dark Brown: #4A2F1A
Cream: #FFFCF5
Light Brown: #D4A574

Status Colors:
- Pending (Yellow): #FEF3C7 / #92400E
- Success (Green): #DCFCE7 / #15803D
- Error (Red): #FEE2E2 / #991B1B
```

### Responsive Breakpoints (Tailwind)
- Mobile: < 640px (sm)
- Tablet: 640px - 1024px (md, lg)
- Desktop: > 1024px (xl, 2xl)

---

## 🧪 Test CRUD Operations

### 1. Create Order
```
✅ Form validation
✅ File upload (bukti_pembayaran)
✅ Date validation (kadaluarsa > berlaku)
✅ Redirect & success message
```

### 2. Read/List
```
✅ Pagination (10 per page)
✅ Stats cards (total, pending, verified, revenue)
✅ Responsive table
✅ Status badge colors
```

### 3. Update/Edit
```
✅ Load existing data
✅ Update all fields
✅ Change status
✅ Upload new file
```

### 4. Delete
```
✅ Confirmation dialog
✅ Soft/Hard delete
✅ Redirect to list
```

---

## 🛠️ Troubleshooting

### Issue: File upload tidak berfungsi
**Solution:**
```bash
php artisan storage:link
chmod -R 755 storage/app/public/
```

### Issue: Tanggal format salah
**Solution:** Sudah menggunakan `->format('d M Y')` di view, check locale settings di `config/app.php`

### Issue: Status badge warna tidak muncul
**Solution:** Clear cache:
```bash
php artisan cache:clear
npm run build (untuk Tailwind)
```

### Issue: Pagination tidak bekerja
**Solution:** Check `paginate(10)` di controller index method

---

## 📝 Form Validasi

### Required Fields (*)
- nama_awalan
- email
- jenis_tiket
- metode_pembayaran
- jumlah_tiket
- total_harga
- tanggal_berlaku
- tanggal_kadaluarsa

### Optional Fields
- bukti_pembayaran (file upload)

### Edit Form Tambahan
- status_pembayaran (required saat edit)

---

## 🔐 Security

- ✅ CSRF protection (@csrf di form)
- ✅ Input validation (server-side)
- ✅ File type validation (jpg, png, pdf)
- ✅ File size limit (2MB)
- ✅ Confirmation sebelum delete
- ✅ Middleware auth (admin)

---

## 📱 Mobile Optimization

Sudah terimplementasi:
- ✅ Touch-friendly buttons (min 44px)
- ✅ Responsive typography
- ✅ Flexible grid layouts
- ✅ Horizontal scroll table on mobile
- ✅ Stack buttons on mobile
- ✅ Readable form inputs

---

## 🚀 Performance Tips

1. **Pagination**: Default 10 items, bisa diubah di controller
2. **Eager Loading**: Jika ada relasi, gunakan `with()`
3. **Caching**: Stats bisa di-cache untuk performa lebih baik
4. **Indexing**: Pastikan kolom `email`, `status_pembayaran` di-index

---

## ✨ Next Steps (Optional)

- [ ] Export to Excel
- [ ] CSV Import
- [ ] Advanced Filtering
- [ ] Advanced Search
- [ ] Status bulk update
- [ ] Email notifications
- [ ] PDF Invoice
- [ ] Analytics Dashboard

---

**Last Updated**: 18 Desember 2025
**Status**: ✅ Production Ready
