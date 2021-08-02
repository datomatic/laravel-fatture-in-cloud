<?php

namespace Datomatic\FattureInCloud\Tests;

use Datomatic\FattureInCloud\FattureInCloudServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            FattureInCloudServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        include_once __DIR__.'/../database/migrations/create_laravel-fatture-in-cloud_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
