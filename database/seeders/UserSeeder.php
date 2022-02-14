<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user_id' => '0000000000',
            'name' => 'root',
            'last_name1' => 'Apellido1',
            'last_name2' => 'Apellido2',
            'email' =>  'root@root.com', 
            'address' =>  'aisdjasoidjaosid',
            'phone' =>  '0990146541',
            'password' =>  Hash::make('12345678'), 
        ]);
    }
}