<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:20',
            'subject' => 'required|max:255',
            'message' => 'required|max:1000',
        ]);

        // In a real application, you would save this to database
        // and/or send an email notification

        // For now, we'll just redirect back with success message
        return redirect()->route('contact')->with('success', 'Terima kasih! Pesan Anda telah dikirim. Kami akan segera menghubungi Anda.');
    }
}
