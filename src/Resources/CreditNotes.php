<?php

namespace Datomatic\FattureInCloud\Resources;

use Datomatic\FattureInCloud\Enums\DocumentType;
use Datomatic\FattureInCloud\Enums\IssuedDocumentType;

class CreditNotes extends IssuedDocuments
{
    protected DocumentType $type = IssuedDocumentType::CREDIT_NOTE;
}
