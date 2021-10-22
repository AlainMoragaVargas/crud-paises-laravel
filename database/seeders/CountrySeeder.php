<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return DB::table('countries')->insert([
            [
                'country_name' => 'CHILE',
                'country_prefix' => '+56',
                'country_domain' => '.cl',
                'country_flag' => 'Bandera NO disponible'
            ],
            [
                'country_name' => 'ARGENTINA',
                'country_prefix' => '+54',
                'country_domain' => '.ar',
                'country_flag' => 'Bandera NO disponible'
            ],
            [
                'country_name' => 'BRASIL',
                'country_prefix' => '+55',
                'country_domain' => '.br',
                'country_flag' => 'Bandera NO disponible'
            ],
            [
                'country_name' => 'MÉXICO',
                'country_prefix' => '+52',
                'country_domain' => '.mx',
                'country_flag' => 'Bandera NO disponible'
            ],
            [
                'country_name' => 'CHINA',
                'country_prefix' => '+86',
                'country_domain' => '.cn',
                'country_flag' => 'Bandera NO disponible'
            ],
            [
                'country_name' => 'VENEZUELA',
                'country_prefix' => '+58',
                'country_domain' => '.ve',
                'country_flag' => 'Bandera NO disponible'
            ],
            [
                'country_name' => 'BOLIVIA',
                'country_prefix' => '+591',
                'country_domain' => '.bo',
                'country_flag' => 'Bandera NO disponible'
            ],
            [
                'country_name' => 'URUGUAY',
                'country_prefix' => '+598',
                'country_domain' => '.uy',
                'country_flag' => 'Bandera NO disponible'
            ]
        ]);
    }
}
