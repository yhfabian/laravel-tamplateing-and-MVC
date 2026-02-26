<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penaksir extends Model
{
    protected $fillable = [

'nama_barang',
'kategori',
'kondisi',
'range_harga_min',
'range_harga_max'

];
}
