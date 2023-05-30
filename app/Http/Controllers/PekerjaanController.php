<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $pekerjaans = Pekerjaan::where('judul_pekerjaan', 'LIKE', '%'.$search.'%')
                                ->orWhere('pt_id', 'LIKE', '%'.$search.'%')
                                ->orWhere('status_pekerjaan', 'LIKE', '%'.$search.'%')
                                ->orWhere('start_salary', 'LIKE', '%'.$search.'%')
                                ->orWhere('end_salary', 'LIKE', '%'.$search.'%')
                                ->orWhere('expected_experience', 'LIKE', '%'.$search.'%')
                                ->paginate(6);
        return view('lowongans.index', ['pekerjaans' => $pekerjaans]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lowongans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Pekerjaan::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('image/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('lowongans.index')->with('success','Lowongan Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pekerjaan = Pekerjaan::findOrFail($id);
        return view('lowongans.show',  compact('pekerjaan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pekerjaans = Pekerjaan::all();
        $pekerjaan = Pekerjaan::findOrFail($id);
        return view('lowongans.edit', ['pekerjaans' => $pekerjaans], compact('pekerjaan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pekerjaan = Pekerjaan::findOrFail($id);

        $pekerjaan->update($request->all());
        return redirect()->route('lowongans.index')->with('success','Lowongan Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pekerjaan = Pekerjaan::findOrFail($id);

        $pekerjaan->delete();
        return redirect()->route('lowongans.index')->with('success','Lowongan Delete Successfully');
    }
}
