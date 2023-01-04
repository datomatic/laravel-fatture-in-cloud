<?php

namespace Datomatic\FattureInCloud\Resources;

use Datomatic\FattureInCloud\Enums\DocumentType;

abstract class Documents extends Resource
{
    protected DocumentType $type;

    public function all(array $params = []): array
    {
        $params['type'] = $this->type->value;

        return parent::all($params);
    }

    public static function availableLanguages(): array
    {
        return ['it', 'en', 'de', 'fr', 'es', 'el', 'pl', 'sl'];
    }
}
