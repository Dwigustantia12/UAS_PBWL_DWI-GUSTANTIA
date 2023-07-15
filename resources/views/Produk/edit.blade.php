@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>EDIT DATA PRODUK</h3>
        <form action="{{ url('/produk/' .$row->id_produk)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">NAMA PRODUK</label>
                <input type="text" name="nama_produk" class="form-control" value="{{$row->nama_produk}}">
            </div>
            <div class="mb-3">
                <label for="">DESKRIPSI</label>
                <input type="text" name="deskripsi" class="form-control" value="{{$row->deskripsi}}">
            </div>
            <div class="mb-3">
                <label for="">HARGA</label>
                <input type="text" name="harga" class="form-control" value="{{$row->harga}}">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection