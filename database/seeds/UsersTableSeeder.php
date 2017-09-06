<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'client',
            'email' => 'admin@centralny.kz',
            'password' => bcrypt('L6i3Bfpz7V'),
        ]);
    }
}
