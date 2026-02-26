@extends('admin.layouts.main')

@section('content')

<div class="pagetitle">
    <h1>Data Penaksir</h1>
</div>

<section class="section">

<div class="card">

<div class="card-body">

<h5 class="card-title">Tabel Penaksir</h5>

<!-- ✅ Tombol Tambah -->
<a href="{{ route('penaksir.create') }}" class="btn btn-primary mb-3">
    Tambah Data
</a>


<table class="table table-bordered">

<thead>
<tr>

<th>ID</th>
<th>Nama Barang</th>
<th>Kategori</th>
<th>Kondisi</th>
<th>Range Harga</th>
<th>Aksi</th>

</tr>
</thead>

<tbody>

@foreach($penaksir as $p)

<tr>

<td>{{ $p->id }}</td>
<td>{{ $p->nama_barang }}</td>
<td>{{ $p->kategori }}</td>
<td>{{ $p->kondisi }}</td>
<td>{{ $p->range_harga_min }} - {{ $p->range_harga_max }}</td>

<td>

<!-- tombol edit -->
<a href="{{ route('penaksir.edit',$p->id) }}" class="btn btn-warning btn-sm">
Edit
</a>

<!-- tombol hapus -->
<form action="{{ route('penaksir.destroy',$p->id) }}" method="POST" style="display:inline;">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">
Hapus
</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>
</div>

</section>

@endsection
