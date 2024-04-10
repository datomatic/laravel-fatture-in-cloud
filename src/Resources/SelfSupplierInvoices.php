<?php

namespace Datomatic\FattureInCloud\Resources;

use Datomatic\FattureInCloud\Enums\DocumentType;
use Datomatic\FattureInCloud\Enums\IssuedDocumentType;

class SelfSupplierInvoices extends IssuedDocuments
{
    protected DocumentType $type = IssuedDocumentType::SELF_SUPPLIER_INVOICE;
}
