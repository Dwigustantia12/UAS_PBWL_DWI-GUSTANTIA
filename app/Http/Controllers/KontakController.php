<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Kontak::all();
        return view('kontak.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kontak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kontak::create(
            [
                'nama' => $request->nama,
                'email' => $request->email,
                'nomor_telepon' => $request->nomor_telepon
            ]
        );

        return redirect('kontak')->with('success','Data Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Kontak::findOrFail($id);
        return view('kontak.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Kontak::findOrFail($id);
        $row->update(
            [
                'nama' => $request->nama,
                'email' => $request->email,
                'nomor_telepon' => $request->nomor_telepon
            ]
        );
        return redirect('kontak')->with('success','Data Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Kontak::findOrFail($id);
        $row->delete();

        return redirect('kontak')->with('success', 'Data Berhasil Dihapus!');
    }
}
