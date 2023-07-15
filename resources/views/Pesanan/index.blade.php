@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>DATA PESANAN</h3>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success')}}
        </div>
        @endif
        <a class="btn btn-primary btn-sm float-end" href="{{ url('pesanan/create')}}">Tambah Data</a>
        <table class="table table-bordered">
            <tr>
                <td>ID PESANAN</td>
                <td>TANGGAL PESANAN</td>
                <td>TOTAL HARGA</td>
                <td>NAMA KONTAK</td>
                <td>NAMA PRODUK</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->id_pesanan}}</td>
                <td>{{ $row->tanggal_pesanan}}</td>
                <td>{{ $row->total_harga}}</td>
                <td>{{ $row->kontak->nama}}</td>
                <td>{{ $row->produk->nama_produk}}</td>
                <td><a class="btn btn-info btn-sm float" href="{{url('pesanan/' .$row->id_pesanan. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('pesanan/' .$row->id_pesanan)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm float" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection