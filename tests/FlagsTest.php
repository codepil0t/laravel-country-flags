<?php

namespace Codepil0t\LaravelCountryFlags\Tests;

use Codepil0t\LaravelCountryFlags\FlagsServiceProvider;
use Orchestra\Testbench\TestCase;

class FlagsTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [FlagsServiceProvider::class];
    }

    public function test_flag_url_helper()
    {
        $this->assertEquals(asset('flags/4x3/de.svg'), flag_url('de'));
        $this->assertEquals(asset('flags/1x1/de.svg'), flag_url('de', '1x1'));
    }
}
