@extends('admin.layouts.main')

@section('content')

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Daftar Nasabah</h5>

        <a href="{{ route('nasabah.create') }}" class="btn btn-primary mb-3">
            Tambah Nasabah
        </a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($nasabah as $n)
                <tr>
                    <td>{{ $n->id }}</td>
                    <td>{{ $n->nama }}</td>
                    <td>{{ $n->nik }}</td>
                    <td>{{ $n->no_hp }}</td>
                    <td>{{ $n->alamat }}</td>
                    <td>{{ $n->jenis_kelamin }}</td>
                    <td>
                        <a href="{{ route('nasabah.edit',$n->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('nasabah.destroy',$n->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection
