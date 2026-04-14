# 🎯 ADMIN DASHBOARD - ORDER MANAGEMENT CRUD

## 📌 Overview

Sistem Order Management Dashboard Admin yang **sederhana, responsif, dan fokus CRUD** dengan:
- ✅ **Mobile-First Design** - Responsive di semua device
- ✅ **Tailwind CSS** - Styling modern dan clean
- ✅ **Warna Coklat** - Palet warna yang harmonis & selaras
- ✅ **Full CRUD** - Create, Read, Update, Delete operations
- ✅ **Validasi Lengkap** - Server & client side validation
- ✅ **Dokumentasi Lengkap** - Siap production

---

## 🚀 Quick Start

### 1. Run Database Migration
```bash
php artisan migrate
```

### 2. (Optional) Seed Sample Data
```bash
php artisan db:seed --class=OrderSeeder
```

### 3. Access Dashboard
```
URL: http://localhost/admin/orders
```

---

## 📋 CRUD Operations

### **C - CREATE** (Buat Pesanan)
- URL: `/admin/orders/create`
- Form lengkap dengan validasi
- File upload untuk bukti pembayaran
- Success message setelah submit

### **R - READ** (Lihat Pesanan)
- **List**: `/admin/orders` - Dashboard dengan pagination & stats
- **Detail**: `/admin/orders/{id}` - View detail pesanan
- Real-time statistics (total, pending, verified, revenue)

### **U - UPDATE** (Edit Pesanan)
- URL: `/admin/orders/{id}/edit`
- Edit semua field + status pembayaran
- Upload bukti pembayaran baru
- Validasi date range

### **D - DELETE** (Hapus Pesanan)
- URL: `/admin/orders/{id}` (DELETE method)
- Confirmation dialog sebelum delete
- Redirect ke list after delete

---

## 🎨 Design Features

### Color Scheme
```
Primary Brown:   #6B4423 (headers, buttons, text)
Dark Brown:      #4A2F1A (hover, footer)
Cream BG:        #FFFCF5 (main background)
Light Brown:     #D4A574 (accents)

Status Colors:
- Ditunggu (Pending):  Yellow #FEF3C7 / #92400E
- Diterima (Success):  Green  #DCFCE7 / #15803D
- Ditolak (Error):     Red    #FEE2E2 / #991B1B
```

### Typography
- **Headers**: Playfair Display (serif)
- **Body**: Inter (sans-serif)
- Responsive font sizes (mobile optimized)

### Layout
- Grid system (1 col mobile → 4 cols desktop)
- Flexible spacing
- Touch-friendly buttons (min 44px)
- Horizontal scroll tables on mobile

---

## 📊 Dashboard Stats

Menampilkan 4 stat cards real-time:

| Card | Value | Color |
|------|-------|-------|
| Total Pesanan | COUNT(*) | Brown |
| Menunggu | WHERE status='Ditunggu' | Yellow |
| Diterima | WHERE status='Diterima' | Green |
| Pendapatan | SUM(total_harga) | Blue |

---

## 📝 Form Fields

### Wajib diisi (Required)
- Nama Pemesan
- Email
- Jenis Tiket (Lokal/Mancanegara)
- Metode Pembayaran (Gopay/QRIS)
- Jumlah Tiket (min 1)
- Total Harga (Rp)
- Tanggal Berlaku
- Tanggal Kadaluarsa (harus > berlaku)

### Opsional
- Bukti Pembayaran (JPG/PNG/PDF, max 2MB)

### Edit Tambahan
- Status Pembayaran (Ditunggu/Diterima/Ditolak)

---

## 🗄️ Database Table

```sql
CREATE TABLE orders (
  id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  nama_awalan VARCHAR(100) NOT NULL,
  email VARCHAR(255) NOT NULL,
  jenis_tiket ENUM('Lokal','Mancanegara') NOT NULL,
  metode_pembayaran ENUM('Gopay','QRIS') DEFAULT 'Gopay',
  jumlah_tiket INT UNSIGNED NOT NULL,
  total_harga INT UNSIGNED NOT NULL,
  status_pembayaran ENUM('Ditolak','Ditunggu','Diterima') DEFAULT 'Ditunggu',
  bukti_pembayaran VARCHAR(255) NULL,
  tanggal_berlaku DATE NOT NULL,
  tanggal_kadaluarsa DATE NOT NULL,
  created_at TIMESTAMP NULL,
  updated_at TIMESTAMP NULL
)
```

---

## 📁 Project Structure

```
app/
├── Models/Order.php ........................ Model dengan fillable
├── Http/Controllers/OrderController.php ... 7 CRUD methods

database/
├── migrations/
│   └── 2025_12_18_000000_create_orders_table.php
└── seeders/
    └── OrderSeeder.php ..................... Sample data

resources/views/admin/orders/
├── index.blade.php ........................ Dashboard/List
├── create.blade.php ....................... Create form
├── edit.blade.php ......................... Edit form
└── show.blade.php ......................... Detail view

routes/web.php ............................ Resource route
```

---

## 🔧 Available Routes

| Method | Path | Action | Name |
|--------|------|--------|------|
| GET | /admin/orders | List pesanan | admin.orders.index |
| GET | /admin/orders/create | Create form | admin.orders.create |
| POST | /admin/orders | Save pesanan | admin.orders.store |
| GET | /admin/orders/{id} | Detail | admin.orders.show |
| GET | /admin/orders/{id}/edit | Edit form | admin.orders.edit |
| PUT | /admin/orders/{id} | Update | admin.orders.update |
| DELETE | /admin/orders/{id} | Delete | admin.orders.destroy |

---

## ✨ Features Highlights

### Dashboard
✅ Real-time stat cards
✅ Responsive data table
✅ Pagination (10 per page)
✅ Status badges dengan warna
✅ Inline action buttons
✅ Empty state message

### Forms
✅ Input validation errors
✅ Pre-filled data (edit)
✅ Date range validation
✅ File upload preview
✅ Required field indicators
✅ Mobile-friendly inputs

### UX/UI
✅ Clean minimalist design
✅ Consistent color scheme
✅ Smooth transitions
✅ Loading states
✅ Success/error alerts
✅ Confirmation dialogs

### Performance
✅ Pagination
✅ Optimized queries
✅ Minimal dependencies
✅ Fast load times
✅ Cached assets

---

## 🔒 Security

✅ CSRF Protection (@csrf)
✅ Server-side validation
✅ File type whitelist
✅ File size limit (2MB)
✅ SQL Injection prevention (ORM)
✅ XSS prevention (escaping)
✅ Confirmation before delete
✅ Auth middleware

---

## 📱 Responsive Breakpoints

| Device | Width | Behavior |
|--------|-------|----------|
| Mobile | < 640px | 1 column, stacked |
| Tablet | 640-1024px | 2-3 columns |
| Desktop | > 1024px | 4 columns, full width |

**Table on mobile**: Horizontal scroll
**Buttons**: Stack vertical on mobile
**Forms**: Single column on mobile

---

## 🧪 Testing CRUD

### Test Create
```
1. Click "+ Tambah Pesanan"
2. Fill all fields
3. Click "Simpan" → Check redirect & success message
4. Check data in list
```

### Test Read
```
1. See list with pagination
2. Click detail icon → See full info
3. Check stats are accurate
```

### Test Update
```
1. Click edit → Modify data
2. Click "Simpan" → Check changes
3. Verify status updated
```

### Test Delete
```
1. Click trash → Confirm
2. Check redirect to list
3. Verify data deleted
```

---

## 📚 Documentation Files

| File | Description |
|------|-------------|
| `ORDERS_CRUD_DOCUMENTATION.md` | Full technical documentation |
| `ORDERS_QUICK_SETUP.md` | Quick setup guide & troubleshooting |
| `ORDERS_IMPLEMENTATION_SUMMARY.md` | Implementation summary & checklist |
| `README.md` (this file) | Quick reference guide |

---

## 🛠️ Troubleshooting

### File upload tidak bekerja?
```bash
php artisan storage:link
chmod -R 755 storage/app/public/
```

### Clear cache
```bash
php artisan cache:clear
npm run build
```

### Reset database
```bash
php artisan migrate:refresh
php artisan db:seed --class=OrderSeeder
```

---

## 🎯 What's Next?

Fitur yang bisa ditambahkan:
- [ ] Bulk operations
- [ ] Advanced search/filter
- [ ] CSV export
- [ ] Email notifications
- [ ] PDF invoice
- [ ] Admin comments
- [ ] Audit logs
- [ ] Analytics

---

## 📝 Notes

- Default pagination: 10 items per page
- Date format: `d M Y` (e.g., 18 Dec 2025)
- Currency: Indonesian Rupiah (Rp)
- File storage: `/storage/app/public/bukti_pembayaran/`

---

## ✅ Status

🟢 **PRODUCTION READY**

- Semua CRUD operations working
- Responsive di semua device
- Security hardened
- Dokumentasi lengkap
- Ready to deploy

---

**Version**: 1.0
**Last Updated**: 18 Desember 2025
**Status**: ✅ Complete

Selamat menggunakan! 🎉
