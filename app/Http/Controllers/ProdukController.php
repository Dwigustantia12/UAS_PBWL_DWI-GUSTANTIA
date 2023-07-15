<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Produk::all();
        return view('produk.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Produk::create(
            [
                'nama_produk' => $request->nama_produk,
                'total_harga' => $request->total_harga,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga
            ]
        );

        return redirect('produk')->with('success','Data Berhasil Ditambah!');
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
        $row = Produk::findOrFail($id);
        return view('produk.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Produk::findOrFail($id);
        $row->update(
            [
                'nama_produk' => $request->nama_produk,
                'total_harga' => $request->total_harga,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga
            ]
        );
        return redirect('produk')->with('success','Data Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Produk::findOrFail($id);
        $row->delete();

        return redirect('produk')->with('success', 'Data Berhasil Dihapus!');
    }
}