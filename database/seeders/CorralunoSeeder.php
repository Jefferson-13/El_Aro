<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Corraluno;

class CorralunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Corraluno::create
        ([
            'nombremarrano' => 'Maria Fernanda Lopez Higuita FOX FOX PORSIEMPRE',
            'mesesdevida' => '216',
            'estado' => 'apestado(desnutricion total)',
            'comidaconsum' => 'hombres(lo que caiga)',
        ]);

        Corraluno::factory(5)->create();

    }

}