<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LamaranController extends Controller
{



    public function index()
    {
        $pekerjaans = Pekerjaan::all();
        return view('pelamar.lowongan_status', ['pekerjaans' => $pekerjaans]);
    }


    public function show($id)
    {
        $lamaran = Lamaran::with('user', 'pekerjaan')->find($id);

        // Mengakses data user terkait
        $userName = $lamaran->user->name;

        // Mengakses data pekerjaan terkait
        $pekerjaanJudul = $lamaran->pekerjaan->judul;

        return view('lamaran.show', [
            'userName' => $userName,
            'pekerjaanJudul' => $pekerjaanJudul,
        ]);
    }

    // public function show($id)
    // {
    //     $pekerjaans = Pekerjaan::all();
    //     return view('lamaran', ['pekerjaans' => $pekerjaans]);
    // }

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

    public function showDashboard()
    {
        $lamarans = Lamaran::with('user', 'pekerjaan')->get();

        return view('dashboard', [
            'lamarans' => $lamarans
        ]);
    }

    public function review()
    {
        $pekerjaans = Pekerjaan::all();
        return view('pelamar.dalam-review', ['pekerjaans' => $pekerjaans]);
    }

    public function tidak_lolos()
    {
        $pekerjaans = Pekerjaan::all();
        return view('pelamar.tidak-lolos', ['pekerjaans' => $pekerjaans]);
    }





















    public function kirimLamaran(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'pesan' => 'required',
            'cv' => 'required|mimes:pdf,doc,docx',
            'surat_lamaran' => 'required|mimes:pdf,doc,docx',
        ]);
    
        $cvPath = $request->file('cv')->store('cv_files');
        $suratLamaranPath = $request->file('surat_lamaran')->store('surat_lamaran_files');
    
        Lamaran::create([
            'user_id' => auth()->user()->id,
            'pekerjaan_id' => $request->input('pekerjaan_id'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'pesan' => $request->input('pesan'),
            'status' => 'menunggu',
            'cv_path' => $cvPath,
            'surat_lamaran_path' => $suratLamaranPath,
        ]);
    
        // Tambahkan logika lain yang diperlukan
        // Redirect ke halaman yang sesuai
    }
}
