@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>TAMBAH DATA PESANAN DWI BAKERY</h3>
        <form action="{{ url('/pesanan')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">Tanggal Pesanan</label>
                <input type="date" name="tanggal_pesanan" class="form-control" placeholder="Tanggal Pesanan">
            </div>
            <div class="mb-3">
                <label for="">Total Harga</label>
                <input type="text" name="total_harga" class="form-control" placeholder="Total Harga">
            </div>
            <div class="mb-3">
                <label for="">NAMA KONTAK</label>
                <select name="id_kontak" id="" class="form-control">
                    @foreach ($kontak as $ktk)
                        <option value="{{$ktk->id_kontak}}">{{$ktk->nama}}</option>
                    @endforeach
                </select>    
            </div>
            <div class="mb-3">
                <label for="">PRODUK</label>
                <select name="id_produk" id="" class="form-control">
                    @foreach ($produk as $prd)
                        <option value="{{$prd->id_produk}}">{{$prd->nama_produk}}</option>
                    @endforeach
                </select>    
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection