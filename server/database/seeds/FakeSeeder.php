<?php

use Illuminate\Database\Seeder;

class FakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Author', 10)->create();
        factory('App\Category', 5)->create();
        factory('App\Novel', 50)->create();
        factory('App\Article', 5000)->create();
    }
}
