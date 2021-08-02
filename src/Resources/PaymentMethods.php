<?php

namespace Datomatic\FattureInCloud\Resources;

class PaymentMethods extends Settings
{
    public function __construct($client)
    {
        parent::__construct($client);
        $this->path .= '/payment_methods';
    }
}
