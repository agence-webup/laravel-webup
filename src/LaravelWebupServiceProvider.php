<?php

namespace webup\LaravelWebup;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use webup\LaravelWebup\Commands\LaravelWebupCommand;

class LaravelWebupServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-webup')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-webup_table')
            ->hasCommand(LaravelWebupCommand::class);
    }
}
