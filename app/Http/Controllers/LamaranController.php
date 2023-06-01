<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Lamaran;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use App\Models\LamaranUserPekerjaan;
use Illuminate\Support\Facades\Auth;

class LamaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lamarans = Lamaran::with('user', 'pekerjaan')->get();
        return view('admin.index', compact('lamarans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $lamarans = Lamaran::with('user', 'pekerjaan')->get();
        return view('admin.create', compact('users', 'pekerjaans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lamarans = Lamaran::with('user', 'pekerjaan')->get();
        return view('admin.show', compact('lamarans') );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lamaran $lamaran)
    {
        // Retrieve users and pekerjaans
        $users = User::all();
        $pekerjaans = Pekerjaan::all();
        return view('admin.edit', compact('lamaran', 'users', 'pekerjaans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lamaran $lamaran)
    {
        $request->validate([
            'cv' => 'nullable|file',
            'surat_lamaran' => 'nullable|file',
            'user_id' => 'required',
            'pekerjaan_id' => 'required',
        ]);

        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cv');
            $lamaran->cv_path = $cvPath;
        }

        if ($request->hasFile('surat_lamaran')) {
            $suratLamaranPath = $request->file('surat_lamaran')->store('surat_lamaran');
            $lamaran->surat_lamaran_path = $suratLamaranPath;
        }

        $lamaran->status = $request->input('status');
        $lamaran->user_id = $request->input('user_id');
        $lamaran->pekerjaan_id = $request->input('pekerjaan_id');
        $lamaran->save();

        return redirect()->route('admin.index')->with('success', 'Lamaran berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lamaran = Lamaran::findOrFail($id);
        $lamaran->delete();
        return redirect()->route('dashboard.index')->with('success', 'Lamaran berhasil dihapus!');
    }
}
