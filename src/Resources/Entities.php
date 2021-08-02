<?php

namespace Datomatic\FattureInCloud\Resources;

abstract class Entities extends Resource
{
    public const TYPE_NULL = 'null';
    public const TYPE_COMPANY = 'company';
    public const TYPE_PERSON = 'person';
    public const TYPE_PA = 'pa';
    public const TYPE_CONDO = 'condo';

    protected $path = 'entities';
}
