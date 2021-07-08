<?php

namespace Uniqud\LaravelAgent\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * Load package service provider.
     */
    protected function getPackageProviders($app)
    {
        return ['Uniqud\LaravelAgent\ServiceProvider'];
    }
}
