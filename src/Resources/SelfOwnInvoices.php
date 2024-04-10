<?php

namespace Datomatic\FattureInCloud\Resources;

use Datomatic\FattureInCloud\Enums\DocumentType;
use Datomatic\FattureInCloud\Enums\IssuedDocumentType;

class SelfOwnInvoices extends IssuedDocuments
{
    protected DocumentType $type = IssuedDocumentType::SELF_OWN_INVOICE;
}
