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
        $user = new App\User;
        $user->name = 'Shiva Sapra';
        $user->email = 'shivasapra24@gmail.com';
        $user->password = bcrypt('password');
        $user->admin = 1;
        $user->save();
    }
}
