<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'ticket_type' => 'required|in:lokal,mancanegara',
            'quantity' => 'required|numeric|min:1',
        ]);

        $price = ($request->ticket_type == 'mancanegara') ? 10000 : 5000;
        $total = $price * $request->quantity;
        $ticket = Ticket::first();

        $transaction = Transaction::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'ticket_id' => $ticket->id,
            'quantity' => $request->quantity,
            'total_price' => $total,
            'ticket_type' => $request->ticket_type,
        ]);

        return view('user.Tiket.buktibayar', [
            'transaction_id' => $transaction->id,
            'quantity' => $request->quantity,
            'ticket_type' => $request->ticket_type,
            'total' => $total,
        ]);
    }

    public function uploadBukti(Request $request)
    {
        $request->validate([
            'bukti_bayar' => 'required|file|mimes:jpeg,png,jpg,pdf|max:5120',
        ]);

        $transaction = Transaction::find($request->transaction_id);
        
        if ($request->hasFile('bukti_bayar')) {
            $file = $request->file('bukti_bayar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('bukti_bayar', $filename, 'public');

            $transaction->buktiBayar()->create([
                'name' => $request->name,
                'email' => $request->email,
                'tanggal_transfer' => $request->tanggal_transfer,
                'bukti_bayar_path' => $filename,
            ]);

            return redirect()->route('pembayaran.sukses')->with('success', 'Bukti pembayaran berhasil diupload!');
        }

        return back()->with('error', 'Gagal upload file');
    }
}
