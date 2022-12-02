<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class eventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 5; $i++) {
            // insert data ke table pegawai menggunakan Faker
            DB::table('events')->insert([  
                'nama' => $faker->nama,
                'waktu_mulai' => $faker->waktu_mulai ,
                'waktu_selesai'=> $faker->waktu_selesai,
                'deskripsi_singkat' => $faker->deskripsi_singkat,
                'jenis'=> $faker->jenis,
                'lokasi'=> $faker->lokasi,
                'penyelenggara' => $faker->penyelenggara,
                'kontak'=> $faker->kontak,
                'deskripsi' => $faker->deskripsi,
                'penjelasan'=> $faker->penjelasan,
            ]);
        }
    }
}
