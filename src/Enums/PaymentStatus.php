<?php

namespace Datomatic\FattureInCloud\Enums;

use Datomatic\LaravelEnumHelper\LaravelEnumHelper;

enum PaymentStatus: string
{
    use LaravelEnumHelper;

    case PAID = 'paid';
    case NOT_PAID = 'not_paid';
    case REVERSED = 'reversed';
}
