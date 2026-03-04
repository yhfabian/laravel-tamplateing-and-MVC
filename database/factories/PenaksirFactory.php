<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PenaksirFactory extends Factory
{

public function definition(): array
{

return [

'nama_barang' => $this->faker->randomElement([
'Laptop Asus',
'HP iPhone 13',
'TV Samsung',
'Kamera Canon',
'Playstation 5'
]),

'kategori' => $this->faker->randomElement([
'Elektronik',
'Handphone',
'Gaming',
'Kamera'
]),

'kondisi' => $this->faker->randomElement([
'Baru',
'Bekas',
'Bagus',
'Rusak Ringan'
]),

'range_harga_min' => $this->faker->numberBetween(1000000,5000000),

'range_harga_max' => $this->faker->numberBetween(6000000,15000000),

];

}

}
