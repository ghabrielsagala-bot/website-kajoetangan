<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\SpotFotoController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\AboutUsController;

// ============================================
// PUBLIC ROUTES (USER)
// ============================================

// Home & Dashboard
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', [BerandaController::class, 'index'])->name('user.beranda.index');
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');

Route::get('/artikel', function () {
    return view('user.artikel');
})->name('artikel');

// Heritage Pages - Kuliner
Route::get('/kuliner', [KulinerController::class, 'index'])->name('kuliner');
Route::get('/kuliner/{id}', [KulinerController::class, 'show'])->name('kuliner.show');

// Heritage Pages - Spot Foto
Route::get('/spotfoto', [SpotFotoController::class, 'index'])->name('spotfoto');
Route::get('/spotfoto/{id}', [SpotFotoController::class, 'show'])->name('spotfoto.show');

// Heritage Pages - Rumah Bersejarah
Route::get('/rumahjengki', function () {
    return view('user.rumahjengki');
})->name('rumahjengki');
Route::get('/rumahpenghulu', function () {
    return view('user.rumahpenghulu');
})->name('rumahpenghulu');
Route::get('/rumah1870', function () {
    return view('user.rumah1870');
})->name('rumah1870');
Route::get('/rumahrindu', function () {
    return view('user.rumahrindu');
})->name('rumahrindu');

// Events & Awards
Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/event/{id}', [EventController::class, 'show'])->name('event.show');

Route::get('/award', [AwardController::class, 'index'])->name('award');
Route::get('/award/{id}', [AwardController::class, 'show'])->name('award.show');

// About Us & Feedback
Route::get('/tentang-kami', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/beri-masukan', function () {
    return view('user.feedback');
})->name('feedback.form');
Route::post('/beri-masukan', [FeedbackController::class, 'store'])->name('feedback.store');

// ============================================
// TICKET BOOKING ROUTES
// ============================================

Route::get('/pemesanan-tiket', function () {
    return view('user.Tiket.Pemesanantiket');
})->name('pemesanan.tiket');
Route::post('/pembayaran-tiket', function (Request $request) {
    $request->validate([
        'ticket_type' => 'required|not_in:0',
        'quantity' => 'required|numeric|min:1',
    ]);

    $price = ($request->ticket_type == 'mancanegara') ? 10000 : 5000;
    $total = $price * $request->quantity;

    return view('user.Tiket.pembayarantiket', [
        'quantity' => $request->quantity,
        'ticket_type' => $request->ticket_type,
        'total' => $total
    ]);
})->name('pembayaran.index');
Route::post('/proses-pembayaran', function (Request $request) {
    return redirect()->route('bukti.show')->with([
        'quantity' => $request->quantity,
        'ticket_type' => $request->ticket_type,
        'total' => $request->total_price
    ]);
})->name('pembayaran.store');
Route::get('/bukti-bayar', function () {
    return view('user.Tiket.buktibayar', [
        'quantity' => session('quantity', 1),
        'ticket_type' => session('ticket_type', 'lokal'),
        'total' => session('total', 0)
    ]);
})->name('bukti.show');
Route::post('/bukti-bayar', function (Request $request) {
    $request->validate([
        'bukti_bayar' => 'required|file|mimes:jpeg,png,jpg,pdf|max:5120',
        'name' => 'required|string',
        'email' => 'required|email',
        'tanggal_transfer' => 'required|date',
        'agree_terms' => 'required',
    ]);

    if ($request->hasFile('bukti_bayar')) {
        $file = $request->file('bukti_bayar');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('bukti_bayar', $filename, 'public');

        return redirect()->route('pembayaran.sukses')
                        ->with('success', 'Bukti pembayaran berhasil diupload!')
                        ->with([
                            'ticket_type' => $request->input('ticket_type', 'lokal'),
                            'quantity' => $request->input('quantity', 1),
                            'total' => $request->input('total_price', 0),
                        ]);
    }

    return back()->with('error', 'Gagal upload file');
})->name('bukti.store');
Route::get('/pembayaran-sukses', function () {
    return view('user.Tiket.pembayaransukses');
})->name('pembayaran.sukses');

// ============================================
// ADMIN ROUTES
// ============================================

// Admin Login Routes (Guest Only)
Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AuthController::class, 'loginForm'])->name('login.form');
    Route::post('/admin/login', [AuthController::class, 'login'])->name('login.process');
});

// Admin Protected Routes (Middleware Check)
Route::middleware('admin')->group(function () {
    // Dashboard
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Logout
    Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');

    // Orders Management (CRUD)
    Route::resource('admin/orders', OrderController::class, ['names' => 'admin.orders']);

    // Payment History
    Route::get('/admin/riwayat-pembayaran', [AdminController::class, 'paymentHistory'])->name('admin.pay-history');
    Route::post('/admin/verify-payment/{id}', [AdminController::class, 'verifyPayment'])->name('verify.payment');

    // Ticket Management (CRUD)
    Route::get('/admin/kelola-tiket', [TicketController::class, 'index'])->name('admin.ticket');
    Route::post('/admin/tiket/store', [TicketController::class, 'store'])->name('tiket.store');
    Route::put('/admin/tiket/{id}/update', [TicketController::class, 'update'])->name('tiket.update');
    Route::delete('/admin/tiket/{id}/delete', [TicketController::class, 'destroy'])->name('tiket.delete');

    // Feedback Management
    Route::get('/admin/feedback', [FeedbackController::class, 'index'])->name('admin.feedback');
    Route::post('/admin/feedback/{id}/respond', [FeedbackController::class, 'respond'])->name('feedback.respond');
});