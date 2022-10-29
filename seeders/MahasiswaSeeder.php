<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Dosen;

use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
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

            $class = Dosen::inRandomOrder()->first();

            DB::table('mahasiswas')->insert([
                'npm' => rand(0000000000, 9999999999),
                'nidn'=> $class->nidn,
                'nama' => $faker->name,
                'created_at' => date("Y-m-d H:i:s"),
                'update_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
