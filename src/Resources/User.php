<?php

namespace Datomatic\FattureInCloud\Resources;

class User extends BaseResource
{
    protected $path = 'user';

    public function info()
    {
        return $this->getList('info', true);
    }

    public function companies()
    {
        return $this->getList('companies', true);
    }
}
