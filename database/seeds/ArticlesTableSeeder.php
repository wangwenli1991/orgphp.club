<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Article::class, 50)->create()->each(function ($user) {
//            $user->save(factory(App\User::class)->make());
        });

    }
}
