<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::where('is_active', true)->get();
        return view('Admin.ticket-edit', compact('tickets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'available' => 'required|numeric|min:0',
        ]);

        Ticket::create($request->all());
        return back()->with('success', 'Tiket berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'available' => 'required|numeric|min:0',
        ]);

        $ticket = Ticket::find($id);
        $ticket->update($request->all());
        return back()->with('success', 'Tiket berhasil diperbarui');
    }

    public function destroy($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();
        return back()->with('success', 'Tiket berhasil dihapus');
    }
}
