<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    private $data=[
        [
            'nombre' => 'Tienda Marte',
            'fecha_apertura' => '2018-10-14',
            
        ],
        [
            'nombre' => 'Tienda Luna',
            'fecha_apertura' => '2020-05-15',
            
        ],
        [
            'nombre' => 'Tienda Sol',
            'fecha_apertura' => '2015-02-01',
            
        ],
       
    ];

    public function run()
    {
        //
        DB::table('tiendas')->insert($this->data);
    }
}
