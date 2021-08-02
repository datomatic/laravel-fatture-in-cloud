<?php

namespace Datomatic\FattureInCloud\Resources;

class Suppliers extends Entities
{
    public function __construct($client)
    {
        parent::__construct($client);
        $this->path .= '/suppliers';
    }
}
