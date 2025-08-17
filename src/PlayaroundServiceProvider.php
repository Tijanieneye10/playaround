<?php

namespace Tijanieneye10\Playaround;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tijanieneye10\Playaround\Commands\PlayaroundCommand;

class PlayaroundServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('playaround');
        // ->hasConfigFile()
        // ->hasViews()
        // ->hasMigration('create_playaround_table')
        // ->hasCommand(PlayaroundCommand::class);
    }
}
