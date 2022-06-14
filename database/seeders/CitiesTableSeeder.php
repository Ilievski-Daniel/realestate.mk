<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'name' => 'Skopje',
        ]);

        City::create([
            'name' => 'Bitola',
        ]);
        
        City::create([
            'name' => 'Kumanovo',
        ]);

        City::create([
            'name' => 'Prilep',
        ]);

        City::create([
            'name' => 'Tetovo',
        ]);

        City::create([
            'name' => 'Veles',
        ]);

        City::create([
            'name' => 'Štip',
        ]);

        City::create([
            'name' => 'Ohrid',
        ]);

        City::create([
            'name' => 'Gostivar',
        ]);

        City::create([
            'name' => 'Strumica',
        ]);

        City::create([
            'name' => 'Kavadarci',
        ]);

        City::create([
            'name' => 'Kočani',
        ]);

        City::create([
            'name' => 'Kičevo',
        ]);

        City::create([
            'name' => 'Struga',
        ]);

        City::create([
            'name' => 'Radoviš',
        ]);

        City::create([
            'name' => 'Gevgelija',
        ]);

        City::create([
            'name' => 'Debar',
        ]);

        City::create([
            'name' => 'Kriva Palanka',
        ]);

        City::create([
            'name' => 'Sveti Nikole',
        ]);

        City::create([
            'name' => 'Negotino',
        ]);

        City::create([
            'name' => 'Delčevo',
        ]);

        City::create([
            'name' => 'Vinica',
        ]);

        City::create([
            'name' => 'Resen',
        ]);

        City::create([
            'name' => 'Probištip',
        ]);

        City::create([
            'name' => 'Berovo',
        ]);

        City::create([
            'name' => 'Kratovo',
        ]);

        City::create([
            'name' => 'Bogdanci',
        ]);

        City::create([
            'name' => 'Kruševo',
        ]);

        City::create([
            'name' => 'Makedonska Kamenica',
        ]);

        City::create([
            'name' => 'Valandovo',
        ]);

        City::create([
            'name' => 'Makedonski Brod',
        ]);

        City::create([
            'name' => 'Demir Kapija',
        ]);

        City::create([
            'name' => 'Pehčevo',
        ]);

        City::create([
            'name' => 'Demir Hisar',
        ]);
    }
}
