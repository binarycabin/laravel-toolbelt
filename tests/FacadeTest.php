<?php

namespace BinaryCabin\LaravelToolbelt\Tests;

use BinaryCabin\LaravelToolbelt\Facades\LaravelToolbeltFacade;
use BinaryCabin\LaravelToolbelt\Providers\LaravelToolbeltServiceProvider;
use Orchestra\Testbench\TestCase;

class FacadeTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelToolbeltServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return ['Toolbelt'=>LaravelToolbeltFacade::class];
    }

    public function test_facade_works()
    {
        $this->assertEquals('test',\Toolbelt::test());
    }

}