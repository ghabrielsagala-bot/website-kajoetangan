# Dokumentasi Sistem Pembelian Tiket

## 📋 Overview
Sistem pembelian tiket untuk Kampung Kajoetangan Heritage dengan alur 2-step:
1. **Halaman Pemesanan Tiket** - Memilih jenis dan jumlah tiket
2. **Halaman Pembayaran Tiket** - Melengkapi data dan konfirmasi pembayaran

## 🎯 Alur Proses

```
Pemesanan Tiket → Form Validation → Pembayaran Tiket → Konfirmasi
   (Step 1)          (Server)         (Step 2)        (Final)
```

## 📁 Struktur File

### Views
- `resources/views/user/Tiket/Pemesanantiket.blade.php` - Halaman pemesanan
- `resources/views/user/Tiket/pembayarantiket.blade.php` - Halaman pembayaran

### Routes (routes/web.php)

#### 1. GET /pemesanan-tiket
- **Nama Route:** `pemesanan.tiket`
- **Fungsi:** Menampilkan halaman pemesanan tiket
- **View:** `user.Tiket.Pemesanantiket`

#### 2. POST /pembayaran-tiket
- **Nama Route:** `pembayaran.index`
- **Fungsi:** Validasi data pemesanan dan tampilkan halaman pembayaran
- **Validasi:**
  - `ticket_type` required (tidak boleh 0)
  - `quantity` required, numeric, min 1
- **Data Dikirim ke View:**
  - `quantity` - Jumlah tiket
  - `ticket_type` - Jenis tiket (lokal/mancanegara)
  - `total` - Total harga dihitung di server

#### 3. POST /proses-pembayaran
- **Nama Route:** `pembayaran.store`
- **Fungsi:** Proses pembayaran final (simpan ke database)
- **Status:** Sedang simulasi, siap untuk integrasi database

### Navigation
Route "Beli Tiket" di navbar mengarah ke `/pemesanan-tiket`

## 🎨 Design Features

### Mobile First Responsive
- **Mobile (< 640px):** Single column, full width inputs, smaller text
- **Tablet (640px - 1024px):** Optimized padding, better spacing
- **Desktop (> 1024px):** Full layout dengan proper spacing

### Color Scheme
- **Background:** `#FFFCF5` (Cream)
- **Input:** `#F5F5DC` (Beige)
- **Primary:** `#4A3627` (Brown Dark)
- **Accent:** `#9D3838` (Red Heritage)
- **Header Text:** Playfair Display (font-heritage)
- **Body Text:** Inter (font-body)

### Components
1. **Halaman Pemesanan:**
   - Dropdown pilih jenis tiket dengan kalkulasi harga real-time
   - Input jumlah tiket dengan validasi
   - Total display otomatis update
   - Info box helper
   - Form validation sebelum submit

2. **Halaman Pembayaran:**
   - Display data pemesanan (readonly)
   - Form lengkapi data pelanggan:
     - Nama Lengkap
     - Email (required)
     - No HP (optional)
     - Jumlah Tiket (readonly)
   - Total biaya display dengan detail jenis tiket
   - Metode pembayaran QRIS dengan animasi
   - Security info dengan icon
   - Responsive footer dengan social media links

## 📊 Data Flow

### Pemesanan → Pembayaran

```javascript
// Client Side (JavaScript di Pemesanantiket)
- Pilih ticket_type → Update price display
- Input quantity → Kalkulasi total (real-time)
- Click "Lanjut ke Pembayaran" → Validasi ticket_type != 0
- Submit form ke POST /pembayaran-tiket

// Server Side (Routes - pembayaran.index)
- Validasi ticket_type dan quantity
- Hitung price berdasarkan ticket_type:
  - lokal: 5000
  - mancanegara: 10000
- Total = price × quantity
- Pass data ke view pembayarantiket

// Halaman Pembayaran
- Tampilkan data pre-filled dari server
- User isi nama, email, phone
- Click "Bayar Sekarang" → Submit ke POST /proses-pembayaran
```

## 💻 Harga Tiket

| Jenis Tiket | Harga |
|------------|-------|
| Lokal | Rp 5.000 |
| Mancanegara | Rp 10.000 |

## 🔧 Integrasi Berikutnya

### Database
Perlu tambah tabel untuk menyimpan transaksi:
```sql
CREATE TABLE transactions (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(20),
    ticket_type VARCHAR(50),
    quantity INT,
    total_price DECIMAL(10, 2),
    payment_method VARCHAR(50),
    status VARCHAR(50) DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### Controller
Buat controller untuk handle logic pembayaran:
```php
// app/Http/Controllers/TicketController.php
- Validasi lebih detail
- Simpan ke database
- Generate invoice
- Kirim email konfirmasi
```

## 🧪 Testing Checklist

### Pemesanan Tiket
- [ ] Dropdown berfungsi dengan benar
- [ ] Total price update ketika ubah jenis/jumlah tiket
- [ ] Tidak bisa submit jika ticket_type = 0
- [ ] Mobile responsif pada ukuran berbeda

### Pembayaran Tiket
- [ ] Data dari pemesanan terolah dengan benar
- [ ] Form inputs berfungsi
- [ ] Field readonly (quantity) tidak bisa diedit
- [ ] Tombol submit mengarah ke pembayaran
- [ ] Footer display dengan benar
- [ ] Security info terlihat

### Navigation
- [ ] Link "Beli Tiket" di navbar berfungsi
- [ ] Alur pemesanan → pembayaran lancar
- [ ] Validasi error handling

## 📱 Responsive Test
- Mobile (320px, 375px, 480px): Semua elemen sesuai
- Tablet (640px, 768px, 1024px): Layout optimal
- Desktop (1280px+): Full layout

## 🎯 Status
✅ Pemesanantiket.blade.php - Selesai
✅ Pembayarantiket.blade.php - Selesai
✅ Routes - Selesai
✅ Navbar integration - Selesai
✅ Build assets - Selesai
⏳ Database integrasi - Pending
⏳ Payment gateway integration - Pending
⏳ Email notifications - Pending

---
**Last Updated:** November 27, 2025
**Version:** 1.0
