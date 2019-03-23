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

    }

}
