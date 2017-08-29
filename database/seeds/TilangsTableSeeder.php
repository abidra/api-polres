<?php

use Illuminate\Database\Seeder;

class TilangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tilangs')->insert([
            'no_tilang' => rand(1000,100000),
            'nama' => str_random(10),
            'alamat' => str_random(10),
			'ttl' => str_random(10),
            'no_ktp' => rand(10000,1500000),
            'umur' => str_random(10,100),
            'pendidikan' => str_random(10),
            'pekerjaan' => str_random(10),
            'status' => str_random(10),				
        ]);
    }
}
