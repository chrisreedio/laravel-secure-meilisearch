<?php

namespace ChrisReedIO\SecureMeilisearch\Database\Factories;

use ChrisReedIO\SecureMeilisearch\Models\SearchKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class SearchKeyFactory extends Factory
{
    protected $model = SearchKey::class;

    public function definition(): array
    {
        $createdAt = $this->faker->dateTimeBetween('-10 minutes');

        return [
            'user_id' => 1,
            'uuid' => $this->faker->uuid,
            'key' => $this->faker->uuid, // Meilisearch Search Key
            'expires_at' => $this->faker->dateTimeBetween('now', '+15 minutes'),
            'tenant_token' => $this->faker->uuid, // Meilisearch Tenant Token
            'created_at' => $createdAt,
            'updated_at' => $createdAt,
            'deleted_at' => null,
        ];
    }
}
