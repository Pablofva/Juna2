<?php

use App\MateriasCom;
use Illuminate\Database\Seeder;

class MateriasComsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MateriasCom::create([
            'nombre' => 'Matematica I',
            'instituto_id' => 1,
            'anio' => 1
        ]);
        MateriasCom::create([
            'nombre' => 'Matematica II',
            'instituto_id' => 1,
            'anio' => 2
        ]);
        MateriasCom::create([
            'nombre' => 'Matematica III',
            'instituto_id' => 1,
            'anio' => 2
        ]);
        MateriasCom::create([
            'nombre' => 'Fisica I',
            'instituto_id' => 1,
            'anio' => 2
        ]);
        MateriasCom::create([
            'nombre' => 'Fisica II',
            'instituto_id' => 1,
            'anio' => 3
        ]);
        MateriasCom::create([
            'nombre' => 'Quimica General',
            'instituto_id' => 1,
            'anio' => 3
        ]);
        MateriasCom::create([
            'nombre' => 'Probabilidad y Estadistica',
            'instituto_id' => 1,
            'anio' => 3
        ]);
        

    }
}
