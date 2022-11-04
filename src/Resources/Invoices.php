<?php

namespace Datomatic\FattureInCloud\Resources;

use Datomatic\FattureInCloud\Enums\DocumentType;
use Datomatic\FattureInCloud\Enums\IssuedDocumentType;

class Invoices extends IssuedDocuments
{
    protected DocumentType $type = IssuedDocumentType::INVOICE;
}
