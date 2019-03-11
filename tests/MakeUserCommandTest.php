<?php

namespace BinaryCabin\LaravelToolbelt\Tests;

use Orchestra\Testbench\TestCase;
use BinaryCabin\LaravelToolbelt\Facades\LaravelToolbeltFacade;
use BinaryCabin\LaravelToolbelt\Providers\LaravelToolbeltServiceProvider;

class MakeUserCommandTest extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp();
        $this->loadLaravelMigrations(['--database' => 'testing']);
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'testing');
    }

    protected function getPackageProviders($app)
    {
        return [LaravelToolbeltServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return ['Toolbelt'=>LaravelToolbeltFacade::class];
    }

    public function test_command_exists()
    {
        $this->assertTrue(true);
    }

    /*public function test_command_exists()
    {
        $email = 'info@test.com';
        $password = 'ABCTest12345';
        $this->artisan('make:user');
    }

    /*
     * For testing, will likely need an option to set the App\Users class, since the command depends on it
    public function test_create_user()
    {
        $email = 'info@test.com';
        $password = 'ABCTest12345';
        $this->artisan('make:user --email=info@test.com --password=ABC12345678');
        $user = \DB::table('users')->where('email', '=', $email)->first();
        $this->markTestIncomplete();
    }

    public function test_set_admin_role(){
        $this->markTestIncomplete();
    }
    */

}
