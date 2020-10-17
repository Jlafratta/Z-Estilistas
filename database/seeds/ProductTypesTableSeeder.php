<?php

use App\Models\ProductType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // limpio toda la data
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        ProductType::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        ProductType::create([
            'name' => 'Corte',
        ]);

        ProductType::create([
            'name' => 'Tintura',
        ]);

    }
}