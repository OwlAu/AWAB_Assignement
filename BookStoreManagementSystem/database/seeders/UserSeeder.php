<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
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
            'name'=>'Au Jun Hong',
            'email'=>'aujunhong@gmail.com',
            'role'=>'customer',
            'password'=> Hash::make('123456789'),
        ]);
        User::create([
            'name'=>'Nelson',
            'email'=>'nelson@gmail.com',
            'role'=>'moderator',
            'password'=> Hash::make('123456789'),
        ]);
    }
}
