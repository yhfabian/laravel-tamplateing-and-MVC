@extends('admin.layouts.main')

@section('content')

<h3>Tambah Penaksir</h3>

<form method="POST" action="/admin/penaksir">

@csrf


<input type="text"

name="nama_barang"

class="form-control mb-2"

placeholder="Nama Barang">


<input type="text"

name="kategori"

class="form-control mb-2"

placeholder="Kategori">


<input type="text"

name="kondisi"

class="form-control mb-2"

placeholder="Kondisi">


<input type="number"

name="range_harga_min"

class="form-control mb-2"

placeholder="Harga Min">


<input type="number"

name="range_harga_max"

class="form-control mb-2"

placeholder="Harga Max">


<button class="btn btn-primary">

Simpan

</button>


</form>

@endsection
