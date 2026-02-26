<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penaksir;
class AdminController extends Controller
{

public function dashboard()
{
    return view('admin.pages.dashboard');
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



