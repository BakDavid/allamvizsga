<?php

namespace Tests\Browser;

use App\User;
use App\Category;
use App\Conference;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Carbon\Carbon;

class SubmissionMakeTest extends DuskTestCase
{
    use DatabaseMigrations;

    /** @test */
    public function create_submission_with_valid_inputs()
    {
        $user = factory(User::class)->create([
            'email' => 'bak.david96@gmail.com',
            'email_verified_at' => Carbon::now(),
        ]);

        $category = factory(Category::class)->create([
            'category_name' => 'Teszt kategoria',
        ]);

        $conference = factory(Conference::class)->create([
            'name' => 'Teszt konferencia',
        ]);

        $this->browse(function (Browser $browser) {
            //We first login to our website
            $browser->visit('/login')
                    ->assertSee('Password')
                    ->assertSee('Login')
                    ->type('email','bak.david96@gmail.com')
                    ->type('password','qwe')
                    ->press('Login')
                    ->visit('/submission')
                    //Now we go to submissions to create one
                    ->assertPathIs('/submission')
                    ->assertSee('Basic information')
                    ->assertSee('Category')
                    ->type('title','Teszt dolgozat')
                    ->select('category','Teszt kategoria')
                    ->type('key_words','teszt, key, words')
                    ->type('abstract','Rovid absztrakt teszt leiras...')
                    ->attach('#thesis_name_upload', storage_path('/app/pdf/thesis/TesztFajl.docx'))
                    ->select('conference','Teszt konferencia')
                    ->type('comment','Teszt komment ...')
                    ->press('Create Submission')
                    ->pause(2000)
                    ->assertPathIs('/submission')
                    ->assertValue('#conference','')
                    ->assertValue('#key_words','teszt, key, words')
                    //->assertSee("Submission created successfully!")
                    ->logout();
        });
    }


}
