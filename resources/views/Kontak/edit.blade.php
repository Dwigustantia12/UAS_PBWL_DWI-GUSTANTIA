@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>EDIT DATA KONTAK DWI BAKERY</h3>
        <form action="{{ url('/kontak/' .$row->id_kontak)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="nama" class="form-control" value="{{$row->nama}}">
            </div>
            <div class="mb-3">
                <label for="">EMAIL</label>
                <input type="text" name="email" class="form-control" value="{{$row->email}}">
            </div>
            <div class="mb-3">
                <label for="">NOMOR TELEPON</label>
                <input type="text" name="nomor_telepon" class="form-control" value="{{$row->nomor_kontak}}">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection