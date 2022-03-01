<?php

namespace UmutPHP\BelongsToUser;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BelongsToUserServiceProvider extends PackageServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/belong-to-user.php' => config_path('belong-to-user.php'),
        ]);
    }

    public function configurePackage(Package $package): void
    {
        $package->name('belongs-to-user')->hasConfigFile('belongs-to-user');
    }
}
