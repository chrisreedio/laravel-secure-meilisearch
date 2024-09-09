<?php

namespace ChrisReedIO\SecureMeilisearch;

use ChrisReedIO\SecureMeilisearch\Commands\SecureMeilisearchCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SecureMeilisearchServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-secure-meilisearch')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_secure_meilisearch_table')
            ->hasCommand(SecureMeilisearchCommand::class);
    }
}
