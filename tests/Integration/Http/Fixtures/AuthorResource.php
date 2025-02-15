<?php

namespace Illuminate\Tests\Integration\Http\Fixtures;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthorResource extends JsonResource
{
    public function toArray()
    {
        return ['name' => $this->name];
    }
}
