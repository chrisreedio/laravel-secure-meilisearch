<?php

namespace ChrisReedIO\SecureMeilisearch\Contracts;

use ChrisReedIO\SecureMeilisearch\Models\SearchKey;
use Illuminate\Database\Eloquent\Relations\HasMany;

interface SearchUser
{
    public function searchKeys(): HasMany;

    public function getSearchKeyAttribute(): ?SearchKey;

    public function generateSearchKey(): ?SearchKey;
}
