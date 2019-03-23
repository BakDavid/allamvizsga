<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Carbon\Carbon;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    /** @test */
    public function login_with_valid_credentials_and_not_verified_email()
    {
        $user = factory(User::class)->create([
            'email' => 'bak.david96@gmail.com',
        ]);

        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertSee('Password')
                    ->assertSee('Login')
                    ->type('email','bak.david96@gmail.com')
                    ->type('password','qwe')
                    ->press('Login')
                    ->pause(1000)
                    ->assertPathIs('/email/verify')
                    ->logout();
        });
    }

    /** @test */
    public function login_with_valid_credentials_and_verified_email()
    {
        $user = factory(User::class)->create([
            'email' => 'bak.david96@gmail.com',
            'email_verified_at' => Carbon::now(),
        ]);

        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->pause(1000)
                    ->assertSee('Password')
                    ->assertSee('Login')
                    ->type('email','bak.david96@gmail.com')
                    ->type('password','qwe')
                    ->press('Login')
                    ->pause(1000)
                    ->assertPathIs('/home')
                    ->logout();
        });
    }

    /** @test */
    public function login_with_invalid_credentials()
    {
        $user = factory(User::class)->create([
            'email' => 'bak.david96@gmail.com',
            'email_verified_at' => Carbon::now(),
        ]);

        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->pause(1000)
                    ->assertSee('Password')
                    ->assertSee('Login')
                    ->type('email','rosszemail@gmail.com')
                    ->type('password','rosszjelszo')
                    ->press('Login')
                    ->pause(1000)
                    ->assertPathIs('/login')
                    ->assertSee('These credentials do not match our records.');
        });
    }
}
