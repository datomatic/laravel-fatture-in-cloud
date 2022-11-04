<?php

namespace Datomatic\FattureInCloud\Enums;

use Datomatic\LaravelEnumHelper\LaravelEnumHelper;

enum ReceivedDocumentType: string implements DocumentType
{
    use LaravelEnumHelper;

    case EXPENSE = 'expense';
    case PASSIVE_CREDIT_NOTE = 'passive_credit_note';
    case PASSIVE_DELIVERY_NOTE = 'passive_delivery_note';
}
