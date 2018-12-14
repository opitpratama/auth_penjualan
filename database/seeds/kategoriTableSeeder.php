<?php

use Illuminate\Database\Seeder;
use App\kategori;

class kategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        kategori::create([       
        	'nama_kategori' => 'Makanan'      
        ]);      
        kategori::create([ 
        	'nama_kategori' => 'Perlengkapan Rumah Tangga'      
        ]);      
        kategori::create([       
        	'nama_kategori' => 'Alat Belajar'      
        ]);
    }
}
