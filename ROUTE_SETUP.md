# Konfigurasi Route untuk Halaman Kuliner

## Setup Route Web

Tambahkan kode berikut ke file `routes/web.php`:

```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman kuliner
Route::get('/kuliner', function () {
    return view('user.kuliner');
})->name('kuliner');

// Route alternative dengan prefix
Route::prefix('user')->group(function () {
    Route::get('kuliner', function () {
        return view('user.kuliner');
    })->name('user.kuliner');
});
```

## Navigasi Link

### Untuk menambahkan link di navbar atau menu, gunakan:

```blade
<!-- Di template atau navbar -->
<a href="{{ route('kuliner') }}" class="...">Kuliner</a>

<!-- Atau gunakan URL langsung -->
<a href="/kuliner" class="...">Kuliner</a>
```

## Testing Route

Setelah menambahkan route, coba akses:
- `http://localhost/kuliner`
- `http://localhost/user/kuliner`

---

## CSS/Vite Configuration

Pastikan Tailwind CSS sudah dikonfigurasi dengan benar di `vite.config.js`:

```javascript
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
```

## Build Commands

### Development:
```bash
npm run dev
```

### Production Build:
```bash
npm run build
```

---

## Troubleshooting

### Jika halaman tidak muncul:
1. Pastikan route sudah didaftarkan di `routes/web.php`
2. Pastikan file view ada di `resources/views/user/kuliner.blade.php`
3. Clear cache: `php artisan cache:clear`
4. Refresh browser dengan Ctrl+F5

### Jika Tailwind CSS tidak bekerja:
1. Jalankan `npm run dev` atau `npm run build`
2. Pastikan `@vite(['resources/css/app.css'])` ada di `template.blade.php`
3. Check console browser untuk error

### Jika gambar tidak muncul:
1. Pastikan koneksi internet aktif (untuk Unsplash images)
2. Cek network tab di DevTools browser
3. Gunakan gambar lokal sebagai alternatif

---

**Generated:** November 24, 2025
**Project:** Kampung Kajoetangan Heritage
**Status:** Ready for Implementation
