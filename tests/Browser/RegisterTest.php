<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Carbon\Carbon;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;

    /** @test */
    public function register_with_no_captcha_check()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('Password')
                    ->assertSee('Captcha')
                    ->assertSee('Register')
                    ->type('first_name','Bak')
                    ->type('last_name','David')
                    ->type('birth_date','09/02/1996')
                    ->select('gender','Male')
                    ->type('address','Kumuki utca 62')
                    ->type('city','Kumuki city')
                    ->type('country','Romania')
                    ->type('zipcode','666666')
                    ->type('email','bak.david96@gmail.com')
                    ->type('telephone','1234567890')
                    ->type('university','Sapientia')
                    ->type('department','Szamitastechnika')
                    ->type('password','qwe')
                    ->type('password_confirmation','qwe')
                    ->press('Register')
                    ->pause(1000)
                    ->assertSee('The captcha field is required!')
                    ->assertPathIs('/register');
        });
    }

    /** @test */
    public function register_with_valid_credentials()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('Password')
                    ->assertSee('Captcha')
                    ->assertSee('Register')
                    ->type('first_name','Bak')
                    ->type('last_name','David')
                    ->type('birth_date','09/02/1996')
                    ->select('gender','Male')
                    ->type('address','Kumuki utca 62')
                    ->type('city','Kumuki city')
                    ->type('country','Romania')
                    ->type('zipcode','666666')
                    ->type('email','bak.david96@gmail.com')
                    ->type('telephone','1234567890')
                    ->type('university','Sapientia')
                    ->type('department','Szamitastechnika')
                    ->type('password','qwe')
                    ->type('password_confirmation','qwe')
                    //->type('g-recaptcha-response','1') /////
                    ->pause(1000)
                    ->press('Register')
                    ->pause(1000)
                    //->assertSee('The g-recaptcha-response field is required.')
                    ->assertPathIs('/email/verify')
                    ->logout();
        });
    }
}
