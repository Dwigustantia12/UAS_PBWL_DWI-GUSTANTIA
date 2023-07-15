<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\Kontak;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pesanan::all();
        return view('pesanan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pesanan.create',[
            'produk' => Produk::get(),
            'kontak' => Kontak::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pesanan::create(
            [
                'tanggal_pesanan' => $request->tanggal_pesanan,
                'total_harga' => $request->total_harga,
                'id_kontak' => $request->id_kontak,
                'id_produk' => $request->id_produk
            ]
        );

        return redirect('pesanan')->with('success','Data Berhasil Ditambah!');
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
        $row = Pesanan::findOrFail($id);
        return view('pesanan.edit',[
            'produk' => Produk::get(),
            'kontak' => Kontak::get()
        ], compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Pesanan::findOrFail($id);
        $row->update(
            [
                'tanggal_pesanan' => $request->tanggal_pesanan,
                'total_harga' => $request->total_harga,
                'id_kontak' => $request->id_kontak,
                'id_produk' => $request->id_produk
            ]
        );
        return redirect('pesanan')->with('success','Data Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pesanan::findOrFail($id);
        $row->delete();

        return redirect('pesanan')->with('success', 'Data Berhasil Dihapus!');
    }
}
