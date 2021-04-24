<?php

use Illuminate\Database\Seeder;

// 12
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = factory(\App\User::class, 30)->create();
        $user = $users[0];
        $user->name = 'zyb';
        $user->email = '111@qq.com';
        $user->save();
    }
}
