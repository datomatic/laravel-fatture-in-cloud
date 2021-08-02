<?php

namespace Datomatic\FattureInCloud\Resources;

abstract class Entities extends Resource
{
    const TYPE_NULL = 'null';
    const TYPE_COMPANY = 'company';
    const TYPE_PERSON = 'person';
    const TYPE_PA = 'pa';
    const TYPE_CONDO = 'condo';

    protected $path = 'entities';
}
