<?php

use Illuminate\Database\Seeder;

class ReviewerSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);
        DB::table('reviewer__submissions')->insert([
            'user_id' => '3',
            'submission_id' => '1',
        ]);
    }

}
