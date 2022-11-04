<?php

namespace Datomatic\FattureInCloud\Resources;

use Datomatic\FattureInCloud\Http\Client;

class PaymentAccounts extends Settings
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
        $this->path .= '/payment_accounts';
    }
}
