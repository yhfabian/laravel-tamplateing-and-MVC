<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penaksir;
class AdminController extends Controller
{



public function dashboard(Request $request)
{
    $query = Penaksir::query();

    // FILTER TANGGAL
    if ($request->start_date && $request->end_date) {
        $query->whereBetween('created_at', [
            $request->start_date,
            $request->end_date
        ]);
    }

    $totalPenaksir = $query->count();

    // Grafik Kategori
    $kategori = $query->select('kategori')
        ->selectRaw('count(*) as total')
        ->groupBy('kategori')
        ->get();

    // Grafik Kondisi
    $kondisi = $query->select('kondisi')
        ->selectRaw('count(*) as total')
        ->groupBy('kondisi')
        ->get();

    // Statistik harga rata-rata
    $rataRata = $query->avg('range_harga_min');

    return view('admin.pages.dashboard', compact(
        'totalPenaksir',
        'kategori',
        'kondisi',
        'rataRata'
    ));
}


public function tables()
{
    $penaksir = Penaksir::all();

    return view('admin.pages.tables', compact('penaksir'));
}


public function profile()
{
    return view('admin.pages.profile');
}


}



