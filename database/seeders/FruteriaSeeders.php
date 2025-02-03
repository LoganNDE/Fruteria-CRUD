<?php

namespace Database\Seeders;

use App\Models\Fruteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FruteriaSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $frutas = ['manzana', 'pera', 'platano', 'fresa', 'naranja', 'sandia', 'melon', 'uva', 'kiwi', 'mango',
        'coco', 'papaya', 'piña', 'cereza', 'ciruela', 'albaricoque', 'aguacate', 'higo', 'granada', 'limon'
        ];

        $faker = Faker::create();
        for ($i = 0;  $i < count($frutas) && $i < 10; $i++){
            $fruta = new Fruteria();
            $fruta->nombre = $faker->randomElement($frutas);
            $fruta->imagen = 'imagen' . $i;
            $fruta->temporada = $faker->randomElement(['verano', 'invierno', 'otoño', 'primavera']);
            $fruta->precio = $faker->randomFloat(2, 0.5, 10);
            $fruta->stock = $faker->numberBetween(0, 100);
            $fruta->created_at= date('Y-m-d H:m:s'); //now, alternativa
            $fruta->updated_at = date('Y-m-d H:m:s');
            $fruta->save();
        }
    }
}
