<?php

namespace ChrisReedIO\SecureMeilisearch\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ChrisReedIO\SecureMeilisearch\SecureMeilisearch
 */
class SecureMeilisearch extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \ChrisReedIO\SecureMeilisearch\SecureMeilisearch::class;
    }
}
