<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NasabahController extends Controller
{
    // INDEX
    public function index()
    {
        $nasabah = DB::table('nasabahs')->get();
        return view('admin.pages.nasabah.index', compact('nasabah'));
    }

    // CREATE
    public function create()
    {
        return view('admin.pages.nasabah.create');
    }

    // STORE
    public function store(Request $request)
    {
        DB::table('nasabahs')->insert([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('nasabah.index');
    }

    // EDIT
    public function edit($id)
    {
        $nasabah = DB::table('nasabahs')->where('id', $id)->first();
        return view('admin.pages.nasabah.edit', compact('nasabah'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        DB::table('nasabahs')
            ->where('id', $id)
            ->update([
                'nama' => $request->nama,
                'nik' => $request->nik,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'updated_at' => now()
            ]);

        return redirect()->route('nasabah.index');
    }

    // DELETE
    public function destroy($id)
    {
        DB::table('nasabahs')->where('id', $id)->delete();
        return redirect()->route('nasabah.index');
    }
}
