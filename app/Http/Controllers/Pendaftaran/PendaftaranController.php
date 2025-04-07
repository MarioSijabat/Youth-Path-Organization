<?php

namespace App\Http\Controllers\Pendaftaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;

class PendaftaranController extends Controller
{
    // Menampilkan halaman pendaftaran
    public function index()
    {
        return view('pendaftaran');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'full_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'email' => 'required|email|unique:registrations,email',
            'phone_number' => 'required|string|max:15',
            'country' => 'required|string|max:255',
            'motivation' => 'required|string',
            'source' => 'required|in:social_media,friend,website,other',
        ]);

        // Menyimpan data pendaftaran ke dalam database
        Registration::create([
            'full_name' => $request->full_name,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'country' => $request->country,
            'motivation' => $request->motivation,
            'source' => $request->source,
        ]);

        return redirect()->route('pendaftaran')->with('success', 'Form submitted successfully!');
    }
}