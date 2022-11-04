<?php

namespace Datomatic\FattureInCloud;

use Datomatic\FattureInCloud\Factories\FattureInCloudFactory;
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

    public function packageRegistered(): void
    {
        $this->app->singleton(FattureInCloud::class, fn () => FattureInCloudFactory::execute());
    }
}
