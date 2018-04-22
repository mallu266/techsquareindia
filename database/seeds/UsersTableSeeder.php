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
        $users=new App\User();
        $users->name='Mallikarjun';
        $users->email='admin@gmail.com';
        $users->password=bcrypt('123456');
        $users->save();
    }
}
