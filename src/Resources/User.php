<?php

namespace Datomatic\FattureInCloud\Resources;

class User extends BaseResource
{
    protected string $path = 'user';

    public function info(): array
    {
        return $this->getList('info', true);
    }

    public function companies(): array
    {
        return $this->getList('companies', true);
    }
}
