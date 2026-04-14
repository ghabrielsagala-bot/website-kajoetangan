<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Feedback;
use App\Models\BuktiBayar;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalTransactions = Transaction::count();
        $pendingPayments = Transaction::where('payment_status', 'pending')->count();
        $verifiedPayments = Transaction::where('payment_status', 'verified')->count();
        $totalRevenue = Transaction::where('payment_status', 'verified')->sum('total_price');
        $newFeedbacks = Feedback::where('status', 'new')->count();

        $recentTransactions = Transaction::with('ticket')->latest()->limit(10)->get();
        $pendingBukti = BuktiBayar::where('status', 'pending')->with('transaction')->get();

        return view('Admin.dashboard', compact(
            'totalTransactions',
            'pendingPayments',
            'verifiedPayments',
            'totalRevenue',
            'newFeedbacks',
            'recentTransactions',
            'pendingBukti'
        ));
    }

    public function paymentHistory()
    {
        $transactions = Transaction::with('ticket', 'buktiBayar')->latest()->paginate(15);
        return view('Admin.pay-history', compact('transactions'));
    }

    public function verifyPayment(Request $request, $transactionId)
    {
        $transaction = Transaction::find($transactionId);
        $transaction->update([
            'payment_status' => $request->status,
            'verified_by' => session('admin_name'),
        ]);

        return back()->with('success', 'Status pembayaran berhasil diupdate!');
    }
}
