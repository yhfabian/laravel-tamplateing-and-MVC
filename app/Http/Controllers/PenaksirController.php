<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penaksir;

class PenaksirController extends Controller
{

public function index()
{

    $penaksir = Penaksir::all();

    return view('admin.pages.penaksir.index', compact('penaksir'));

}

public function create()
{
    return view('admin.pages.penaksir.create');
}

public function store(Request $request)
{

    Penaksir::create($request->all());

    return redirect()->route('penaksir.index');

}

public function edit($id)
{

    $penaksir = Penaksir::findOrFail($id);

    return view('admin.pages.penaksir.edit', compact('penaksir'));

}

public function update(Request $request, $id)
{

    $penaksir = Penaksir::findOrFail($id);

    $penaksir->update($request->all());

    return redirect()->route('penaksir.index');

}

public function destroy($id)
{

    $penaksir = Penaksir::findOrFail($id);

    $penaksir->delete();

    return redirect()->route('penaksir.index');

}

}
