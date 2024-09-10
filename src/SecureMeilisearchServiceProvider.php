<?php

namespace ChrisReedIO\SecureMeilisearch;

use ChrisReedIO\SecureMeilisearch\Commands\SecureMeilisearchCommand;
use Closure;
use Laravel\Scout\Console\FlushCommand;
use Laravel\Scout\Console\ImportCommand;
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
            // ->hasViews()
            ->hasMigration('create_search_keys_table')
            ->hasCommand(SecureMeilisearchCommand::class);
    }

    public function packageBooted(): void
    {
        // Register the SecureMeilisearch Commands if configured to do so
        if (config('secure-meilisearch.register_commands', true)) {
            $this->commands([
                FlushCommand::class,
                ImportCommand::class,
            ]);
        }
    }
}
