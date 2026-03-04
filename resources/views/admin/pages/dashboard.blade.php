@extends('admin.layouts.main')

@section('content')

<section class="section dashboard">

<!-- FILTER TANGGAL -->
<div class="row mb-3">
    <div class="col-lg-12">
        <form method="GET">
            <div class="row">
                <div class="col-md-3">
                    <input type="date" name="start_date" class="form-control">
                </div>
                <div class="col-md-3">
                    <input type="date" name="end_date" class="form-control">
                </div>
                <div class="col-md-3">
                    <button class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row">

    <!-- Total Barang -->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5>Total Barang</h5>
                <h3>{{ $totalPenaksir }}</h3>
            </div>
        </div>
    </div>

    <!-- Harga Rata-rata -->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5>Rata-rata Harga Min</h5>
                <h3>Rp {{ number_format($rataRata,0,',','.') }}</h3>
            </div>
        </div>
    </div>

</div>

<div class="row">

    <!-- PIE KATEGORI -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5>Grafik Kategori</h5>
                <canvas id="kategoriChart"></canvas>
            </div>
        </div>
    </div>

    <!-- BAR KONDISI -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5>Grafik Kondisi</h5>
                <canvas id="kondisiChart"></canvas>
            </div>
        </div>
    </div>

</div>

</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // KATEGORI PIE
    const kategoriData = @json($kategori);
    new Chart(document.getElementById('kategoriChart'), {
        type: 'pie',
        data: {
            labels: kategoriData.map(i => i.kategori),
            datasets: [{
                data: kategoriData.map(i => i.total)
            }]
        }
    });

    // KONDISI BAR
    const kondisiData = @json($kondisi);
    new Chart(document.getElementById('kondisiChart'), {
        type: 'bar',
        data: {
            labels: kondisiData.map(i => i.kondisi),
            datasets: [{
                label: 'Jumlah',
                data: kondisiData.map(i => i.total)
            }]
        }
    });
</script>

@endsection
