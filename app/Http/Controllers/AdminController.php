<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Lamaran;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        
        $pekerjaans = Pekerjaan::all();
        $lamarans = Lamaran::with('user', 'pekerjaan')->get();
        $data = [
            'pekerjaans' => $pekerjaans,
        ];
        return view('admin.dashboard', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'cv' => 'required|mimes:pdf|max:5000', // Validasi file CV: harus PDF, maksimum 5MB
            'surat_lamaran' => 'required|mimes:pdf|max:5000', // Validasi file surat lamaran: harus PDF, maksimum 5MB
        ]);

        // Simpan file CV
        $cvPath = $request->file('cv_path')->store('cv', 'public');

        // Simpan file surat lamaran
        $suratLamaranPath = $request->file('surat_lamaran')->store('surat_lamaran', 'public');

        // Buat entri lamaran baru
        $lamaran = new Lamaran();
        $lamaran->pekerjaan_id = $request->input('pekerjaan_id');
        $lamaran->user_id = $request->input('user_id');
        $lamaran->cv_path = $cvPath;
        $lamaran->surat_lamaran_path = $suratLamaranPath;
        $lamaran->save();

        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Lamaran berhasil diunggah.');
    }
    
    
}
