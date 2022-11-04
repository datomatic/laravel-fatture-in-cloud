<?php

namespace Datomatic\FattureInCloud\Enums;

use Datomatic\LaravelEnumHelper\LaravelEnumHelper;

enum DocumentStatus: string
{
    use LaravelEnumHelper;

    case SENT = 'sent';
    case NOT_SENT = 'not_sent';
    case PENDING = 'pending';
    case PROCESSING = 'processing';
    case DISCARDED = 'discarded';
    case REJECTED = 'rejected';
    case ACCEPTED = 'accepted';
    case NO_RESPONSE = 'no_response';
    case MANUAL_ACCEPTED = 'manual_accepted';
}
