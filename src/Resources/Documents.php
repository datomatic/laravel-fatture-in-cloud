<?php

namespace Datomatic\FattureInCloud\Resources;

abstract class Documents extends Resource
{
    public const AVAILABLE_LANGUAGES = ['it','en','de','fr','es','el','pl','sl'];

    protected $type;

    public function all(array $params = [])
    {
        $params['type'] = $this->type;

        return parent::all($params);
    }
}
