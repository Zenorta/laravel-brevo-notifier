<?php

declare(strict_types=1);

namespace Zenorta\LaravelBrevoNotifier\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Zenorta\LaravelBrevoNotifier\BrevoNotifierServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [BrevoNotifierServiceProvider::class];
    }
}
