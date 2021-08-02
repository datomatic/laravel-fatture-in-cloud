<?php

namespace Datomatic\FattureInCloud\Resources;

abstract class ReceivedDocuments extends Documents
{
    protected $path = 'received_documents';

    public const EXPENSE = 'expense';
    public const PASSIVE_CREDIT_NOTE = 'passive_credit_note';
    public const PASSIVE_DELIVERY_NOTE = 'passive_delivery_note';

    public function all(array $params = [])
    {
        $params['type'] = $this->type;

        return parent::all($params);
    }
}
