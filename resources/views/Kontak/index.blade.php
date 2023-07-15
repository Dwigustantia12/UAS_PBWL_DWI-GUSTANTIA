@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>DAFTAR KONTAK DWI BAKERY</h3>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success')}}
        </div>
        @endif
        <a class="btn btn-primary btn-sm float-end" href="{{ url('kontak/create')}}">Tambah Data</a>
        <table class="table table-bordered">
            <tr>
                <td>ID KONTAK</td>
                <td>NAMA</td>
                <td>EMAIL</td>
                <td>NOMOR TELEPON</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->id_kontak}}</td>
                <td>{{ $row->nama}}</td>
                <td>{{ $row->email}}</td>
                <td>{{ $row->nomor_telepon}}</td>
                <td><a class="btn btn-info btn-sm float" href="{{url('kontak/' .$row->id_kontak. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('kontak/' .$row->id_kontak)}}" method="post">
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