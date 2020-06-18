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
        DB::table('users')->insert([
            'name' => 'juan',
            'email' => 'juan@prueba.com',
            'password' => Hash::make('1234567'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
