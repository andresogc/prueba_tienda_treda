<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    private $data=[
        [
            'nombre' => 'Camiseta',
            'SKU' => 'HO-CA-RO-L-001',
            'descripcion' => 'Camiseta en v roja',
            'valor' => '30000',
            'tienda_id' => 1,
            'imagen' => 'camiseta.jpg',
        ],
        [
            'nombre' => 'Pantalon',
            'SKU' => 'HO-PA-AZ-34-002',
            'descripcion' => 'Pantalon azul',
            'valor' => '70000',
            'tienda_id' => 1,
            'imagen' => 'pantalon.jpg',
        ],
        [
            'nombre' => 'Chaqueta',
            'SKU' => 'MU-CH-NE-M-003',
            'descripcion' => 'Chaqueta negra',
            'valor' => '150000',
            'tienda_id' => 1,
            'imagen' => 'chaqueta.jpg',
        ],
        [
            'nombre' => 'Gorra',
            'SKU' => 'HO-GO-VE-M-004',
            'descripcion' => 'Gorra verde',
            'valor' => '35000',
            'tienda_id' => 2,
            'imagen' => 'gorra.jpg',
        ],
        [
            'nombre' => 'Pijama',
            'SKU' => 'MU-PI-BL-M-005',
            'descripcion' => 'Pijama blanca',
            'valor' => '55000',
            'tienda_id' => 2,
            'imagen' => 'pijama.jpg',
        ],
        [
            'nombre' => 'Televisor',
            'SKU' => 'UN-TV-NE-21-006',
            'descripcion' => 'tv samsung 21 pulgadas',
            'valor' => '1500000',
            'tienda_id' => 3,
            'imagen' => 'televisor.jpg',
        ],
        [
            'nombre' => 'portatil',
            'SKU' => 'UN-PO-NE-21-007',
            'descripcion' => 'portatil negro',
            'valor' => '30000',
            'tienda_id' => 3,
            'imagen' => 'portatil.jpg',
        ],
        [
            'nombre' => 'consola Xbox',
            'SKU' => 'UN-XB-NE-UU-008',
            'descripcion' => 'consola negra',
            'valor' => '30000',
            'tienda_id' => 3,
            'imagen' => 'consolaxbox.jpg',
        ],
        [
            'nombre' => 'Tapete persa',
            'SKU' => 'UN-TP-BG-40-009',
            'descripcion' => 'Tapete persa beige',
            'valor' => '240000',
            'tienda_id' => 2,
            'imagen' => 'Tapetepersa.jpg',
        ],
       
    ];

    public function run()
    {
        //
        DB::table('productos')->insert($this->data);
        
    }
}
