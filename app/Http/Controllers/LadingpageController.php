<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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

    public function layanan()
    {
        return view('layanan');
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
        // Temukan file berdasarkan ID
        $pekerjaans = Pekerjaan::find($id);

        // Periksa apakah file ditemukan
        if ($pekerjaans) {
            // Lakukan apa yang perlu dilakukan untuk menampilkan file
            return view('lowongan_lamar', ['pekerjaans' => $pekerjaans]);
        } else {
            // File tidak ditemukan, berikan respons sesuai kebutuhan
            return response('File not found', 404);
        }
    }

    public function status(Request $request)
    {
        $pekerjaans = Pekerjaan::all();
        return view('pelamar.lowongan_status', ['pekerjaans' => $pekerjaans]);
    }

    
    
    



}
