<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nik' => '92192129',
            'name' => 'Iday Gans',
            'alamat' => 'Jln doang jadian kaga',
            'telp' => '0821821812',
            'email' => 'iday@gmail.com',
            'password' => bcrypt('123')
        ]);
    }
}
