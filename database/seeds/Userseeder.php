<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         //
         DB::table('users')->insert([
            'name' => 'administrador',
            'email' => 'Luis@byw.mx',
            'password' => bcrypt('webinar2020') // secret
        ]);
    }
}
