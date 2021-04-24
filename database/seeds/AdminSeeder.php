<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 17 php artisan make:seeder AdminSeeder
        $users = factory(\App\Admin::class, 6)->create();
        $user = $users[0];
        $user->name = 'admin';
        $user->nickname = 'admin';
        $user->save();
    }
}
