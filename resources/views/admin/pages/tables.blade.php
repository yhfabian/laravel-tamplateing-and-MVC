@extends('admin.layouts.main')

@section('content')

<h2>Data Penaksir Pegadaian</h2>

<table class="table table-bordered">

<thead>
<tr>
<th>ID</th>
<th>Nama Barang</th>
<th>Kategori</th>
<th>Kondisi</th>
<th>Range Harga</th>
</tr>
</thead>

<tbody>

@foreach($penaksir as $p)

<tr>

<td>{{ $p->id }}</td>

<td>{{ $p->nama_barang }}</td>

<td>{{ $p->kategori }}</td>

<td>{{ $p->kondisi }}</td>

<td>
Rp {{ number_format($p->range_harga_min) }}
-
Rp {{ number_format($p->range_harga_max) }}
</td>

</tr>

@endforeach

</tbody>

</table>

@endsection
