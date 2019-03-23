<?php

use Illuminate\Database\Seeder;

class SubmissionSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);
        DB::table('submissions')->insert([
            'title' => 'Teszt submission',
            'key_words' => 'Teszt, key, words',
            'abstract' => 'Ez egy rovidebb absztrakt, melyet teszt celjabol hoztam letre.',
            'thesis_name_upload' => 'TesztFajl.docx',
            'comment' => 'Komment a submissionnek teszt celjabol',
            'category_id' => '1',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('user__submissions')->insert([
            'user_id' => '1',
            'submission_id' => '1',
        ]);

        DB::table('submission__conferences')->insert([
            'submission_id' => '1',
            'conference_id' => '1',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Bak',
            'last_name' => 'David',
            'email' => 'bak.david96@gmail.com',
            'student' => '1',
            'address' => 'Teszt utca',
            'city' => 'Teszt varos',
            'country' => 'Teszt orszag',
            'zipcode' => '000111',
            'telephone' => '1234567890',
            'university' => 'Sapientia Teszt',
            'department' => 'Szamitastechnika Teszt',
            'birth_date' => '1996-02-02',
            'gender' => 'Male',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Jancsi',
            'last_name' => 'Ferko',
            'email' => 'ferko@gmail.com',
            'student' => '1',
            'address' => 'Teszt utca 2',
            'city' => 'Teszt varos 2',
            'country' => 'Teszt orszag 2',
            'zipcode' => '000222',
            'telephone' => '2224567890',
            'university' => 'Sapientia Teszt 2',
            'department' => 'Szamitastechnika Teszt 2',
            'birth_date' => '1996-02-02',
            'gender' => 'Male',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '1',
            'cooperator_id' => '1',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '1',
            'cooperator_id' => '2',
        ]);
    }

}
