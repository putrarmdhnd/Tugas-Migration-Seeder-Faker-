<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        
            DB::table('matakuliahs')->insert([
                'kode_matakuliah' => rand(00000000, 99999999),
                'nama_matakuliah' => 'Pancasila',
                'sks' => $faker->numberBetween(1, 4),
                'created_at' => date("Y-m-d H:i:s"),
                'update_at' => date("Y-m-d H:i:s")
            ]);
            DB::table('matakuliahs')->insert([
                'kode_matakuliah' => rand(00000000, 99999999),
                'nama_matakuliah' => 'Bahasa Indonesia',
                'sks' => $faker->numberBetween(1, 4),
                'created_at' => date("Y-m-d H:i:s"),
                'update_at' => date("Y-m-d H:i:s")
            ]);
            DB::table('matakuliahs')->insert([
                'kode_matakuliah' => rand(00000000, 99999999),
                'nama_matakuliah' =>'Matematika 1 ',
                'sks' => $faker->numberBetween(1, 4),
                'created_at' => date("Y-m-d H:i:s"),
                'update_at' => date("Y-m-d H:i:s")
            ]);
            DB::table('matakuliahs')->insert([
                'kode_matakuliah' => rand(00000000, 99999999),
                'nama_matakuliah' =>'Fisika 1',
                'sks' => $faker->numberBetween(1, 4),
                'created_at' => date("Y-m-d H:i:s"),
                'update_at' => date("Y-m-d H:i:s")
            ]);
            DB::table('matakuliahs')->insert([
                'kode_matakuliah' => rand(00000000, 99999999),
                'nama_matakuliah' =>'Kimia',
                'sks' => $faker->numberBetween(1, 4),
                'created_at' => date("Y-m-d H:i:s"),
                'update_at' => date("Y-m-d H:i:s")
            ]);
            DB::table('matakuliahs')->insert([
                'kode_matakuliah' => rand(00000000, 99999999),
                'nama_matakuliah' =>'Dasar Pemrograman',
                'sks' => $faker->numberBetween(1, 4),
                'created_at' => date("Y-m-d H:i:s"),
                'update_at' => date("Y-m-d H:i:s")
            ]);
        
    }
}
