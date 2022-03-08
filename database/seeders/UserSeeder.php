<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder {
    public function run() {
        $informacioncentroId = DB::table('informacioncentro')->pluck('id');
        $faker = Faker::create();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        for($i = 0; $i < 20; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' =>  $faker->email,
                'imagen' => $faker->imageUrl($width = 640, $height = 480),
                'facebook' => 'https://es-es.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://es.linkedin.com/',
                'titulacion' => $faker->jobTitle,
                'presentacion' => $faker->sentence($nbWords = 10, $variableNbWords = true),
                'centro_id' => $faker->randomElement($informacioncentroId),
                'password' => $faker->password,
            ]);
        }
    }
}
