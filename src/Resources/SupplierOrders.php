<?php

namespace Datomatic\FattureInCloud\Resources;

use Datomatic\FattureInCloud\Enums\DocumentType;
use Datomatic\FattureInCloud\Enums\IssuedDocumentType;

class SupplierOrders extends IssuedDocuments
{
    protected DocumentType $type = IssuedDocumentType::SUPPLIER_ORDER;
}
