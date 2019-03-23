<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);

        DB::table('categories')->insert([
            'category_name' => 'Teszt kategoria',
        ]);

    }

}
