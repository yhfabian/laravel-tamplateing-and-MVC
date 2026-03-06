@extends('admin.layouts.main')

@section('content')

<div class="pagetitle">
<h1>Edit Nasabah</h1>
</div>

<section class="section">

<div class="card">
<div class="card-body">

<h5 class="card-title">Form Edit Nasabah</h5>

<form action="{{ route('nasabah.update', $nasabah->id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label>Nama</label>
<input type="text" name="nama" class="form-control" value="{{ $nasabah->nama }}">
</div>

<div class="mb-3">
<label>NIK</label>
<input type="text" name="nik" class="form-control" value="{{ $nasabah->nik }}">
</div>

<div class="mb-3">
<label>Alamat</label>
<input type="text" name="alamat" class="form-control" value="{{ $nasabah->alamat }}">
</div>

<div class="mb-3">
<label>No HP</label>
<input type="text" name="no_hp" class="form-control" value="{{ $nasabah->no_hp }}">
</div>

<div class="mb-3">

<label>Jenis Kelamin</label><br>

<input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki

<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan

</div>

<button class="btn btn-success">
Update
</button>

</form>

</div>
</div>

</section>

@endsection
