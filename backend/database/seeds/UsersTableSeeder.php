<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = new User();
        $u->email = 'demo@accordous.com.br';
        $u->name = 'Demo';
        $u->password = Hash::make('demo');
        $u->save();

    }
}
