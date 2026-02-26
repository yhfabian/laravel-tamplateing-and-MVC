<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

public function up(): void
{

Schema::create('penaksirs', function (Blueprint $table) {

$table->id();

$table->string('nama_barang');

$table->string('kategori');

$table->string('kondisi');

$table->decimal('range_harga_min',15,2);

$table->decimal('range_harga_max',15,2);

$table->timestamps();

});

}


public function down(): void
{

Schema::dropIfExists('penaksirs');

}

};
