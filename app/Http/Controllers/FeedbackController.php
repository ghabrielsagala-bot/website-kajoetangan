<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Show admin feedback list
     */
    public function index()  
    {
        $data = Feedback::latest()->paginate(15);
        return view('Admin.feedback', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.feedback');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'feedback_sender_name' => 'required|string|max:100',
            'feedback_label' => 'required|string|max:100',
            'feedback_message_type' => 'required',
            'feedback_sender_email' => 'required|email|max:100',
            'feedback_sender_message' => 'required|string',
        ]);

        try {
            Feedback::create($validated);
        } catch (QueryException $e) {
            return redirect(route('user.beranda.index'))->with('error', 'Terjadi Kesalahan Koneksi');
        }
        return redirect(route('user.beranda.index'))->with('success', 'Terima kasih atas masukan Anda!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Feedback::findOrFail($id);
        return view('Admin.feedback-detail', compact('data'));
    }

    /**
     * Respond to feedback
     */
    public function respond(Request $request, $id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->update([
            'status' => 'responded',
            'admin_response' => $request->input('response'),
            'responded_by' => session('admin_name'),
            'responded_at' => now(),
        ]);

        return back()->with('success', 'Balasan feedback berhasil dikirim!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Feedback::findOrFail($id)->delete();
        return back()->with('success', 'Feedback berhasil dihapus');
    }
}