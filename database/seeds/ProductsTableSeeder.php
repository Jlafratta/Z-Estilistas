<?php

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
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
        Product::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Product::create([
            'name' => 'Clásico | Afeitadora - Navaja',
            'time' => '00:30:00',
            'price' => 300,
            'description' => 'Corte clásico o con afeitadora o navaja.
            Incluye corte clásico a tijera, corte degradado con maquina o afeitadora, cortes texturados.',
            'type_id' => 1
        ]);
        Product::create([
            'name' => 'Clásico | Afeitadora - Navaja + Ceja',
            'time' => '00:45:00',
            'price' => 330,
            'description' => 'Incluye corte clásico a tijera, corte degradado con maquina o afeitadora, cortes texturados + corte de ceja.',
            'type_id' => 1
        ]);
        Product::create([
            'name' => 'Z Premium',
            'time' => '00:45:00',
            'price' => 400,
            'description' => 'Corte hombre con afeitadora/navaja (opcional) + barba.',
            'type_id' => 1
        ]);

        Product::create([
            'name' => 'Clarito con corte',
            'time' => '02:00:00',
            'price' => 1000,
            'description' => '',
            'type_id' => 2
        ]);
        Product::create([
            'name' => 'Look platinado',
            'time' => '02:30:00',
            'price' => 1300,
            'description' => '',
            'type_id' => 2
        ]);
        Product::create([
            'name' => 'Look platinado con corte',
            'time' => '02:45:00',
            'price' => 1500,
            'description' => '',
            'type_id' => 2
        ]);

        // Product::create([
        //     'name' => 'Cera fijadora',
        //     'price' => 400,
        //     'description' => 'Ceras aromatizadas fijadoras de 30grs y 60grs.
        //     Contamos con varios aromas: - Maracuyá - Limón - Sandía - Frutos Rojos.',
        //     'type_id' => 3
        // ]);
        // Product::create([
        //     'name' => 'Aceite para Barba',
        //     'price' => 350,
        //     'description' => 'Suaviza, hidrata la piel debajo, reduce la irritación y la fortalece permitiendo un crecimiento saludable de la barba, dejando un aroma muy delicioso durante todo el día.',
        //     'type_id' => 3
        // ]);
        // Product::create([
        //     'name' => 'Shampoo ANTI-AGE',
        //     'price' => 500,
        //     'description' => 'Contiene ORTIGA+, su uso diario mejora la circulación sanguínea del cuero cabelludo tonificando y fortaleciendo la fibra capilar.
        //     Gracias a su componente antioxidante , PANTENOL, recupera la elasticidad del cabello previniendo el envejecimiento prematuro de la fibra capilar.',
        //     'type_id' => 3
        // ]);
    }
}
