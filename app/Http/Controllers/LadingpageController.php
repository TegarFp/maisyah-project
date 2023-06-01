<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Lamaran;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class LadingpageController extends Controller
{
    public function index(Request $request)
    {
        $pekerjaans = Pekerjaan::pluck('start_salary');
        $search = $request->search;
        $pekerjaans = Pekerjaan::where('judul_pekerjaan', 'LIKE', '%'.$search.'%')
                                ->orWhere('pt_id', 'LIKE', '%'.$search.'%')
                                ->orWhere('status_pekerjaan', 'LIKE', '%'.$search.'%')
                                ->paginate(3);
                                
        
        $tanggal = Carbon::now()->format('d-m-Y'); // Menambahkan kode untuk mendapatkan tanggal saat ini
                                
        return view('home', ['pekerjaans' => $pekerjaans, 'tanggal' => $tanggal ]);
    }

    public function store(Request $request)
    {
        
        $validateData = $request->validate([
            'cv_path' => 'required|mimes:pdf',
            'surat_lamaran_path' => 'required|mimes:pdf',
            'pekerjaan_id' => 'required'
        ]);

        
        $validateData['user_id'] = auth()->user()->id;

        
        // $cvPath = $request->file('cv')->store('cv');
        // $suratLamaranPath = $request->file('surat_lamaran')->store('surat_lamaran');

        $lamaran = Lamaran::create($validateData);
        if ($request->hasFile('cv_path') && $request->hasFile('surat_lamaran_path')) {
            $timestamp = time(); // atau $timestamp = \Carbon\Carbon::now()->timestamp;
        
            $cvFile = $request->file('cv_path');
            $cvFileName = $timestamp . '_' . $cvFile->getClientOriginalName();
            $cvFile->move('cv/', $cvFileName);
            $lamaran->cv_path = $cvFileName;
        
            $suratLamaranFile = $request->file('surat_lamaran_path');
            $suratLamaranFileName = $timestamp . '_' . $suratLamaranFile->getClientOriginalName();
            $suratLamaranFile->move('surat_lamaran/', $suratLamaranFileName);
            $lamaran->surat_lamaran_path = $suratLamaranFileName;
        
            $lamaran->save();
        }
        

        // $lamaran->users()->attach($request->input('users'));
        // $lamaran->pekerjaans()->attach($request->input('pekerjaans'));

        return redirect('lowongan_status')->with('success','Lamaran berhasil dikirim!');
    }
    
    public function lowongan(Request $request)
    {
        $search = $request->search;
        $pekerjaans = Pekerjaan::where('judul_pekerjaan', 'LIKE', '%'.$search.'%')
                    ->orWhere('pt_id', 'LIKE', '%'.$search.'%')
                    ->orWhere('status_pekerjaan', 'LIKE', '%'.$search.'%')
                    ->get();
        return view('lowongan', ['pekerjaans' => $pekerjaans]);
    }
    
    
    public function show($id)
    {
        $pekerjaan = Pekerjaan::findOrFail($id);
        $deskripsiArray = explode("\r", $pekerjaan->deskripsi);
        $kualifikasiiArray = explode("\r", $pekerjaan->kualifikasi);
        $benefitsArray = explode("\r", $pekerjaan->benefits);
        $deskripsiArray = explode("\r", $pekerjaan->deskripsi);
        return view('lowongan_lamar', [
            'pekerjaan' => $pekerjaan,
            'deskripsi' => $deskripsiArray,
            'kualifikasi' => $kualifikasiiArray,
            'benefits' => $benefitsArray,
        ]);
    }
    
    public function status(Request $request)
    {
        $status = $request->status;
        switch ($status) {
            case 'terkirim':
                $lamarans = Lamaran::where('status', 'aktif')->get();
                break;

            case 'ditolak':
                $lamarans = Lamaran::where('status', 'non-aktif')->get();
                break;

            case 'dalam-review':
                $lamarans = Lamaran::where('status', 'pending')->get();
                break;
            
            default:
                 $lamarans = Lamaran::all();
                break;
        }
        return view('pelamar.lowongan_status', compact('lamarans'));
    }
    
    
    public function layanan()
    {
        return view('layanan');
    }
    
    public function update(Request $request, $id)
    {
        $lamaran = Lamaran::findOrFail($id);
        $lamaran->update($request->all());
        return redirect()->back();
    }
    


}
