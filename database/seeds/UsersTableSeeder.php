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
        factory(App\User::class, 50)->create()->each(function ($user) {
//            $user->save(factory(App\User::class)->make());
        });


        //
//        DB::table('users')->insert([
//            'name' => 'admin',
//            'email' => 'admin'.'@qq.com',
//            'password' => bcrypt('admin'),
//        ]);
    }
}
