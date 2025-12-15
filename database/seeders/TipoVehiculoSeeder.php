<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipo;
class TipoVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipos = ['Carro', 'Moto', 'Camioneta'];
        
        foreach($tipos as $tipo){
            Tipo::create(['nombre' => $tipo]);
        }
    }
}
