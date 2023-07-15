@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>EDIT DATA PESANAN</h3>
        <form action="{{ url('/pesanan/' .$row->id_pesanan)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">Tanggal Pesanan</label>
                <input type="date" name="tanggal_pesanan" class="form-control" value="{{$row->tanggal_pesanan}}">
            </div>
            <div class="mb-3">
                <label for="">Total Harga</label>
                <input type="text" name="total_harga" class="form-control" value="{{$row->total_harga}}">
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
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection