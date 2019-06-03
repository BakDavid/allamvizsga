<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);
        $this->call(PageSeeder::class);

        $this->call(UserSeeder::class);

        $this->call(CategorySeeder::class);

        $this->call(FactorySeeder::class);

        $this->call(SubmissionSeeder::class);

        $this->call(ReviewerSeeder::class);
    }

}
