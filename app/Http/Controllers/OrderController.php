<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of orders.
     */
    public function index()
    {
        $orders = Order::latest()->paginate(10);
        $totalOrders = Order::count();
        $pendingOrders = Order::where('status_pembayaran', 'Ditunggu')->count();
        $verifiedOrders = Order::where('status_pembayaran', 'Diterima')->count();
        $rejectedOrders = Order::where('status_pembayaran', 'Ditolak')->count();
        $totalRevenue = Order::where('status_pembayaran', 'Diterima')->sum('total_harga');

        return view('admin.orders.index', compact('orders', 'totalOrders', 'pendingOrders', 'verifiedOrders', 'rejectedOrders', 'totalRevenue'));
    }

    /**
     * Show the form for creating a new order.
     */
    public function create()
    {
        return view('admin.orders.create');
    }

    /**
     * Store a newly created order in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_awalan' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'tenis_tiket' => 'required|in:Lokal,Mancanegara',
            'metode_pembayaran' => 'required|in:Gopay,QRIS',
            'jumlah_tiket' => 'required|integer|min:1',
            'total_harga' => 'required|integer|min:0',
            'bukti_pembayaran' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'tanggal_berlaku' => 'required|date',
            'tanggal_kadaluarsa' => 'required|date|after:tanggal_berlaku',
        ]);

        if ($request->hasFile('bukti_pembayaran')) {
            $file = $request->file('bukti_pembayaran');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('bukti_pembayaran', $fileName, 'public');
            $validated['bukti_pembayaran'] = 'bukti_pembayaran/' . $fileName;
        }

        Order::create($validated);

        return redirect()->route('admin.orders.index')
            ->with('success', 'Pesanan berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified order.
     */
    public function edit(Order $order)
    {
        return view('admin.orders.edit', compact('order'));
    }

    /**
     * Update the specified order in storage.
     */
    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'nama_awalan' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'tenis_tiket' => 'required|in:Lokal,Mancanegara',
            'metode_pembayaran' => 'required|in:Gopay,QRIS',
            'jumlah_tiket' => 'required|integer|min:1',
            'total_harga' => 'required|integer|min:0',
            'status_pembayaran' => 'required|in:Ditolak,Ditunggu,Diterima',
            'bukti_pembayaran' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'tanggal_berlaku' => 'required|date',
            'tanggal_kadaluarsa' => 'required|date|after:tanggal_berlaku',
        ]);

        if ($request->hasFile('bukti_pembayaran')) {
            $file = $request->file('bukti_pembayaran');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('bukti_pembayaran', $fileName, 'public');
            $validated['bukti_pembayaran'] = 'bukti_pembayaran/' . $fileName;
        }

        $order->update($validated);

        return redirect()->route('admin.orders.index')
            ->with('success', 'Pesanan berhasil diperbarui');
    }

    /**
     * Remove the specified order from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('admin.orders.index')
            ->with('success', 'Pesanan berhasil dihapus');
    }
}
