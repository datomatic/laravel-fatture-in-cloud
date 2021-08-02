<?php

namespace Datomatic\FattureInCloud;

use Datomatic\FattureInCloud\Http\Client;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FattureInCloudServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('fatture-in-cloud')
            ->hasConfigFile();
    }

    public function packageRegistered()
    {
        $this->app->singleton(
            Client::class,
            function () {
                $serviceConfig = config('fatture-in-cloud');

                if (empty($serviceConfig)) {
                    throw new \Exception('You need to set Fatture in cloud config file');
                }

                return new Client(
                    $serviceConfig['access_token'],
                    $serviceConfig['company_id'],
                    $serviceConfig['endpoint']
                );
            }
        );

        $this->app->singleton(
            FattureInCloud::class,
            function () {
                return new FattureInCloud(app(Client::class));
            }
        );
    }
}
