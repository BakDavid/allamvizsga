<?php

use Illuminate\Database\Seeder;

class FactorySeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);

        factory(App\User::class, 5)->create();
        factory(App\Conference::class, 5)->create();
        factory(App\Category::class, 5)->create();

    }

}
