@extends('admin.layouts.main')

@section('content')

<h3>Edit Penaksir</h3>

<form method="POST" action="/admin/penaksir/{{ $penaksir->id }}">
    @csrf
    @method('PUT')

    <input type="text" name="nama_barang" value="{{ $penaksir->nama_barang }}" class="form-control mb-2">
    <input type="text" name="kategori" value="{{ $penaksir->kategori }}" class="form-control mb-2">
    <input type="text" name="kondisi" value="{{ $penaksir->kondisi }}" class="form-control mb-2">
    <input type="number" name="range_harga_min" value="{{ $penaksir->range_harga_min }}" class="form-control mb-2">
    <input type="number" name="range_harga_max" value="{{ $penaksir->range_harga_max }}" class="form-control mb-2">

    <button class="btn btn-success">Update</button>
</form>

@endsection
