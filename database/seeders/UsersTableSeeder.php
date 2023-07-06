<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Admin Test';
        $user->email = 'admin@test.com';
        $user->password = Hash::make('85245600');
        $user->admin = 1;
        $user->timestamps = false;
        $user->save();
    }
}
