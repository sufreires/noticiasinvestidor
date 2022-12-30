<?php

Use App\Categoria;

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Categoria::create([
            'nome' => 'Política'
        ]);

        Categoria::create([
            'nome' => 'Esporte'
        ]);

        Categoria::create([
            'nome' => 'Economia'
        ]);
    }
}
