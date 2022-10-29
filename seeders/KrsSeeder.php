<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;

use Faker\Factory as Faker;

class KrsSeeder extends Seeder
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

            $mahasiswa = Mahasiswa::inRandomOrder()->first();
            $matakuliah = Matakuliah::inRandomOrder()->first();

            DB::table('krs')->insert([
                'id' => rand(1, 99),
                'npm'=> $mahasiswa->npm,
                'kode_matakuliah'=> $matakuliah->kode_matakuliah,
                'created_at' => date("Y-m-d H:i:s"),
                'update_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
