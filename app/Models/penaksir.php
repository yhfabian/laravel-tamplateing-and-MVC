<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penaksir extends Model
{
    use HasFactory;
    protected $fillable = [

'nama_barang',
'kategori',
'kondisi',
'range_harga_min',
'range_harga_max'

];
}
