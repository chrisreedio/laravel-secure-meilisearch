<?php

namespace ChrisReedIO\SecureMeilisearch\Commands;

use Illuminate\Console\Command;

class SecureMeilisearchCommand extends Command
{
    public $signature = 'laravel-secure-meilisearch';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
