<?php

namespace Datomatic\FattureInCloud\Resources;

use Datomatic\FattureInCloud\Enums\DocumentType;
use Datomatic\FattureInCloud\Enums\IssuedDocumentType;

class Proformas extends IssuedDocuments
{
    protected DocumentType $type = IssuedDocumentType::PROFORMA;
}
