<?php

namespace Modularavel\ModuleMaker;

use Modularavel\ModuleMaker\Commands\ModuleMakerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ModuleMakerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('module-maker')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_module_maker_table')
            ->hasCommand(ModuleMakerCommand::class);
    }
}
