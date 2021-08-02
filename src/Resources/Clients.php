<?php

namespace Datomatic\FattureInCloud\Resources;

class Clients extends Entities
{

    public function __construct($client)
    {
        parent::__construct($client);
        $this->path .= '/clients';
    }
}
