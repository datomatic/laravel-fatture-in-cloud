<?php

namespace Datomatic\FattureInCloud\Enums;

use Datomatic\LaravelEnumHelper\LaravelEnumHelper;

enum EntityType: string
{
    use LaravelEnumHelper;

    case NULL = 'null';
    case COMPANY = 'company';
    case PERSON = 'person';
    case PA = 'pa';
    case CONDO = 'condo';
}
