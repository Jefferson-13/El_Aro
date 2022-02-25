<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Corraluno;
use App\Models\Corraldos;
use App\Models\Matadero;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     
 $this->call(CorralunoSeeder::class);
Corraldos::factory(2)->create();
Matadero::factory(10)->create();

    }
}
