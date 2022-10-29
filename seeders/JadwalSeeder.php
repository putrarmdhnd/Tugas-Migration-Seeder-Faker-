<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Dosen;
use App\Models\Matakuliah;

use Faker\Factory as Faker;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 0; $i <= 20; $i++){

            $dosen = Dosen::inRandomOrder()->first();
            $mata_kuliah = Matakuliah::inRandomOrder()->first();

            DB::table('jadwals')->insert([
                'id' => rand(1, 99),
                'kode_matakuliah'=> $mata_kuliah->kode_matakuliah,
                'nidn'=> $dosen->nidn,
                'kelas'=> $faker->randomElement(['A','B','C']),
                'hari' => $faker->dayOfWeek,
                'jam'=>$faker->time,
                'created_at' => date("Y-m-d H:i:s"),
                'update_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
