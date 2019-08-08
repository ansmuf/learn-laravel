<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert([
            'nm_produk' => Str::random(10),
            // 'email' => Str::random(10).'@gmail.com',
            // 'password' => bcrypt('password'),
        ]);
    }
}
