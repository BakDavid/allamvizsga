<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class)->create([
            'first_name' => 'Bak',
            'last_name' => 'David',
            'email' => 'bak.david96@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
        ]);

        factory(App\User::class)->create([
            'first_name' => 'Chair',
            'last_name' => 'Man',
            'email' => 'chair@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'user_type' => 'chair',
        ]);

        factory(App\User::class)->create([
            'first_name' => 'Reviewer',
            'last_name' => 'Man',
            'email' => 'reviewer@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'user_type' => 'reviewer',
        ]);

    }

}
